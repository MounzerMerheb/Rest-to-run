<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sent</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0ae0a4495c.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="./img/pict/icon.png">

    <style>
        *{
            box-sizing: border-box;
        }


        body{
            margin: 0;
            padding: 0;
            background-color: #0b1315;
            font-family:'Maven Pro', sans-serif;
            overflow: hidden;

        }

        .container{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a{
            text-decoration: none;
            cursor: pointer;
            
            color: #cbd1d1;
        }
        i{
            color: #12a300;
        }


        .sent-cart{
            color: #cbd1d1;
            background-color: #040809;
            padding: 30px;
            height: fit-content;
            width: fit-content;
            display: flex;
            align-items: center;
            flex-direction: column;
            border-radius: 12px;
        }

        h2{
            color: #9e804b;
        }
        h3{
            margin: 0;
            
        }


    </style>

</head>
<body>
    <?php
        $to = "mounzer.merheb.002@gmail.com";
        $subject = "resturant review ";
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $text=$_POST['text'];
        $message='Name: ' . $firstName .' ' . $lastName . "\n\n" . "from: " . $email . "\n\n" . $text;
        $header = "From: " .  $email ;
        $mailSent = mail($to,$subject,$message,$header);

    ?>

    <div class="container">
    <div class="sent-cart">
        
        <?php
        if($mailSent == true){
            echo '
            <i class="fa-solid fa-3x fa-envelope-circle-check"></i>
            <h2 class="mail-sent">Mail Sent</h2>
            ';
        }
        else{
            echo '<h2 class="mail-sent" style="color:red;">Mail Not Sent</h2>';
        }
        ?>
        <div class="return"><h3><a href="../contactus.php #contact-us">Go back</a></h3></div>
    </div>
    </div>

</body>
</html>
