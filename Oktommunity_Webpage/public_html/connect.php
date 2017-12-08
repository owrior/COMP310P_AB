<?php 
        function connect($type=bool){
            if ($type == true) {
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = 'root';
                $dbname = 'Oktober';
                $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to MySQL server.'.mysql_error());
                return $connection;
            }
            else {
                mysqli_close($connection);
            }
        }
?>        


