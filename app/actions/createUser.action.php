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

    $email = $_POST['userEmail'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $midName = $_POST['midName'];
    $phone = $_POST['userPhone'];
    $password = md5($_POST['userPassword']);

    $isExist = getUserByEmail($email);

    if (!empty($isExist)) {
        $_SESSION['errors'][] = 'Пользователь уже существует!';
    }

    if (empty($_SESSION['errors'])) {
        $user = array(
            "email" => $email,
            "password" => $password,
            "phone" => $phone,
            "first_name" => $firstName,
            "last_name" => $lastName,
            "mid_name" => $midName
        );

        $database->storeData("users", $user);
        $_SESSION['id'] = getUserByEmail($email)['id'];
        $_SESSION['alerts'][] = 'Поздравляем вас с успешной регистрацией!';
        header("Location: /profile.php");
        die();

    }

}
header("Location: /registration.php");
