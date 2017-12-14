<?php
    session_start();
    //ini_set("display_errors", 1);
    include 'connect.php';
    include 'data_tester.php';
    $connection = connect();
    $event_ID = testData($_POST['event_ID']);
    
    if ($_SESSION['email'] == 'Guest') {
        include '/View/LoggedOutAccessible/Login.php';
    }
    else {
    $event_ID = $_POST['event_ID'];
        include '../View/LoggedInAccessible/Buy.php';
    }