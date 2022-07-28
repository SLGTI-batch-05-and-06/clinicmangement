<?php
$FirstName = $_POST['first']
$LastName =$_POST['LastName']
$userName = $_POST['user']
$Password = $_POST['pass']
$ConformPassword = $_POST['pass1']
$Email = $_POST['email']
$Address = $_POST['addr']
$Age = $_POST['age']
$PhoneNo = $_POST['phoneno']
$Gender = $_POST['gender']
$Select = $_POST['select']

//database connection
$conn = new mysqli("localhost","root","","clinicmanagemet")
if($conn->connect_error){
    die("connection Failed : ".$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(FirstName,LastName,userName,Password,ConformPassword,Email,Address,Age,PhoneNo,Gender,Select) 
    values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssiiss",$FirstName,$LastName,$userName,$Password,$ConformPassword ,$Email,$Address ,$Age,$PhoneNo ,$Gender ,$Select);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>