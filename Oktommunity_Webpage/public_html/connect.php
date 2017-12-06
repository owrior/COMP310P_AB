<?php 
    function connect(){
        $dbhost = 'localhost';
        $dbuser = 'username';
        $dbpass = 'password';
        $dbname = 'Oktober';
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to MySQL server.'.mysql_error());
        return $connection;
        }
        


