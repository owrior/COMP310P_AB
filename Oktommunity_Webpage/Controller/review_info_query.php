<?php
session_start();
ini_set('display_errors',1);
$event_ID = $_SESSION['event_ID'];

$event_info_query = 'SELECT Event_Name, Event_Date, TicketSaleEnd_Date, Event_Capacity, Event.Description, Location.Name, Location.Address, Location.Postcode FROM Event'
        . ' JOIN Location ON Event.Location_ID'
        . ' WHERE Event_ID = '.$event_ID;

$results = mysqli_query($connection, $event_info_query);
$row = mysqli_fetch_row($results);
$event_name = $row[0];
$event_date = $row[1];
$ticket_sale_end = $row[2];
$event_capacity = $row[3];
$event_description = $row[4];
$location_name = $row[5];
$location_address = $row[6];
$location_postcode = $row[7];
?>

<ul>
    <li><?php echo 'Event Name: '.$event_name;?></li>
    <li><?php echo 'Event Date: '.$event_date;?></li>
    <li><?php echo 'Ticket Sale End: '.$ticket_sale_end;?></li>
    <li><?php echo 'Event Capacity: '.$event_capacity;?></li>
    <li><?php echo 'Event Description: '.$event_description;?></li>
    <li><?php echo 'Location: '.$location_name;?></li>
    <li><?php echo 'Address: '.$location_address;?></li>
    <li><?php echo 'Postcode: '.$location_postcode;?></li>
</ul>
<?php 
disconnect($connection); ?>

