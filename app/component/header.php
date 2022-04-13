<?php include('app/component/form-login.php'); ?>
<?php include('app/component/nav-burger.php'); ?>
<header>
    <div class="section-container">
        <div class="container">
            <div class="header-content">
                <div class="header-menu">
                    <button class="button-menu" id="buttonMenu">
                        <img src="assets/ikon/icon-menu.png">
                        <span>Меню</span>
                    </button>
                </div>
                <div class="header-logo">
                    <a class="logo-content" href="index.php" id="header-logo">
                        <div class="flex-container">
                            <img src="assets/ikon/logo.png">
                            <span>Stories</span>
                        </div>
                    </a>
                </div>
                <div class="header-controls">
                    <div class="header-search">
                        <form class="form-search" id="search-input">
                            <input type="text" placeholder="Поиск">
                        </form>
                        <button class="Search" id="Search">
                            <span class="searching"></span>
                            <img class="ikon-close" src="/assets/ikon/close.png">
                        </button>
                    </div>
                    <a class="controls-item" href="#">
                        <img src="assets/ikon/icon-comparison.png">
                    </a>
                    <a class="controls-item" href="#">
                        <img src="assets/ikon/icon-heart1.png">
                    </a>
                    <a class="controls-item" href="#">
                        <img src="assets/ikon/icon-shopping.png">
                    </a>
                    <?php if(isset($_SESSION['id'])): ?>
                        <div class="user-auth">
                            <a class="user" href="#">
                                <?=$_SESSION['login'];?>
                            </a>
                            <ul class="user-panel">
                                <li><a href="#">Настройки</a></li>
                                <li><a href="app/component/logout.php">Выход</a></li>
                            </ul>
                        </div>
                        <?php else:?>
                        <div class="controls-auth">
                            <button class="button-in" id="login">Войти</button>
                            <a class="regist" href="registration.php">Зарегестрироваться</a>
                        <?php endif;?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</header>