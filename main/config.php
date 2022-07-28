<?php
$con = mysqli_connect('localhost','root','','clinicmanagement');

if(mysqli_connect_errno())
{
    echo "database connection error";
}