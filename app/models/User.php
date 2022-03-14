<?php

function getUserById($id) {
    global $database;
    $result = $database->getLink()->query("SELECT * FROM `users` WHERE `id` =" . $id)->fetch(PDO::FETCH_ASSOC);

    if ($result == ""){
        $result = [];
    }

    return $result;
}

function getUserByEmail($email) {
    global $database;
    $result = $database->getLink()->query("SELECT * FROM `users` WHERE `email` ='$email'")->fetch(PDO::FETCH_ASSOC);

    if ($result == ""){
        $result = [];
    }

    return $result;
}