<?php
include 'PHPConnection.php';

$typed = $_REQUEST["whatever"];

$hint = "";
$sql= "SELECT passw FROM Users WHERE username = '$typed';";


$result = mysqli_query($conn,$sql);

while ($row=mysqli_fetch_row($result))
{
echo "$row[0]";
}

 ?>
