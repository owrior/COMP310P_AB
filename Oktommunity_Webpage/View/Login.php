<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LOG IN</title>
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
        <div class='login_page_main'style="background-image: url('login.JPG')" >
        <h3 class="login_page_main">LOGIN</h3>
        <form method="POST" action="/Controller/Login_Validation.php" name="Login details validation">
            <label>U S E R N A M E : </label><input type="text" name="email_entered"><br>
            <label>P A S S W O R D : </label><input type="text" name="password_entered"><br>
            <input type='Submit' value='LOGIN'>
        </form>
        </div>
    </body>
</html>
