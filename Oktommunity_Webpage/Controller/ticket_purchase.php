<?php
ini_set('display_errors',1);
session_start();
$connection = connect();
$event_ID = $_SESSION['event_ID'];
$event_info_query = 'SELECT Event_Name, Event_Date, TicketSaleEnd_Date, Event_Capacity, Event.Description, Location.Name, Location.Address, Location.Postcode FROM Event'
        . 'JOIN Location.Location_ID ON Event.Location_ID'
        . 'WHERE Event_ID = '.$event_ID;
var_dump($event_info_query);
$results = mysqli_query($connect, $event_info_query);

$row = mysqli_fetch_assoc($results);
$event_name = $row['Event_Name'];
$event_date = $row['Event_Date'];
$ticket_sale_end = $row['TicketSaleEnd_Date'];
$event_capacity = $row['Event_Capacity'];
$event_description = $row['Description'];
$location_name = $row['Name'];
$location_address = $row['Address'];
$location_postcode = $row['Postcode'];
?>

<ul style='background-color: blue;'>
    <li><?php echo 'Event Name: '.$event_name;?></li>
    <li><?php echo 'Event Date: '.$event_date;?></li>
    <li><?php echo 'Ticket Sale End: '.$ticket_sale_end;?></li>
    <li><?php echo 'Event Capacity: '.$event_capacity;?></li>
    <li><?php echo 'Event Description: '.$event_description;?></li>
    <li><?php echo 'Location: '.$location_name;?></li>
    <li><?php echo 'Address: '.$location_address;?></li>
    <li><?php echo 'Postcode: '.$location_postcode;?></li>
</ul>
<?php disconnect($connection); ?>



