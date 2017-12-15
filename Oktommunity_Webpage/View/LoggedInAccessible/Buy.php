<?php include $_SERVER['DOCUMENT_ROOT'].'/Controller/login_check.php'?>
<html>
    <head>
        <title>Event's</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body>
        <?php include('logged_in_navigation.php');?>
        <div class="main">
            <?php include('../Controller/ticket_info.php');?>
            <form method="POST"  action="ticket_purchase.php">
                <select name = "ticket_type_ID">
                    <option value="1">Adult Single</option>
                    <option value="2">Child Single</option>
                    <option value="3">Family Ticket</option>
                </select>
                <button value="<?php echo $event_ID;?>">BUY</button>
            </form>
        </div>
