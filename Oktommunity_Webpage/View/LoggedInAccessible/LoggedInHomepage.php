<!DOCTYPE html>
<?php session_start()?>
<html>
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body style="background-image: url('/Images/Signup.JPG');  ">
      
        <div class='login_control_dropdown'>
            <button class="login_control_btn"><?php 
            if ($_SESSION['email'] == NULL) {
                echo 'User';
            }
            else {
                echo $_SESSION['email'].'  '.$_SESSION['loginID'];
                $email = $_SESSION['email'];
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
        <div class='main'>
        <h1 class="main">ABOUT US </h1>
        <p>Hello there, we here at Oktommunity are a platform on which you may either buy tickets to attend events or host your own! This is mainly for 
        Oktoberfest so then will be the hottest time to attend events however there are beer festivals all year round so come along fill up a stein and 
        enjoy!!!</p>
        </div>
        <div class='sidebar'>
        <h2 class="sidebar">WHAT'S<br/> ON?</h2>
        <form action="/Controller/events_attending.php">
            <input type="submit">
        </form>
        <?php include '../Controller/events_attending.php'?>
        </div>
    </body>
</html>
