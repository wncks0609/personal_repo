<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>上海客棧 ShangHai Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet/less" type="text/css" media="screen" href="mainStyle.less" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <h1 id="name">上海客棧</h1>
        <hr class="division">
    </div>

    <div class="menu">
        <nav>
            <ul>
                <li><a href="./index.php" class="notCurrent">Home</a></li>
                <li><a href="./reservation.php" class="notCurrent">Reservation</a></li>
                <li><a href="./food.php" class="notCurrent">Food&Drinks</a></li>
                <li><a href="./good.php" class="notCurrent">Souvenir</a></li>
                <li><a href="./map.php" class="notCurrent">Map</a></li>
                <li><a href="./about.php" class="notCurrent">About Us</a></li>
            </ul>

        </nav>
    </div>
    
    <div class="mainContent">
        <?php
            $db_host = "localhost";
            $db_user = "CPSC2030";
            $db_password = "CPSC2030";
            $db_name = "userData";

            $userName = $_SESSION['username'];
            $totalPrice = 0;
    
            $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
        ?>
        <h2 class="pageTitle">User Information</h2>
            <?php
                $userQuery = "SELECT * FROM users WHERE username='$userName'";
                if (!($result = $conn->query($userQuery))) {
                    echo "SELECT failed: (" . $conn->errno . ") " . $conn->error;
                }
                $userResult = $result->fetch_assoc();
                echo "<div class='information'><span>User Name : </span> " . $userResult['username'] . "</div>"; 
            ?>
        <h2 class="pageTitle">Rooms reserved</h2>
            <?php
                $roomQuery = "SELECT * FROM room WHERE username='$userName'";
                if (!($result = $conn->query($roomQuery))) {
                    echo "SELECT failed: (" . $conn->errno . ") " . $conn->error;
                }
                while($userRoom = $result->fetch_assoc())
                {
                    $totalPrice += $userRoom['price'];
                    echo "<div class='information'><span>Floor : </span> " . $userRoom['floorBooked'] . "</div>";
                    echo "<div class='information'><span>Room Number : </span> " . $userRoom['roomBooked'] . "</div>";
                    echo "<div class='information'><span>Price : </span> " . "$" . $userRoom['price']. " CAD"  . "</div>";
                }
            ?>
        <h2 class="pageTitle">Food ordered</h2>
            <?php
                $foodmQuery = "SELECT * FROM foodOrder WHERE username='$userName'";
                if (!($result = $conn->query($foodmQuery))) {
                    echo "SELECT failed: (" . $conn->errno . ") " . $conn->error;
                }
                while($userFood = $result->fetch_assoc())
                {
                    $totalPrice += $userFood['foodPrice'];
                    echo "<div class='information'><span>Food Name : </span> " . $userFood['foodName'] . "</div>";
                    echo "<div class='information'><span>Food Price : </span> " . "$"  . $userFood['foodPrice']. " CAD"  . "</div>";
                }
            ?>
        <h2 class="pageTitle">Souvenirs ordered</h2>
            <?php
                $goodsmQuery = "SELECT * FROM goodsOrder WHERE username='$userName'";
                if (!($result = $conn->query($goodsmQuery))) {
                    echo "SELECT failed: (" . $conn->errno . ") " . $conn->error;
                }
                while($userGoods = $result->fetch_assoc())
                {
                    $totalPrice += $userGoods['goodsPrice'];
                    echo "<div class='information'><span>Souvenir Name : </span> " . $userGoods['goodsName'] . "</div>";
                    echo "<div class='information'><span>Souvenir Price : </span> " . "$" . $userGoods['goodsPrice']. " CAD"  . "</div>";
                }
            ?>
        <h2 class="pageTitle">Total Price</h2>
            <?php
                    echo "<div class='information'><span>Total Price : </span> " . "$" . $totalPrice . " CAD" . "</div>";
            ?>
    </div>

        <footer>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>

            <div class="contact">
                <div>Phone : 604-1534-1532</div>
                <div>Email : ShangHaiHT@gmail.com</div>
            </div>
        <?php

        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo " <div class='guest'>
            <a href='./logIn.php' class='logIn'>Log In</a>
            <div>/</div>
            <a href='./signUp.php' class='newSign'>Sign Up for New Guest</a>
             </div>";
        } else {
            echo " <div class='logOut'>
            <a href='./logOut.php' class='outlink'>Log Out</a>
            </div>";
            echo " <div class='logOut'>
            <a href='./myPage.php' class='outlink'>My Page</a>
            </div>";
        }  
        ?>
        <div class="copy">&copy;copyrights reserved</div>
    </footer>

</body>
</html>