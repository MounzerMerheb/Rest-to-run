<?php

if(isset($_POST['submit'])){
    $userName = $_POST['login-email'];
    $pwd = $_POST['login-pwd'];


    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($userName, $pwd) !== false){
        header("location: ../log-in.php?error=emptyinput");
        exit();
    }


    loginUser($conn, $userName, $pwd);
}

else{
    header("location: ../log-in.php");
}