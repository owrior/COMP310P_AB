<?php
require 'connect.php';
$connection = connect();
session_start();
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
            $OwnerID = $_SESSION['loginID'];
            if(!OwnerID |empty($OwnerID) )echo 'nothing here';
            echo $OwnerID;
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
            
            $search_query ="SELECT categories.Category_ID, event.Event_ID FROM categories "
                    . "JOIN CategoryEvent ON categories.Category_ID = CategoryEvent.Category_ID "
                    . "JOIN event ON CategoryEvent.Event_ID = event.Event_ID "
                    . "WHERE event.Event_Name = '".$Event_Name."'";
            $results = mysqli_query($connection,$search_query);
            $row = mysqli_fetch_row($results);
            $Category_ID = $row['Category_ID'];
            $Event_ID = $row['Event_ID'];
            var_dump($search_query);
            $insert_query_2="INSERT INTO CategoryEvent (Category_ID, Event_ID) VALUES ('$Category_ID','$Event_ID')";
            mysqli_query($connection,$insert_query_2);
            header('location: /View/LoggedInAccessible/Control.php');
        }
}