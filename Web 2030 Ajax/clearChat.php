<?php
    $type=$_POST['type'];

    if($type == "delete")
    {

    $db_host = "localhost";
    $db_user = "CPSC2030";
    $db_password = "CPSC2030";
    $db_name = "chat";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    $sql = "TRUNCATE table chatInfo";
    $chatData = $conn->query($sql);

    while($row= $chatData->fetch_assoc())
    {
        echo $row['userName'] . " : ".$row['messages'] . "<br>";
    }

    }
?>  