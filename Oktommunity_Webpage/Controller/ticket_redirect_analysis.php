<?php
    session_start();
    ini_set("display_errors", 1);
    if (!$_SESSION['email']) {
        header('location: /View/LoggedOutAccessible/Login.php');
    }
    else {
    require 'data_tester.php';
    $_SESSION['event_ID'] = testData($_POST['event_ID']);
    }