<!DOCTYPE html>
<?php 
    require '/Controller/connect.php';
    session_start();
?>
<html>
    <head>
        <title>CONTROL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body>
        <div class='login_control_dropdown'>
            <button class="login_control_btn"><?php 
            if ($_SESSION['email'] == NULL) {
                echo 'User';
            }
            else {
                echo $_SESSION['email'];
            }
            ?></button>
            <div class = 'login_control_content'>
                <a href='/Controller/LogOut.php'>Log Out</a>
            </div>
        </div>
        <br>
        <div class='navigation_control'>
            <ul class='navigation_control'>
                <li class='navigation_control'><a href=LoggedInHomepage.php>OKTOMUNITY</a></li>
                <li class='navigation_control'><a href=LoggedInEvents.php>Events</a></li>
                <li class='navigation_control'><a href=Tokens.php>Tokens</a></li>
                <li class='navigation_control'><a href=Create.php>Create</a></li>
                <li class='navigation_control'><a href=Control.php>Control</a></li>
            </ul>
        </div>
         <div class='control_page_main'>
        <h3 class="control_page_main">Control</h3>
        
        <div class ="eventHosting">
            <h>EVENTS YOU ARE HOSTING</h>
            <table>
            <tr>
                <td style = "width:100px">Event Nmae</td>
                <td style = "width:100px">Event Date</td>
                <td style = "width:100px">Location</td>
            </tr>
            <?php 
            if(1==1){
                $connection = connect();
                $OwnerID = $_SESSION['loginID'];
             $event_query = "SELECT * FROM event WHERE OwnerID = '$OwnerID'";
        $result = mysqli_query($connection,$event_query);
        while($row = mysqli_fetch_assoc($result)){
            
            $name = $row[Event_Name];
            $Date = $row[Event_Date];
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
            }}
            ?>
            </table>
                
            
                
        </div>
        
        <div class ="eventHosted">
            <h>EVENTS YOU ARE </h>
            <table>
            <tr>
                <td style = "width:100px">Event Nmae</td>
                <td style = "width:100px">Event Date</td>
                <td style = "width:100px">Location</td>
            </tr>
            <?php 
            if(1==1){
                $OwnerID = $_SESSION['loginID'];
             $event_query = "SELECT * FROM event WHERE OwnerID = '$OwnerID'";
        $result = mysqli_query($connection,$event_query);
        while($row = mysqli_fetch_assoc($result)){
            
            $name = $row[Event_Name];
            $Date = $row[Event_Date];
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
            }}
            ?>
            </table>
                
            
                
        </div>
        
        
        </div>
    </body>
</html>
