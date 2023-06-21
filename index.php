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

            <img src="images/logo.png" alt="">
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
      <img src="images/one.jpeg" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Welcome to our wedding planning haven! 
                  <br><span class="auto-type"></span></h3>
      </div>
    </div>
    </div>
  </div>
</div>



<!-- Appoinment start  -->

<section class="appoinment-page">
   <h1>MAKE AN APPOINMENT</h1>
  <div class="row align-items-start">
        <div class="col-md-12 content">
      <div class="appoinment-form-box">
                  <div class="appoinment-form">
                     <div class="one d-flex">
                  <div class="input-grp">
                        <label for="">Bride Groom's Name: 
                        <input type="name" id="booking_date" name="booking_date" class="input-field" placeholder="Enter Bride Groom's Name">
                        </label>
                  </div>
                  
                  <div class="input-grp">
                        <label for="">Bride's Name:
                        <input type="name" id="booking_date" name="booking_date" class="input-field" placeholder="Enter Bride's Name">
                        </label>
                  </div>
                  
                  <div class="input-grp">
                        <label for="">Bride Groom's Number:
                        <input type="text" placeholder="+941234567" class="input-field" name="groom-number">
                        </label>
                  </div>
                  <div class="input-grp">
                        <label for="">Bride's Number:
                        <input type="text" placeholder="+941234567" class="input-field" name="bride-groom-number">
                        </label>
                  </div>
                  </div>
                 
                  <div class="two d-flex">
                  <div class="input-grp">  
                        <label for="">Bride Groom's Email:      
                        <input type="text" name="email" placeholder="Enter Your Address" class="input-field">
                        </label>
                  </div>

                  <div class="input-grp">
                        <label for="">Bride's Email:         
                        <input type="text" name="email" placeholder="Enter Your Address" class="input-field">
                        </label>
                  </div>

                  <div class="input-grp">
                        <label for="booking_date">Wedding Date: 
                        <input type="date" id="wedding_date" name="wedding_date" class="input-field" placeholder="Select Your Wedding Date">
                        </label>
                  </div>
                  
                  <div class="input-grp">
                        <label for="">Wedding Venue:
                        <input type="text" placeholder="Select Your Wedding Place" class="input-field" name="venue">
                        </label>
                  </div>
                  </div>

                  
                  <div class="three d-flex">
                 
                  
                  <div class="input-grp">
                        <label for=""> Message:                             
                        <textarea name="message" placeholder="enter your message" required cols="20" rows="1" class="input-field" ></textarea>
                        </label>
                  </div>
                   <div class="input-grp">
                      <label for="package">Appoinment Type:
                      Face to face <input type="radio"  class="input-field" name="venue" checked>
                      Phone call<input type="radio"  class="input-field" name="venue">                
                      </label>
                  </div>
                  
                        </div>
      <button class="btn" type="submit">send</button>

      
                  </div></div>
      </div>
    </div>
    
  </div>
      </section>

       <!-- Appoinment end  -->

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
               <video width="1000" height="500" autoplay loop muted>
  <source src="images/video2.mp4" type="video/mp4" class="back-video">
  Your browser does not support the video tag.
</video>
            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   
