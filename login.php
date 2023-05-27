 <?php 
// include_once 'config.php';

// session_start();

// if(isset($_POST['submit'])){

//    $email = $_POST['email'];
//    $email = filter_var($email, FILTER_SANITIZE_STRING);
//    $pass = md5($_POST['pass']);
//    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

//    $select = $conn->prepare("SELECT * FROM `user` WHERE user_email = ? AND password = ?");
//    $select->execute([$email, $pass]);
//    $row = $select->fetch();

//    if(mysql_num_rows($select) > 0){

//       if($row['user_type'] == 'admin'){

//          $_SESSION['admin_id'] = $row['id'];
//          header('location:admin_page.php');

//       }elseif($row['user_type'] == 'user'){

//          $_SESSION['user_id'] = $row['id'];
//          header('location:user_page.php');

//       }else{
//          $message[] = 'no user found!';
//       }
      
//    }else{
//       $message[] = 'incorrect email or password!';
//    }

// }

?>



<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Login </title>
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
         <p>Don't have an account?<a href ="register.php">Register Now</a> </p>
         <input type="submit" value="login Now" class="btn" name="submit">

        </form>   
        </section>
    </body>
</html>


