<?php

if ($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
    // send email
    $to = "ashchow018@gmail.com";
    $subject = "Message from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\n$message";
    $header = "From: $email \r\n";
    $header .= "Cc: $email \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    if (mail($to, $subject, $body, $header)) {
      echo "Your message was sent successfully!";
    } else {
      echo "There was an error sending your message.";
    }
  } else {
    echo "All fields are required.";
  }
}

?>









<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> Classify </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="home.php">home</a>
      <a href="course.php">essentials</a>
   </nav>

   <div class="icons">
      <div id="account-btn" class="fas fa-user"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</header>

<!-- account form section starts  -->

<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">Update</span>
      <span class="btn register-btn">Logout</span>

      <form class="login-form active" action="">
        <h3>Update Profile</h3>
        <input type="Name" placeholder="enter your full name" class="box">
        <input type="ID" placeholder="enter your ID" class="box">
        <input type="Department" placeholder="enter your department" class="box">
        <input type="program" placeholder="enter your program" class="box">
        <input type="Contact" placeholder="enter your contact number" class="box">
        <input type="Date of Birth" placeholder="enter your D.O.B" class="box">
        <input type="submit" value="Update" class="btn">
     </form>

     <form class="register-form active" action="">
      <h3>Confirm to end the session</h3>
      <input type="submit" value="logout" class="btn">
     </form>

   </div>
   </div>

<!-- account form section ends -->

<!-- header section ends -->

<section class="heading-link">
   <h3>contact us</h3>
   <p> <a href="home.php">home</a> / contact </p>
</section>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">

      <form action="" method="post">
         <h3>send us a message</h3>
         <input type="text" name="name" placeholder="name" class="box">
         <input type="email" name="email" placeholder="email" class="box">
         <input type="number" name="phone" placeholder="phone" class="box">
         <textarea name="message" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
         <input type="submit" name="submit" value="send message" class="btn">
      </form>

   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq">

   <h1 class="heading">frequently asked questions</h1>

   <div class="accordion-container">

      <div class="accordion active">
         <div class="accordion-heading">
            <h3>What is Classify?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Classify is all in one classroom management system. It keeps track of notices a student needs, from all assigned tasks to announcement of your class cancellation. Besides, it holds routine of a class, library of all the academic resources and web addresses to required institutional bodies.
         </p>
      </div>
      
     
      <div class="accordion">
         <div class="accordion-heading">
            <h3>What are the features of our website?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Login Panel, Student Information, Routine of class, Announcement Panel, Automated Assigned Tasks Management, Vacant Classroom Finder, Required Links, Academic Resources, Access to Teaching Platforms.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Which feature makes our website different?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            The special feature which makes our website different from others is to fetch data from any other educational websites. You can get all notifications from those websites by an automated system.            
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>How did we implement automation?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            We used API calling to automate our system. That's why you can get all notifications of any other educational websites through our website. We've a plan to automate more websites in future.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>How many websites have we automated for now?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            We've automated 3 websites for now. 
            <br> Those are Google Classroom, Moodle & IUT LMS.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Do we have any future plan about Classify?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Yes, in future we've a plan to implement some additional features like Friends Tracker, Results publishing system etc.
         </p>
      </div>

   </div>

</section>

<!-- faq section ends -->

<!-- logo slider starts  -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide"> <img src="images/partner-logo-1.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-2.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-3.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-4.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-5.png" alt=""> </div>
      </div>
   </div>
</section>

<!-- logo slider ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3> <i class="fas fa-lightbulb"></i> Classify </h3>
         <p>Follow our Socials</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php" class="link" target="_blank">home</a>
         <a href="course.php" class="link" target="_blank">essentials</a>
         <a href="contact.php" class="link">contact</a>
      </div>

      <div class="box">
         <h3>useful links</h3>
         <a href="#" class="link">help center</a>
         <a href="#" class="link">ask questions</a>
         <a href="#" class="link">send feedback</a>
         <a href="#" class="link">private policy</a>
         <a href="#" class="link">terms of use</a>
      </div>

      <div class="box">
         <h3>newsletter</h3>
         <p>subscribe!</p>
         <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
         </form>
      </div>

   </div>

   <div class="credit"> created by <span>Team-12</span> for SPL | all rights reserved! </div>

</section>

<!-- footer section ends -->





<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>