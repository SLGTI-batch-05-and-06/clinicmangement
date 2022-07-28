<?php
include_once('main/script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLINIC MANAGEMENT</title>
  
  <link rel="stylesheet" href="css/login.css">
 

</head>
<body> <br>
<img src="img/thanu2-removebg-preview.png" class="logo" ><p><b>PEOPLE CARE<BR>CLINIC</b></P>
<select classb="form-select mb-3"aria-lable="Default select example">
  <option selected value="patients">PATIENTS</option>
  <option value="doctor">DOCTOR</option>
  <option value="admin">ADMIN</option>
</select>
 <div class="container"> <br>
   <div class="header">
      <h1>LOGIN</h1>
</div> <br> <br> <br> <br> <br>
<div class="main">
     <form>
        <span>
          <i ></i>
          <input type="text" placeholder="username" name="">
        </span><br>
        <span>
          <i ></i>
          <input type="password" placeholder="password" name="">

       </span> 
            <button  type="submit">LOGIN</button> <br>
            <span>
              <i class="link-text"></i>
            <a href="for.php"><b>Forgot Password ?<b></a><br>
            Don't have an account?<a href="reg.php"><b>Register here</b></a>
</span> <br> <br> 
     </form>
     
</div>
  </div>
</body>
</html>