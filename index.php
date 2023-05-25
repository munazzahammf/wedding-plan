<?php

?>


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

   <!-- bootstrap edited classes -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">

   <!--  css file link  -->
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/cal.css">



</head>

<body>

   <!-- header section starts  -->

   <header class="fixed-top">

      <!-- <div class="container"> -->

      <!-- <div class="d-flex align-items-center justify-content-between"> -->


      <!-- <nav class="nav">
               <a href="#home">Home</a>
               <a href="#about">About</a>
               <a href="#services">Services</a>
               <a href="#packages">Packages</a>
               <a href="#contact">contact</a>
            </nav> -->

      <nav class="navbar navbar-expand-lg bg-body-tertiary header">
         <div class="w-100 d-flex justify-content-between">


            <a href="#home" class="logo">Dream<span>Day</span></a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                  <li class="nav-item">
                     <a class="nav-link" href="#contact-us">Contact Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="link-btn" href="#login">Login</a>
                  </li>
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
               <a href="#contact" class="link-btn">Book Now</a>
            </div>



            <!-- calender section starts -->

            <div class="contianer">
               <div class="calendar">
                  <div class="calendar-header">
                     <span class="month-picker" id="month-picker"> May </span>
                     <div class="year-picker" id="year-picker">
                        <span class="year-change" id="pre-year">
                           <pre><</pre>
                        </span>
                        <span id="year">2020 </span>
                        <span class="year-change" id="next-year">
                           <pre>></pre>
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

   <!-- services section starts  -->

   <section class="services" id="services">

      <div class="text">
         <h1 class="heading">
            "We're here to sprinkle your special day with love, laughter, and unforgettable memories.
            Let's create the wedding of your dreams together!"
         </h1>
      </div>
      <div class="box-container container">

         <div class="box1">
            <h3>FLORAL</h3>
            <p>We're honored to be a part of your special day and can't wait to
               bring your floral dreams to life. Our team of talented florists is dedicated to creating beautiful
               arrangements that will add a touch of elegance and romance to your celebration. We're here to make
               your wedding day blooming marvelous!</p>
         </div>

         <div class="box2">
            <h3>CATERING</h3>
            <p>We're delighted to be a part of your culinary journey and help create a delightful dining experience
               for you and your guests. Our dedicated catering team is committed to crafting a menu that reflects your
               tastes, satisfies your cravings, and leaves a lasting impression. Get ready to savor delectable flavors
               and enjoy exceptional service on your special day.</p>
         </div>

         <div class="box3">
            <h3>DECORATION</h3>
            <p>We're thrilled to be a part of your special day, adding the perfect touch of beauty and elegance
               to your wedding decor. Our team is dedicated to creating a breathtaking ambiance that will leave you
               and your guests in awe. Get ready to celebrate amidst stunning decorations that will make your wedding
               day truly magical!</p>
         </div>

         <div class="box4">
            <h3>PHOTOGRAPHY</h3>
            <p>We're honored to capture the precious moments of your special day through our photography.
               With our skilled team behind the lens, we'll preserve the joy, love, and beauty of your wedding in
               timeless images. Get ready to create memories that will last a lifetime. Let's make every click count!
            </p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- packages section starts  -->

   <section class="packages">
      <h1>Love is in the air! Welcome to our timeless wedding plan packages page.....</h1>
      <div class="container">
         <div class="package">
            <div class="package-details">
               <h2>Silver Package</h2>
               <p>Wedding ceremony coordination</p>
               <p>Venue selection assistance</p>
               <p>Vendor recommendations and referrals</p>
               <p>Wedding day timeline creation and management</p>
               <p>Price: $1,500</p>
               <a href="#package" class="link-btn">Book Now</a>
            </div>
         </div>

         <div class="package">
            <div class="package-details">
               <h2>Gold Package</h2>
               <p>All features of the Silver Package</p>
               <p>Personalized wedding theme and design consultation</p>
               <p>Full vendor coordination and management</p>
               <p>Assistance with wedding invitations and stationery</p>
               <p>Price: $3,000</p>
               <a href="#package" class="link-btn">Book Now</a>
            </div>
         </div>

         <div class="package">
            <div class="package-details">
               <h2>Platinum Package</h2>
               <p>All features of the Gold Package</p>
               <p>Complete wedding planning and design services from start to finish</p>
               <p>Unlimited consultations and personalized guidance</p>
               <p>Pre-wedding events coordination</p>
               <p>Price: $00</p>
               <a href="#package" class="link-btn">Book Now</a>
            </div>
         </div>
      </div>
   </section>

   <!-- packages section ends  -->

   <!-- contact us  ends  -->

   <section class="contact-us">
      <header>
         <h1>Contact Us</h1>
      </header>

      <div class="container">
         <form id="contact-form" method="POST" action="submit_form.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Submit">
         </form>
      </div>
   </section>

   <!-- contact us ends  -->


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
   <script src="java-script/cal.js"></script>
   <script src="java-script/script.js"></script>
</body>

</html>