<?php
include_once 'database.php';
include_once 'models/User.class.php';
session_start();

if (isset($_POST['submit'])) {

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);


   $password = $_POST['password'];
   $password = filter_var($password, FILTER_SANITIZE_STRING);

   $userObj = new User($db);

   $userObj->getUserByEmail($email);


   if ($password == $userObj->getPassword()) {
      header('location:index.php');
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Login </title>
   <!--font awesome cdn link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!--customer css file link-->
   <link rel="stylesheet" href="css/register.css">
</head>
<body>
   <section class="form__container">
      <form action="" method="post" enctype="multipart/form-data">
         <h3>Login now</h3>


         <input type="email" required placeholder="enter your email" class="box" name="email">
         <input type="password" required placeholder="enter your password" class="box" name="password">
         <p>Don't have an account?<a href="register.php">Register Now</a> </p>
         <input type="submit" value="login Now" class="btn" name="submit">

      </form>
   </section>
</body>
</html>