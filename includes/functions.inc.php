<?php
function emptyInputSignup($name, $userName, $email, $pwd, $repeatPwd){
    $result=true;
    if(empty($name) || empty($userName) || empty($email) || empty($pwd) || empty($repeatPwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidUid($userName){
    $result=true;
    if(!preg_match("/^[a-zA-Z0-9]*$/" ,$userName)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result=true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidPwd($pwd){
    $result=true;
    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    if(!$uppercase || !$lowercase || !$number || strlen($pwd) < 8){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd, $repeatPwd){
    $result=true;
    if($pwd!==$repeatPwd){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function uidExist($conn, $userName, $email){
    $result=true;
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql) ){
        header("location: ../log-in.php?error=signupfstmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $userName, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $userName, $email, $pwd){
    $result=true;
    $sql = "INSERT INTO users(usersName, usersEmail, usersUid, usersPwd) VALUE(?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql) ){
        header("location: ../log-in.php?error=signupstmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $userName,  $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../log-in.php?error=signupnone");
        exit();
}

function emptyInputLogin($userName, $pwd){
    $result=true;
    if(empty($userName) || empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function loginUser($conn, $userName, $pwd){
    $uidExist = uidExist($conn,$userName,$userName);

    if($uidExist === false){
        header("location: ../log-in.php?error=wrongname");
        exit();
    }


    $hashedPwd = $uidExist['usersPwd'];
    $checkPwd = password_verify($pwd, $hashedPwd );

    if($checkPwd === false){
        header("location: ../log-in.php?error=wrongpass");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExist['usersId'];
        $_SESSION["useruid"] = $uidExist['usersUid'];
        header("location: ../index.php");
        exit();
    }
}