<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                <a href=Login.html>Login</a>
                <a href=SignUp.html>Sign Up</a>
                <a href=LogOut.html>Log Out</a>
            </div>
        </div>
        <br>
        <div class='navigation_control'>
            <ul class='navigation_control'>
                <li class='navigation_control'><a href=index.html>OKTOMUNITY</a></li>
                <li class='navigation_control'><a href=Events.html>Events</a></li>
                <li class='navigation_control'><a href=Tokens.html>Tokens</a></li>
                <li class='navigation_control'><a href=Create.html>Create</a></li>
                <li class='navigation_control'><a href=Control.html>Control</a></li>
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