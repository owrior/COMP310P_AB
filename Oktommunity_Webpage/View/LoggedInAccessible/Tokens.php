<!DOCTYPE html>
<?php session_start()?>
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
                echo 'User';
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
            <div>
            <form method="post" action="BuyTokens.php">
            <label>Which type of token would you like to buy?</label>
            <?php require 'connect.php';
            $connection = connect();
            $filter = mysqli_query($connection, 'SELECT * FROM TokenType');
            var_dump($filter);
            while ($row = mysqli_fetch_array($filter)) {
                $menu  = '<option>' .$row('dropdown_option').'</option>';
            }
            $menu = '</select></form>';
            echo $menu;
            ?>
            <input type="submit" value="submit">
            </form>
            </div>
        </div>
        
    </body>
</html>