<?php
require 'connect.php';
require 'data_tester.php';
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
            $Name = testData($_POST['Name']);
            $Type = testData($_POST['Type']);
            $Email = testData($_POST['Email']);
            $Phone_Number = testData($_POST['Phone_Number']);
            $Address = testData($_POST['Address']);
            $Postcode = testData($_POST['Postcode']);
            $query="INSERT INTO supplier (Name, Type, Email, Phone_Number, Address, Postcode) VALUES 
                    ('$Name', '$Type','$Email', '$Phone_Number', '$Address','$Postcode')";
            mysqli_query($connection, $query);
            $_SESSION['create_state'] = 'success';
            if($_SESSION['create_state'] == 'success'){
                echo '<script>alert("New supplier detailed added to database")</script>';
            }
            //header('location: ../View/LoggedInAccessible/Create.php');
            echo '<script>setTimeout(function() {
  window.location.href = "../View/LoggedInAccessible/Create.php";
}, 1000);</script>';
        }
	}
