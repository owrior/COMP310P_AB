<?php
ini_set('display_errors',1);
    require('connect.php');
    
    $connection = connect();
    
    function getUser(){
        $user = array();
        $user['email']= $_POST['email_entered'];
        $user['password']=$_POST['password_entered'];
        return $user;

    }

    $user = getUser();

    $login_query = "SELECT Password FROM Customers WHERE Email LIKE " .$user['email'];
    
    $password = mysqli_query($connection,$login_query);
    
    if ($password == $user['password']) {
        return header ('Location: index.php');
    }
    else {
        return header('Location: SignUp.php');
    }

?>