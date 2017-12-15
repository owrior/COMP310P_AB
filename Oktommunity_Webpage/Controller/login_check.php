<?php
session_start();
if ($_SESSION['email'] == "User") {
    header('location: ../Controller/LogOut.php');
}
?>

