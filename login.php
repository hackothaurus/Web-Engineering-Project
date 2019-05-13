<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: webproj.php"); //redirect to home page if a session is in progress
  exit;
}

require_once "PHPConnection.php";


$username = $passw = "";
$uerror = "";
$perror = "";
if (isset($_POST['username']))
{


if(empty(trim($_POST['username']))){
        $uerror = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $perror = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

     if(empty($uerror) && empty($perror)){
       $sql1="SELECT username, passw FROM Users where username = '$username' and passw = '$passw' ";

      if ($result=mysqli_query($conn,$sql1))
        {
          echo "session vars set";
          $_SESSION["loggedin"] = true;
          $_SESSION["username"] = $username;

          header("location: webproj.php");
        }
     }
     else{
       $perror = "whoops, an error occured! username ya password theek nahi hai. art does not like you.";
     }
   }

 ?>


<!doctype html>
<html>
<head>
  <script type="text/javascript">
    function hint(inp){
      if (inp.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "loginPHP.php?whatever=" + inp, true);
        xmlhttp.send();
    }
    }
  </script>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>potentpixel</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="logincss.css">
</head>
<body>

<div class="top-bar" style="z-index: 1;">
  <div class="top-bar-left">
  <ul class="menu">
  <li class="menu-text">POTENT PIXEL</li>
  <li><a href="webproj.html">Home</a></li>
  <li><a href="gallery2.html">Gallery</a></li>
  </ul>
  </div>
  <div class="top-bar-right">
  <ul class="menu">
    <li><a href="login.php">Log In</a></li>
  <li><a href="registration.php" target="_top">User Registration</a></li>
  <li><a href="profile.php">Artist Information</a></li>
  <li><a href="#">Help</a></li>
  <li> <input type="text" placeholder="Search by artist or painting">  </li>
  </ul>
  </div>
  </div>

<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="login.php">
      <p> <span><?php echo "$uerror $perror"; ?></span></p>
      <input type="text" placeholder="username" id="username" onkeyup="hint(this.value)"/>
      <p>hey i know ur password is: <span id="txtHint"></span></p>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="registration.php">Create an account</a></p>
    </form>
  </div>
</div>
</body>

</html>
