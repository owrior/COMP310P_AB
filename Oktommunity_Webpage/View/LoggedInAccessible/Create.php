<!DOCTYPE html>
<?php session_start() ?>
<html>
    <head>
        <title>CREATE</title>
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
        <div class='create_page_main'>
            <h3 class="create_page_main">CREATE</h3>
        
        <?php echo $result; ?>

	<form method="post" action="/Controller/PageCreateValidation.php">
		
	<h3>Create Your Brand New Event Here...</h3>
		
	<div class="eventCreation">
	<label for="Event_Name">Event Name</label>
	<input type="text" placeholder="Please enter the event name" name="Event_Name" class="Controller" />
        </div>

		
	<div class="eventCreation">
	<label for="Event_Date">Event Date</label>
	<input type="date" name="Event_Date" />
	</div>
		
	<div class="eventCreation">
	<label for="TicketSaleEnd_Date">End ticket sale date of the event:</label>
	<input type="date" name="TicketSaleEnd_Date" />
	</div>

	<div class="eventCreation">
	<label for="Event_Capacity">Capacity of the event:</label>
	<input type="number" name="Event_Capacity" class="Controller"/>
	</div>

	<div class="eventCreation">
	<label for="Description">Description<label>
        <input type="text" name="Description" class="Controller"/>
        </div>

	<br></br>

	<div class="eventCreation">
	<input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg">；
        <form> <button type="submit" action="/Controller/PageCreateValidation.php" class="btn btn-success btn-lg"> </form>
        </div>
        </form>
        </div>
        
    </body>
</html>
