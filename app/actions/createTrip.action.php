<?php

require('../QueryDataBase.php');
$database = new QueryDataBase();
session_start();

unset($_SESSION['errors']);
$_SESSION['errors'] = [];

unset($_SESSION['alerts']);
$_SESSION['alerts'] = [];

require('../models/User.php');
require('../models/Trip.php');

if (isset($_POST)) {

    foreach ($_POST as $val) {
        $val = trim($val);
        if ($val == "") {

            $_SESSION['errors'][] = 'Заполните все поля!';
        }
    }

    $from = $_POST['from'];
    $to = $_POST['to'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    $userId = $_SESSION['id'];
    $car_seat = $_SESSION['id'];

    if (empty($_SESSION['errors'])) {
        $trip = array(
            "from" => $from,
            "to" => $to,
            "time" => $time,
            "date" => $date,
            "user_id" => $userId,
            "price" => $price,
            "car_seats" => $car_seat
        );

        var_dump($trip);

        $database->storeData("trip", $trip);
        $_SESSION['alerts'][] = 'Поездка успешно создана!';

    }

}
header("Location: /create-trip.php");
