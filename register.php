</php
include_once 'includes/config.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$name = filter_var($name, FILTER_SANITIZE_STRING);
$address = $_POST['address'];
$address = filter_var($name, FILTER_SANITIZE_STRING);
$contact_no = $_POST['contact_no'];
$contact_no = filter_var($name, FILTER_SANITIZE_STRING);
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_STRING);
$pass = md5($_POST['pass']);
$pass = filter_var($pass, FILTER_SANITIZE_STRING);
$cpass = md5($_POST['cpass']);
$cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/'.$image;

   $select = $conn->prepare("SELECT * FROM `user` WHERE user_email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = $conn->prepare("INSERT INTO `user`(name, email, address, contact_no,  password, image) VALUES(?,?,?,?)");
         $insert->execute([$name, $email,$address, $contact_no, $cpass, $image]);
         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered succesfully!';
            header('location:login.php');
         }
      }
   }

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
    <link rel="stylesheet" href="css/register.css">
    </head>
    <body>    

    <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
        <section class="form__container">
        <form action="" method="post" enctype="multipart/form-data">
         <h3>Register Now</h3>
         
         <input type="text" required placeholder="enter your name" class="box" name="name">
         <input type="email" required placeholder="enter your email" class="box" name="email">
         <input type="tel" required placeholder="enter your mobile number" class="box" id="tel" name="contact_no">
         <textarea name="address" required placeholder="enter your address" class="box"></textarea>
         <input type="password" required placeholder="enter your password" class="box" name="password">
         <input type="password" required placeholder="confirm your password" class="box" name="cpass">
         <p>Already have an account?<a href ="login.php">Login Now</a> </p>
         <input type="submit" value="Register Now" class="btn" name="submit">

        </form>   
        </section>
    </body>
</html>
