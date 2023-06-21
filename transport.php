<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>photography</title>
      <!-- font awesome link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- bootstrap icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

   <!-- bootstrap edited classes -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">

   <!--  css file link  -->
   <link rel="stylesheet" href="assets/css/transport.css">
   <link rel="stylesheet" href="assets/css/transport.css">
</head>
<body>
            <header>
      <nav class="navbar navbar-expand-lg header fixed-top py-4 px-5">
         <div class="w-100 d-lg-flex justify-content-between align-items-center">


            <a href="/wedding-plan" class="logo">Dream<span>Day</span></a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
               <ul class="navbar-nav align-items-center">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="photography.php">Photography</a></li>
                        <li><a class="dropdown-item" href="catering.php">Catering</a></li>
                        <li><a class="dropdown-item" href="decoration.php">Decoration</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#packages">Packages</a>
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
      

   <section class="photo">
          <div class="one">
      <div class="photography">
            <p>Welcome to Our Photography Wonderland!</p>
            <h2>Capturing Moments</h2>
            <div class="row">
            <div class="col-mod-6">
                  <div class="photo">
                  <img src="images/photo1.jpg" alt="">
                        <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-sharp fa-solid fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-thumbs-up"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-star"></i>
                        </button>
                        </div>
                  </div>
                  
            </div>

            <div class="col-mod-6">
                  <div class="photo">
                  <img src="images/photo2.jpg" alt="">
                        <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-sharp fa-solid fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-thumbs-up"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-star"></i>
                        </button>
                        </div>
                  </div>
            </div>

            <div class="col-mod-6">
                  <div class="photo">
                  <img src="images/photo3.jpg" alt="">
                        <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-sharp fa-solid fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-thumbs-up"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-star"></i>
                        </button>
                        </div>
                  </div>
                
            </div>

            <div class="col-mod-6">
                  <div class="photo">
                  <img src="images/photo4.jpg" alt="">
                        <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-sharp fa-solid fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-thumbs-up"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-star"></i>
                        </button>
                        </div>
                  </div>
            </div>
</div>
</div>
</div>
            
            <div class="two">
            <div class="photography">
                  <h2>DRONE SHOT</h2>
                        <div class="row">
            <div class="col-mod-6">
                  <div class="photo">
                  <img src="images/dron1.jpg" alt="">
                        <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-sharp fa-solid fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-thumbs-up"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-star"></i>
                        </button>
                        </div>
                  </div>
                 
            </div>

            <div class="col-mod-6">
                  <div class="photo">
                  <img src="images/dron2.jpg" alt="">
                        <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-sharp fa-solid fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-thumbs-up"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-star"></i>
                        </button>
                        </div>
                  </div>
                
            </div>

            <div class="col-mod-6">
                  <div class="photo">
                  <img src="images/dron9.jpg" alt="">
                        <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-sharp fa-solid fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-thumbs-up"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-star"></i>
                        </button>
                        </div>
                  </div>
                
            </div>

            <div class="col-mod-6">
                  <div class="photo">
                  <img src="images/dron6.jpg" alt="">
                        <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-sharp fa-solid fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-thumbs-up"></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="quick shop">
                        <i class="fa-solid fa-star"></i>
                        </button>
                        </div>
                  </div>
            </div>
</div>
</div>
</div>

            
      </div>
      </div>
            </section>

            
<section class="our-team">
        <div class="title">
                   <h2>Transport Team</h2>
                   <h5>Welcome to the world of our dedicated and professional wedding transport team! With their 
                     commitment to excellence and attention to detail, they are here to ensure that your journey 
                     to and from your wedding venue is seamless and memorable.Each member of our team brings a 
                     wealth of experience and expertise in providing reliable and luxurious transportation services.
                      They understand the importance of punctuality, comfort, and safety, allowing you and your 
                      guests to relax and enjoy the ride.</h5>
                   </div>
            <div class="main">
                
        <div class="profile-card">
            <div class="img">
                <img src="images/dron6.jpg">
            </div>
            <div class="caption">
                <h3>Vin Diesel</h3>
                <p>Senior App Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="images/dron6.jpg">
            </div>
            <div class="caption">
                <h3>David Corner</h3>
                <p>Front End Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="images/dron6.jpg">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="images/dron6.jpg">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

</section>

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
            <p>8.00am to 8.00pm</p>
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