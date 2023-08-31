<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Wedding Plan</title>



   <!-- font awesome link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- bootstrap icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

   <!-- bootstrap edited classes -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">

   <!--  css file link  -->
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/invitation.css">



</head>

<body>

   <header>
      <nav class="navbar navbar-expand-lg header fixed-top py-4 px-5">
         <div class="w-100 d-lg-flex justify-content-between align-items-center">

            <img src="images/Dream-Day.png" alt="">
            <a href="/wedding-plan" class="logo">Dream<span>Day</span></a>
            


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
               <ul class="navbar-nav align-items-center">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/wedding-plan">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/wedding-plan/#about">About</a>
                  </li>
                  
                  <li class="nav-item">
                     <a class="nav-link" href="/wedding-plan/#packages">Packages</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/wedding-plan/#services">Services</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/wedding-plan/#review">Reviews</a>
                  </li>

                  


                  <?php
                  ini_set('display_errors', 1);
                  ini_set('display_startup_errors', 1);
                  error_reporting(E_ALL);
                  session_start();

                  $loggedIn = false;

                  if ($_SESSION) {
                     $loggedIn = true;
                  }

                  if ($loggedIn) {
                     // echo '<i class="bi bi-person-circle" style="font-size:2.5rem;"></i>';
                     echo '        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-right" style="right:0;">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item log-out-btn" href="logout.php">Log out</a></li>
          </ul>
        </li>';
                  } else {
                     echo '<a href="register.php" class="btn btn-lg login-btn" role="button" aria-disabled="true">LOGIN</a>';
                  }
                  ?>
               </ul>
            </div>




         </div>
      </nav>


      <!-- </div> -->

      <!-- </div> -->

   </header>

   <!-- header section ends -->




   <!-- photography section start -->

                 <section class="photography">
                  <div class="para">
                  <p>Welcome to Our Photography Wonderland!</p>
                  </div>
                     <div class="containers">
                        <div class="card">
                           <div class="card-inner">
                              <div class="front1">
                              
                              </div>
                                 <div class="back">
                                    <img src="images/waving-hand.png" alt="">
                                    <h1>Robat Hardik<span>Photographer</span></h1>
                                    <p>I'm the Photographer Currently work <span>@DreamDay</span> Company</p>
                                    <div class="row">
                                       <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                       <div class="col">
                                          <h2>3 Years</h2>
                                          <p>Experience</p>
                                       </div>
                                        <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <button>follow</button>
                                       <a href="#"><img src="images/instagram.png" alt=""></a>
                                       <a href="#"><img src="images/pinterest.png" alt=""></a>
                                    </div>
                                 </div>
                           </div>
                        </div>
                         <div class="card">
                           <div class="card-inner">
                              <div class="front2">
                                
                              </div>
                                 <div class="back">
                                    <img src="images/waving-hand.png" alt="">
                                    <h1>Robat Hardik<span>Photographer</span></h1>
                                    <p>I'm the Photographer Currently work <span>@DreamDay</span> Company</p>
                                    <div class="row">
                                       <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                       <div class="col">
                                          <h2>3 Years</h2>
                                          <p>Experience</p>
                                       </div>
                                        <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <button>follow</button>
                                       <a href="#"><img src="images/instagram.png" alt=""></a>
                                       <a href="#"><img src="images/pinterest.png" alt=""></a>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-inner">
                              <div class="front3">
                                
                              </div>
                                 <div class="back">
                                    <img src="images/waving-hand.png" alt="">
                                    <h1>Robat Hardik<span>Photographer</span></h1>
                                    <p>I'm the Photographer Currently work <span>@DreamDay</span> Company</p>
                                    <div class="row">
                                       <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                       <div class="col">
                                          <h2>3 Years</h2>
                                          <p>Experience</p>
                                       </div>
                                        <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <button>follow</button>
                                       <a href="#"><img src="images/instagram.png" alt=""></a>
                                       <a href="#"><img src="images/pinterest.png" alt=""></a>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-inner">
                              <div class="front4">
                                
                              </div>
                                 <div class="back">
                                    <img src="images/waving-hand.png" alt="">
                                    <h1>Robat Hardik<span>Photographer</span></h1>
                                    <p>I'm the Photographer Currently work <span>@DreamDay</span> Company</p>
                                    <div class="row">
                                       <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                       <div class="col">
                                          <h2>3 Years</h2>
                                          <p>Experience</p>
                                       </div>
                                        <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <button>follow</button>
                                       <a href="#"><img src="images/instagram.png" alt=""></a>
                                       <a href="#"><img src="images/pinterest.png" alt=""></a>
                                    </div>
                                 </div>
                           </div>
                        </div>

                     </div>
                     <div class="containers">
                        <div class="card">
                           <div class="card-inner">
                              <div class="front5">
                                
                              </div>
                                 <div class="back">
                                    <img src="images/waving-hand.png" alt="">
                                    <h1>Robat Hardik<span>Photographer</span></h1>
                                    <p>I'm the Photographer Currently work <span>@DreamDay</span> Company</p>
                                    <div class="row">
                                       <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                       <div class="col">
                                          <h2>3 Years</h2>
                                          <p>Experience</p>
                                       </div>
                                        <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <button>follow</button>
                                       <a href="#"><img src="images/instagram.png" alt=""></a>
                                       <a href="#"><img src="images/pinterest.png" alt=""></a>
                                    </div>
                                 </div>
                           </div>
                        </div>
                         <div class="card">
                           <div class="card-inner">
                              <div class="front6">
                                
                              </div>
                                 <div class="back">
                                    <img src="images/waving-hand.png" alt="">
                                    <h1>Robat Hardik<span>Photographer</span></h1>
                                    <p>I'm the Photographer Currently work <span>@DreamDay</span> Company</p>
                                    <div class="row">
                                       <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                       <div class="col">
                                          <h2>3 Years</h2>
                                          <p>Experience</p>
                                       </div>
                                        <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <button>follow</button>
                                       <a href="#"><img src="images/instagram.png" alt=""></a>
                                       <a href="#"><img src="images/pinterest.png" alt=""></a>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-inner">
                              <div class="front7">
                               
                              </div>
                                 <div class="back">
                                    <img src="images/waving-hand.png" alt="">
                                    <h1>Robat Hardik<span>Photographer</span></h1>
                                    <p>I'm the Photographer Currently work <span>@DreamDay</span> Company</p>
                                    <div class="row">
                                       <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                       <div class="col">
                                          <h2>3 Years</h2>
                                          <p>Experience</p>
                                       </div>
                                        <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <button>follow</button>
                                       <a href="#"><img src="images/instagram.png" alt=""></a>
                                       <a href="#"><img src="images/pinterest.png" alt=""></a>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-inner">
                              <div class="front8">
                                
                              </div>
                                 <div class="back">
                                    <img src="images/waving-hand.png" alt="">
                                    <h1>Robat Hardik<span>Photographer</span></h1>
                                    <p>I'm the Photographer Currently work <span>@DreamDay</span> Company</p>
                                    <div class="row">
                                       <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                       <div class="col">
                                          <h2>3 Years</h2>
                                          <p>Experience</p>
                                       </div>
                                        <div class="col">
                                          <h2>5K</h2>
                                          <p>Likes</p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <button>follow</button>
                                       <a href="#"><img src="images/instagram.png" alt=""></a>
                                       <a href="#"><img src="images/pinterest.png" alt=""></a>
                                    </div>
                                 </div>
                           </div>
                        </div>

                     </div>
                     </section>
                  
   <!-- photography end -->


