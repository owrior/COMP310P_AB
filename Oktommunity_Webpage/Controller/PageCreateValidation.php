<?php
require 'connect.php';
$connection = connect();
ini_set('display_errors',1);
session_start();
        $error = NULL;
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

            if($error != NULL){
            $result='<div class="alert alert-danger"><strong>There were error(s) form:</strong>'.$error.'</div>';
            echo $result;
            }
        else{
            $OwnerID = $_SESSION['loginID'];
            $Event_Name = $_POST['Event_Name'];
            $Location_ID = $_POST['Location_ID'];
            $Event_Date = $_POST['Event_Date'];
            $TicketSaleEnd_Date = $_POST['TicketSaleEnd_Date'];
            $Event_Capacity = $_POST['Event_Capacity'];
            $Description = $_POST['Description'];
            $Supplier = $_POST['Supplier'];
            $Category = $_POST ['Category'];

            $insert_query="INSERT INTO event (Event_Name, Location_ID, Event_Date, TicketSaleEnd_Date, Event_Capacity, Description, Supplier,OwnerID) VALUES 
                    ('$Event_Name', '$Location_ID','$Event_Date', '$TicketSaleEnd_Date', '$Event_Capacity', '$Description','$Supplier','$OwnerID')";
            mysqli_query($connection, $insert_query);
            
            $search_query = "SELECT event.Event_ID FROM event WHERE event.Event_Name = '".$Event_Name."'";
            $results = mysqli_query($connection,$search_query);
            $row = mysqli_fetch_row($results);
            
            $Event_ID = $row[0];
            $insert_query_2="INSERT INTO CategoryEvent (Category_ID, Event_ID) VALUES ('$Category','$Event_ID')";
            mysqli_query($connection,$insert_query_2);

            header('location: ../View/LoggedInAccessible/Control.php');
        }
}