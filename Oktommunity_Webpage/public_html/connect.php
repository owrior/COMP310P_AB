<?php
    
        function connect(){
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = 'root';
                $dbname = 'Oktober';
                $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                if (!$connection) {
                    die('Error connecting to MySQL server.'.mysql_error());
                }
                else {
                    return $connection;
                }
        }    
 
        function disconnect($connection) {
            mysqli_close($connection);
        }
?>       


