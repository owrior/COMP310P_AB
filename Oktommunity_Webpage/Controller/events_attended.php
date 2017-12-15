<?php
//ini_set('display_errors',1);
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
        echo '<li>'.$event_name.'</li>';
    }
    echo '</ul>';
    }
}
elseif (mysqli_num_rows($results == 1)) {
    
    $row = mysqli_fetch_row($results);
    $ticket_id = $row[0];
    $event_name_query = 'SELECT event.Event_Name FROM event '
            . 'JOIN ticket ON event.Event_ID '
            . 'WHERE ticket.ticket_ID='.$ticket_id;
    $event_name_search = mysqli_query($connection,$event_name_query);
    $event_name = mysqli_fetch_row($event_name_search);
    echo '<tr>';
            echo    '<td><form method = POST action = "/Controller/review_redirect_analysis.php">';
                    echo '<input type = "hidden" name = "event_ID" value = "'.$event_ID.'">';
                    echo '<input type = "submit" value= "'.$event_name.'">';
                    echo '</form></td>';
    echo '</tr>';
}
disconnect($connection); 
?>