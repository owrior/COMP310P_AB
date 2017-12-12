<?php
ini_set('display_errors', 1);
require 'connect.php';
session_start();
$email = $_SESSION('email');
if (!$email == NULL) {
    header("/View/LoggedOutAccessible/Login");
}

function TokenTypeDropDown() {
    $connection = connect();
    $filter = mysqli_query($connection, "SELECT * FROM TokenType");
    while ($row = mysqli_fetch_array($filter)) {
        $menu = '<option value="' . $row['TokenType_ID'] . '">' . $row['Type'] . '</option>';
        echo $menu;
    }
    disconnect($connection);    
}
