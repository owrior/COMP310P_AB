<?php
    ini_set('display', 1);
    require 'connect.php';
    $connection = connect();
    $filter = mysqli_query($connection, "SELECT TokenType_ID, Type FROM TokenType");
    while ($row = mysqli_fetch_array($filter)) {
        echo ?><option value="<?php.$row['TokenType_ID'].?>"><?php.$row['Type'].?></option>   
    }
    disconnect($connection);    
    include '../View/LoggedInAccessible/Tokens.php';
?>