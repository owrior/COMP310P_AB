<?php
require 'connect.php';
$connection = connect();

	if($_POST['submit']){
		if(!$_POST["Event_Name"]){
			$error="<br />Please enter your event name";
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
        if($error){
            $result='<div class="alert alert-danger"><strong>There were error(s) form:</strong>'.$error.'</div>';
        }
        else{
            $Event_Name = $_POST['Event_Name'];
            $Event_Date = $_POST['Event_Date'];
            $TicketSaleEnd_Date = $_POST['TicketSaleEnd_Date'];
            $Event_Capacity = $_POST['Event_Capacity'];
            $Description = $_POST['Description'];
            $query="INSERT INTO event (Event_Name, Event_Date, TicketSaleEnd_Date, Event_Capacity, Description) VALUES 
                    ('$Event_Name', '$Event_Date', '$TicketSaleEnd_Date', '$Event_Capacity', '$Description')";
            mysqli_query($connection, $query);
            header('location: /View/LoggedInAccessible/Control.php');
        }
	}