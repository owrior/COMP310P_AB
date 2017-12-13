<?php
session_start();
require 'connect.php';

function searchEvents() {
   $connection = connect();
   $event_name = $_POST('event_name');
   $category = $_POST('category');
   $event_date_from = $_POST('event_date_from');
   $event_date_to = $_POST('event_date_to');
   if ($event_name == NULL) {
       $event_name_query = "";
   }
   else {
       $event_name_query = "LIKE $event_name,";
   }
   if ($category == NULL) {
       $category_query = "";
   }
   else {
       $category_query = "Category_Name LIKE $category";
   }
   if ($event_date_to && $event_date_from == NULL) {
       $date_query = "";
   }
   elseif ($event_date_to == NULL) {
       $date_query = "$event_date_from < Event_Date,";
   }
   elseif ($event_date_from == NULL) {
       $date_query = "Event_Date < $event_date_to,";
   }
   else {
       $date_query = "$event_date_from < Event_Date < $event_date_to,";
   }
   $event_search_query = "SELECT Event_ID, Event_Name, Location_ID, Event_Date, TicketSaleEnd_Date, Event_Capacity, Categories.Category_Name FROM Event "
           . "JOIN CategoryEvent ON Event.Event_ID"
           . "JOIN Categories ON CategoryEvent.Category_ID"
           . "WHERE Event_Name $event_name_query $date_query $category_query";
   $results  = mysqli_query($connection, $event_search_query);
   var_dump($results);
   return $results;
}