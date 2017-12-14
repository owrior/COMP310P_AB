
<?php session_start();?>

<html>
    <head>
        <title>Event's</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body>
        <?php if (isset($_SESSION['email'])) {
                echo "please log in to view this page";
                echo "<p><a href=Login.php>Login</a></p>";
                } ?>
        <div class='login_control_dropdown'>
            <button class="login_control_btn"><?php 
                echo $_SESSION['email'];
            ?></button>
            <div class = 'login_control_content'>
                <a href='/Controller/LogOut.php'>Log Out</a>
            </div>
        </div>
        <br>
        <div class='navigation_control'>
            <ul class='navigation_control'>
                <li class='navigation_control'><a href='/View/LoggedInAccessible/LoggedInHomepage.php'>OKTOMUNITY</a></li>
                <li class='navigation_control'><a href='/View/LoggedInAccessible/LoggedInEvents.php'>Events</a></li>
                <li class='navigation_control'><a href='/View/LoggedInAccessible/Tokens.php'>Tokens</a></li>
                <li class='navigation_control'><a href='/View/LoggedInAccessible/Create.php'>Create</a></li>
                <li class='navigation_control'><a href='/View/LoggedInAccessible/Control.php'>Control</a></li>
            </ul>
        </div>
        <div>
            <table>
                <tr>
                    <td><label>Event Name :</label></td>
                    <td><label>Event Date :</label></td>
                    <td><label>Event Location :</label></td>
                    <td><label>Remaining Tickets :</label></td>
                </tr>
            </table>
        </div>
        <div action='/Controller/Event_info_retrieval.php'
