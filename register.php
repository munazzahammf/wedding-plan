<?php
//include_once 'includes/config.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'database.php';
require_once 'controllers/UserController.php';

$controller = new UserController($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpass = $_POST['cpassword'];

    $result = $controller->registerUser($firstname, $lastname, $username, $password, $email);

    echo "$result";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--customer css file link-->
    <link rel="stylesheet" href="assets/css/register.css">
</head>

<body>

    <?php
    //   if(isset($message)){
    //      foreach($message as $message){
    //         echo '
    //         <div class="message">
    //            <span>'.$message.'</span>
    //            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
    //         </div>
    //         ';
    //      }
    //   }
    ?>

    
     <div class="hero">
            <div class="form-box">
                  <div class="button-box">
                        <div id="btn"></div>
                        <button type="button" class="toggle-btn" onclick="login()"> Log In </button>
                        <button type="button" class="toggle-btn" onclick="register()">Register</button>
                  </div>
                  <div class="social-icon">
                      <i class="fa-brands fa-facebook"></i>
                      <i class="fa-brands fa-instagram"></i>
                      <i class="fa-brands fa-tiktok"></i>
                  </div>


                  <form id="login" action="" class="input-group">
                    <input type="email" required placeholder="enter your email" class="input-field" name="email">
                    <input type="password" required placeholder="enter your password" class="input-field" name="password">
                    <div class="pswd"><input type="checkbox" class="check-box"> <span>Remember Password</span></div>
                    <input type="submit" value="login Now" class="btn" name="submit">
                  </form>

            
                  <form id="register" class="input-group" action="" method="post" enctype="multipart/form-data">
                        <input type="text" required placeholder="enter your firstname" class="input-field" name="firstname">
                        <input type="text" required placeholder="enter your lastname" class="input-field" name="lastname">
                        <input type="email" required placeholder="enter your email" class="input-field" name="email">
                        <input type="tel" required placeholder="enter your mobile number" class="input-field" id="tel" name="contact_no">
                        <textarea name="address" required placeholder="enter your address" class="input-field"></textarea>
                        <input type="text" required placeholder="enter your username" class="input-field" name="username">
                        <input type="password" required placeholder="confirm your password" class="input-field" name="cpassword">
                        <p>Already have an account? <a href="login.php">Login Now</a> </p>
                        <input type="submit" value="Register Now" class="btn" name="submit">
                    </form>


            </div>
      </div>

      <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register() {
                  x.style.left = "-400px";
                  y.style.left = "50px";
                  z.style.left = "110px";
            }

            function login() {
                  x.style.left = "50px";
                  y.style.left = "450px";
                  z.style.left = "0px";
            }
      </script>
      
</body>

</html>