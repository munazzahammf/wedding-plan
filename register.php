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

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                  <div class="button-box d-flex">
                        <!-- <div id="btn"></div> -->
                        <button id="login-btn" style="flex-grow: 1;" type="button" class="toggle-btn" onclick="login()"> Log In </button>
                        <button id="register-btn" style="flex-grow: 1;" type="button" class="toggle-btn" onclick="register()">Register</button>
                  </div>


                  <form id="login" action="/wedding-plan/user_login.php" method="post" class="input-groups">
                        <input type="email" required placeholder="Email" class="input-field" name="email">
                        <input type="password" required placeholder="Password" class="input-field" name="password">
                        <div class="pswd"><input type="checkbox" class="check-box"> <span>Remember Password</span></div>
                        <input type="submit" value="login Now" class="btn" name="submit">
                  </form>


                  <form id="register" class="input-groups" action="/wedding-plan/user_register.php" method="post" enctype="multipart/form-data">
                        <input type="text" required placeholder="Firstname" class="input-field" name="firstname">
                        <input type="text" required placeholder="Lastname" class="input-field" name="lastname">
                        <input type="email" required placeholder="Email" class="input-field" name="email">
                        <input type="tel" required placeholder="Contact number" class="input-field" id="tel" name="contact_no">
                        <input type="text" required placeholder="Username" class="input-field" name="username">
                        <input type="password" required placeholder="Password" class="input-field" name="password">
                        <input type="password" required placeholder="Confirm password" class="input-field" name="cpassword">
                        <p>Already have an account? <a href="login.php">Login Now</a> </p>
                        <input type="submit" value="Register Now" class="btn" name="submit">
                  </form>


            </div>
      </div>

      <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            // var z = document.getElementById("btn");

            let registerBtn = document.getElementById("register-btn")
            let loginBtn = document.getElementById("login-btn")

            function register() {

                  registerBtn.classList.add("active")
                  loginBtn.classList.remove("active")

                  x.style.left = "-400px";
                  y.style.left = "50px";
                  // z.style.left = "110px";
                  x.style.opacity = 0;
                  y.style.opacity = 1;
            }

            function login() {

                  loginBtn.classList.add("active")
                  registerBtn.classList.remove("active")

                  console.log("Hello.")

                  x.style.left = "50px";
                  y.style.left = "450px";
                  // z.style.left = "0px";
                  x.style.opacity = 1
                  y.style.opacity = 0
            }
      </script>

</body>

</html>