<?php

function getTripById ($id){
    global $database;

    $result = $database->getLink()->query("SELECT * FROM `trip` WHERE `id` =" . $id)->fetch(PDO::FETCH_ASSOC);

    if ($result == ""){
        $result = [];
    }

    return $result;
}