<?php
    session_start();
    include "menu.php";
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
                <li><a class="currentPage">Souvenir</a></li>                    
                <li><a href="./map.php" class="notCurrent">Map</a></li>
                <li><a href="./about.php" class="notCurrent">About Us</a></li>
            </ul>
        </nav>
    </div>    

    <div class="mainContent">
    <form action="souvenirsData.php" method="POST">
        <table class="foodMenu">
            <h2 class="pageTitle">Souvenirs at Shang Hai Hotel</h2>
            <tr>
                <td>
                    <img src="../projectImages/souvenirs/bottles.jpeg" alt="bottles" class="foodImg">
                    <p><?php  echo $bottles->name;?></p>
                    <p>$<?php  echo $bottles->price;?></p>
                    <input type ="checkbox" id = "bottles" class ="check" name="souvenirs[]" value="bottles"/>
                </td>
                <td>
                    <img src="../projectImages/souvenirs/dolls.jpeg" alt="dolls" class="foodImg">
                    <p><?php echo $dolls->name;?></p>
                    <p>$<?php echo $dolls->price;?></p>
                    <input type="checkbox" id = "dolls" class ="check" name="souvenirs[]" value="dolls"/>
                </td>
                <td>
                    <img src="../projectImages/souvenirs/drawing.jpeg" alt="drawing" class="foodImg">
                    <p><?php echo $drawing->name;?></p>
                    <p>$<?php echo $drawing->price;?></p>
                    <input type="checkbox" id = "drawing" class ="check" name="souvenirs[]" value="drawing"/>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="../projectImages/souvenirs/dreamCatcher.jpeg" alt="dreamCatcher" class="foodImg">
                    <p><?php echo $dreamCatcher->name;?></p>
                    <p>$<?php echo $dreamCatcher->price;?></p>
                    <input type="checkbox" id = "dreamCatcher" class ="check" name="souvenirs[]" value="dreamCatcher"/>
                </td>
                <td>
                    <img src="../projectImages/souvenirs/fortune.jpeg" alt="fortune" class="foodImg">
                    <p><?php echo $fortune->name;?></p>
                    <p>$<?php echo $fortune->price;?></p>
                    <input type="checkbox" id = "fortune" class ="check" name="souvenirs[]" value="fortune"/>
                </td>
                <td>
                    <img src="../projectImages/souvenirs/teaSet.jpeg" alt="teaSet" class="foodImg">
                    <p><?php echo $teaSet->name;?></p>
                    <p>$<?php echo $teaSet->price;?></p>
                    <input type="checkbox" id = "teaSet" class ="check" name="souvenirs[]" value="teaSet"/>
                </td> 
            </tr>
            <tr>
                <td>
                    <img src="../projectImages/souvenirs/giftCard.jpeg" alt="giftCard" class="foodImg">
                    <p><?php echo $giftCard->name;?></p>
                    <p>$<?php echo $giftCard->price;?></p>
                    <input type="checkbox" id = "giftCard" class ="check" name="souvenirs[]" value="giftCard"/>
                </td>
            </tr>
        </table>
        <input id="order" type="submit" value="Order"/>
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

    
</body>
</html>