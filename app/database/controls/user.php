<?php
include('app/database/db.php');

$help = 'Авторизируйтесь в системе!';
$errMsg = '';
$successfully = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $passwordE = trim($_POST['password']);
    $repeatpassword = trim($_POST['repeatpassword']);
    $admin = 0;

    if ($login === '' || $email === '' || $passwordE === '' || $phone === '') {
        $errMsg = "Заполните все обязательные поля!";
    } elseif (mb_strlen($login) < 3) {
        $errMsg = "Введите корректный логин!";
    } elseif ($passwordE !== $repeatpassword) {
        $errMsg = "Пароли не совпадают!";
    } else {
        $exinstence = selectOne('users', ['email' => $email]);
        if ($exinstence['email'] === $email) {
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        } else {
            $password = password_hash($passwordE, PASSWORD_DEFAULT);
            $post = [
                'login' => $login,
                'email' => $email,
                'phone' => $phone,
                'password' => $password,
                'admin' => $admin
            ];
            $id = insert('users', $post);
            $successfully = "Пользователь $login успешно зарегестрировался";
        }
    }
} else {
    $login = '';
    $email = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    $email = trim($_POST['email']);
    $passwordE = trim($_POST['password']);

    if ($email === '' || $passwordE === '') {
        $errMsg = "Заполните все обязательные поля!";
    }
    else {
        $exinstence = selectOne('users', ['email' => $email]);
        if($exinstence && password_verify($passwordE ,$exinstence['password'])) {
            $_SESSION['id'] = $exinstence['id'];
            $_SESSION['login'] = $exinstence['login'];
            header('location: ' . 'index.php');
        }else{
            $errMsg = "Email или пороль не верный!";
        }
    }
}
else{
    $email = '';
}
