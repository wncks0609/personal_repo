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
                <li><a class="currentPage">About Us</a></li>
            </ul>
        </nav>
    </div>    
    <div class="mainContent">
        <h2 class="pageTitle">About Shang Hai Hotel</h2>
        <p class="information">Shang Hai hotel was built in 1473 at Shang Hai by Zeng Jing and Jiang Ah-sheng</p>
        <h2 class="pageTitle">About the project</h2>
        <p class="information">This web-site was built in purpose of CPSC 2030 Web Development project. 
            <br>Started on Sep 24th of 2018 and finished on Nov 30th of 2018
            <br><br> Author : Joochan Daniel Son 
            <br> Student nuber : 100258631
            <br> Instructor : Kim Lam
            <br> Course Name : CPSC 2030 Web Development 2</p>
        <h2 class="pageTitle">Technical List</h2>
        <p class="information">You must use a git repository your project : Used!
        <br><br>SQL setup scripts : DB-table.sql
        <br><br>Contains a logon system, using SQL as a back end : logIn.php , signUp.php, config.php, logOut.php
        <br><br>Contains at least 6 pages not related to the logon, but controlled by the logon : most of pages will require log in to protected
        <br><br>Use at least 3 Twig templates for your pages : sorry..
        <br><br>Use jQuery to implement at least 4 non-trivial features : mainJs.js -> slides, generating prices for room ,changing selector
        <br><br>Contains at least 1 page which using AJAX that pulls data from a SQL back end : reservation.php , and reservationData.php
        <br><br>A Small PHP library to generate common components of your page : no common components
        <br><br>Each page must contain navigation to the whole site and a footer : Provided
        <br><br>You site will use LESS style sheets : Used
        <br><br>The page must be responsive, that is it must look good at various resolutions : Responsive, and looks good to me. </p>
        <h2 class="pageTitle">Reference</h2>
        <p class="information">Log In session :<a href:"https://www.tutorialspoint.com/php/php_mysql_login.htm">https://www.tutorialspoint.com/php/php_mysql_login.htm</a>
        <br>Others : <a href="https://www.w3schools.com/">W3schools.com</a></p>
        
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