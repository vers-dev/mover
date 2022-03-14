<?php

require('app/QueryDataBase.php');
$database = new QueryDataBase();
session_start();

require('app/models/User.php');


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

<section class="section section-single auth">
    <div class="container">
        <div class="section-content auth-content">
            <form action="app/actions/authorization.action.php" class="login" method="post" name="login">
                <h2 class="section__title auth__title">Авторизация</h2>
                <?php require('app/snippets/form-errors.php'); ?>
                <div class="login-wrapper">
                    <div class="form__group">
                        <input type="input" class="input form__input" name="userEmail" id="email" placeholder=" ">
                        <label for="email" class="form__label">E-mail</label>
                    </div>

                    <div class="form__group">
                        <input type="password" class="input form__input" name="userPassword" id="userPassword" placeholder=" ">
                        <label for="userPassword" class="form__label">Пароль</label>
                    </div>
                </div>
                <p class="form__subtext">Не зарагистрированы? <a href="/registration.php" class="color-blue">Регистрация</a></p>
                <button class="button registration__button" type="submit">Войти</button>

            </form>

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