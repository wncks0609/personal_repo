<?php
    $name = $_POST['userName'];
    $chat = $_POST['message'];

    $db_host = "localhost";
    $db_user = "CPSC2030";
    $db_password = "CPSC2030";
    $db_name = "chat";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    if($name && $chat){
        $sql = "INSERT into chatInfo (userName, messages) VALUES ('$name','$chat')";
        $conn->query($sql);
    }
    
?>  