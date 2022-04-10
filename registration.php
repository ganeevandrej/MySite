<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sshoes</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/form-auth.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/nav-burger.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
</head>

<body>
    <?php 
        include("app/database/controls/user.php");
        include('app/component/header.php'); 
    ?>
    <section class="section-main">
        <div class="container">
        <?php include('app/component/form-auth.php'); ?>
        </div>
    </section>
    <?php include('app/component/footer.php'); ?>

    <script src="/assets/js/index.js"></script>

</body>

</html>