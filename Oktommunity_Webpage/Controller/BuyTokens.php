<?php
ini_set('display_errors', 1);
require 'connect.php';
$connection = connect();
session_start();

$email = $_SESSION('email');
