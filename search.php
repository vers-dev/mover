<?php

require('app/QueryDataBase.php');
$database = new QueryDataBase();
session_start();

require('app/models/User.php');
require('app/models/Trip.php');

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

<section class="section section-single search">
    <div class="container">
        <header class="search-header">
            <form action="?" class="form banner-form search-form" method="post" name="search">
                <input type="text" class="input banner__input first" name="from" placeholder="Откуда">

                <input type="text" class="input banner__input" name="to" placeholder="Куда">

                <input type="date" class="input banner__input" name="date">

                <input type="text" class="input banner__input" name="quantity" value="1">
                <button class="button banner__button last">Найти</button>
            </form>
        </header>
        <div class="section-content search-content">
            <div class="grid search-grid">
                <div class="filter">
                    <ul class="accordion filter-accordion">
                        <div class="filter-header">
                            <h2 class="filter__title">Сортировка</h2>
                            <a href="#" class="filter__reset">Сбросить все</a>
                        </div>

                        <!-- Аккордион -->
                        <li class="accordion-item">
                            <div class="accordion-header">
                                <h3 class="accordion-header__title">
                                    Дата
                                </h3>
                                <div class="accordion__button">
                                    <img src="assets/images/icons/down-arrow.svg" alt="arrow" class="accordion__arrow">
                                </div>
                            </div>

                            <div class="accordion-content">
                                <p class="accordion-content__text">
                                    <input type="date" class="input form__input" id="routeDate" placeholder=" ">
                                </p>
                            </div>
                        </li>
                        <hr>
                        <!-- Аккордион -->
                        <li class="accordion-item">
                            <div class="accordion-header">
                                <h3 class="accordion-header__title">
                                    Количество мест
                                </h3>
                                <div class="accordion__button">
                                    <img src="assets/images/icons/down-arrow.svg" alt="arrow" class="accordion__arrow">
                                </div>
                            </div>

                            <div class="accordion-content">
                                <select class="input form__input">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </li>
                        <hr>
                        <!-- Аккордион -->
                        <li class="accordion-item">
                            <div class="accordion-header">
                                <h3 class="accordion-header__title">
                                    Класс автомобиля
                                </h3>
                                <div class="accordion__button">
                                    <img src="assets/images/icons/down-arrow.svg" alt="arrow" class="accordion__arrow">
                                </div>
                            </div>

                            <div class="accordion-content">
                                <select class="input form__input">
                                    <option value="Эконом">Эконом</option>
                                    <option value="Комфорт">Комфорт</option>
                                    <option value="Бизнес">Бизнес</option>
                                </select>
                            </div>
                        </li>
                        <hr>
                        <!-- Аккордион -->
                        <li class="accordion-item">
                            <div class="accordion-header">
                                <h3 class="accordion-header__title">
                                    Цена до
                                </h3>
                                <div class="accordion__button">
                                    <img src="assets/images/icons/down-arrow.svg" alt="arrow" class="accordion__arrow">
                                </div>
                            </div>

                            <div class="accordion-content">
                                <div class="form__group">
                                    <input type="input" class="input form__input" id="routePrice" placeholder=" ">
                                    <label for="seatCount" class="form__label">Цена до</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="result">
                    <?php
                    $trips = $database->query("SELECT *, trip.id AS trip_id FROM `trip` INNER JOIN `users` ON `trip`.`user_id` = `users`.`id`")->fetchAll(PDO::FETCH_ASSOC);
                    var_dump($trips);
//                    $trip_id = $database->query("SELECT id AS trip_id FROM `trip`")
                    ?>
                    <ul class="result-wrapper">

                        <li class="result-info">
                            <h2 class="result__title">Сегодня</h2>
                            <p class="result__num">Найдено: <?php echo count($trips); ?></p>
                        </li>
                        <?php foreach ($trips as $trip): ?>
                        <a href="/trip.php?id=<?php echo $trip['trip_id']; ?>">
                            <li class="route">
                                <header class="route-header">
                                    <div class="route-info">
                                        <h4 class="route__title">Направление:</h4>
                                        <div class="route-way">
                                            <p class="route-dist"><?php echo $trip['from']; ?></p>
                                            <img src="assets/images/icons/arrow.svg" alt="arrow" class="arrow">
                                            <p class="route-dist"><?php echo $trip['to']; ?></p>
                                        </div>

                                    </div>

                                    <div class="route-duration">
                                        <h4 class="route__title">Время отправки:</h4>
                                        <p class="route__duration"><?php echo $trip['time']; ?>; <?php echo $trip['date']; ?></p>
                                    </div>
                                    <p class="price route-price"><?php echo $trip['price']; ?>,00 ₽</p>
                                </header>
                                <footer class="route-footer">
                                    <div class="user">
                                        <div class="user-photo">
                                            <img src="assets/images/avatar/<?php echo $trip['photo_url']; ?>" alt="avatar" class="user__img">
                                        </div>
                                        <div class="user-info">
                                            <h4 class="user__name"><?php echo $trip['first_name']; ?></h4>
                                            <p class="user__rating">
                                                <?php if ($trip['rating'] != null ): ?>
                                                <?php echo $trip['rating']; ?>
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
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