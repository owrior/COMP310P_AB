<!DOCTYPE html>
<?php session_start()?>
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
            <div class='events_page_search'>
                <form class='events_page_main' method = 'post' action='/Controller/eventsSearch.php'>
                    <input type = 'text' name='event_name' value='' placeholder="Event Name">
                    <input type = 'text' name='category' value='' placeholder="Event Category">
                    <input type='date' name='date_from' value='2017-01-01' placeholder='Date From'>
                    <input type='date' name='date_to' value=NULL placeholder="Date To">
                    <input type='submit' name='search'>
                </form>
            </div>
            <div class='events_page_results'>
                <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
                    <thead>
                        <tr>
                            <th>Event ID</th>
                            <th>Event</th>
                            <th>Date</th>
                            <th>Ticket Sale final release</th>
                            <th>Category</th>
                            <td>Capacity</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $results = $_SESSION['searchResults'];
                    while($row = mysql_fetch_array($results)){?>
                    <tr>
                            <td><?php echo $row['Event.Event_ID']?></td>
                            <td><?php echo $row['Event_Name']?></td>
                            <td><?php echo $row['Event_Date']?></td>
                            <td><?php echo $row['TicketSaleEnd_Date']?></td>
                            <td><?php echo $row['Categories.Category_Name']?></td>
                            <td><?php echo $row['Event_Capacity']?></td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
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
