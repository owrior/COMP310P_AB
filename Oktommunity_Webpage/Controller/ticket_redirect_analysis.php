<?php
    session_start();
    ini_set("display_errors", 1);
    include 'connect.php';
    include 'data_tester.php';

    if ($_SESSION['email'] == 'Guest') {
        header("location: /View/LoggedOutAccessible/Login.php");
    }
    else {
    $event_ID = $_POST['event_ID'];
        header("location: /View/LoggedInAccessible/Buy.php/?event_ID=".$event_ID);
    }