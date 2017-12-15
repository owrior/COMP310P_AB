<?php
ini_set('display_errors',1);
$connection = connect();
$event_upcoming = "SELECT DISTINCT Event.Event_Name FROM Event WHERE  event.Event_Date > CURRENT_DATE()";
$results = mysqli_query($connection, $event_upcoming);

if (mysqli_num_rows($results) == NULL) {
    echo "Sadly no events coming up, sign up and host your own event!";
}
if (mysqli_num_rows($results) > 1) {
    while ($row = mysqli_fetch_assoc($results)) {
        $event_upcoming = $row['Event_Name'];
    echo '<ul>';
        echo '<li>'.$event_upcoming.'</li>';
    echo '</ul>';
    }
}
else {
    
    $row = mysqli_fetch_row($results);
    $event_upcoming = $row[0];
    
    echo '<ul>';
        echo '<li>'.$event_upcoming[0].'</li>';
    echo '</ul>';
}
disconnect($connection); 
?>

