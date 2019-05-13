<?php
include 'PHPConnection.php';
echo"hndgj";



$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
echo "$username";


  $query1 = "SELECT * FROM Users WHERE username='$username';";
  $stmt= mysqli_query($conn,$query1);

  if(!(mysqli_num_rows($stmt) > 0)){
    $query = "INSERT INTO Users(username, passw, email) values('$username','$password','$email');";

  if(mysqli_query($conn, $query)){
    echo"inserted";}

  }

 ?>