<!-- 
   <section class="services" id="services">
      <div class="hero">
         <h1 class="heading">
            "We're here to sprinkle your special day with love, laughter, and unforgettable memories.
            Let's create the wedding of your dreams together!"
         </h1>

         <div class="service-container">
            <div class="indicator">
               <span class="btn-service" action="active"></span>
               <span class="btn-service"></span>
               <span class="btn-service"></span>
            </div>
            <div class="section">
               <div class="slide-row" id="slide">
                  <div class="slide-col">
                     <div class="user-text">
                        <h3>CATERING</h3>
                        <p>We're honored to be a part of your special day and can't wait to
                           bring your floral dreams to life. Our team of talented florists is dedicated to creating beautiful
                           arrangements that will add a touch of elegance and romance to your celebration. We're here to make
                           your wedding day blooming marvelous!</p>
                        <a class="btn btn-primary transparent-button px-3" href="catering.php" role="button">EXPLORE MORE</a>
                     </div>
                  </div>
                  <div class="slide-col">
                     <div class="user-text">
                        <h3>DECORATION</h3>
                        <p>We're thrilled to be a part of your special day, adding the perfect touch of beauty and elegance
                           to your wedding decor. Our team is dedicated to creating a breathtaking ambiance that will leave you
                           and your guests in awe. Get ready to celebrate amidst stunning decorations that will make your wedding
                           day truly magical!</p>
                        <a class="btn btn-primary transparent-button px-3" href="decoration.php" role="button">EXPLORE MORE</a>
                     </div>
                  </div>
                  <div class="slide-col">
                     <div class="user-text">
                        <h3>PHOTOGRAPHY</h3>
                        <p>We're honored to capture the precious moments of your special day through our photography.
                           With our skilled team behind the lens, we'll preserve the joy, love, and beauty of your wedding in
                           timeless images. Get ready to create memories that will last a lifetime. Let's make every click count!
                        </p>
                        <a class="btn btn-primary transparent-button px-3" href="photography.php" role="button">EXPLORE MORE</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   service section end -->



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
         <img src="images/lightning.png" alt="">
         <h3>Decoration & Lightning</h3>
         <p>Step into a world of enchantment and let us illuminate your love story with our exquisite 
            decoration and lighting services. Welcome to our "DreamDay", where dreams are transformed 
            into breathtaking realities. 
            Discover the magic of captivating ambiance and create memories that will glow forever.</p>
                  <a class="btn btn-primary transparent-button px-3" href="decoration.php" role="button">EXPLORE MORE</a>
      </div>

      <div class="box">
         <img src="images/camera.png" alt="">
         <h3>Photography</h3>
         <p>Capture the love, the joy, and the cherished memories with our wedding photography services. 
            Our talented photographers are dedicated to preserving every beautiful moment of your special day. 
            Welcome to our "DreamDay", where your love story becomes timeless art.</p>
         <a class="btn btn-primary transparent-button px-3" href="photography.php" role="button">EXPLORE MORE</a>
      </div>

      <div class="box">
         <img src="images/dinner.png" alt="">
         <h3>Catering</h3>
         <p>Delight your senses and savor the flavors of love with our exquisite wedding catering services.
             Welcome to our "DreamDay", where culinary artistry meets passion, creating a feast that reflects 
             your unique taste. Indulge in a culinary experience that will leave a lasting impression on you 
             and your guests.</p>
         <a class="btn btn-primary transparent-button px-3" href="catering.php" role="button">EXPLORE MORE</a>
      </div>

      <div class="box">
         <img src="images/wedding-cake.png" alt="">
         <h3>Wedding Cakes</h3>
         <p>Indulge in a symphony of flavors and artistry with our divine wedding cakes. Welcome to our "DreamDay", 
            where sweetness takes center stage and dreams are sculpted into edible masterpieces. Let us create 
            the perfect confectionery centerpiece for your unforgettable day.</p>
         <a class="btn btn-primary transparent-button px-3" href="cake.php" role="button">EXPLORE MORE</a>
      </div>

      <div class="box">
         <img src="images/wedding-invitation.png" alt="">
         <h3>Invitation</h3>
         <p>Elevate the anticipation and set the tone for your perfect day with our exquisite wedding invitations. 
            Welcome to our "DreamDay", where elegance meets personalization, creating invitations that reflect your
             unique love story. Join us as we unveil a world of enchanting possibilities.</p>
         <a class="btn btn-primary transparent-button px-3" href="invitation.php" role="button">EXPLORE MORE</a>
      </div>

      <div class="box">
         <img src="images/music.png" alt="">
         <h3>Entertainment</h3>
         <p>Ignite the spark of celebration with our captivating wedding entertainment services. 
            Welcome to our "DreamDay", where joy fills the air and moments of bliss come alive. 
            Let us create an unforgettable experience, where laughter, music, and dance weave a tapestry of 
            happiness on your special day.</p>
     <a class="btn btn-primary transparent-button px-3" href="entertainment.php" role="button">EXPLORE MORE</a>
      </div>


      <div class="box">
         <img src="images/bride-dress.png" alt="">
         <h3>Dress & Make-up</h3>
         <p>Enhance your natural beauty and radiate confidence on your special day with our impeccable 
            dress and makeup services. Welcome to our "DreamDay", where dreams are adorned and inner beauty
             shines through. Let us create a stunning bridal look that captures your essence and leaves you 
             feeling truly exquisite.</p>
      <a class="btn btn-primary transparent-button px-3" href="dress.php" role="button">EXPLORE MORE</a>
      </div>

      <div class="box">
         <img src="images/car-wash.png" alt="">
         <h3>Transport</h3>
         <p>Embark on a journey of love and elegance with our exceptional wedding transport services. 
            Welcome to our "DreamDay", where we ensure your arrival is as remarkable as your love story. 
            Let us whisk you away in style, creating memories that will forever be etched in your heart.</p>
      <a class="btn btn-primary transparent-button px-3" href="transport.php" role="button">EXPLORE MORE</a>
      </div>
      <div class="box">
         <img src="images/wedding-photos.png" alt="">
         <h3>Free Wedding Album</h3>
         <p>We are delighted to offer a complimentary wedding album as part of 
            our package. Our talented photographers will skillfully capture the emotions, joy, and love shared
             on your big day, creating a stunning collection of photos that will be carefully crafted into a
              timeless album.</p>
      <a class="btn btn-primary transparent-button px-3" href="album.php" role="button">EXPLORE MORE</a>
      </div>

   </div>

