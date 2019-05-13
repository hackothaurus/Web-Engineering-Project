<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "PpDb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }

 ?>
