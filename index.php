<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="shortcut icon" href="./img/pict/icon.png">
</head>
<body>
    <!-- start header  -->
    <div class="header">
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn"><span class="burger-icon"></span></label>
        <nav>
            <div class="logo"><h2>Rest-to-run</h2></div>
            <ul>
                <li><a href="menu.html">Menu</a></li> 
                <li><a href="info.html">Info</a></li> 
                <li><a href="contactus.php">Contact-us</a></li> 
            </ul>
            <?php
                if(isset($_SESSION['useruid'])){
                    echo '<div class="log-in"><a  style="background: #f56363dc" href="./includes/log-out.inc.php">Log out</a></div>';
                }
                else{
                    echo '<div class="log-in"><a href="log-in.php">Log in</a></div>';
                }
            ?>
            
        </nav>
    </div>
    <!-- end header  -->

    <!-- start section slider-->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="img-holder img1 current">
                <div class="text">

                <?php
                if(isset($_SESSION['useruid'])){
                    echo '<h1>Hello and Welcome ' . $_SESSION['useruid'] . ' to our Resturant</h1>';
                }
                else{
                    echo '<h1>Hello and Welcome to our Resturant</h1>';
                }
            ?>

                    <p>Hope you like our food and services</p>
                </div>
            </div>
            
        </div>
        <div class="mySlides fade">
            <div class="img-holder img2">
                <div class="text">
                    <a href="menu.html"><h1>Menu</h1></a>
                    <p>check our menu to see the different food we offer and order whatever you like</p>
                </div>
            </div>
            
        </div>
        <div class="mySlides fade">
            <div class="img-holder img3">
                <div class="text">
                    <a href="info.html"><h1>Info</h1></a>
                    <p>if you're interested in our restaurant please check the info and about us page</p>
                </div>
            </div>
            
        </div>
        <div class="mySlides fade">
            <div class="img-holder img4">
                <div class="text">
                    <a href="contactus.html"><h1>Contact-us</h1></a>
                    <p>for any question and inquiry, check the contact-us page</p>
                </div>
            </div>
            
        </div>
    </div>
    <!-- end section slider-->
    <script src="./js/home.js"></script>
</body>
</html>