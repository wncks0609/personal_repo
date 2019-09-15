<?php
    $type=$_POST['type'];

    
    if($type == "recent") 
    {

        $db_host = "localhost";
        $db_user = "CPSC2030";
        $db_password = "CPSC2030";
        $db_name = "chat";

        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
        
        $sql = "SELECT * FROM chatInfo WHERE time > UNIX_TIMESTAMP(NOW() - INTERVAL 1 HOUR ) LIMIT 10 ";
        $chatData = $conn->query($sql);

        while($row= $chatData->fetch_assoc())
        {
            echo "<span class='names'>" . $row['userName'] ."</span>" . " : " .$row['messages'] ."<span class='time'>" . $row['time'] ."</span> " . "<br>";
        }

    }
?>