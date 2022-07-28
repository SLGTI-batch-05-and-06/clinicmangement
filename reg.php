<?php
include_once('main/script.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="css/reg.css" class="css">
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="heater"><br>P<BR>E<BR>O<BR>P<BR>L<BR>E<BR><BR>C<BR>A<BR>R<BR>E<BR></div>
</div> <br> <br> <br> <br>
  <div class="banner">
  <div class="navbar">
  <p><b>REGISTAION FORM</b></P> 
  <ul>
     <li> <a href="login.php">Login</a></li>
    
     
</ul>
</div>
<img src="img/thanu2-removebg-preview.png" class="logo" >

<div class="container">


   <h2>Register</h2>
     <div class="input-style"> <br><br>
      <form action="data/connect.php" class="form" id="form" method="POST">
        <div class="input-name">
        <i class="fa fa-user lock"></i>
        <input type="text" placeholder="First name" class="name" id="first" name="first"> 
        <div class="span"></div>
 <span>
        <i class="fa fa-user lock"></i>
        <input type="text" placeholder="Last name" class="name" id="last" name="LastName" >
        <div class="span"></div>
        </span> <br><br>
        <div class="input-name">
        <i class="fa fa-user lock"></i>
        <input type="text" placeholder="User name" class="name" id="username"name="user" >
        <div class="span"></div>
      </div>
       <div class="input-name"><br><br>
        <i class="fa fa-unlock-alt lock"></i>
        <input type="password" placeholder="Password" class="text-name" id="password" name="pass">
        <div class="span"></div>
       </div>
       <div class="input-name"><br><br>
        <i class="fa fa-unlock-alt lock"></i>
        <input type="password" placeholder="Conform Password" class="text-name" id="password2" name="pass1">
        <div class="span"></div>
       </div>
      <div class="input-name"><br><br>
        <i class="fa fa-envelope email lock"></i>
        <input type="emali" placeholder="E-mali" class="text-name" id="email" name="Email">
        <div class="span"></div>
       </div>
       <div class="input-name"><br><br>
        <i class="fa fa-address-card-o lock"></i>
        <input type="text" placeholder="Address" class="name" id="address" name="addr">
        <div class="span"></div>
       </div>
       <div class="input-name"><br><br>
        <i class="fa fa-user lock"></i>
        <input type="text" placeholder="Age" class="name" id="age" name="age">
        <div class="span"></div>
       </div>
       <div class="input-name"><br><br>
        <i class="fa fa-phone lock"></i>
        <input type="text" placeholder="Phone number" class="name" id="phone" name="phoneno">
        <div class="span"></div>
       </div>
       <div class="input-name"><br><br>
        <input type="radio" class="radio-button" name="r1" value="m">
        <label style="margin-right:40px;">Male</label>

        <input type="radio" class="radio-button" name="r1" value="f">
        <label>Female</label>
       
       </div>
       <div class="input-name" name="select"><br>
         <select class="city">
          <option>Select a city</option>
          <option>Batticaloa</option>
          <option>Jaffna</option>
          <option>Vavuniya</option>
          <option>Kilinichchi</option>
          <option>Ampara</option>
          <option>Kandy</option>
</select>
    <div class="arrow"></div>
    
</div>

<div class="input-name"><br>
  <input type="checkbox" id="cb" class="check-button">
  <label for="cb" class="check">I Accept the terms and conditions</label>
</div>

<div class="input-name"><br>
  <input type="Submit" class="button" value="Register">
  
</div>






      </form>
      <script src ="inculed/rgs.js"></script>       
      



      </div>

</div>

</div>
<img src="img/doctor.png" class="img">
<div class="tables">
        <div class="last-appintments">
          <div class="heading">
            
            
          </div>
          <table class="appointment">
          <thead>
          <td>First name</td>
            <td>Last name</td>
            <td>User name </td>
            <td>Password</td>
            <td>Conform Password</td>
            <td>E-mali</td>
            <td>Address</td>
            <td>Age</td>
            <td>Phone number</td>
            <td>select</td>
            <td>Action</td>




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

