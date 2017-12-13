<?php
require 'connect.php';
$connection = connect();

	if($_POST['submit']){
            if(!$_POST["Name"]){
		$error="<br />Please enter your company name";
            }
            if($_POST["Type"]=="0"){
                $error.="<br />Please enter the type.";
            }            
            if(!$_POST["Email"]){
                $error.="<br />Please enter your email.";
            }
            if(!$_POST["Phone_Number"]){
            $error.="<br />Please enter the phone number.";
            }
            if(!$_POST["Address"]){
            $error.="<br />Please enter the address.";
            }
            if(!$_POST["Postcode"]){
            $error.="<br />Please enter the postcode.";
            }
            if($error){
            $result='<div class="alert alert-danger"><strong>There were error(s) form:</strong>'.$error.'</div>';
            echo $result;
            }
        else{
            $Name = $_POST['Name'];
            $Type = $_POST['Type'];
            $Email = $_POST['Email'];
            $Phone_Number = $_POST['Phone_Number'];
            $Address = $_POST['Address'];
            $Postcode = $_POST['Postcode'];
            $query="INSERT INTO supplier (Name, Type, Email, Phone_Number, Address, Postcode) VALUES 
                    ('$Name', '$Type','$Email', '$Phone_Number', '$Address','$Postcode')";
            mysqli_query($connection, $query);
            header('location: /View/LoggedInAccessible/ControlSupplier.php');
        }
	}