</section>

<!-- services section ends -->


 <!-- rewiev start -->


 <div class="review" id="review">
   <h1>CUSTOMER REVIEWS</h1>
   <div class="review-box">
      <div id="slider">
      <div class="card">
         <div class="profile">
               <img src="images/pic2.jpg" alt="">
            <div>
               <h3>Emily and James</h3>
               <p>Satisfied Client</p>
            </div>
         </div>
         <p>Working with "DreamDay" was an absolute pleasure. They took care of every detail and made our wedding day stress-free and magical. The team's professionalism and attention to detail exceeded our expectations. Highly recommended!</p>
      </div>   
      <div class="card">
         <div class="profile">
               <img src="images/pic2.jpg" alt="">
            <div>
               <h3>Hardik Ali</h3>
               <p>Satisfied Client</p>
            </div>
         </div>
         <p>We cannot thank "DreamDay" enough for their exceptional service. From the initial planning stages to the actual day, they were dedicated and attentive. Our guests were blown away by the stunning decorations and seamless coordination. It was the wedding of our dreams!</p>
      </div>   
      <div class="card">
         <div class="profile">
               <img src="images/pic2.jpg" alt="">
            <div>
               <h3>Jessica and David</h3>
               <p>Satisfied Client</p>
            </div>
         </div>
         <p>We were impressed by the expertise and professionalism of "DreamDay". The team guided us throughout the planning process, offering valuable insights and recommendations. On the day of our wedding, everything ran smoothly, allowing us to fully enjoy our celebration. Thank you!</p>
      </div>   
      <div class="card">
         <div class="profile">
               <img src="images/pic2.jpg" alt="">
            <div>
               <h3>Jennifer and Mark</h3>
               <p>Satisfied Client</p>
            </div>
         </div>
         <p>Choosing "DreamDay" was the best decision we made for our wedding. They went above and beyond to bring our vision to life. The photography captured every special moment beautifully, and the transportation arrangements were flawless. We are forever grateful!</p>
      </div>   
 </div>
      <div class="sidebar">
         <img src="images/up-img.png" alt="" id="upArrow">
         <img src="images/down-img.png" alt="" id="downArrow">
      </div>

   </div>
 </div>

 <!-- rewieve end -->

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


   <!-- java script link -->

   <script>
      var slider = document.getElementById("slider");
      var upArrow = document.getElementById("upArrow");
      var downArrow = document.getElementById("downArrow");

      let x = 0;

      upArrow.onclick = function() {
         if(x > "-900"){
               x = x - 300;
               slider.style.top = x + "px";
         }
        
      }
      downArrow.onclick = function() {
         if(x < 0){
               x = x + 300;
               slider.style.top = x + "px";
         }
        
      }

   </script>

   <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
   <script>
      var typed = new Typed (".auto-type" , {
         strings:["Let's Make Your Special Day Unforgettable!"],
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