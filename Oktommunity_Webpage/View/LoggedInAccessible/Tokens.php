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
            <div>
                <form method="post" action="/Controller/BuyTokens.php">
                    <input type="submit" value="BUY">
                    <div>
                    <select name ="TokenType">
                        <option value="0">Choose</option>
                        <?php require 'connect.php';
                        $connection = connect();
                        $filter = mysqli_query($connection, "SELECT * FROM TokenType");
                        while ($row = mysqli_fetch_array($filter)) {
                             echo "<option value=\"".$row['TokenType_ID']."\">".$row['Type']."</option>\n   ";
                        }
                        disconnect($connection);
                        ?>  
                    </select> 
                    </div>
                    <div>
                        <label>Which type of token would you like to buy?</label>
                    </div>
                    <input type="submit" value="BUY">
                </form>
            </div>
        </div>
        
    </body>
</html>