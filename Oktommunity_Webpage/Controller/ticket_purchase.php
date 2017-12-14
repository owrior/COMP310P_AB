<?php
ini_set('display',1);
include 'connect.php';
$connection = connect();

$event_ID = $_POST['event_ID'];
$purchase_query = "INSERT INTO ";
?>
