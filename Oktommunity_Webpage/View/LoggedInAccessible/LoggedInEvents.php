
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
                <li class='navigation_control'><a href='/View/LoggedInAccessible/LoggedInHomepage.php'>OKTOMUNITY</a></li>
                <li class='navigation_control'><a href='/View/LoggedInAccessible/LoggedInEvents.php'>Events</a></li>
                <li class='navigation_control'><a href='/View/LoggedInAccessible/Tokens.php'>Tokens</a></li>
                <li class='navigation_control'><a href='/View/LoggedInAccessible/Create.php'>Create</a></li>
                <li class='navigation_control'><a href='/View/LoggedInAccessible/Control.php'>Control</a></li>
            </ul>
        </div>
         <div class='events_page_main'>
            <h1 class="events_page_main">WHAT'S ON?</h1>
            <div class='events_page_search'>
                <form class='events_page_main' method = 'post' action='/Controller/events_search.php'>
                    <input type = 'text' name='event_name' value='' placeholder="Event Name">
                    <input type = 'text' name='category' value='' placeholder="Event Category">
                    <input type='date' name='event_date_from' value='2017-01-01' placeholder='Date From'>
                    <input type='date' name='event_date_to' value=NULL placeholder="Date To">
                    <button>Search</button>
                </form>
            </div>
            <div class='events_page_results'>
                <table border="2" width=1140px style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
                    <tr>
                        <td><label>Number :</label></td>
                        <td><label>Event ID :</label></td>
                        <td><label>Location ID :</label></td>
                        <td><label>Event Date :</label></td>
                        <td><label>Ticket Sale final release :</label></td>
                        <td><label>Capacity :</label></td>
                        <td><label>Category :</label></td>
                    </tr>
                    <?php include('../Controller/event_search_display.php');?>
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
