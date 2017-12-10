<!DOCTYPE html>
<html>
    <head>
        <title>Event's</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='stylesheet.css'>
    </head>
    <body>
        <div class='login_control_dropdown'>
            <button class="login_control_btn">User</button>
            <div class = 'login_control_content'>
                <a href=Login.php>Login</a>
                <a href=SignUp.php>Sign Up</a>
                <a href='/Controller/LogOut.php'>Log Out</a>
            </div>
        </div>
        <br>
        <div class='navigation_control'>
            <ul class='navigation_control'>
                <li class='navigation_control'><a href=index.php>OKTOMUNITY</a></li>
                <li class='navigation_control'><a href=Events.php>Events</a></li>
                <li class='navigation_control'><a href=Tokens.php>Tokens</a></li>
                <li class='navigation_control'><a href=Create.php>Create</a></li>
                <li class='navigation_control'><a href=Control.php>Control</a></li>
            </ul>
        </div>
         <div class='events_page_main'>
            <h1 class="events_page_main">WHAT'S ON?</h1>
            <form class='events_page_main'>
                <input type = 'text' name='event_name'>
                <input type='date' name='date_from'>
                <input type='date' name='date_to'>
                <input type='submit' name='search'>
            </form>
            
            <div class="events_1" style="background-image: url('http://www.suitcaseandheels.com/wp-content/uploads/2017/06/1491255743723-e1496621774724.jpeg')">
            <h3 class="events_1">BALLIE BALLERSON</h3>
            <p> 27th DECEMBER 2017 <br>
                EC2A 3BS <br>
                £15.00 <br>
            <a href=Events_1.php>B U Y   N O W !</a></p>
            </div>
            <div class="events_2" style="background-image: url('https://2.bp.blogspot.com/-cpASClptcn8/WBxKZlX2yPI/AAAAAAAAG5I/xPREwqBtpgceV4TkJ6haEOoTCKEkF0JkgCLcB/s1600/gods%2Bown%2Bjunkyard%2Bwalthamstow%2Blondon.jpg')">
            <h4 class="events_2">GOD'S OWN JUNKYARD</h4>
            <p> 23rd DECEMBER 2017 <br>
                EC2A 3BS <br>
                £10.00 <br>
            <a href=Events_2.php>B U Y   N O W !</a></p>
            </div>
             <div class="events_3" style="background-image: url('http://www.vlondoncity.co.uk/wp-content/uploads/2015/12/MAIN-PIC1.jpg')">
            <h5 class="events_3">NEW YEAR'S EVE</h5>
            <p> 30TH DECEMBER 2017 <br>
                EC2A 3BS <br>
                £20.00 <br>
            <a href=Events_2.php>B U Y   N O W !</a></p>
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
