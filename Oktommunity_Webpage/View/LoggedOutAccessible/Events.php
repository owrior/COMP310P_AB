<?php session_start();
      $_SESSION['email'] = 'User';
?>
<html>
    <head>
        <title>Event's</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body style="background-image:url('https://ak8.picdn.net/shutterstock/videos/16944148/thumb/1.jpg?i10c=img.resize(height:160)')">
        <?php include('logged_out_header.php')?>
         <div class='events_page_main'>
            <h1 class="events_page_main">WHAT'S ON?</h1>
            <div class='events_page_search'>
                <form class='events_page_main' method = 'post' action='/Controller/events_search.php'>
                    <input type = 'text' name='event_name' value='' placeholder="Event Name">
                    <input type = 'text' name='category' value='' placeholder="Event Category">
                    <input type='date' name='event_date_from' value='2017-01-01' placeholder='Date From'>
                    <input type='date' name='event_date_to' value=NULL placeholder="Date To">
                    <button>Search</button>
                </form>
            </div>
            <div class='events_page_results'>
                <table class='events_page_main' >
                    <tr>
                        <td><label>Number:</label></td>
                        <td><label>Event ID :</label></td>
                        <td><label>Event :</label></td>
                        <td><label>Location ID :</label></td>
                        <td><label>Event Date :</label></td>
                        <td><label>Ticket Sale final release :</label></td>
                        <td><label>Capacity :</label></td>
                        <td><label>Category :</label></td>
                    </tr>
                    <?php include('../Controller/event_search_display.php');?>
                    
                </table>
            </div>
         </div>
    </body>
</html>

