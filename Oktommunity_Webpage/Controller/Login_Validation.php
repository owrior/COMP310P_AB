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

    $login_query = "SELECT password FROM Customer WHERE Email = '" . $user['email'] . "'";
    
    $password = mysqli_query($connection, $login_query);
    var_dump($password);
    
    if ($password == $user['password']) {
        header ('Location: /View/index.php');
    }
    else {
        header('Location: /View/SignUp.php');
    }