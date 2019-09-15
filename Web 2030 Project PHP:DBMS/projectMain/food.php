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
    <script type="text/javascript" src="mainJs.js"> </script>
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
                <li><a class="currentPage">Food&Drinks</a></li>
                <li><a href="./good.php" class="notCurrent">Souvenir</a></li>                    
                <li><a href="./map.php" class="notCurrent">Map</a></li>
                <li><a href="./about.php" class="notCurrent">About Us</a></li>
            </ul>
        </nav>
    </div>    
    <div class="mainContent">
    <form action="menuData.php" method="POST">
        <table class="foodMenu">
            <h2 class="pageTitle">Foods at Shang Hai Hotel</h2>
            <tr>
                <td>
                    <img src="../projectImages/foods/dimsum.jpeg" alt="dimsum" class="foodImg">
                    <p><?php  echo $dimsum->name;?></p>
                    <p>$<?php  echo $dimsum->price;?></p>
                    <input type ="checkbox" id = "dimsum" class ="check" name="foodItem[]" value="dimsum"/>
                </td>
                <td>
                    <img src="../projectImages/foods/chowmein.jpeg" alt="chowMein" class="foodImg">
                    <p><?php echo $chowmein->name;?></p>
                    <p>$<?php echo $chowmein->price;?></p>
                    <input type="checkbox" id = "chowmein" class ="check" name="foodItem[]" value="chowmein"/>
                </td>
                <td>
                    <img src="../projectImages/foods/friedRice.jpeg" alt="friedRice" class="foodImg">
                    <p><?php echo $friedRice->name;?></p>
                    <p>$<?php echo $friedRice->price;?></p>
                    <input type="checkbox" id = "friedRice" class ="check" name="foodItem[]" value="friedRice"/>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="../projectImages/foods/noodles.jpeg" alt="noodles" class="foodImg">
                    <p><?php echo $noodles->name;?></p>
                    <p>$<?php echo $noodles->price;?></p>
                    <input type="checkbox" id = "noodles" class ="check" name="foodItem[]" value="noodles"/>
                </td>
                <td>
                    <img src="../projectImages/foods/sweetPork.jpeg" alt="sweetPork" class="foodImg">
                    <p><?php echo $sweetPork->name;?></p>
                    <p>$<?php echo $sweetPork->price;?></p>
                    <input type="checkbox" id = "sweetPork" class ="check" name="foodItem[]" value="sweetPork"/>
                </td>
                <td>
                    <img src="../projectImages/foods/thickNoodles.jpeg" alt="thickNoodles" class="foodImg">
                    <p><?php echo $thickNoodles->name;?></p>
                    <p>$<?php echo $thickNoodles->price;?></p>
                    <input type="checkbox" id = "thickNoodles" class ="check" name="foodItem[]" value="thickNoodles"/>
                </td> 
            </tr>
            <tr>
                <td>
                    <img src="../projectImages/foods/duck.jpeg" alt="duck" class="foodImg">
                    <p><?php echo $duck->name;?></p>
                    <p>$<?php echo $duck->price;?></p>
                    <input type="checkbox" id = "duck" class ="check" name="foodItem[]" value="duck"/>
                </td>
                <td>
                    <img src="../projectImages/foods/cookie.jpeg" alt="cookie" class="foodImg" >
                    <p><?php echo $cookie->name;?></p>
                    <p>$<?php echo $cookie->price;?></p>
                    <input type="checkbox" id = "cookie" class ="check" name="foodItem[]" value="cookie"/>
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