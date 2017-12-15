<?php include $_SERVER['DOCUMENT_ROOT'].'/Controller/login_check.php'?>
<html>
    <head>
        <title>Tokens</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body style="background-image: url('/Images/token.JPG') ">
        <?php include('logged_in_navigation.php');?>
        <div class='tokens_page_main'>
            <h3 class="tokens_page_main">TOKENS! TOKENS! TOKENS!</h3>
            <div class="token_form">
                <form method="post" action="/Controller/BuyTokens.php">
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
                        <?php if (!$_SESSION['error_message_1']) {
                              }
                              else {
                               echo $_SESSION['error_message_1'];   
                              }?> 
                        </br>
                        <label>Which type would you like?</label>                    
                        <select name ="chosen_type">
                            <option value="1">Alcoholic</option>
                        </select>                         
                        </br>
                        <?php if (!$_SESSION['error_message_2']) {
                              }
                              else {
                               echo $_SESSION['error_message_2'];   
                              }?>
                        </br>
                        <input type="submit" value="BUY">
                        </br>
                </form>
            </div>
        </div>
        
    </body>
</html>
