<!DOCTYPE html>
<?php session_start()?>
<html>
    <head>
        <title>LOG IN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='stylesheet.css'>
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
                <a href=Login.php>Login</a>
                <a href=SignUp.php>Sign Up</a>
                <a href=LogOut.php>Log Out</a>
            </div>
        </div>
        <br>
        <div class='navigation_control'>
            <ul class='navigation_control'>
                <li class='navigation_control'><a href=index.php>OKTOMUNITY</a></li>
                <li class='navigation_control'><a href=Events.php>Events</a></li>
            </ul>
        </div>
        <div class='login_page_main'style="background-image: url('/Images/Login.JPG')" >
        <h3 class="login_page_main">LOGIN</h3>
        <form method="POST" action="/Controller/Login_Validation.php" name="Login details validation">
            <input type="hidden" name="submitted" id="submitted" value="1"/>
            <label>E M A I L : </label><input type="text" name="email_entered" id="email_entered"><br>
            <label>P A S S W O R D : </label><input type="password" name="password_entered" id="password_entered"><br>
            <input type='Submit' value='LOGIN'>
        </form>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $SESSION['errorMessage']; ?></div>
        </div>
    </body>
</html>
