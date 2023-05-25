<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>admin profile update</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/register.css">

</head>
<body>



<h1 class="title"> update <span>admin</span> profile </h1>

<section class="update__profile__container">

   

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
      <div class="flex">
         <div class="inputBox">
            <span>username : </span>
            <input type="text" name="name" required class="box" placeholder="enter your name" value="<?= $fetch_profile['name']; ?>">
            <span>email : </span>
            <input type="email" name="email" required class="box" placeholder="enter your email" value="<?= $fetch_profile['email']; ?>">
            <span>profile pic : </span>
            <input type="hidden" name="old_image" value="<?= $fetch_profile['image']; ?>">
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?= $fetch_profile['password']; ?>">
            <span>old password :</span>
            <input type="password" class="box" name="previous_pass" placeholder="enter previous password" >
            <span>new password :</span>
            <input type="password" class="box" name="new_pass" placeholder="enter new password" >
            <span>confirm password :</span>
            <input type="password" class="box" name="confirm_pass" placeholder="confirm new password" >
         </div>
      </div>
      <div class="flex-btn">
         <input type="submit" value="update profile" name="update" class="btn">
         <a href="admin_page.php" class="option-btn">go back</a>
      </div>
   </form>

</section>

</body>
</html>