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
                     <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="#packages">Packages</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#review">Reviews</a>
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



   <div id="carouselExampleCaptions" class="carousel-slide">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="images/cover/banner1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <h3>Welcome to our love-filled world!
                  <br><span class="auto-type"></span>
               </h3>
            </div>
            <div class="scrolling-message">
               If you want to contact us, Please first register and then make an Appointment
            </div>
         </div>
      </div>
   </div>
   </div>


   <!-- book section -->

   <section class="book_section layout_padding">
      <h1>MAKE AN APPOINMENT</h1>
      <div class="container">
         <div class="row">
            <div class="col">
               <form action="/wedding-plan/mail.php" method="post">
                  <div class="form-row">
                     <div class="form-group col-lg-6">
                        <label for="name">Name: </label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="">
                     </div>
                     <div class="form-group col-lg-6">
                        <label for="contact-no">Contact Number: </label>
                        <input name="contact-no" type="tel" class="form-control" id="contact-no" placeholder="">
                     </div>
                  </div>
                  <div class="form-row ">
                     <div class="form-group col-lg-6">
                        <label for="email">E-Mail: </label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="">
                     </div>
                     <div class="form-group col-lg-6">
                        <label for="date">Booking Date: </label>
                        <input name="booking-date" type="date" class="form-control" id="" placeholder="">
                     </div>
                  </div>
                  <div class="btn-box">
                     <button type="submit" class="btn">Submit Now</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>


   <!-- end book section -->



   <!-- about section starts  -->

   <section class="about" id="about">

      <div class="container">

         <div class="row align-items-center">

            <div class="col-md-8 content">
               <h1>ABOUT US</h1>
               <h3>We are thrilled that you have choosen to explore our platform and trust us with one of the most
                  important days of your life.</h3>
               <p>Our team of experienced wedding planners is committed to making your special day unforgettable. We
                  understand that planning a wedding can be stressful and time-consuming, which is why we offer a
                  comprehensive range of services to ensure that everything runs smoothly. Whether you need help with
                  venue selection, catering, or entertainment, we have the expertise and resources to create a
                  personalized plan that meets your unique needs and preferences.</p>
            </div>

            <div class="col-md-2 image d-flex">
               <video src="images/video2.mp4" width="500px" height="500px" autoplay muted></video>
            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- couple -->
   <div class="couple">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage text_align_left">
                  <h2>Your Gateway to Timeless Weddings................</h2>
                  <p>
                     Welcome to our "DreamDay", where dreams come true and love takes center stage!

                     We are thrilled to have you here as we embark on this enchanting journey filled with love, joy, and
                     unforgettable memories. Whether you are a soon-to-be bride, groom, or a cherished guest, this is the
                     perfect place to discover everything you need to create the wedding of your dreams.

                     At our "DreamDay", we believe that every love story deserves to be celebrated in its own unique way.
                     From intimate gatherings to grand celebrations, we are here to guide you through the process,
                     providing you with inspiration, ideas, and expert advice to make your special day truly extraordinary.
                  </p>
               </div>
            </div>
            <div class="col-md-5">
               <div class="doi">
                  <figure><img src="images/photo5.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- couple -->

   <!-- packages section starts  -->
   <section class="packages" id="packages">
      <h1>CHOOSE YOUR PLAN</h1>
      <div class="price-row">
         <div class="price-col">
            <p>Silver Package</p>
            <h3>10% Discount</h3>
            <ul>
               <li>Stunning decorations, timeless photography, and seamless transport, all at a special rate.</li>
               <li>Transform your venue into a dreamy setting with expert decoration.</li>
               <li>Preserve precious moments with professional photographers.</li>
               <li>Convenient and reliable transportation for you and your guests.</li>
            </ul>
         </div>
         <div class="price-col">
            <p>Gold Package</p>
            <h3>20% Discount</h3>
            <ul>
               <li>All features of the Silver Package</li>
               <li>Exquisite catering, delectable wedding cakes, and elegant invitations, all at a special rate.</li>
               <li>Exceptional catering service with a tailored menu for your taste buds.</li>
               <li>Beautifully crafted wedding cakes as the centerpiece of your celebration.</li>
            </ul>
         </div>
         <div class="price-col">
            <p>Platinum Package</p>
            <h3>30% Discount</h3>
            <ul>
               <li>All features of the Gold Package</li>
               <li>Beauty, entertainment, and expert guidance at a special rate.</li>
               <li>Look and feel your best with our stunning dress & makeup services.</li>
               <li>Create memorable moments with mesmerizing entertainment.</li>
               <li>Receive complimentary guidance for an unforgettable day.</li>
            </ul>
         </div>
      </div>
   </section>
   <!-- packages section Ends  -->







   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading">our services</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/services/lightning.png" alt="">
            <h3>Decoration & Lightning</h3>
            <p>Step into a world of enchantment and let us illuminate your love story with our exquisite
               decoration and lighting services. Welcome to our "DreamDay", where dreams are transformed
               into breathtaking realities.
               Discover the magic of captivating ambiance and create memories that will glow forever.</p>
            <div class="button-box">
               <a class="button" href="decoration.php">Explore More</a>
            </div>
         </div>

         <div class="box">
            <img src="images/services/camera.png" alt="">
            <h3>Photography</h3>
            <p>Capture the love, the joy, and the cherished memories with our wedding photography services.
               Our talented photographers are dedicated to preserving every beautiful moment of your special day.
               Welcome to our "DreamDay", where your love story becomes timeless art.</p>
            <div class="button-box">
               <a class="button" href="photography.php">Explore More</a>
            </div>
         </div>

         <div class="box">
            <img src="images/services/dinner.png" alt="">
            <h3>Catering</h3>
            <p>Delight your senses and savor the flavors of love with our exquisite wedding catering services.
               Welcome to our "DreamDay", where culinary artistry meets passion, creating a feast that reflects
               your unique taste. Indulge in a culinary experience that will leave a lasting impression on you
               and your guests.</p>
            <div class="button-box">
               <a class="button" href="catering.php">Explore More</a>
            </div>
         </div>

         <div class="box">
            <img src="images/services/wedding-cake.png" alt="">
            <h3>Wedding Cakes</h3>
            <p>Indulge in a symphony of flavors and artistry with our divine wedding cakes. Welcome to our "DreamDay",
               where sweetness takes center stage and dreams are sculpted into edible masterpieces. Let us create
               the perfect confectionery centerpiece for your unforgettable day.</p>
            <div class="button-box">
               <a class="button" href="cake.php">Explore More</a>
            </div>
         </div>

         <div class="box">
            <img src="images/services/wedding-invitation.png" alt="">
            <h3>Invitation</h3>
            <p>Elevate the anticipation and set the tone for your perfect day with our exquisite wedding invitations.
               Welcome to our "DreamDay", where elegance meets personalization, creating invitations that reflect your
               unique love story. Join us as we unveil a world of enchanting possibilities.</p>
            <div class="button-box">
               <a class="button" href="invitation.php">Explore More</a>
            </div>
         </div>

         <div class="box">
            <img src="images/services/music.png" alt="">
            <h3>Entertainment</h3>
            <p>Ignite the spark of celebration with our captivating wedding entertainment services.
               Welcome to our "DreamDay", where joy fills the air and moments of bliss come alive.
               Let us create an unforgettable experience, where laughter, music, and dance weave a tapestry of
               happiness on your special day.</p>
            <div class="button-box">
               <a class="button" href="entertainment.php">Explore More</a>
            </div>
         </div>


         <div class="box">
            <img src="images/services/bride-dress.png" alt="">
            <h3>Dress & Make-up</h3>
            <p>Enhance your natural beauty and radiate confidence on your special day with our impeccable
               dress and makeup services. Welcome to our "DreamDay", where dreams are adorned and inner beauty
               shines through. Let us create a stunning bridal look that captures your essence and leaves you
               feeling truly exquisite.</p>
            <div class="button-box">
               <a class="button" href="dress.php">Explore More</a>
            </div>
         </div>

         <div class="box">
            <img src="images/services/car-wash.png" alt="">
            <h3>Transport</h3>
            <p>Embark on a journey of love and elegance with our exceptional wedding transport services.
               Welcome to our "DreamDay", where we ensure your arrival is as remarkable as your love story.
               Let us whisk you away in style, creating memories that will forever be etched in your heart.</p>
            <div class="button-box">
               <a class="button" href="transport.php">Explore More</a>
            </div>
         </div>
         <div class="box">
            <img src="images/services/wedding-photos.png" alt="">
            <h3>Free Wedding Album</h3>
            <p>We are delighted to offer a complimentary wedding album as part of
               our package. Our talented photographers will skillfully capture the emotions, joy, and love shared
               on your big day, creating a stunning collection of photos that will be carefully crafted into a
               timeless album.</p>
            <div class="button-box">
               <a class="button" href="album.php">Explore More</a>
            </div>
         </div>

      </div>

   </section>

   <!-- services section ends -->


   <!-- Fact Start -->
   <div class="container-fluid fact bg-dark my-5 py-5">
      <div class="container">
         <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
               <i class="fa fa-check fa-2x text-white mb-3"></i>
               <h2 class="text-white mb-2" data-toggle="counter-up">28</h2>
               <p class="text-white mb-0">Years Experience</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
               <i class="fa fa-users fa-2x text-white mb-3"></i>
               <h2 class="text-white mb-2" data-toggle="counter-up">80</h2>
               <p class="text-white mb-0">Expert Team Members</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
               <i class="fa fa-users fa-2x text-white mb-3"></i>
               <h2 class="text-white mb-2" data-toggle="counter-up">100</h2>
               <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
               <i class="fa fa-ring fa-2x text-white mb-3"></i>
               <h2 class="text-white mb-2" data-toggle="counter-up">100</h2>
               <p class="text-white mb-0">Compleate Projects</p>
            </div>
         </div>
      </div>
   </div>
   <!-- Fact End -->


   <!-- rewiev start -->

   <section class="cus-review">
      <div class="review" id="review">
         <h1>CUSTOMER REVIEWS</h1>
         <div class="review-box">
            <div id="slider">
               <div class="card">
                  <div class="profile">
                     <img src="images/reviews/pic1.jpg" alt="">
                     <div>
                        <h3>Emily and James</h3>
                        <p>Satisfied Client</p>
                     </div>
                  </div>
                  <p>Working with "DreamDay" was an absolute pleasure. They took care of every detail and made our wedding day stress-free and magical. The team's professionalism and attention to detail exceeded our expectations. Highly recommended!</p>
               </div>
               <div class="card">
                  <div class="profile">
                     <img src="images/reviews/pic2.jpg" alt="">
                     <div>
                        <h3>Hardik Ali</h3>
                        <p>Satisfied Client</p>
                     </div>
                  </div>
                  <p>We cannot thank "DreamDay" enough for their exceptional service. From the initial planning stages to the actual day, they were dedicated and attentive. Our guests were blown away by the stunning decorations and seamless coordination. It was the wedding of our dreams!</p>
               </div>
               <div class="card">
                  <div class="profile">
                     <img src="images/reviews/pic3.jpg" alt="">
                     <div>
                        <h3>Jessica and David</h3>
                        <p>Satisfied Client</p>
                     </div>
                  </div>
                  <p>We were impressed by the expertise and professionalism of "DreamDay". The team guided us throughout the planning process, offering valuable insights and recommendations. On the day of our wedding, everything ran smoothly, allowing us to fully enjoy our celebration. Thank you!</p>
               </div>
               <div class="card">
                  <div class="profile">
                     <img src="images/reviews/pic4.jpg" alt="">
                     <div>
                        <h3>Jennifer and Mark</h3>
                        <p>Satisfied Client</p>
                     </div>
                  </div>
                  <p>Choosing "DreamDay" was the best decision we made for our wedding. They went above and beyond to bring our vision to life. The photography captured every special moment beautifully, and the transportation arrangements were flawless. We are forever grateful!</p>
               </div>
            </div>
            <div class="sidebar">
               <!-- <img src="images/up-img.jpeg" alt="" id="upArrow"> -->
               <div class="img-container d-flex align-items-center justify-content-center" id="upArrow">
                  <i class="bi bi-caret-up d-block h1"></i>
               </div>
               <div class="img-container d-flex align-items-center justify-content-center" id="downArrow">
                  <i class="bi bi-caret-down d-block pt-4 h1"></i>
               </div>
