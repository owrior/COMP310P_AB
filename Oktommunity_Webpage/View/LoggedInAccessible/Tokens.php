<!DOCTYPE html>
<?php session_start();
require '/Controller/BuyTokens.php'?>
<html>
    <head>
        <title>Tokens</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body>
        <div class='login_control_dropdown'>
            <button class="login_control_btn"><?php 
            if ($_SESSION['email'] == NULL) {
                header('location: /LoggedOutAccessible/Login.php');
            }
            else {
                echo $_SESSION['email'];
            }
            ?></button>
            <div class = 'login_control_content'>
                <a href='/Controller/LogOut.php'>Log Out</a>
            </div>
        </div>
        <br>
        <div class='navigation_control'>
            <ul class='navigation_control'>
                <li class='navigation_control'><a href=LoggedInHomepage.php>OKTOMUNITY</a></li>
                <li class='navigation_control'><a href=LoggedInEvents.php>Events</a></li>
                <li class='navigation_control'><a href=Tokens.php>Tokens</a></li>
                <li class='navigation_control'><a href=Create.php>Create</a></li>
                <li class='navigation_control'><a href=Control.php>Control</a></li>
            </ul>
        </div>
        <div class='tokens_page_main'style="background-image: url('/Images/token.JPG'); float: left; ">
            <h3 class="tokens_page_main">TOKENS! TOKENS! TOKENS!</h3>
            <div class="token_form">
                <form method="post" action="/Controller/BuyTokens.php">
                    <div>
                        <label>How many would you like to buy?</label>
                        <select name="Amount">
                            <option value="0">Choose how many</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option> 
                        </select>
                        </br>
                        <label>Which type would you like?</label>                    
                        <select name ="chosen_type">
                            <option value="0">Choose which kind</option>
                            <?phpTokenTypeDropDown()?>
                        </select>                         
                        </br>
                        <input type="submit" value="BUY">
                        </br>
                    </div>
                </form>
            </div>
        </div>
        
    </body>
</html>