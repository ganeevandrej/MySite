<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sshoes</title>
    <link rel="stylesheet" href="./accets/css/index.css">
    <link rel="stylesheet" href="./accets/css/header.css">
    <link rel="stylesheet" href="./accets/css/nav-burger.css">
    <link rel="stylesheet" href="./accets/css/footer.css">
    <link rel="stylesheet" href="./accets/css/popular.css">
    <link rel="stylesheet" href="./accets/css/banners.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
</head>

<body>

    <?php include('app/component/header.php'); ?>
    <section class="section-main">
        <div class="header-collections">
            <div class="collections-items">
                <a href="#">Мужчинам</a>
                <a href="#">Женщинам</a>
            </div>
        </div>
        <div class="section-container">
            <div class="container">
                <?php include('app/component/popular.php'); ?>
                <?php include('app/component/banners.php'); ?>
            </div>
        </div>
    </section>

    <?php include('app/component/footer.php'); ?>

    <script src="/accets/js/index.js"></script>

</body>

</html>