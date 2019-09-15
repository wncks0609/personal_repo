<?php
    session_start();

    if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
    {
        
        $db_host = "localhost";
        $db_user = "CPSC2030";
        $db_password = "CPSC2030";
        $db_name = "userData";

        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
        
        $floor = $_POST['floorChoose'];
        $room = $_POST['roomChoose'];
        $price = $_POST['totalPrice'];
        $username = $_SESSION['username'];

        $sql = "INSERT INTO room (username, floorBooked, roomBooked, price) VALUES ('$username','$floor','$room', '$price')";
        if($conn->query($sql) === true) {
            echo "Reservation has been made. Thank you.";
        }
        else {
            echo "The Room has been booked already.";
        }
        $conn->close();
    }
    else {
        echo "Please log in to make a reservation at Shang Hai hotel. Thank you.";
    }
    ?>