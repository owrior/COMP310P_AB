<?php
session_start();
ini_set('display',1);
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

function buyTickets($customer_ID,$TiketType_ID,$event_ID) {

    $connection = connect();
    $purchase_query = "INSERT INTO Ticket (Customer_ID, TicketType_ID, Event_ID) VALUES ($customer_ID, $TiketType_ID, $event_ID)";
    mysqli_query($connection,$purchase_query);
    disconnect($connection);
    return $purchase_query;
}

if (!$_SESSION["email"]) {
    header("/View/LoggedOutAccessible/Login");
}

else{
    $connection = connect();
    $email = $_SESSION['email'];
    $event_ID = $_SESSION['event_ID'];
    $TiketType_ID = $_POST['ticket_type_ID'];
    $customer_ID = getUserID($email);
    buyTickets($customer_ID,$TiketType_ID,$event_ID);
    disconnect($connection);
    
}

header('location: ../View/LoggedInAccessible/LoggedInHomepage.php');
?>
