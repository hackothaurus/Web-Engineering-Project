


<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>potentpixel registration</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="registrationform.css">
</head>

<div class="top-bar" style="z-index: 1; font-family: Times New Roman";>
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">POTENT PIXEL</li>
<li><a href="webproj.html">Home</a></li>
<li><a href="gallery2.html">Gallery</a></li>
</ul>
</div>
<div class="top-bar-right">
<ul class="menu">
  <li><a href="login.html">Log In</a></li>
<li><a href="registration.html" target="_top">User Registration</a></li>
<li><a href="profile.html">Artist Information</a></li>
<li><a href="#">Help</a></li>
<li> <input type="text" placeholder="Search by artist or painting">  </li>
</ul>
</div>
</div>

<form action="registrationPHP.php" method="post">
  <div class="sign-in-form">

    <h4 class="text-center">Sign Up</h4>
    <div class="col-sm-4">
    <label for="sign-in-form-username">Username</label>
    <input type="text" name="username" class="sign-in-form-username" id="sign-in-form-username">
    <label for="pass">Password</label>
    <input type="password" name="password" class="sign-in-form-username" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
    <p>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</p>
    <hr>
    <label for="add">Email Address</label>
    <input name="email" type="text" class="myformElement" id="add" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

    </div>
    <div class="col-sm-4">
  <!--  <label for="genderr">Gender</label>
    <hr>
    <input type="radio" name="gender" class="sign-in-form-username" id="genderr">Male<br>
    <input type="radio"  name="gender" class="sign-in-form-username" id="genderr">Female<br>
    <input type="radio"  name="gender" class="sign-in-form-username" id="genderr">Other<br> -->
    </div>

    <div class="col-sm-4">
    <label for="brum">Date of Birth</label>
    <input type="date" class="sign-in-form-username" id="brum">


    <label for="lmao">Are you an admirer of art</label>
    <hr>
    <input type="radio" name="no" class="sign-in-form-username" id="lmao">Yes<br>
    <input type="radio" name="no" class="sign-in-form-username" id="lmao">Yes Indeed!<br>

    </div>
    <button type="submit" class="sign-in-form-button">Sign Up</button>
  </div>

  <div class="callout large secondary">
  <div class="row">
  <div class="large-4 columns">
  <h5>Vivamus Hendrerit Arcu Sed Erat Molestie</h5>
  <p>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit.</p>
  </div>
  <div class="large-2 large-offset-3 columns">
  <ul class="menu vertical">
  <li><a href="#">One</a></li>
  <li><a href="#">Two</a></li>
  <li><a href="#">Three</a></li>
  <li><a href="#">Four</a></li>
  </ul>
  </div>
  <div class="large-2 columns">
  <ul class="menu vertical">
  <li><a href="#">One</a></li>
  <li><a href="#">Two</a></li>
  <li><a href="#">Three</a></li>
  <li><a href="#">Four</a></li>
  </ul>
  </div>
  </div>
    </div>

</form>