<!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">28</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                   <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">80</h2>
                    <p class="text-white mb-0">Expert Team Members</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">100</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-ring fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">120</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>


 <!-- rewiev start -->

 
<section class="cus-review">
 <div class="review" id="review">
   <h1>CUSTOMER REVIEWS</h1>
   <div class="review-box">
      <div id="slider">
      <div class="card">
         <div class="profile">
               <img src="images/reviews/pic1.jpg" alt="">
            <div>
               <h3>Emily and James</h3>
               <p>Satisfied Client</p>
            </div>
         </div>
         <p>Working with "DreamDay" was an absolute pleasure. They took care of every detail and made our wedding day stress-free and magical. The team's professionalism and attention to detail exceeded our expectations. Highly recommended!</p>
      </div>   
      <div class="card">
         <div class="profile">
               <img src="images/reviews/pic2.jpg" alt="">
            <div>
               <h3>Hardik Ali</h3>
               <p>Satisfied Client</p>
            </div>
         </div>
         <p>We cannot thank "DreamDay" enough for their exceptional service. From the initial planning stages to the actual day, they were dedicated and attentive. Our guests were blown away by the stunning decorations and seamless coordination. It was the wedding of our dreams!</p>
      </div>   
      <div class="card">
         <div class="profile">
               <img src="images/reviews/pic3.jpg" alt="">
            <div>
               <h3>Jessica and David</h3>
               <p>Satisfied Client</p>
            </div>
         </div>
         <p>We were impressed by the expertise and professionalism of "DreamDay". The team guided us throughout the planning process, offering valuable insights and recommendations. On the day of our wedding, everything ran smoothly, allowing us to fully enjoy our celebration. Thank you!</p>
      </div>   
      <div class="card">
         <div class="profile">
               <img src="images/reviews/pic4.jpg" alt="">
            <div>
               <h3>Jennifer and Mark</h3>
               <p>Satisfied Client</p>
            </div>
         </div>
         <p>Choosing "DreamDay" was the best decision we made for our wedding. They went above and beyond to bring our vision to life. The photography captured every special moment beautifully, and the transportation arrangements were flawless. We are forever grateful!</p>
      </div>   
 </div>
      <div class="sidebar">
         <!-- <img src="images/up-img.jpeg" alt="" id="upArrow"> -->
         <div class="img-container d-flex align-items-center justify-content-center" id="upArrow">
            <i class="bi bi-caret-up d-block h1"></i>
         </div>
         <div class="img-container d-flex align-items-center justify-content-center" id="downArrow">
            <i class="bi bi-caret-down d-block pt-4 h1"></i>
         </div>
      </div>
   </section>

   <!-- rewieve end -->


 <section class="contact-us">
 <div class="contact">
   <div class="heading">
    <h1>Add Your Review Here....</h1>
    </div>
    <form action="#" method="post">
      <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="review">Your Review:</label>
        <textarea id="review" name="review" rows="4" required></textarea>
      </div>
      <button type="submit">Submit Review</button>
    </form>
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


   <!-- java script link -->

   <script>
      var slider = document.getElementById("slider");
      var upArrow = document.getElementById("upArrow");
      var downArrow = document.getElementById("downArrow");

      let x = 0;

      upArrow.onclick = function() {
         if (x > "-900") {
            x = x - 300;
            slider.style.top = x + "px";
         }

      }
      downArrow.onclick = function() {
         if (x < 0) {
            x = x + 300;
            slider.style.top = x + "px";
         }

      }
   </script>

   <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
   <script>
      var typed = new Typed(".auto-type", {
         strings: ["Let's Make Your Special Day Unforgettable!"],
         typeSpeed: 80,
         backSpeed: 80,
         loop: true
      })
   </script>
   <script src="scripts/service.js"></script>
   <script src="scripts/cal.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
   </script>
   <script src="scripts/script.js"></script>
   <script src="scripts/index.js"></script>


   <script src="jsfile.js"></script>

</body>

</html>