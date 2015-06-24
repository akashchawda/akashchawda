<html>
<body>
    
<?php
// Create connection
$con=mysqli_connect("localhost","registration");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
     <h1><center>Online Trainee Management Portal</h1>
     <h2><center>VECC Kolkata</h2>
     <form action="register.php" method="post">
Name: <input type="text" name="full_name">
College name: <input type="text" name="college_name">
Email id: <input type="text" name="email_id">
username: <input type="text" name="username">
password:<input type="text" name="password">
<input type="submit">
</form>



</body>
</html>