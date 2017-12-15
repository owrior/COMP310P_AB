<div class='login_control_dropdown'>
            <button class="login_control_btn"><?php 
            if ($_SESSION['email'] == NULL) {
                echo 'User';
            }
            else {
                echo $_SESSION['email'].'  '.$_SESSION['loginID'];
                $email = $_SESSION['email'];
            }
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

