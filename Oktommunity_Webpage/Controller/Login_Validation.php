<?php
//ini_set('display_errors',1);
    require('connect.php');
    session_start();
    
    if ($_SERVER("REQUEST_METHOD") == "POST") {
        
        $email_entered = mysqli_real_escape_string($connection, $_POST('email_entered'));
        $password_entered = mysqli_real_escape_string($connection, $_POST('password_entered'));
        
        $login_query = "SELECT id FROM Customer WHERE Email = '$email_entered' AND Password = '$password_entered'";
        $result = mysqli_query($connection,$login_query);
        
        $count = mysqli_num_rows($result);
        
        if ($count == 1) {
            session_register("email_entered");
            $_SESSION['login_user'] = $email_entered;
            
            header("location: /View/index.php");
        }
        else {
            return $error;
        }
    }