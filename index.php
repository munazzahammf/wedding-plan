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

   <!--  css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/cal.css">

   <!-- java script link -->
    <script src="java-script/cal.js"></script>

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Dream<span>Day</span></a>

         <nav class="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#packages">Packages</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">Login</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

   <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Let's Make Your Special Day Unforgettable!</h3>
            <a href="#contact" class="link-btn">Book Now</a>
         </div>
      </div>
      
   <!-- calender system start-->

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


   <!-- calender system ends-->

      

   </div>

</section>

<!-- home section ends -->


<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 content">
            <span>About Us</span>
            <h3>We are thrilled that you have choosen to explore our platform and trust us with one of the most important days of your life.</h3>
            <p>Our team of experienced wedding planners is committed to making your special day unforgettable. We understand that planning a wedding can be stressful and time-consuming, which is why we offer a comprehensive range of services to ensure that everything runs smoothly. Whether you need help with venue selection, catering, or entertainment, we have the expertise and resources to create a personalized plan that meets your unique needs and preferences.</p>
            <a href="#contact" class="link-btn">Explore More</a>
         </div>

         <div class="col-md-4 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- service section starts -->

<section class="services" id="services">


   <div class="service-container">
      <h1>
         Our Wedding Is <br> Your Priority. <br> Hope You Are <br> Together.
      </h1>
   </div>

   <div class="row">
  
  <div class="column">
    <img src="images/floral.jpg" class="w-100 mb-5 mb-md-0" alt="floral" >
  </div>
  <div class="column">
    <img src="images/catring.jpg" class="w-100 mb-5 mb-md-0" alt="catering" >
  </div>
  <div class="column">
    <img src="images/deco.jpg" class="w-100 mb-5 mb-md-0" alt="decoration" >
  </div>
   <div class="column">
    <img src="images/photo.jpg" class="w-100 mb-5 mb-md-0" alt="photography" >
  </div>
 
</div>

</section>

<!-- service section ends -->


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
         <p>8.00am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>munazzahammf@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span> Wedding-Plan</span>  </div>

</section>

<!-- footer section ends -->



</body>
</html>