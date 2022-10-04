<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $userName=$_POST['signin-username'];
    $email=$_POST['signin-email'];
    $pwd=$_POST['signin-pwd'];
    $repeatPwd=$_POST['signin-confirm-pwd'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $userName, $email, $pwd, $repeatPwd) !== false){
        header("location: ../log-in.php?error=signupemptyinput");
        exit();
    }

    if(invalidUid($userName) !== false){
        header("location: ../log-in.php?error=signupinvaliduid");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../log-in.php?error=signupinvalidemail");
        exit();
    }

    if(invalidPwd($pwd)!== false){
        header("location: ../log-in.php?error=signupinvalidpwd");
        exit();
    }

    if(pwdMatch($pwd, $repeatPwd) !== false){
        header("location: ../log-in.php?error=signuppwddontmatch");
        exit();
    }
    if(uidExist($conn, $userName,$email) !== false){
        header("location: ../log-in.php?error=signupusernametaken");
        exit();
    }

    createUser($conn, $name, $userName, $email, $pwd);
}
else{
    header("location: ../log-in.php?error=signup");
    exit();
}