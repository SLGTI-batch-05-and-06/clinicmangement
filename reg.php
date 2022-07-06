<?php
include_once('script.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="reg.css" class="css">
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div class="banner">
  <div class="navbar">
  <p><b>REGISTAION FORM</b></P> 
  <ul>
     <li> <a href="#">ADMIN</a></li>
     <li> <a href="#">DOCTOR</a></li>
     <li> <a href="#">PATIENTS</a></li>
</ul>
</div>
<img src="thanu2-removebg-preview.png" class="logo" >
 <div class="heater"><br>P<BR>E<BR>O<BR>P<BR>L<BR>E<BR><BR>C<BR>A<BR>R<BR>E<BR></div>
</div> <br> <br> <br> <br>
<div class="container">
   <h2>Register</h2>
     <div class="input-style"> <br><br>
      <form action="#" method="POST">
        <div class="input-name">
        <i class="fa fa-user lock"></i>
        <input type="text" placeholder="First name" class="name"> 
 <span>
        <i class="fa fa-user lock"></i>
        <input type="text" placeholder="Last name" class="name">

        </span> <br><br>
        <div class="input-name">
        <i class="fa fa-user lock"></i>
        <input type="text" placeholder="User name" class="name">
       </div>
       <div class="input-name"><br><br>
        <i class="fa fa-unlock-alt lock"></i>
        <input type="password" placeholder="Password" class="text-name">
       </div>
       <div class="input-name"><br><br>
        <i class="fa fa-unlock-alt lock"></i>
        <input type="password" placeholder="Conform Password" class="text-name">
       </div>
      <div class="input-name"><br><br>
        <i class="fa fa-envelope email lock"></i>
        <input type="emali" placeholder="E-mali" class="text-name">
       </div>
       <div class="input-name"><br><br>
        <i class="fa fa-address-card-o lock"></i>
        <input type="text" placeholder="Address" class="name">
       </div>
       <div class="input-name"><br><br>
        <i class="fa fa-user lock"></i>
        <input type="text" placeholder="Age" class="name">
       </div>
       <div class="input-name"><br><br>
        <i class="fa fa-phone lock"></i>
        <input type="text" placeholder="Phone number" class="name">
       </div>
       <div class="input-name"><br><br>
        <input type="radio" class="radio-button" name="r1">
        <label style="margin-right:40px;">Male</label>

        <input type="radio" class="radio-button" name="r1">
        <label>Female</label>
       </div>
       <div class="input-name"><br>
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
              
      



      </div>




</div>



</div>
  
</body>
</html>

