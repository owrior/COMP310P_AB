<?php include $_SERVER['DOCUMENT_ROOT'].'/Controller/login_check.php';
session_start()?>
<html>
    <head>
        <title>Event's</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body style="background-image:url('https://ak8.picdn.net/shutterstock/videos/16944148/thumb/1.jpg?i10c=img.resize(height:160)')">
        <?php include('logged_in_navigation.php');?>
        <div class="buy_page">
            <?php include('../Controller/review_info_query.php');?>
            <form method="POST"  action="review_input.php">
                <select name = "review_score">
                    <option value="3">Zero Star</option>
                    <option value="1">One Star</option>
                    <option value="2">Two Star</option>
                    <option value="3">Three Star</option>
                    <option value="3">Four Star</option>
                    <option value="3">Five Star</option>
                </select>
                <button value="<?php echo $event_ID;?>">Review</button>
            </form>
        </div>

