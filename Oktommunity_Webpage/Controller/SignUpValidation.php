<?php
require'connect.php';
$connection = connect();

$email_entered = testData($_POST["email_entered"]);
$FirstName =  testData($_POST["FirstName_entered"]);
$LastName =  testData($_POST["LastName_entered"]);
$DOB =  testData($_POST["DOB_entered"]);
$PhoneNo =  testData($_POST["PhoneNo_entered"]);
$PostCode =  testData($_POST["PostCode_entered"]);
$Address =  testData($_POST["Address_entered"]);       
$Password =  testData($_POST["Password_entered"]);

        $SIGNUP_query = "SELECT Email FROM Customer WHERE Email = $email_entered";
        
        $result = mysqli_query($connection,$SIGNUP_query);
        
        $count = mysqli_num_rows($result);

        if ($count != 0) {
            disconnect($connection);
            $_SESSION['errorMessge'] = "Email already in use, please use a different email.";   
        }
        else {
             disconnect($connection);
               $sign = "INSERT INTO Customer WHERE Email = $email_entered AND First_Name = $FirstName AND Last_Name=$LastName
                        AND email=$email_entered AND DOB=$DOB AND Phone_Number=$PhoneNo AND Postcode=$PostCode  
                        AND Address=$Address AND Password=$Password";
               

       if ($conn->query($sign) === TRUE) {
                 echo "New record created successfully";
            } 
        else {
                echo "Error" . $sign . "<br>" . $conn->error;
                $conn->close();
            }
        }
        