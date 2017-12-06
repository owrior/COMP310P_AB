<?php
$connection = mysqli_connect(localhost, root, root, Oktober, 8888) or 
        die('Error connecting to the database'.mysql_error());

$login_query = "SELECT Email, Password FROM Customers WHERE Email LIKE "+$email_entered;

$login_credentials = $connection->query($login_query);

if ($login_credentials) {
    while ($record = mysql_fetch_array($login_credentials)) {
        $loginArray[] = $record['type'];
}
}
if ($loginArray[1] == $password_entered) {
    print "login successful";
}
mysqli_close($connection);

