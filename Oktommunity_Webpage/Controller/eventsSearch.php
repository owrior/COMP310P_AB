<?php
session_start();
require 'connect.php';

function searchEvents($event_name, $category, $event_date_from, $event_date_to) {
   $connection = connect();
   $event_search_query = "SELECT Event_ID, Event_Name, Location_ID, Event_Date, TicketSaleEnd_Date, Event_Capacity, Categories.Category_Name FROM Event "
           . "JOIN CategoryEvent ON Event.Event_ID"
           . "JOIN Categories ON CategoryEvent.Category_ID"
           . "WHERE Event_Name LIKE $event_name, $event_date_from < Event_Date < $event_date_to, Category_Name LIKE $category";
   $results  =mysqli_query($connection, $event_search_query);
   $table = mysqli_fetch_array($result);
    
}

