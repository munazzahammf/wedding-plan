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
    <section class="form__container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Register Now</h3>

            <input type="text" required placeholder="enter your firstname" class="box" name="firstname">
            <input type="text" required placeholder="enter your lastname" class="box" name="lastname">
            <input type="email" required placeholder="enter your email" class="box" name="email">
            <input type="tel" required placeholder="enter your mobile number" class="box" id="tel" name="contact_no">
            <!--<textarea name="address" required placeholder="enter your address" class="box"></textarea>-->
            <input type="text" required placeholder="enter your username" class="box" name="username">
            <input type="password" required placeholder="enter your password" class="box" name="password">
            <input type="password" required placeholder="confirm your password" class="box" name="cpassword">
            <p>Already have an account? <a href="login.php">Login Now</a> </p>
            <input type="submit" value="Register Now" class="btn" name="submit">

        </form>
    </section>
</body>

</html>