<?php
ini_set('display_errors',1);
require'connect.php';
require 'data_tester.php';
$connection = connect();

$email_entered = testData($_POST["Email_entered"]);
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
               $sign = "INSERT INTO Customer (Email,First_Name, Last_Name, DOB, Phone_Number, Postcode,Address, Password) VALUES('$email_entered' , '$FirstName' , '$LastName',
                        $DOB , $PhoneNo , '$PostCode' ,'$Address' , '$Password')";
               

       if ($sign === TRUE) {
           disconnect($connection);
                 echo "New record created successfully";
            } 
        else {
                disconnect($connection);
                echo "Error" . $sign . "<br>"  ;
                
            }
        }
        