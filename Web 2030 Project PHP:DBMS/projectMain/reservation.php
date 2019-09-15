<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reservation At ShangHai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet/less" type="text/css" media="screen" href="mainStyle.less" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
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
                <li><a class="currentPage">Reservation</a></li>
                <li><a href="./food.php" class="notCurrent">Food&Drinks</a></li>
                <li><a href="./good.php" class="notCurrent">Souvenir</a></li>                    
                <li><a href="./map.php" class="notCurrent">Map</a></li>
                <li><a href="./about.php" class="notCurrent">About Us</a></li>
            </ul>
        </nav>
    </div>    

    <div class="mainContent">
        
        <figure>
            <img class="floor" src="../projectImages/2FMap.jpeg"/>          
            <img class="floor" src="../projectImages/4FMap.jpeg" style="display : none"/>
            <img class="floor" src="../projectImages/3FMap.jpeg" style="display : none"/>  
        </figure>
        
        <button id="leftReserve" onclick="plusDivs(-1)">&#10094;</button>
        <button id="rightReserve" onclick="plusDivs(1)">&#10095;</button>
        
        <form class="reservation">
            <select id="floorChoose" class="option" onchange="changeRoomNumber(this)">
                <option>Choose Floor</option>
                <option value="2F">2F</option>
                <option value="3F">3F</option>
                <option value="4F">4F</option>
            </select>

            <select id="roomChoose"class="option" onchange="setPrice(this)">
                <option>Choose a room</option>
            </select>
            <div class="roomPrice"></div>
            
            <input id="reserve" type="button" value="Reserve"/>
        </form>
        
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
    <script type="text/javascript" src="mainJs.js"></script>
</body>
</html>