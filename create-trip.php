<?php

require('app/QueryDataBase.php');
$database = new QueryDataBase();
session_start();

require('app/models/User.php');

if (!isset($_SESSION['id'])){
    header("Location: /login.php");
    die();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php require('app/snippets/head.php'); ?>

    <title>Mover</title>
</head>
<body>

<?php require('app/snippets/header.php'); ?>

<section class="section section-single create">
    <div class="container">
        <div class="section-content auth-content">

            <?php $isDriver = $database->getLink()->query("SELECT `car_id` FROM `users` WHERE id = " . $_SESSION['id'])->fetchAll(PDO::FETCH_ASSOC)[0];?>

            <?php if ($isDriver['car_id'] != null): ?>

            <form action="app/actions/createTrip.action.php" class="registration" method="post" name="registration">
                <h2 class="section__title auth__title">Создание поездки</h2>
                <?php require('app/snippets/alert.php'); ?>
                <div class="create-wrapper">
                    <div class="form__group">
                        <input type="input" class="input form__input" id="tripFrom" name="from" placeholder=" ">
                        <label for="tripFrom" class="form__label">Откуда</label>
                    </div>

                    <div class="form__group">
                        <input type="input" class="input form__input" id="tripTo" name="to" placeholder=" ">
                        <label for="tripTo" class="form__label">Куда</label>
                    </div>

                    <div class="form__group">
                        <input type="time" class="input form__input" id="tripTime" name="time" placeholder=" ">
                    </div>

                    <div class="form__group">
                        <input type="date" class="input form__input" id="tripDate" name="date" placeholder=" ">
                    </div>

                    <div class="form__group">
                        <input type="input" class="input form__input" id="tripPrice" name="price" placeholder=" ">
                        <label for="tripPrice" class="form__label">Цена</label>
                    </div>

                    <div class="form__group">
                        <input type="number" class="input form__input" id="tripSeat" name="seats" placeholder=" ">
                        <label for="tripSeat" class="form__label">Количество мест</label>
                    </div>

                </div>
                <button class="button registration__button" type="submit">Создать</button>

            </form>
            <?php else: ?>
                <h2 class="section__title auth__title">Добавьте автомобиль в профиле, чтобы создавать поездки!</h2>
            <?php endif; ?>
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