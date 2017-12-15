<?php
    session_start();
    include 'connect.php';
    include 'data_tester.php';
    $connection = connect();
    $event_ID = testData($_POST['event_ID']);
    $_SESSION['event_ID'] = $event_ID;
    if ($_SESSION['email'] == 'Guest') {
        include '/View/LoggedOutAccessible/Login.php';
    }
    else {
    $event_ID = $_POST['event_ID'];
        include '../View/LoggedInAccessible/Buy.php';
    }