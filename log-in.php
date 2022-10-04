<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="shortcut icon" href="./img/pict/icon.png">
	<script src="https://kit.fontawesome.com/0ae0a4495c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/log-in.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="./includes/login.inc.php" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <?php
            if(isset($_GET['error'])){
              if($_GET['error']=="emptyinput"){
                echo '<div class="error">Be sure to fill all the fields</div>';
              }
              if($_GET['error']=="wrongname"){
                echo '<div class="error">Wrong email or username</div>';
              }
              if($_GET['error']=="wrongpass"){
                echo '<div class="error">Wrong password</div>';
              }
            }
            ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="login-email" placeholder="Username/Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="login-pwd" placeholder="Password" />
            </div>
            <input type="submit" name="submit" value="Login" class="btn solid" />
          </form>


          <form action="./includes/signup.inc.php" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <?php
            if(isset($_GET['error'])){
              if($_GET['error']=="signupemptyinput"){
                echo '<div class="error">Be sure to fill all the fields</div>';
              }
              if($_GET['error']=="signupfstmtfailed"){
                echo '<div class="error">Something went wrong.Try again</div>';
              }
              if($_GET['error']=="signupinvaliduid"){
                echo '<div class="error">For username use letter and number only</div>';
              }
              if($_GET['error']=="signupinvalidemail"){
                echo '<div class="error">Invalid email address</div>';
              }
              if($_GET['error']=="signupinvalidpwd"){
                echo '<div class="error">your password should have at least 8 characters, one capital letter and one number </div>';
              }
              if($_GET['error']=="signuppwddontmatch"){
                echo '<div class="error">Wrong password confirmation</div>';
              }
              if($_GET['error']=="signupusernametaken"){
                echo '<div class="error">This account is already registered</div>';
              }
              if($_GET['error']=="signupnone"){
                echo '<div class="done">You have been registered</div>';
              }
            }
            ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Name" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="signin-username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="signin-email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="signin-pwd" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fa-solid fa-check"></i>
              <input type="password" name="signin-confirm-pwd" placeholder="Confirm Password" />
            </div>

            
            
            
            <input type="submit" name="submit" class="btn" value="Sign up" />
              
            
            
          </form>
        </div> 
      </div>

      <div class="back">
        <a href="index.php"><i class="fa-solid fa-3x fa-angle-right"></i></a>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container");

      sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
      });

      sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
      });

      

      

      <?php
              if(isset($_GET['error'])){
                if(substr($_GET['error'],0,5) == 'signu'){
                  
                  echo "
                  
                  var all = document.getElementsByTagName('*');
                  for(var i =0; i<all.length;i++){
                    element = all[i];
                    element.classList.add('notransition');
                  }
                  container.classList.add('sign-up-mode');
                  var box= document.querySelector('.container')[0];
                  var boxBefore = window.getComputedStyle(box, '::before');
                  boxBefore.transition=none;
                  ";
                }
              }
            ?>

    </script>
    <!-- <script src="./js/log-in.js"></script> -->
  </body>
</html>