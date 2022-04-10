<div class="form">
    <form class="form-auth" method="post" name="form-auth" action="registration.php">
        <div class="form-item"><span>Регистрация</span></div>
        <div class="form-item success"><?=$successfully?></div>
        <div class="form-item err"><?=$errMsg?></div>
        <div class="form-item"><input name="email" value='<?=$email?>' type="text" placeholder="Введите email"></div>
        <div class="form-item"><input name="login" value='<?=$login?>' type="text" placeholder="Введите login"></div>
        <div class="form-item"><input name="phone" type="text" placeholder="Введите номер телефона"></div>
        <div class="form-item"><input name="password" type="password" placeholder="Придумайте пароль"></div>
        <div class="form-item">
            <input name="repeatpassword" type="password" placeholder="Повторите пароль">
        </div>
        <div class="form-item rememberMe">
            <input class="rememberMe-input"  name="rememberMe" id="rememberMe" type="checkbox">
            <label for="rememberMe">Запомнить</label>
        </div>
        <div class="form-item"><button type="submit" name="button-reg">Зарегистрироваться</button></div>
    </form>
</div>