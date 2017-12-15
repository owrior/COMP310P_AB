<?php
//ini_set('display_errors',1);
function getEventID($event_name) {
    $connection = connect();
    $event_ID_query = "SELECT Event_ID FROM event WHERE event.Event_Name ='$event_name'";
    $result = mysqli_query($connection, $event_ID_query);
    $Customer_ID_Array = mysqli_fetch_array($result);
    $Customer_ID = $Customer_ID_Array[0];
    disconnect($connection);
    return $event_ID;
}

$email = $_SESSION['email'];
$connection = connect();
$ticket_id_query = 'SELECT DISTINCT ticket.ticket_ID FROM ticket '
                    .'JOIN customer ON ticket.Customer_ID = customer.Customer_ID '
                    .'JOIN event ON ticket.Event_ID = event.Event_ID '
                    .'WHERE customer.Email = "'.$email.'" AND event.Event_Date < CURRENT_DATE()';
$results = mysqli_query($connection, $ticket_id_query);

if (mysqli_num_rows($results) == NULL) {
    echo "No event's attended!!!";
}
if (mysqli_num_rows($results) > 1) {
    while ($row = mysqli_fetch_assoc($results)) {
    $ticket_id = $row['ticket_ID'];
    $event_name_query = 'SELECT event.Event_Name FROM event '
            . 'JOIN ticket ON event.Event_ID = ticket.Event_ID '
            . 'WHERE ticket.ticket_ID='.$ticket_id;
    $event_name_search = mysqli_query($connection,$event_name_query);
    
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($event_name_search)) {
        $event_name = $row['Event_Name'];
        $event_ID = getEventID($event_name);
                echo '<li><form method = POST action = "/Controller/review_redirect_analysis.php">';
                echo '<input type = "hidden" name = "event_ID" value = "'.$event_ID.'">';
                echo '<input type = "submit" value= "'.$event_name.'">';
                echo '</form></li>';
    }
    echo '</ul>';
    }
}
elseif (mysqli_num_rows($results == 1)) {
    
    $row = mysqli_fetch_row($results);
    $ticket_id = $row[0];
    $event_name_query = 'SELECT event.Event_Name FROM event '
            . 'JOIN ticket ON event.Event_ID '
            . 'WHERE ticket.ticket_ID ='.$ticket_id;
    $event_name_search = mysqli_query($connection,$event_name_query);
    $event_name = mysqli_fetch_row($event_name_search);
  
    echo '<ul>';
                    echo '<li><form method = "POST" action = "/Controller/review_redirect_analysis.php">';
                    echo '<input type = "hidden" name = "event_ID" value = "'.$event_ID.'">';
                    echo '<input type = "submit" value= "'.$event_name.'">';
                    echo '</form></li>';
    echo '</ul>';
}
disconnect($connection); 
?>