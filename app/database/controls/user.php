<?php
include('app/database/db.php');

$errMsg = '';
$successfully = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
            tt(selectOne('users', ['id' => $id]));
            $successfully = "Пользователь $login успешно зарегестрировался";
        }
        
    }
} else {
    $login = '';
    $email = '';
}

if (isset($_POST['login'])) {





    // $id = insert('users', $post);
    // $lust_row = selectOne('users', ['id'=> $id]);
    // tt($lust_row);
}
