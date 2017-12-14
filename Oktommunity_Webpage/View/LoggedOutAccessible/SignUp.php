<!DOCTYPE html>
<?php session_start()?>
<html>
    <head>
        <title>SIGN UP</title>
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
        <div class='signup_page_main'style="background-image: url('/Images/Home.JPG')">
        <h3 class="signup_page_main">SIGN UP!</h3>
        <form method="POST" action="/Controller/Login_Validation.php" name="Login details validation">
            <input type="hidden" name="submitted" id="submitted" value="1"/>
            <label>F I R S T  N A M E : </label><input type="text" name="firstname_entered" id="FirstName_entered"><br>
            <label>L A S T  N A M E : </label><input type="password" name="password_entered" id="LastName_entered"><br>
            <label>E M A I L : </label><input type="text" name="email_entered" id="Email_entered"><br>
            <label>P A S S W O R D : </label><input type="password" name="password_entered" id="password_entered"><br>
            <label>A D D R E S S : </label><input type="text" name="email_entered" id="Address_entered"><br>
            <label>P O S T  C O D E : </label><input type="password" name="password_entered" id="PostCode_entered"><br>
            <label>D A T E  O F  B I R T H : </label><input type="password" name="password_entered" id="DOB_entered"><br>
            <label>P H O N E  N U M B E R : </label><input type="password" name="password_entered" id="PhoneNo_entered"><br>
            <input type='Submit' value='R E G I S T E R'>
        </form>
        </div>
        </body>
</html>
