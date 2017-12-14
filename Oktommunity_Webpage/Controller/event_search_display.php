<?php

if ($event_name == '') {
       $event_name_query = "";
   }
   else {
       $event_name_query = "Event_Name LIKE '%$event_name%' AND";
   }
   if ($category == '') {
       $category_query = "";
   }
   else {
       $category_query = "Category_Name LIKE '%$category%',";
   }
   if ($event_date_to && $event_date_from == NULL) {
       $date_query = "";
   }
   elseif ($event_date_to == NULL && !$category_query =="") {
       $date_query = "$event_date_from < Event_Date AND";
   }
   elseif ($event_date_from == NULL && !$category_query =="") {
       $date_query = "Event_Date < $event_date_to AND";
   }
   elseif ($event_date_from && $event_date_to =! NULL && !$category_query =="") {
       $date_query = "$event_date_from < Event_Date < $event_date_to AND";
   }
   elseif ($event_date_to == NULL && $category_query == "") {
       $date_query = "$event_date_from < Event_Date";
   }
   elseif ($event_date_from == NULL && $category_query == "") {
       $date_query = "Event_Date < $event_date_to";
   }
   elseif ($event_date_from && $event_date_to =! NULL && $category_query == "") {
       $date_query = "$event_date_from < Event_Date < $event_date_to";
   }

    $event_search_query = "SELECT DISTINCT Event.Event_ID, Event_Name, Location_ID, Event_Date, TicketSaleEnd_Date, Event_Capacity, Categories.Category_Name FROM Event "
            . "JOIN CategoryEvent ON Event.Event_ID"
            . " JOIN Categories ON CategoryEvent.Category_ID"
            . " WHERE $event_name_query $date_query $category_query";
    $results  = mysqli_query($connection, $event_search_query);
    
    while($row = mysqli_fetch_assoc($results)){
        $event_ID = $row['Event_ID'];
        $event_name = $row['Event_Name'];
        $location_ID = $row['Location_ID'];
        $event_date = $row['Event_Date'];
        $ticket_sale_end = $row['TicketSaleEnd_Date'];
        $event_capacity = $row['Event_Capacity'];
        $category = $row['Category_Name'];
        ?>
        <tr>
            <td>
                <?php echo $event_ID;?>
            </td>
            <td>
                <?php echo $event_name;?>
            </td>
            <td>
                <?php echo $location_ID;?>
            </td>
            <td>
                <?php echo $event_date;?>
            </td>
            <td>
                <?php echo $ticket_sale_end;?>
            </td>
            <td>
                <?php echo $event_capacity;?>
            </td>
            <td>
                <?php echo $category;?>
            </td>
        </tr>
        <?php
   }
   disconnect($connection)?>
