<?php
ini_set('display',1);
session_start();
include 'connect.php';

function getUserID($email) {
    $connection = connect();
    $customer_ID_query = "SELECT Customer_ID FROM Customer WHERE Email ='$email'";
    $result = mysqli_query($connection, $customer_ID_query);
    $customer_ID_Array = mysqli_fetch_array($result);
    $customer_ID = $customer_ID_Array[0];
    disconnect($connection);
    return $customer_ID;
}

$event_ID = $_POST['event_ID'];
$review_score = $_POST['review_score'];
$customer_ID =getUserID($_SESSION['email']);

$review_insert_query = "INSERT INTO rating (Customer_ID, Event_ID, Rating) VALUES ('$customer_ID', '$event_ID', '$review_score')";
mysqli_query($connection,$review_insert_query);
header('location: ../View/LoggedInView/LoggedInEvents.php');