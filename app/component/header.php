<?php include('app/component/form-login.php'); ?>
<?php include('app/component/nav-burger.php'); ?>
<div class="wrap openForm">
    <form class="form-search" action="index.php">
            <input name="search" id="search" type="text">
    </form>
</div>
<header>
    <div class="section-container">
        <div class="container">
            <div class="header-content">
                <div class="header-menu">
                    <button class="button-menu" id="buttonMenu">
                        <img src="accets/ikon/icon-menu.png">
                        <span>Меню</span>
                    </button>
                </div>
                <div class="header-logo">
                    <a class="logo-content" href="index.php">
                        <div class="flex-container">
                            <img src="accets/ikon/logo.png">
                            <span>Stories</span>
                        </div>
                    </a>
                </div>
                <div class="header-controls">
                    <button class="Search">
                        <img src="accets/ikon/premium-icon.png">
                    </button>
                    <a class="controls-item" href="#">
                        <img src="accets/ikon/icon-comparison.png">
                    </a>
                    <a class="controls-item" href="#">
                        <img src="accets/ikon/icon-heart.png">
                    </a>
                    <a class="controls-item" href="#">
                        <img src="accets/ikon/icon-shopping.png">
                    </a>
                    <div class="controls-auth">
                        <button id="login">Войти</button>
                        <a href="registration.php">Зарегестрироваться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>