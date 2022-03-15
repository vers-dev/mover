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
    $password = md5($_POST['userPassword']);

    $user = getUserByEmail($email);

    if (empty($user)) {
        $_SESSION['errors'][] = 'Пользователь не существует!';
    }

    if (empty($_SESSION['errors'])) {

        if ($user['password'] == $password){
            $_SESSION['id'] = getUserByEmail($email)['id'];
            $_SESSION['alerts'][] = 'Поздравляем вас с успешной авторизацией!';
            header("Location: /profile.php");
            die();
        } else{
            $_SESSION['errors'][] = 'Неверный пароль!';
        }

    }
}
header("Location: /login.php");
