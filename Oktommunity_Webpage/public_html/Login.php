<?php
$login_query = "SELECT Password FROM Customers WHERE Email LIKE "+$email_entered;

$password = query($connection,$login_query);
if ($password == $password_entered) {
    return 1;
}
else {
    return 0;
}


