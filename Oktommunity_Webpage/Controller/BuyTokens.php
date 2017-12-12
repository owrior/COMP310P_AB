<?php
ini_set('display_errors', 1);
session_start();
require 'connect.php';
$connection = connect();

$email = $_SESSION('email');
if (!$email == NULL) {
    header("/View/LoggedOutAccessible/Login");
}

