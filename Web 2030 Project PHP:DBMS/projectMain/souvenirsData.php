<?php

    include "menu.php";

    session_start();

    if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
    {
        
        $db_host = "localhost";
        $db_user = "CPSC2030";
        $db_password = "CPSC2030";
        $db_name = "userData";

        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

        $username = $_SESSION['username'];
        $orderedItems = $_POST['souvenirs'];

        foreach($orderedItems as $items)
        {
            $good = $$items->name;
            $price = $$items->price;

            $sql = "INSERT INTO goodsOrder (username, goodsName, goodsPrice) VALUES ('$username', '$good', '$price')";
            $conn->query($sql); 
        }
        echo "<script type='text/javascript'>alert('Your order has been received. It will be ready at the Desk. Thank you'); window.location.href = 'good.php'</script>";


        $conn->close();
    }
    else {
        echo "<script type='text/javascript'>alert('Please log in to make an order at Shang Hai hotel. Thank you.'); window.location.href = 'logIn.php';
        </script>";
    }


?>