<?php
require 'connect.php';
$connection = connect();
session_start();

$email = $_SESSION('email');

