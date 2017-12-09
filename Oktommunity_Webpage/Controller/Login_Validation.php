<?php
    //ini_set('display_errors',1);
    require('connect.php');
    $connection = connect();
    session_start();
    
        
        $email_entered = $_POST["email_entered"];
        $password_entered = $_POST["password_entered"];
        
        $login_query = "SELECT id FROM Customer WHERE Email = '$email_entered' AND Password = '$password_entered'";
        $result = mysqli_query($connection,$login_query);
        
        $count = mysqli_num_rows($result);
        //var_dump($count);
        if ($count == 1) {
            session_register("email_entered");
            $_SESSION['login_user'] = $email_entered;
            disconnect($connection);
            header("location: /View/index.php");   
        }
        else {
            disconnect($connection);
            header("location: /View/Login.php");
            $error = "Your Login Name or Password is invalid.";
        }