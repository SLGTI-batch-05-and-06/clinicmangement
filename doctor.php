<?php
   include_once('main/script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
<link rel="stylesheet" href="css/doctor.css">
 <!-- Add icon library -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <ul>
        <li>
          <a href="#">
            <i class="fa fa-user-md"></i>
            <div class="title">Brand Name</div>
          </a>
        </li>
        <li>
          <a href="doctor.php">
            <i class="fa fa-th-large"></i>
            <div class="title">Dashboard</div>
          </a>
        </li>
        <li>
          <a href="docapp.php">
            <i class="fa fa-stethoscope"></i><br>
            <div class="title">Appointments</div>
          </a>
        </li>
        <li>
          <a href="docS.php">
            <i class="fa fa-user-md"></i>
            <div class="title">Doctors Schedule</div>
          </a>
        </li>
        
       
       
      </ul>
    </div>
    <div class="main">
      <div class="top-bar">
        <div class="search">
          <input type="text" name="search" placeholder="Search here">
          <lable for="search"><i class="fa fa-search"></i></lable>
          <i></i>
          <div class="user">
          <img src="img/thanu2-removebg-preview.png" alt="">
          </div>
        </div>
</div>

<section id="photoarray">
    <div class="div"><img src="img/clinic01.jpg" class="img01"></div>
    <div class="div1"><h2 class="h2"><a href="#">BOOK AND <br> APPOINTMENT</a></h2></div>
    <div class="div2"><h2 class="h2"><a href="#">FIND A <br> DOCTOR</a></h2></div>
    <div class="div3"><h2 class="h2"><a href="#">VIEW OUR <br> PACKAGES</a></h2></div>
    <div class="div4"><h2 class="h2"><a href="#">VIEWOUR <br> SERVICES</a></h2></div>






    <footer class="footer">
    <div class="footer-left">
       <img src="img/thanu2-removebg-preview.png" class="logo" ><b><p class="p3">PEOPLE CARE<BR>CLINIC</b></p> <br><br><br>
       <p class="p1">A holistic people care located in batticaloa.we offer general consultations, diabetes care dietes care,diet & nutritions advice, foot-care, eye care, medical check-ups and endocrinology services.</p>
        <div class="socials">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-tumblr"></i></a>
        </div>
    </div>
    <ul class="footer-right">
        <li>
            <h2 class="h5">GET IN TOUCH</h2>
            <P class="p5">Walk-in appointments available from 8am to 5pm</P>
                
            <ul class="box">
                <li><i class="fa fa-user">Call As: 75-4326578</i></li>
                <li><i class="fa fa-user">134 chengalady, Batticaloa</i></li>
                <li><i class="fa fa-user">open from 8am to 5pm </i></li>
</ul>
</li>
</ul>

</footer>

</section>




</div>
  </div>
</div>
</body>
</html>