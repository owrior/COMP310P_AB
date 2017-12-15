<!DOCTYPE html>
<?php session_start() 
?>
<html>
    <head>
        <title>CREATE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body style="background-image:url('http://blog.sklambert.com/wp-content/uploads/2012/09/bg.png')">
        <?php include('logged_in_navigation.php');?>
        <div class='create_page_main'>
            <h3 class="create_page_main">CREATE</h3>
        

	
	
        <div class="newevent">
        
        <form method="post" action="/Controller/PageCreateValidation.php">
            
        <h3>Create Your Brand New Event Here...</h3>
        
	<div class="eventCreation">
	<label for="Event_Name">Event Name</label>
	<input type="text" placeholder="Please enter the event name" name="Event_Name"  />
        </div>
        
        <div class="eventCreation">
            <label for="Location_ID">Location</label>
            <select name="Location_ID">
            <option value="0">Choose</option>
            <option value="1">Regent's Park</option>
            <option value="2">Hyde Park</option>
            </select>
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
	<input type="number" name="Event_Capacity" />
	</div>

	<div class="eventCreation">
	<label for="Description">Description<label>
        <input type="text" name="Description" />
        </div>
        
        <div class="eventCreation">
            <label for="Category_ID">Category</label>
            <select name="Category_ID">
            <option value="0">Choose</option>
            <option value="1">Over 18 Only</option>
            <option value="2">Family Event</option>
            <option value="3">ONLY BEER</option>
            <option value="4">Beer and Food</option>
            </select>
        </div>
        
        <div class="eventCreation">
            <label for="Supplier_ID">Supplier</label>
            <select name="Supplier_ID">
            <option value="0">Choose</option>
            <option value="1">Brewdog</option>
            <option value="2">Camden Town Brewery</option>
            <option value="3">Chinz</option>
            </select>
        </div>

	<br></br>

	<div class="eventCreation">
	<input type="submit" name="submit" value="Submit" >
        </div>
        
        </form>
        
        </div>
        
            <div class="eventSupplier">
            <form method="post" action="/Controller/PageSupplierValidation.php">
            <h3>New Supplier?</h4>
            
            <p>Make sure to register here</p>  
            
            <div>
                <input type="text" placeholder="Company Name" name="Name"/>
            </div>
            
            <div>
                <select name="Type">
                <option value="0">Type</option>
                <option value="1">Specialised in ales and stouts. </option>
                <option value="2">Specialised in pale ales.</option>
                </select>
            </div>
            
            <div>
                <input type="text" placeholder="Email" name="Email"/>
            </div>

            <div>
                <input type="number" placeholder="Phone Number" name="Phone_Number"/>
            </div>
 
            <div>
                <input type="text" placeholder="Address" name="Address"/>
            </div>            
            
            <div>
                <input type="text" placeholder="Postcode" name="Postcode"/>
            </div>
            <br></br>
	<div>
	<input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg">
        </div>
            
            <p>It'll take a little while for us to evaluate the supplier and get back to you, please add them under the control section.</p>
            <p>Thank you</p>
            </form>

            
            </div>

            
        
        </div>
        

        
    </body>
</html>