<!-- team start -->
            
<section class="our-team">
        <div class="title">
                   <h1>Wedding Invitation Team</h1>
                   <h5>Welcome to the world of our skilled and dedicated wedding invitation team! With their 
                     passion for design and attention to detail, they are here to create exquisite invitations 
                     that perfectly reflect the style and essence of your wedding day.Each member of our team 
                     brings a creative flair and a deep understanding of the power of a beautifully crafted 
                     invitation. They know that your wedding invitation is not just a piece of stationery but 
                     a glimpse into the love and excitement that surrounds your celebration.</h5>
                   </div>
            <div class="main">
        <div class="profile-card">
            <div class="img">
                <img src="images/team-1.jpg">
            </div>
            <div class="caption">
                <h3>Vin Diesel</h3>
                <p>Proffessional Photographer</p>
                <p>Contact : +94761434955</p>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="images/team-2.jpg">
            </div>
            <div class="caption">
                <h3>David Corner</h3>
                <p>Proffessional Photographer</p>
                <p>Contact : +94761434955</p>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="images/team-3.jpg">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Proffessional Photographer</p>
                <p>Contact : +94761434955</p>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="images/team-4.jpg">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Proffessional Photographer </p>
                <p>Contact : +94761434955</p>
            </div>
        </div>
    </div>

</section> 
<!-- team end -->

 <!-- footer section starts  -->

 <footer class="p-5">

<div class="box-container container">

   <div class="box">
      <i class="fas fa-phone"></i>
      <h3>Contact Number</h3>
      <p>0761434955</p>
      <p>0327913020</p>
   </div>

   <div class="box">
      <i class="fas fa-map-marker-alt"></i>
      <h3>Address</h3>
      <p> no-155/A , Kurunegala</p>
   </div>

   <div class="box">
      <i class="fas fa-clock"></i>
      <h3>Opening Hours</h3>
      <h6>Monday - Friday :</h6>
      <p>09.00 AM - 09.00 PM</p>
      <h6>Saturday - Sunday :</h6>
      <p>09.00 AM - 12.00 PM</p>
   </div>

   <div class="box">
      <i class="fas fa-envelope"></i>
      <h3>Email Address</h3>
      <p><a href="mailto:dreamday@gmail.com">dreamday@gmail.com</a></p>
   </div>

</div>

<div class="credit"> &copy; copyright @
   <?php echo date('Y'); ?> by <span> Wedding-Plan</span>
</div>

</footer>

<!-- footer section ends -->
   
    <script src="./Font-Awesome/all.min.js"></script>
</body>
</html>