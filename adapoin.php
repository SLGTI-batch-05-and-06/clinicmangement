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
<link rel="stylesheet" href="adapoin.css">
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
          <a href="adimn.php">
            <i class="fa fa-th-large"></i>
            <div class="title">Dashboard</div>
          </a>
        </li>
        <li>
          <a href="adapoin.php">
            <i class="fa fa-stethoscope"></i><br>
            <div class="title">Appointments</div>
          </a>
        </li>
        <li>
          <a href="addoc.php">
            <i class="fa fa-user-md"></i>
            <div class="title">Doctors</div>
          </a>
        </li>
        
        <li>
          <a href="addocS.php">
            <i class="fa fa-user-md"></i>
            <div class="title">Doctors Schedule</div>
          </a>
        </li>
        
        <li>
          <a href="aduser.php">
            <i class="fa fa-user-md"></i>
            <div class="title">User</div>
          </a>
        </li>
       
      </ul>
    </div>
    <div class="main">
      <div class="top-bar">
        <div class="search">
          <input type="text" name="search" placeholder="Search here">
          <lable for="search"><i class="fa fa-search"></i></lable>
          <i class="fa fa-bell"></i>
          <div class="user">
          <img src="img/thanu2-removebg-preview.png" alt="">
          </div>
        </div>
</div>

        <div class="cards">
          <div class="card">
            <div class="card-content">
              <div class="number"></div>
              <div class="card-name">Today Appointment</div>
            </div>
            <div class="icon-box">
              <i class="fa fa-stethoscope"></i>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="number"></div>
              <div class="card-name">Yesterday Appointment</div>
            </div>
            <div class="icon-box">
              <i class="fa fa-stethoscope"></i>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="number"></div>
              <div class="card-name">one week appointment</div>
            </div>
            <div class="icon-box">
              <i class="fa fa-stethoscope"></i>
            </div>
          </div>
          <div class="tables">
        <div class="last-appintments">
          <div class="heading">
            
            
          </div>
          <table class="appointment">
          <thead>
            <td>Name</td>
            <td>doctor Name</td>
            <td>condition</td>
            <td>Actions</td>

          </thead>
          
</table>
        </div>
        </div>
      </div>
      
      </div>


</div>
  </div>
</div>
</body>
</html>