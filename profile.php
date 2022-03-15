<?php

require('app/QueryDataBase.php');
$database = new QueryDataBase();
session_start();

require('app/models/User.php');

if (!isset($_SESSION['id'])) {
    header("Location: /login.php");
    die();
}

if (empty($_GET['id'])) {
    $user = getUserById($_SESSION['id']);
} else {
    $user = getUserById($_GET['id']);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php require('app/snippets/head.php') ?>

    <title>Mover</title>
</head>
<body>

<?php require('app/snippets/header.php'); ?>

<section class="section section-single profile">
    <div class="container">
        <div class="section-content profile-content">
            <div class="grid profile-grid">
                <?php require('app/snippets/alert.php'); ?>
                <?php if ($_SESSION['id'] == $user['id']): ?>

                    <?php require('app/snippets/form-errors.php'); ?>
                    <form action="app/actions/updateUser.action.php" class="profile-form" method="post" name="updUser">
                        <div class="login-wrapper">
                            <div class="form__group">
                                <input type="input" class="input form__input" name="profileEmail" id="profileEmail"
                                       placeholder=" " value="<?php echo $user['email']; ?>">
                                <label for="profileEmail" class="form__label">E-mail</label>
                            </div>

                            <div class="form__group">
                                <input type="input" class="input form__input" name="profilePhone" id="profilePhone"
                                       placeholder=" " value="<?php echo $user['phone']; ?>">
                                <label for="profilePhone" class="form__label">Телефон</label>
                            </div>

                            <div class="form__group">
                                <input type="input" class="input form__input" name="profileFirst" id="profileFirst"
                                       placeholder=" " value="<?php echo $user['first_name']; ?>">
                                <label for="profileFirst" class="form__label">Имя</label>
                            </div>

                            <div class="form__group">
                                <input type="input" class="input form__input" name="profileLast" id="profileLast"
                                       placeholder=" " value="<?php echo $user['last_name']; ?>">
                                <label for="profileLast" class="form__label">Фамилия</label>
                            </div>

                            <div class="form__group">
                                <input type="input" class="input form__input" name="profileMid" id="profileMid"
                                       placeholder=" " value="<?php echo $user['mid_name']; ?>">
                                <label for="profileMid" class="form__label">Отчество</label>
                            </div>

                            <div class="form__group">
                                <?php $cars = $database->getAllData("cars"); ?>
                                Добавьте автомобиль, чтобы создавать свои поездки
                                <select name="profileCar" id="profileCar" class="input form__input">
                                    <option value="426">Нет авто</option>
                                    <?php foreach ($cars as $car): ?>
                                        <?php if ($car['id'] == 426) continue; ?>
                                        <option <?php if ($car['id'] == $user['car_id']): ?> selected <?php endif; ?>
                                                value="<?php echo $car['id']; ?>"><?php echo $car['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button class="button profile__button" type="submit">Редактировать</button>
                        </div>
                    </form>
                <?php endif; ?>
                <div class="coming">
                    <h2 class="section__title coming__title">Забронированные поездки</h2>
                    <ul class="result-wrapper">
                        <?php $booking = $database->getLink()->query("SELECT * FROM `booking_trip` WHERE user_id = " . $_SESSION['id'])->fetchAll(PDO::FETCH_ASSOC); ?>
                        <?php if (!empty($booking)): ?>
                            <?php foreach ($booking as $item): ?>
                                <?php $userTrips = $database->getLink()->query("SELECT *, trip.id AS trip_id FROM `trip` INNER JOIN `users` ON `trip`.`user_id` = `users`.`id` WHERE trip.id = " . $item['trip_id'])->fetchAll(PDO::FETCH_ASSOC); ?>
                                <?php foreach ($userTrips as $trip): ?>
                                    <a href="/trip.php?id=<?php echo $trip['trip_id']; ?>">
                                        <li class="route">
                                            <header class="route-header">
                                                <div class="route-info">
                                                    <h4 class="route__title">Направление:</h4>
                                                    <div class="route-way">
                                                        <p class="route-dist"><?php echo $trip['from']; ?></p>
                                                        <img src="assets/images/icons/arrow.svg" alt="arrow"
                                                             class="arrow">
                                                        <p class="route-dist"><?php echo $trip['to']; ?></p>
                                                    </div>

                                                </div>

                                                <div class="route-duration">
                                                    <h4 class="route__title">Время отправки:</h4>
                                                    <p class="route__duration"><?php echo $trip['time']; ?>
                                                        ; <?php echo $trip['date']; ?></p>
                                                </div>
                                                <p class="price route-price"><?php echo $trip['price']; ?>,00 ₽</p>
                                            </header>
                                            <footer class="route-footer">
                                                <div class="user">
                                                    <div class="user-photo">
                                                        <img src="assets/images/avatar/<?php echo $trip['photo_url']; ?>"
                                                             alt="avatar" class="user__img">
                                                    </div>
                                                    <div class="user-info">
                                                        <h4 class="user__name"><?php echo $trip['first_name']; ?></h4>
                                                        <p class="user__rating">
                                                            <?php if ($trip['rating'] != null): ?>
                                                                <?php echo $trip['rating']; ?>
                                                                <svg width="17" height="16" viewBox="0 0 17 16"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.112 15.443C3.726 15.641 3.288 15.294 3.366 14.851L4.196 10.121L0.672996 6.765C0.343996 6.451 0.514996 5.877 0.955996 5.815L5.854 5.119L8.038 0.792C8.235 0.402 8.768 0.402 8.965 0.792L11.149 5.119L16.047 5.815C16.488 5.877 16.659 6.451 16.329 6.765L12.807 10.121L13.637 14.851C13.715 15.294 13.277 15.641 12.891 15.443L8.5 13.187L4.111 15.443H4.112Z"
                                                                          fill="#054752"/>
                                                                </svg>
                                                            <?php endif ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </footer>
                                        </li>
                                    </a>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </ul>
                </div>

            </div>

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