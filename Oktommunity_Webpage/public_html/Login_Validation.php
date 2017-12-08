<?php

    connect.connect(true);

    function getUser(){
        $user = array();
        $user['email']= $_POST['email_entered'];
        $user['password']=$_POST['password_entered'];
        return $user;

    }

    $user = getUser();

    $login_query = "SELECT Password FROM Customers WHERE Email LIKE '$email';";
    
    $password = query($connection,$login_query);
    
    if ($password == $password_entered) {
        connect.connect(false);
        header ('Location: index.php');
        exit;
    }
    else {
        connect.connect(false);
        header('Location: SignUp.php');
        exit;
    }
?>