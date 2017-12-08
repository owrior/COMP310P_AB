<?php
ini_set('display_errors',1);
    connect.connect() or die().mysqli_error();
    
    
    function getUser(){
        $user = array();
        $user['email']= $_POST['email_entered'];
        $user['password']=$_POST['password_entered'];
        return $user;

    }

    $user = getUser();

    $login_query = "SELECT Password FROM Customers WHERE Email LIKE " +$user['email'];
    
    $password = query($connection,$login_query);
    
    if ($password == $user['password']) {
        connect.disconnect();
        return header ('Location: index.php');
    }
    else {
        connect.disconnect();
        return header('Location: SignUp.php');
    }

?>