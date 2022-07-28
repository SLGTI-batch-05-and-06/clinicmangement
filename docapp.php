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
<link rel="stylesheet" href="css/docS.css">
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
<div class="view">
    <header>Doctor Schedule</header>

    <form action="#">
    <div class="form first">
        <div class="fields">
        <div class="input-field">
            <label>Schdule Date</label>
            <input type="text" placeholder="Schdule Date" required>
        </div>
        <div class="input-field">
            <label>Schdule Date</label>
            <input type="date" placeholder="Schdule Date" required>
        </div>
        <div class="input-field">
            <label>Schdule Day</label>
            <input type="text" placeholder="Schdule day" required>
        </div>
        <div class="input-field">
            <label>Start time</label>
            <input type="time" placeholder="start time" required>
        </div>
        <div class="input-field">
            <label>End time</label>
            <input type="time" placeholder="End Date" required>
        </div>
        <div class="input-field">
            <label>Consuling  time</label>
            <input type="text" placeholder="Consuling  time" required>
        </div>
        </div>
    </div>
    <form>
</div>

    <div class="tables">
        <div class="doctor-schedule">
          <div class="heading">
            <h2>Doctor Schedule</h2>
            
          </div>
          <table class="appointment">
          <thead>
            <td>Schedule Date</td>
            <td>Schedule Day</td>
            <td>Start Time</td>
            <td>End Time</td>
            <td>Consuling Time</td>
            <td>Actions</td>

          </thead>
</table>

</div>



</div>











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
</body>
</html>