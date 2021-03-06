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

function checkTickets($Event_ID) {
    $connection = connect();
    $event_capacity_query = "SELECT event.Event_Capacity FROM event WHERE event.Event_ID = ".$Event_ID;
    $capacity_search = mysqli_query($connection,$event_capacity_query);
    $capacity = mysqli_fetch_row($capacity_search);
    
    $tickets_purchased_query = "SELECT COUNT(ticket.Ticket_ID) FROM ticket WHERE ticket.Event_ID = ".$Event_ID;
    $tickets_purchased_search = mysqli_query($connection,$tickets_purchased_query);
    $tickets_purchased = mysqli_fetch_row($tickets_purchased_search);
    if ($tickets_purchased == NULL) {
        $tickets_purchased[0] = 0;
    }
    $remaining_tickets = $capacity[0] - $tickets_purchased[0];
    
    disconnect($connection);
    return $remaining_tickets;
}

function buyTickets($customer_ID,$TiketType_ID,$event_ID) {

    $connection = connect();
    $purchase_query = "INSERT INTO Ticket (Customer_ID, TicketType_ID, Event_ID) VALUES ($customer_ID, $TiketType_ID, $event_ID)";
    mysqli_query($connection,$purchase_query);
    disconnect($connection);
    return $purchase_query;
}

function sendEmail($email, $event_ID) {
    $connection = connect();
    $event_name_query = "SELECT event.Event_Name FROM event WHERE event.Event_ID = ".$event_ID;
    $event_name_search = mysqli_query($connection,$event_name_query);
    $event_name = mysqli_fetch_row($event_name_search);
    $subject = "Confirmation of Purchase for : ".$event_name[0];
    $message = "Hello thank you for purchasing tickets for ".$event_name[0]." from Oktommunity!!!!";
    mail($email, $subject, $message);
    disconnect($connection);
    
}

if (!$_SESSION["email"]) {
    header("../View/LoggedOutAccessible/Login");
}

else{
    $connection = connect();
    $email = $_SESSION['email'];
    $event_ID = $_SESSION['event_ID'];
    $TiketType_ID = $_POST['ticket_type_ID'];
    $customer_ID = getUserID($email);
    $remaining_tickets = checkTickets($event_ID);
    
    if ($remaining_tickets <= 0) {
        echo "Sorry there are no tickets left for this event :(";
    }
    else {
        buyTickets($customer_ID,$TiketType_ID,$event_ID);
        sendEmail($email, $event_ID);
        disconnect($connection);
    }
}

header('location: ../View/LoggedInAccessible/LoggedInHomepage.php');
?>
