<?php

require('app/QueryDataBase.php');
$database = new QueryDataBase();
session_start();

require('app/models/User.php');

$user = getUserById($_SESSION['id']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  Стили скрипты  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/index.js" defer></script>

    <!--  Шрифты  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Work+Sans:wght@100&display=swap"
          rel="stylesheet">

    <title>Mover</title>
</head>
<body>

<?php require('app/snippets/header.php'); ?>

<section class="section single-section profile">
    <div class="container">
        <div class="section-content profile-content">
            <?php require('app/snippets/alert.php'); ?>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="assets/images/icons/logo.svg" alt="logo" class="logo">
            </div>

            <p class="footer__text">Mover, 2022 &copy;</p>
        </div>
    </div>
</footer>


</body>
</html>