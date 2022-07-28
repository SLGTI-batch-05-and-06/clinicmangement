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
<link rel="stylesheet" href="admin.css">
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
          <i></i>
          <div class="user">
          <img src="img/thanu2-removebg-preview.png" alt="">
          </div>
        </div>
</div>

        <div class="cards">
          <div class="card">
            <div class="card-content">
              <div class="number">67</div>
              <div class="card-name">Appointment</div>
            </div>
            <div class="icon-box">
              <i class="fa fa-user-md"></i>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="number">105</div>
              <div class="card-name">Doctors</div>
            </div>
            <div class="icon-box">
              <i class="fa fa-user-md"></i>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="number">04</div>
              <div class="card-name">User</div>
            </div>
            <div class="icon-box">
              <i class="fa fa-user-md"></i>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="number">04</div>
              <div class="card-name">Services</div>
            </div>
            <div class="icon-box">
              <i class="fa fa-user-md"></i>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="number">04</div>
              <div class="card-name">packages</div>
            </div>
            <div class="icon-box">
              <i class="fa fa-user-md"></i>
            </div>
        </div>
      </div>
      <div class="tables">
        <div class="last-appintments">
          <div class="heading">
            <h2>last Appointment</h2>
            <a href ="adapoin.php" class="btn"> View All</a>
          </div>
          <table class="appointment">
          <thead>
            <td>Name</td>
            <td>doctor</td>
            <td>condition</td>
            <td>Actions</td>

          </thead>
          <tbody>
            <tr>
              <td>R.karanith</td>
              <td>DR.Saranika</td>
              <td>fracture</td>
              <td>
                <i class="fa fa-eye"></i>
                <i class="fa fa-edit"></i>
                <i class="fa fa-user"></i>
              </td>
            </tr>
            <tr>
              <td>R.karanith</td>
              <td>DR.Saranika</td>
              <td>fracture</td>
              <td>
                <i class="fa fa-eye"></i>
                <i class="fa fa-edit"></i>
                <i class="fa fa-user"></i>
              </td>
            </tr>
            <tr>
              <td>R.karanith</td>
              <td>DR.Saranika</td>
              <td>fracture</td>
              <td>
                <i class="fa fa-eye"></i>
                <i class="fa fa-edit"></i>
                <i class="fa fa-user"></i>
                
              </td>
            </tr>
            <tr>
              <td>R.karanith</td>
              <td>DR.Saranika</td>
              <td>fracture</td>
              <td>
                <i class="fa fa-eye"></i>
                <i class="fa fa-edit"></i>
                <i class="fa fa-user"></i>
              </td>
            </tr>
            <tr>
              <td>R.karanith</td>
              <td>DR.Saranika</td>
              <td>fracture</td>
              <td>
                <i class="fa fa-eye"></i>
                <i class="fa fa-edit"></i>
                <i class="fa fa-user"></i>
              </td>
            </tr>
            <tr>
              <td>R.karanith</td>
              <td>DR.Saranika</td>
              <td>fracture</td>
              <td>
                <i class="fa fa-eye"></i>
                <i class="fa fa-edit"></i>
                <i class="fa fa-user"></i>
              </td>
            </tr>
          </tbody>
</table>
        </div>

        <div class="doctor-visiting">
        <h2>Doctor visiting</h2>
            <a href ="addoc.php" class="btn1"> View All</a>
    
      <table class="visiting">
          <thead>
            <td>Icon</td>
            <td>Name</td>
            <td>visit time </td>
            <td>Detail</td>
          </thead>
          <tbody>
             <tr>
              <td><i class="fa fa-user"></td>
              <td>Tharsini</td>
              <td>14:00</td>
              <td><i class="fa fa-eye"></i></td>
             </tr>
             
             <tr>
              <td><i class="fa fa-user"></td>
              <td>Tharsini</td>
              <td>14:00</td>
              <td><i class="fa fa-eye"></i></td>
             </tr>
             <tr>
              <td><i class="fa fa-user"></td>
              <td>Tharsini</td>
              <td>14:00</td>
              <td><i class="fa fa-eye"></i></td>
             </tr>
             <tr>
              <td><i class="fa fa-user"></td>
              <td>Tharsini</td>
              <td>14:00</td>
              <td><i class="fa fa-eye"></i></td>
             </tr>
             <tr>
              <td><i class="fa fa-user"></td>
              <td>Tharsini</td>
              <td>14:00</td>
              <td><i class="fa fa-eye"></i></td>
             </tr>
          </tbody>
      </table>
      </div>


</div>
  </div>
</div>
</body>
</html>