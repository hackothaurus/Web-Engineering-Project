<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>van Gogh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="profile_css.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src="myjs.js">
    </script>
    <script>

    </script>

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

    <div class="row">
        <div class="col-sm-3 poster marg-l">
            <h1 class="artist_name">Van Gogh</h1>
            <hr class=" marg-b">
            <img class="rounded img-fluid shadow artist_picture" src="https://media.giphy.com/media/26AHupWKXQDHhgf3q/giphy.gif" alt="">
            <hr class=" marg-b">
            <p class="artist_periods"> Periods: </p>
            <p class="artist_country"> Country: </p>
            <hr class=" marg-b">

        </div>
        <div class="col no_overflow">
          <div class="row tabs h-auto m-5 ml-1 no_border">
            <div class="btn btn-dark active mr-3" id="tab1">Works
            </div>
            <div class="btn btn-dark" id="tab2"> About
            </div>
          </div>
          <div class="row d-block " id="works">

              <div class="d-flex justify-content-center flex-wrap align-content-around felx-fill text-center marg_tb">
                  <div class="col-12 col-sm-4">
                      <div class="img-container shadow">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://tickets.holland.com/wp-content/uploads/2016/09/Zelfportret_met_vilthoed-bew.jpg" alt="">
                      </div>
                      <div class="img-container shadow">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://media.giphy.com/media/26AHupWKXQDHhgf3q/giphy.gif" alt="">
                      </div>
                      <div class="img-container shadow">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://tickets.holland.com/wp-content/uploads/2016/09/Zelfportret_met_vilthoed-bew.jpg" alt="">
                      </div>
                      <div class="img-container shadow">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://tickets.holland.com/wp-content/uploads/2016/09/Zelfportret_met_vilthoed-bew.jpg" alt="">
                      </div>
                  </div>

                  <div class="col-12 col-sm-4">
                      <div class="img-container shadow">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://tickets.holland.com/wp-content/uploads/2016/09/Zelfportret_met_vilthoed-bew.jpg" alt="">
                      </div>
                      <div class="img-container shadow">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://tickets.holland.com/wp-content/uploads/2016/09/Zelfportret_met_vilthoed-bew.jpg" alt="">
                      </div>
                      <div class="img-container shadow">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://tickets.holland.com/wp-content/uploads/2016/09/Zelfportret_met_vilthoed-bew.jpg" alt="">
                      </div>
                  </div>
                  <div class="col-12 col-sm-4">
                      <div class="img-container shadow">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://tickets.holland.com/wp-content/uploads/2016/09/Zelfportret_met_vilthoed-bew.jpg" alt="">
                      </div>
                      <div class="img-container">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://tickets.holland.com/wp-content/uploads/2016/09/Zelfportret_met_vilthoed-bew.jpg" alt="">
                      </div>
                      <div class="img-container shadow">
                          <div class="overlay position-absolute w-100 rounded">
                              <p>Nice</p>
                          </div>
                          <img class="rounded img-fluid space-images" src="https://media.giphy.com/media/26AHupWKXQDHhgf3q/giphy.gif" alt="">
                      </div>
                  </div>
              </div>
          </div>
          <div class="row d-none ml-3" id="about">
            <h1>Vincent Van Gogh</h1>
            <h6>Dutch painter</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptatum ea assumenda possimus atque enim exercitationem vero dolorum, rem at, et suscipit, saepe neque quaerat delectus dolor. Enim, eos laborum.</p>
            <hr>
            <h3>Early Life</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consectetur assumenda doloremque dolorem. Sed nostrum soluta aliquam cupiditate! Sed unde adipisci voluptatibus! Vitae alias at assumenda. Neque dignissimos alias ea!</p>
            <hr>
            <p>This artist has been viewed: <span style="font-weight:bold"><?php
                        $fp = fopen("views.txt","r+");
                        $hits = explode("-",fgets($fp, 100));
                        rewind($fp);
                        $hits[1]++;
                        fwrite($fp, $hits[0]."-".$hits[1]);
                        echo "$hits[1]";
                        fclose($fp);
                ?></span>
            times </p>
          </div>
        </div>
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

</body>

</html>
