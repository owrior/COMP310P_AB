<?php include $_SERVER['DOCUMENT_ROOT'].'/Controller/login_check.php'?>
<html>
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body style="background-image: url('/Images/Signup.JPG');  ">
        <?php include('logged_in_navigation.php');?>
        <div class='main'>
        <h1 class="main">ABOUT US </h1>
        <p>Hello there, we here at Oktommunity are a platform on which you may either buy tickets to attend events or host your own! This is mainly for 
        Oktoberfest so then will be the hottest time to attend events however there are beer festivals all year round so come along fill up a stein and 
        enjoy!!!</p>
        </div>
        <div class='sidebar_1'>
            <h2 class="sidebar_1">Event's<br/>You've</br>Booked</h2>
            <?php
                  ini_set('display',1);
                  include $_SERVER['DOCUMENT_ROOT'].'/Controller/connect.php';
                  include $_SERVER['DOCUMENT_ROOT'].'/Controller/events_attending.php'?>
        
        </div>
        <div class="events_page_sidebar_2">
            <h2 class="events_page_sidebar_2">Please give</br>feedback!!!</h2>
            <?php
                include $_SERVER['DOCUMENT_ROOT'].'/Controller/events_attended.php'?>
        </div>
    </body>
</html>
