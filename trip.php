<?php

require('app/QueryDataBase.php');
$database = new QueryDataBase();
session_start();

require('app/models/User.php');
require('app/models/Trip.php');


if (isset($_GET)) {
    $trip = $database->query("SELECT *, trip.id AS trip_id FROM `trip` INNER JOIN `users` ON `trip`.`user_id` = `users`.`id` WHERE trip.id = " . $_GET['id'])->fetchAll(PDO::FETCH_ASSOC);
} else {
    header("Location: /search.php");
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

<section class="section section-single trip">
    <div class="container">
        <div class="section-content trip-content">
            <?php foreach ($trip as $val): ?>

                <?php require('app/snippets/form-errors.php'); ?>

                <h1 class="trip-date"><?php echo $val['date']; ?></h1>
                <div class="trip-route">
                    <h2 class="trip-title"><?php echo $val['time']; ?></h2>
                    <h2 class="trip-title"> <?php echo $val['from']; ?>
                        <img src="assets/images/icons/arrow.svg"
                             alt="arrow"> <?php echo $val['to']; ?></h2>

                </div>
                <hr>
                <div class="trip-price">
                    <p class="trip-price__desc">Цена за человека</p>
                    <p class="price"><?php echo $val['price']; ?>,00 р</p>
                </div>
                <hr>
                <div class="trip-user user">
                    <div class="user-info">
                        <h2 class="user-name"><?php echo $val['first_name']; ?></h2>
                        <?php if ($val['rating'] != null): ?>
                            <p class="user__rating"><?php echo $val['rating']; ?> <img
                                        src="assets/images/icons/star.svg" alt="star" class="star-img"></p>
                        <?php endif; ?>
                    </div>
                    <a href="/profile.php?id=<?php echo $val['id']; ?>">
                        <img src="assets/images/avatar/<?php echo $val['photo_url']; ?>" alt="user"
                             class="user__photo">
                    </a>
                </div>
                <hr>
                <?php $car = $database->getLink()->query("SELECT `name` FROM `cars` WHERE id = " . $val['car_id'])->fetchAll(PDO::FETCH_ASSOC)[0]; ?>
                <div class="trip-info">
                    <h2 class="trip-car"><?php echo $car['name']; ?></h2>
                    <p class="trip-seats">Количество мест: <?php echo $val['car_seats'] ?></p>
                </div>

                <?php if (isset($_SESSION['id'])): ?>

                    <?php if($val['car_seats'] < 1): ?>
                        <p>К сожалению места закончились!</p>
                    <?php else: ?>
                        <a href="/app/actions/createBooking.action.php?trip_id=<?php echo $val['trip_id']; ?>&user_id=<?php echo $_SESSION['id']; ?>"
                           class="button trip__button">Забронировать</a>
                    <?php endif; ?>
                <?php else: ?>
                    <a href="/login.php" class="button trip__button">Для бронирования поездки войдите в систему!</a>
                <?php endif; ?>
            <?php endforeach; ?>
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