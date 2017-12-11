<?php
    
    function connect(){
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'root';
            $dbname = 'oktober';
            $dbport = '8889';
            $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);
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