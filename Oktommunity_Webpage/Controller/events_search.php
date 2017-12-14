<?php
//ini_set('display_errors', 1);
session_start();
require 'connect.php';
require 'data_tester.php';

   $connection = connect();
   
   $event_name = testData($_POST['event_name']);
   $category = testData($_POST['category']);
   $event_date_from = testData($_POST['event_date_from']);
   $event_date_to = testData($_POST['event_date_to']);

if (!$_SESSION['email']) {
    include '../View/LoggedOutAccessible/Events.php';
}
else {
    include '../View/LoggedinAccessible/LoggedInEvents.php';
}