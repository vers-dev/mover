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

if ($_GET['trip_id']){
    $trip_id = $_GET['trip_id'];
    $user_id = $_GET['user_id'];

    $result = $database->getLink()->query("SELECT `car_seats` FROM `trip` WHERE id =" . $trip_id)->fetchAll(PDO::FETCH_ASSOC)[0];

    if ($result['car_seats'] < 1) $_SESSION['errors'][] = 'К сожалению места закончились!';

    if (empty($_SESSION['errors'])){

        $database->getLink()->query("UPDATE trip SET car_seats = car_seats - 1 WHERE id = " . $trip_id );
        $seats = $database->getLink()->query("SELECT `car_seats` FROM `trip` WHERE id = " . $trip_id )->fetchAll(PDO::FETCH_ASSOC)[0];

        if ($seats < 1){
            $database->getLink()->query("UPDATE `trip` SET `status_id` = 2 WHERE `id` = " . $trip_id );
        }

        $booking = array(
            "user_id" => $user_id,
            "trip_id" => $trip_id
        );

        $database->storeData("booking_trip", $booking);
        $_SESSION['alerts'][] = 'Вы успешно забранировали место!';

    }

} else{
    header("Location: /search.php");
}
header("Location: /search.php");

