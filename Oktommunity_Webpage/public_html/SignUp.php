<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SIGN UP</title>
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
                <a href=LogOut.php>Log Out</a>
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
        <div class='signup_page_main'style="background-image: url('Home.JPG')">
        <h3 class="signup_page_main">SIGN UP!</h3>
        <form action="/action_page.php">
            <label>U S E R N A M E : </label><input type="text" name="email_entered"><br>
            <label>P A S S W O R D : </label><input type="text" name="password_entered"><br>
            <label>F I R S T  N A M E : </label><input type="text" name="password_entered"><br>    
            <label>L A S T  N A M E : </label><input type="text" name="password_entered"><br>
            <label>D A T E  O F  B I R T H : </label><input type="text" name="email_entered"><br>
            <label>A D D R E S S: </label><input type="text" name="password_entered"><br>
            <label>P O S T  C O D E : </label><input type="text" name="email_entered"><br>
            <label>E M A I L : </label><input type="text" name="password_entered"><br>
            <input type='Submit' value='R E G I S T E R'>
            
        </form>
        </div>
        </body>
</html>
