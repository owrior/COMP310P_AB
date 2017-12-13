<?php
require 'connect.php';
require 'data_tester';
$connection = connect();

	if($_POST['submit']){
            if(!$_POST["Event_Name"]){
		$error="<br />Please enter your event name";
            }
            if($_POST["Location_ID"]=="0"){
                $error.="<br />Please enter the location.";
            }
            if(!$_POST["Event_Date"]){
                $error.="<br />Please enter your date.";
            }
            if(!$_POST["TicketSaleEnd_Date"]){
            $error.="<br />Please enter the end ticket sale date.";
            }
            if(!$_POST["Event_Capacity"]){
            $error.="<br />Please enter the maximum number of tickets.";
            }
            if(!$_POST["Description"]){
            $error.="<br />Please enter event description.";
            }
            if($_POST["Category"]=="0"){
                $error.="<br />Please enter the location.";
            }
            if($_POST["Supplier"]=="0"){
                $error.="<br />Please enter the supplier.";      
            }

            if($error){
            $result='<div class="alert alert-danger"><strong>There were error(s) form:</strong>'.$error.'</div>';
            echo $result;
            }
        else{
            $Event_Name = testData($_POST['Event_Name']);
            $Location_ID = testData($_POST['Location_ID']);
            $Event_Date = testData($_POST['Event_Date']);
            $TicketSaleEnd_Date = testData($_POST['TicketSaleEnd_Date']);
            $Event_Capacity = testData($_POST['Event_Capacity']);
            $Description = testData($_POST['Description']);
            $query="INSERT INTO event (Event_Name, Location_ID, Event_Date, TicketSaleEnd_Date, Event_Capacity, Description, Category, Supplier) VALUES 
                    ('$Event_Name', '$Location_ID','$Event_Date', '$TicketSaleEnd_Date', '$Event_Capacity', '$Description','$Category','$Supplier')";
            mysqli_query($connection, $query);
            header('location: /View/LoggedInAccessible/Control.php');
        }
	}