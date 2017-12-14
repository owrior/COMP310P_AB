<?php
    session_start();
    ini_set('display',1);
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbname = 'Oktoberfest';
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$connection) {
        die('Error connecting to MySQL server.'.mysql_error());
    }
    else {
        return $connection;
    }
    $count = 1;
    $filter = mysqli_query($connection, "SELECT TokenType_ID, Type FROM TokenType");
    while ($row = mysqli_fetch_assoc($filter)) {
        $TokenType_ID = $row[TokenType_ID];
        $Type = $row[Type];
        ?>

        <option value = "<?php echo $TokenType_ID;?>">
            <?php echo $Type; ?>
        </option>  
    <?php $count++;}
    disconnect($connection); 
    include '../View/LoggedInAccessible/Tokens.php';
    ?>