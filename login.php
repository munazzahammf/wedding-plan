 <?php
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   include_once 'database.php';
   include_once 'controllers/UserController.php';

   if (isset($_POST['submit'])) {

      $email = $_POST['email'];
      $pass = $_POST['password'];

      $controller = new UserController($db);

      $loginStatus = $controller->loginUser($email, $pass);

      if ($loginStatus) {
         session_start();

         $_SESSION['user_id'] = $loginStatus['id'];
         $_SESSION['username'] = $loginStatus['username'];

         // Redirecting to Home Page.
         header('Location: index.php');
      }
   } else {
      $message[] = 'incorrect email or password!';
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
    <link rel="stylesheet" href="assets/css/register.css">
 </head>

 <body>


    <section class="form__container">
       
    </section>

 </body>

 </html>