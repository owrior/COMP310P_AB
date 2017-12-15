<?php session_start();
      $_SESSION['email'] = 'User';
?>
<html>
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body style="background-image: url('/Images/Signup.JPG'); ">
        
        <?php include('logged_out_header.php')?>
        
        <div class='main'>
        <h1 class="main">ABOUT US </h1>
        <p>Hello there, we here at Oktommunity are a platform on which you may either buy tickets to attend events or host your own! <br> This is mainly for 
            Oktoberfest so then will be the hottest time to attend events however there are beer festivals all year round <br> so come along fill up a stein and 
        enjoy!!!</p>
      
        </div>
        <div class='sidebar'>
        <h2 class="sidebar">WHAT'S<br/> ON?</h2>
        <ul>
            <li>Event 1</li>
            <li>Event 2</li>
            <li>Event 3</li>
        </ul>
        </div>
    </body>
</html>


