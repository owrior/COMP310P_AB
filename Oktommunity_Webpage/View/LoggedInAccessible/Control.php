<?php include $_SERVER['DOCUMENT_ROOT'].'/Controller/login_check.php';
      include $_SERVER['DOCUMENT_ROOT'].'/Controller/connect.php' ?>
<html>
    <head>
        <title>CONTROL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>'
    <body style="background-image:url('https://cdn.vectorstock.com/i/thumb-large/89/11/seamless-floral-pattern-vector-13598911.jpg')">
        <?php include('logged_in_navigation.php');?>
         <div class='control_page_main'>
        <h3 class="control_page_main">Control</h3>
        
        <div class ="eventHosting">
            <h>EVENTS YOU ARE HOSTING</h>
            <table>

           
            
            <?php $connection = connect();
            if(1==1){
                $OwnerID = $_SESSION['loginID'];
                $event_query = "SELECT * FROM event WHERE OwnerID = '$OwnerID' and Event_Date >= now()";
                $result = mysqli_query($connection,$event_query);
                while($row = mysqli_fetch_assoc($result)){
                 //   echo '<table>';
            
            echo '            <tr>
                <td style = "width:200px"><b>Event Name</b></td>
                <td style = "width:200px"><b>Event Date<b/></td>
                <td style = "width:200px"><b>Location</b></td>
                <td style = "width:200px"><b>ticket available</b></td>
            </tr><tr></tr>'
            
;            $name = $row[Event_Name];
            $Date = $row[Event_Date];
            $Event_ID = $row[Event_ID];
            $capacity = $row[Event_Capacity];
            
            //get how many ticket left
            $sale_ticket_query = "SELECT * FROM ticket WHERE Event_ID = '$Event_ID'";
            $sale_result = mysqli_query($connection,$sale_ticket_query);
            $count = mysqli_num_rows($sale_result);
            $left = $capacity - $count;
            
            
            $Location = $row[Location_ID];
            $location_query = "SELECT * FROM location WHERE Location_ID ='$Location' ";
            $result2 = mysqli_query($connection,$location_query);
            $row2 = mysqli_fetch_assoc($result2);
            $locationName = $row2['Name'];
            echo '<tr>';
            echo '<td>'.$name.'</td>';
            echo '<td>'.$Date.'</td>';
            echo '<td>'.$locationName.'</td>';
            echo '<td>'.$left.'</td>';
            echo'</tr>';
            
            
             $event_query = "SELECT DISTINCT customer.Customer_ID, customer.First_Name, customer.Last_Name FROM customer JOIN ticket ON customer.Customer_ID = ticket.Customer_ID WHERE ticket.Event_ID='$Event_ID'";
            $member_list = mysqli_query($connection,$event_query);
            $count = mysqli_num_rows($member_list);
            //if(count>0)
            $render =0;
            while($row2 = mysqli_fetch_assoc($member_list)){
                       if($render ==0)     {echo '
            <tr>
                <td style = "width:200px"><b>Customer ID</b></td>
                <td style = "width:200px"><b>First Name</b></td>
                <td style = "width:200px"><b>Last Name</b></td>
            </tr>';
            $render =1;}
                echo '<tr>';
                echo '<td>'.$row2['Customer_ID'].'</td>';
                echo '<td>'.$row2['First_Name'].'</td>';
                echo '<td>'.$row2['Last_Name'].'</td>';
                echo'</tr>';
            }
                
            }}
                echo'</table>';   
            ?>
            
                
        </div>

        <br> <br>
        
        
        <div class ="eventHosted">
            <h>EVENTS YOU HOSTED IN THE PAST</h>
             <table>

           
            
            <?php 
            if(1==1){
                $OwnerID = $_SESSION['loginID'];
             $event_query = "SELECT * FROM event WHERE OwnerID = '$OwnerID' and Event_Date < now()";
        $result = mysqli_query($connection,$event_query);
        while($row = mysqli_fetch_assoc($result)){
         //   echo '<table>';
            echo '            <tr>
                <td style = "width:200px"><b>Event Name</b></td>
                <td style = "width:200px"><b>Event Date<b/></td>
                <td style = "width:200px"><b>Location</b></td>
            </tr><tr></tr>'
            
;           $name = $row[Event_Name];
            $Date = $row[Event_Date];
            $Event_ID = $row[Event_ID];
            $Location = $row[Location_ID];
            $location_query = "SELECT * FROM location WHERE Location_ID ='$Location' ";
            $result2 = mysqli_query($connection,$location_query);
            $row2 = mysqli_fetch_assoc($result2);
            $locationName = $row2['Name'];
            echo '<tr>';
            echo '<td>'.$name.'</td>';
            echo '<td>'.$Date.'</td>';
            echo '<td>'.$locationName.'</td>';
            echo'</tr>';
            
            
             $event_query = "SELECT DISTINCT customer.Customer_ID, customer.First_Name, customer.Last_Name FROM customer JOIN ticket ON customer.Customer_ID = ticket.Customer_ID WHERE ticket.Event_ID='$Event_ID'";
            $member_list = mysqli_query($connection,$event_query);
            $count = mysqli_num_rows($member_list);
            //if(count>0)
            $render =0;
            while($row2 = mysqli_fetch_assoc($member_list)){
                       if($render ==0)     {echo '
            <tr>
                <td style = "width:200px"><b>Customer ID</b></td>
                <td style = "width:200px"><b>First Name</b></td>
                <td style = "width:200px"><b>Last Name</b></td>
            </tr>';
            $render =1;}
                echo '<tr>';
                echo '<td>'.$row2['Customer_ID'].'</td>';
                echo '<td>'.$row2['First_Name'].'</td>';
                echo '<td>'.$row2['Last_Name'].'</td>';
                
                echo'</tr>';
                

                
            }
                
            }}
                echo'</table>';   
            ?>               
            
                
        </div>
        
        
        </div>
    </body>
</html>
