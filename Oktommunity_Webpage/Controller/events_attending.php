<?php
ini_set('display_errors',1);
session_start();
include '../Controller/connect.php';
$email = $_SESSION['email'];
$connection = connect();
$ticket_id_query = 'SELECT DISTINCT ticket.ticket_ID FROM customer '
                    .'JOIN ticket ON customer.Customer_ID '
                    .'JOIN event ON ticket.Event_ID '
                    .'WHERE customer.Email = "'.$email.'"';
//var_dump($ticket_id_query);
$results = mysqli_query($connection, $ticket_id_query);

if (mysqli_num_rows($results) == NULL) {
    echo "You need to book some events!!!";
}
elseif (mysqli_num_rows($results) == 1) {
    $row = mysqli_fetch_row($results);
    $event_name = $row['ticket_ID'];
    
    echo '<ul>';
        echo '<li>'.$event_name.'</li>';
    echo '</ul>';
}
else {
    while ($row = mysqli_fetch_assoc($results)) {
    $event_name = $row['ticket_ID'];
    
    echo '<ul>';
        echo '<li>'.$event_name.'</li>';
    echo '</ul>';
    }
}
disconnect($connection); 
include '../View/LoggedInAccessible/LoggedInHomepage.php';