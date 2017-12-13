<?php
ini_set('display_errors', 1);
require 'connect.php';
session_start();

function getUserID($email) {
    $connection = connect();
    $customer_ID_query = "SELECT Customer_ID FROM Customer WHERE Email ='$email'";
    $result = mysqli_query($connection, $customer_ID_query);
    $Customer_ID_Array[] = mysqli_fetch_array($result);
    $Customer_ID = $Customer_ID_Array[0];
    disconnect($connection);
    return $Customer_ID;
}

function buyTokens($Customer_ID, $Type, $Amount) {
    $connection = connect();
    $ticket_purchase_query = "INSERT INTO Tokens (Customer_ID, TokenType_ID, Amount) VALUES ('$Customer_ID', '$Type', '$Amount')";
    mysqli_query($connection,$ticket_purchase_query);
    disconnect($connection);
}

function TokenTypeDropDown() {
    require 'connect.php';
    $connection = connect();
    $filter = mysqli_query($connection, "SELECT * FROM TokenType");
    while ($row = mysqli_fetch_array($filter)) {
        $menu = '<option value="' . $row['TokenType_ID'] . '">' . $row['Type'] . '</option>';
        echo $menu;
    }
    disconnect($connection);    
}

if (!$_SESSION["email"]) {
    header("/View/LoggedOutAccessible/Login");
}
else{
    $Type = $_POST['chosen_type'];
    $Amount = $_POST['Amount'];
    $email = $_SESSION['email'];
}
if ($Type == 0) {
    $_SESSION['error_message_1'] = "Please select a type";
    header('location: /View/LoggedInAccessible/Tokens.php');
}
else {
    if ($Amount == 0) {
        $_SESSION['error_message_2'] = "Please select an Amount";
        header('location: /View/LoggedInAccessible/Tokens.php');
    }
    else {
    $connection = connect();
    $Customer_ID = getUserID($email);
    buyTokens($Customer_ID, $Type, $Amount);
    header('location: /View/LoggedInAccessible/LoggedInHomepage.php');
    }

}


