<?php

require('../QueryDataBase.php');
$database = new QueryDataBase();
session_start();

unset($_SESSION['errors']);
$_SESSION['errors'] = [];

unset($_SESSION['alerts']);
$_SESSION['alerts'] = [];

require('../models/User.php');

if (isset($_POST)) {

    foreach ($_POST as $val) {
        $val = trim($val);
        if ($val == "") {

            $_SESSION['errors'][] = 'Заполните все поля!';
        }
    }

    $email = $_POST['profileEmail'];
    $firstName = $_POST['profileFirst'];
    $lastName = $_POST['profileLast'];
    $midName = $_POST['profileMid'];
    $phone = $_POST['profilePhone'];
    $car_id = $_POST['profileCar'];



    if (empty($_SESSION['errors'])) {

        $database->getLink()->query("UPDATE `users` SET `email`='$email', `car_id` = '$car_id', `phone`='$phone',`first_name`='$firstName',`last_name`='$lastName',`mid_name`='$midName' WHERE id = " . $_SESSION['id']);

        $_SESSION['alerts'][] = 'Данные успешно изменены';
    }

}
header("Location: /profile.php");

