<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
}   ini_set('display_errors', 1);
    require('connect.php');
    $connection = connect();
    session_start();
    
        
        $eventID_entered =testData($POST["eventID_entered"]) ;
       
        
        $event_retrieval = "SELECT Event_Name, Event_Capacity , Description, TicketSaleEnd_Date , Location.Address, Location.Postcode
                FROM Event LEFT JOIN Location ON Event.Location_ID WHERE Event_ID ='$eventID_entered'";
        $result = mysqli_query($connection,$event_retrieval_query) ->setFetchMode(PDO::FETCH_ASSOC); 
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
        }       
        echo "</table>";
?>;