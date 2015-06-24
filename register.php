<?php
// Create connection
$con=mysqli_connect("localhost","root","","registration");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$full_name=$_POST['full_name'];
$college_name=$_POST['college_name'];
 $email_id=$_POST['email_id'];
 $username=$_POST['username'];
 $password=$_POST['password'];

$sql="INSERT INTO userregistration (Full_Name,College_Name,Email_id,username,password)
VALUES ('$full_name', '$college_name', '$email_id', '$username', '$password')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
else
    echo "1 record added and done";

mysqli_close($con);


?>
