<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sshoes</title>
    <link rel="stylesheet" href="accets/css/style.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
</head>

<body>

<?php include('app/component/header.php'); ?>
<section class="section-main">
    <div class="section-container">
        <div class="container">
            <?php include('app/component/popular.php'); ?>
            <div class="product-sections">
                <span>Выберите интересующий вас раздел</span>
                <div class="sections-banners">
                    <a class="banner-1" href="#">
                        <div class="banner-text">Женщинам</div>
                    </a>
                    <a class="banner-2" href="#">
                        <div class="banner-text">Мужчинам</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('app/component/footer.php'); ?>

</body>

</html>