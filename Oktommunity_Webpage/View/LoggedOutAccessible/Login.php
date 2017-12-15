<!DOCTYPE html>
<?php session_start() ?>
<html>
    <head>
        <title>LOG IN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body style="background-image: url('https://ak0.picdn.net/shutterstock/videos/16207510/thumb/1.jpg')">
        <?php include('logged_out_header.php')?>
        <div class='login_page_main' >
        <h3 class="login_page_main">LOGIN</h3>
        <form method="POST" action="/Controller/Login_Validation.php" name="Login details validation">
            <label>E M A I L : </label><input type="text" name="email_entered" id="email_entered"><br>
            <label>P A S S W O R D : </label><input type="password" name="password_entered" id="password_entered"><br>
            <input type='Submit' value='LOGIN'>
        </form>
        <div style = "font-size:11px; color:blanchedalmond; margin-top:10px"><?php echo $SESSION['errorMessage']; ?></div>
        </div>
    </body>
</html>
