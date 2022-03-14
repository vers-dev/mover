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
            <form action="app/actions/createUser.action.php" class="registration" method="post" name="registration">
                <h2 class="section__title auth__title">Регистрация</h2>
                <?php require('app/snippets/form-errors.php'); ?>
                <div class="grid registration-grid">
                    <div class="form__group">
                        <input type="input" class="input form__input" id="userEmail" name="userEmail" placeholder=" ">
                        <label for="userEmail" class="form__label">E-mail</label>
                    </div>

                    <div class="form__group">
                        <input type="input" class="input form__input" id="lastName" name="lastName" placeholder=" ">
                        <label for="lastName" class="form__label">Фамилия</label>
                    </div>

                    <div class="form__group">
                        <input type="input" class="input form__input" id="firstName" name="firstName" placeholder=" ">
                        <label for="firstName" class="form__label">Имя</label>
                    </div>

                    <div class="form__group">
                        <input type="input" class="input form__input" id="midName" name="midName" placeholder=" ">
                        <label for="midName" class="form__label">Отчество</label>
                    </div>

                    <div class="form__group">
                        <input type="input" class="input form__input" id="userPhone" name="userPhone" placeholder=" ">
                        <label for="userPhone" class="form__label">Телефон</label>
                    </div>

                    <div class="form__group">
                        <input type="password" class="input form__input" id="userPassword" name="userPassword" placeholder=" ">
                        <label for="userPassword" class="form__label">Пароль</label>
                    </div>
                </div>
                <p class="form__subtext">Уже зарагестрированы? <a href="/login.php" class="color-blue">Войти</a></p>
                <button class="button registration__button" type="submit">Зарегистрироваться</button>

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