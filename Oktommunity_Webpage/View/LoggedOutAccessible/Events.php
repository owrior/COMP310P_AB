<!DOCTYPE html>
<html>
    <head>
        <title>Event's</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body>
        <div class='login_control_dropdown'>
            <button class="login_control_btn">User</button>
            <div class = 'login_control_content'>
                <a href=Login.php>Login</a>
                <a href=SignUp.php>Sign Up</a>
            </div>
        </div>
        <br>
        <div class='navigation_control'>
            <ul class='navigation_control'>
                <li class='navigation_control'><a href=index.php>OKTOMUNITY</a></li>
                <li class='navigation_control'><a href=Events.php>Events</a></li>
            </ul>
        </div>
         <div class='events_page_main'>
            <h1 class="events_page_main">WHAT'S ON?</h1>
            <form class='events_page_main' method = 'post'>
                <input type = 'text' name='event_name'>
                <input type = 'text' name='category'>
                <input type='date' name='date_from'>
                <input type='date' name='date_to'>
                <input type='submit' name='search'>
            </form>
            <?php 
            require 'eventsSearch.php'; 
            searchEvents($event_name, $category, $event_date_from, $event_date_to);
            while($row = mysql_fetch_array($results)) {?>
            <tr>
                    <td><?php echo $row['Event_Name']?></td>
                    <td><?php echo $row['Event_Date']?></td>
                    <td><?php echo $row['TicketSaleEnd_Date']?></td>
                    <td><?php echo $row['Categories.Category_Name']?></td>
                    <td><?php echo $row['Event_Capacity']?></td>
            </tr>
            <?php 
            }?>
             
        </div>
        <div class='events_page_sidebar_1'>
            <h2 class='events_page_sidebar_1'>Event's <br>You're Attending...</h2>
            <ul>
                <li>Event 1</li>
                <li>Event 2</li>
                <li>Event 3</li>
                <li>Event 4</li>
            </ul>
        </div>
        <div class="events_page_sidebar_2">
            <h2 class="events_page_sidebar_2">Give Feedback On Event's You've Attended...</h2>
        </div>
        
    </body>
</html>
