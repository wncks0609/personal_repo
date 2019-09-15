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
        $orderedItems = $_POST['foodItem'];

        foreach($orderedItems as $items)
        {
            $food = $$items->name;
            $price = $$items->price;

            $sql = "INSERT INTO foodOrder (username, foodName, foodPrice) VALUES ('$username', '$food', '$price')";
            $conn->query($sql); 
        }
        echo "<script type='text/javascript'>alert('Your order has been received. It would take around 15~25 minute to your room. Thank you'); window.location.href = 'food.php'</script>";


        $conn->close();
    }
    else {
        echo "<script type='text/javascript'>alert('Please log in to make an order at Shang Hai hotel. Thank you.'); window.location.href = 'logIn.php';
        </script>";
    }


?>