<?php
ini_set('display_errors', 1);
require 'connect.php';
require 'data_tester.php';

   $connection = connect();
   
   $event_name = testData($_POST['event_name']);
   $category = testData($_POST['category']);
   $event_date_from = testData($_POST['event_date_from']);
   $event_date_to = testData($_POST['event_date_to']);
  
include '../View/LoggedOutAccessible/Events.php';