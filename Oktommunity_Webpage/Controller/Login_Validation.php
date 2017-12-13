<?php
    ini_set('display_errors', 1);
    require('connect.php');
    $connection = connect();
    session_start();
    
        
        $email_entered = testData($_POST["email_entered"]);
        $password_entered = testData($_POST["password_entered"]);
        
        $login_query = "SELECT Customer_ID FROM Customer WHERE Email = '$email_entered' AND Password = '$password_entered'";
        
        $result = mysqli_query($connection,$login_query);
        
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION["email"] = $email_entered;
            disconnect($connection);
            header("location: /View/LoggedInAccessible/LoggedInHomepage.php");   
        }
        else {
            disconnect($connection);
            $_SESSION['errorMessge'] = "Incorrect username or password.";
            header("location: /View/LoggedOutAccessible/Login.php");
        }
