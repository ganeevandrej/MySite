<div class="wraper" id="wraper"></div>
<form class="form-login" method="post" name="form-login" id="form-login">
    <div class="form-item"><span>Вход</span></div>
    <?php if(strlen($successfully) > 0):?>
        <div class="form-item success">
            <?=$successfully?>
            <?=$help?>
        </div>
        <?php endif;?>
        <?php if(strlen($errMsg) > 0):?>
        <div class="form-item err"><?=$errMsg?></div>
        <?php endif;?>
    <div class="form-item"><input name="email" type="text" placeholder="Введите email"></div>
    <div class="form-item"><input name="password" type="password" placeholder="Введите пароль"></div>
    <div class="form-item"><button name="button-log">Войти</button></div>
</form>