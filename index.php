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
   <link rel="stylesheet" href="assets/css/cal.css">



</head>

<body>

   <header class="fixed-top">

      <nav class="navbar navbar-expand-lg bg-body-tertiary header">
         <div class="w-100 d-flex justify-content-between">


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
                  <li class="nav-item">
                     <a class="nav-link" href="#services">Services</a>
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

                  // $isloggedOut = $_GET["login"];

                  // if (isset($isloggedOut) & $isloggedOut == 'false') {
                  //    $loggedIn = false;
                  // }

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
                     echo '<a href="register.php" class="link-btn">Login</a>';
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

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="container">

         <div class="min-vh-100 d-flex align-items-center">
            <div class="content text-center text-md-left">
               <br>
               <br>
               <h3>Let's Make Your Special Day Unforgettable!</h3>
              
            </div>



            <!-- calender section starts -->

            <div class="contianer">
               <div class="calendar">
                  <div class="calendar-header">
                     <span class="month-picker" id="month-picker"> May </span>
                     <div class="year-picker" id="year-picker">
                        <span class="year-change" id="pre-year">
                           <i class="bi bi-caret-left-fill"></i>
                        </span>
                        <span id="year">2020 </span>
                        <span class="year-change" id="next-year">
                           <i class="bi bi-caret-right-fill"></i>
                        </span>
                     </div>
                  </div>

                  <div class="calendar-body">
                     <div class="calendar-week-days">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                     </div>
                     <div class="calendar-days"></div>
                  </div>
                  <div class="calendar-footer"></div>
                  <div class="date-time-formate">
                     <div class="day-text-formate">TODAY</div>
                     <div class="date-time-value">
                        <div class="time-formate">02:51:20</div>
                        <div class="date-formate">23 - july - 2022</div>
                     </div>
                  </div>
                  <div class="month-list"></div>
               </div>
            </div>
            <!-- calender section ends -->
         </div>
      </div>
   </section>

   <!-- home section ends -->

   <div class="sidenav">
      <nav>
         <ul>
            <li><a href="decoration.php">Decoration</a></li>
            <li><a href="photography.php">Photography</a></li>
            <li><a href="catering.php">Catering</a></li>
         </ul>
      </nav>
   </div>

   <div id="menubtn">
      <img src="images/menu.png" alt="" id="menu">
   </div>

   <script>
      var menubtn = document.getElementById("menubtn")
      var sidenav = document.getElementById("sidenav")
      var menu = document.getElementById("menu")

      menubtn.onClick = function name() {
         if (sidenav.style.right == "-250px"){
            sidenav.style.right = "0";
         }
         else {
            sidenav.style.right = "-250px";
         }
      }

   </script>


   <!-- about section starts  -->

   <section class="about" id="about">

      <div class="container">

         <div class="row align-items-center">

            <div class="col-md-6 content">
               <span>About Us</span>
               <h3>We are thrilled that you have choosen to explore our platform and trust us with one of the most
                  important days of your life.</h3>
               <p>Our team of experienced wedding planners is committed to making your special day unforgettable. We
                  understand that planning a wedding can be stressful and time-consuming, which is why we offer a
                  comprehensive range of services to ensure that everything runs smoothly. Whether you need help with
                  venue selection, catering, or entertainment, we have the expertise and resources to create a
                  personalized plan that meets your unique needs and preferences.</p>
               <a href="#contact" class="link-btn">Explore More</a>
            </div>

            <div class="col-md-4 image">
               <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->


   <!-- service section start -->

   <section class="services" id="services">
      <div class="hero">
         <h1 class="heading">
            "We're here to sprinkle your special day with love, laughter, and unforgettable memories.
            Let's create the wedding of your dreams together!"
         </h1>

         <div class="service-container">
            <div class="indicator">
               <span class="btn" action="active"></span>
               <span class="btn"></span>
               <span class="btn"></span>
               <span class="btn"></span>
            </div>
            <div class="section">
                  <div class="slide-row" id="slide">
            <div class="slide-col">
               <div class="user-text">
                  <h3>FLORAL</h3>
                  <p>We're honored to be a part of your special day and can't wait to
               bring your floral dreams to life. Our team of talented florists is dedicated to creating beautiful
               arrangements that will add a touch of elegance and romance to your celebration. We're here to make
               your wedding day blooming marvelous!</p>
               
               </div>
               <div class="user-image">
                     <img src="images/floral.jpg" alt="">
               </div>
            </div>
            <div class="slide-col">
               <div class="user-text">
                  <h3>CATERING</h3>
                  <p>We're honored to be a part of your special day and can't wait to
               bring your floral dreams to life. Our team of talented florists is dedicated to creating beautiful
               arrangements that will add a touch of elegance and romance to your celebration. We're here to make
               your wedding day blooming marvelous!</p>
               
               </div>
               <div class="user-image">
                     <img src="images/floral.jpg" alt="">
               </div>
            </div>
            <div class="slide-col">
               <div class="user-text">
                  <h3>DECORATION</h3>
                  <p>We're thrilled to be a part of your special day, adding the perfect touch of beauty and elegance
               to your wedding decor. Our team is dedicated to creating a breathtaking ambiance that will leave you
               and your guests in awe. Get ready to celebrate amidst stunning decorations that will make your wedding
               day truly magical!</p>
               
               </div>
               <div class="user-image">
                     <img src="images/floral.jpg" alt="">
               </div>
            </div>
            <div class="slide-col">
               <div class="user-text">
                  <h3>PHOTOGRAPHY</h3>
                   <p>We're honored to capture the precious moments of your special day through our photography.
               With our skilled team behind the lens, we'll preserve the joy, love, and beauty of your wedding in
               timeless images. Get ready to create memories that will last a lifetime. Let's make every click count!
            </p>
               
               </div>
               <div class="user-image">
                     <img src="images/floral.jpg" alt="">
               </div>
            </div>
            </div>
         </div>
         </div>
      </div>
   </section>

   
   <!-- service section end -->

   
   
   <!-- packages section starts  -->
   <section class="packages" id="packages">
      <h2>Choose Your Plan</h2>
      <div class="price-row">
         <div class="price-col">
            <p>Silver Package</p>
            <h3>Price: $1,500</h3>
            <ul>
               <li>Wedding ceremony coordination</li>
               <li>Venue selection assistance</li>
               <li>Vendor recommendations and referrals</li>
               <li>Wedding day timeline creation and management</li>
            </ul>
            <button>BOOK NOW</button>
         </div>
         <div class="price-col">
            <p>Gold Package</p>
            <h3>Price: $3,000</h3>
            <ul>
               <li>All features of the Silver Package</li>
               <li>Personalized wedding theme and design consultation</li>
               <li>Full vendor coordination and management</li>
               <li>Assistance with wedding invitations and stationery</li>
            </ul>
            <button>BOOK NOW</button>
         </div>
         <div class="price-col">
            <p>Platinum Package</p>
            <h3>Price: $4,500</h3>
            <ul>
               <li>All features of the Gold Package</li>
               <li>Complete wedding planning and design services from start to finish</li>
               <li>Unlimited consultations and personalized guidance</li>
               <li>Pre-wedding events coordination</li>
            </ul>
            <button>BOOK NOW</button>
         </div>
      </div>
   </section>
   <!-- packages section Ends  -->



   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>0761434955</p>
            <p>0327913020</p>
         </div>

         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p> no-155/A , Kurunegala</p>
         </div>

         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>8.00am to 8.00pm</p>
         </div>

         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>dreamday@gmail.com</p>
         </div>

      </div>

      <div class="credit"> &copy; copyright @
         <?php echo date('Y'); ?> by <span> Wedding-Plan</span>
      </div>

   </section>

   <!-- footer section ends -->


   <!-- java script link -->
   <script src="java-script/service.js"></script>
   <script src="java-script/cal.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
      </script>
      <script src="java-script/script.js"></script>
      


</body>

</html>