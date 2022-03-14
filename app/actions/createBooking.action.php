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

if (isset($_GET){

} else{
    header("Location: /search.php");
}
header("Location: /profile.php");

