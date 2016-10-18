<?php

    $TWRIGHT_EMAIL = "info@twcbarbershop.com";


    if (!empty($_POST)) {

        if (isset($_POST["fax"])) {
            die();
        }

        $position = $_POST["position"];
        $name = $_POST["name"];
        $email =  $_POST["email"];
        $instagram = $_POST["instagram"];
        $phone = $_POST["phone"];
        $state =  $_POST["state"];
        $city =  $_POST["city"];
        $zip = $_POST["zip"];
        $refer = $_POST["refer"];


        $msg = "Full name: " . $name . "\r\n" .
                    "Position: " . $position . "\r\n" .
                    "Email: " . $email . "\r\n" .
                    "Instagram: " . $instagram . "\r\n" .
                    "Phone Number: " . $phone . "\r\n" .
                    "State" . $state . "\r\n" .
                    "City" . $city . "\r\n" .
                    "Zip: " . $zip . "\r\n" .
                    "Referer: " . $refer;

        mail($TWRIGHT_EMAIL, "New applicant: " . $name, $msg, "From: " . $email . "\r\n");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>The Wright Cut</title>

    <link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <!-- JQUERY -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="./slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"/>
    <script type="text/javascript" src="./slick/slick.min.js"></script>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/employment.css">
</head>

<body id="home" class="dark-bg">
  <div class="header">
    <div class="logo-container">
      <a href="home.html"><img class="logo" src="img/logo.png" /></a>
      <div class="link-container">
        <a href="employment.php" class="header-link">Employment</a>
        <a href="contact.html" class="header-link">Contact</a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid" >
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="home.html">Home</a></li>
          <li><a href="appointment.html">Appointments</a></li>
          <li><a href="about.html">About <span class="sr-only">(current)</span></a></li>
          <li><a href="events.html">Events</a></li>
          <li class="mobile-only"><a href="employment.php">Employment</a></li>
          <li class="mobile-only"><a href="contact.html" >Contact</a></li>
          <!--li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li-->
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="page light-bg centered-90">
    <div class="content">
        <img class="main-image" src="img/jobs.jpg" />
        <div class="h1 title">
          Join Our Team
        </div>
        <div class="p description">
          A career with The Wright Cut features a one-of-a-kind environment with guaranteed clientele, great pay & incentives, as well as opportunities for career advancement.
        </div>
        <div class="p description">
          The Wright Cut is seeking Licensed Barbers and/or Barbers with a permit, who will be working in a High Demand, High Volume Barbershop, centrally located on a College Campus at Rutgers University in Piscataway, New Jersey with over 60,000 students. This opportunity is a career move, rather than a typical job. You will have the opportunity to build a Huge Clientele Base with customers spanning across all nationalities at Rutgers University. This Establishment is a State-of-the-Art facility that offers both walk-in and appointment style accommodations for our customers. @twcbs stays in close relation with the advancement of technology and exposure of social media which will enhance the Intellectual Property of the Barbers Brand and the Barbering Industry. Ultimately, this is a Team, and as we grow, You will grow alike!
        </div>
        <div class="p description">
          Tell us a little about yourself. Enter or select a response for each question below.
        </div>

        <?php
            if (empty($_POST)) {
        ?>

        <form method="post" action="" class="interview">
          <center>
            <label class="noselect position" for="position">Position</label><br>
            <select name="position">
                <option selected value="Barber">Barber</option>
                <option value="Stylist">Stylist</option>
                <option value="Receptionist">Receptionist</option>
                <option value="Shampooist">Shampooist</option>
            </select><br>
          </center>
          <div class = "container sub-content">
            <div class="row padded-cols spacer">
              <div class="col-xs-12 col-sm-6 form-container">
                <label class="noselect" for="email">Email Address</label><br>
                <input type="text" name="email" placeholder="email@example.com"
                           onfocus="(this.placeholder='')" onblur="(this.placeholder='email@example.com')"/><br>

                <label class="noselect" for="name">Full Name</label><br>
                <input type="text" name="name" placeholder="Tim Wright"
                           onfocus="(this.placeholder='')" onblur="(this.placeholder='Tim Wright')"/><br>

                <label class="noselect" for="phone">Phone Number</label><br>
                <input type="text" name="phone" placeholder="(000) 111 - 2222"
                           onfocus="(this.placeholder='')" onblur="(this.placeholder='(000) 111 - 2222')"/><br>

                <label  class="noselect" for="instagram">Instagram Handle</label><br>
                <input type="text" name="instagram" placeholder="@TheWrightCut"
                           onfocus="(this.placeholder='')" onblur="(this.placeholder='@TheWrightCut')"/><br>
              </div>
              <div class="col-xs-12 col-sm-6 form-container">
                <label class="noselect" for="state">State</label><br>
                <select name="state">
                    <option selected value="New Jersey">New Jersey</option>
                    <option value="Pennsylvania">Pennsylvania</option>
                    <option value="New York">New York</option>
                </select><br>

                <label class="noselect" for="city">City</label><br>
                <input type="text" name="city" placeholder="Springfield"
                            onfocus="(this.placeholder='')" onblur="(this.placeholder='Springfield')"/><br>

                <label class="noselect" for="zip">Zip Code</label><br>
                <input type="text" name="zip" placeholder="12340"
                            onfocus="(this.placeholder='')" onblur="(this.placeholder='12340')"/><br>

                <label class="noselect" for="refer">How did you hear about us?</label><br>
                <select name="refer">
                    <option selected value="a representative">The Wright Cut representative</option>
                    <option value="a walk-in">Walk-In</option>
                    <option value="an on-campus advertisement">On-campus Advertisement</option>
                    <option value="an off-campus advertisement">Off-campus Advertisement</option>
                </select><br>
              </div>
            </div>
          </div>
          <center>
            <input type="submit" class="submit" value="Apply now">
          </center>
        </form>
        <?php
            } else {
        ?>
        <center>
            <p class="thanks">Your form has been submitted! We'll get back to you shortly.</p>
        </center>
        <?php
            }
        ?>
    </div>
  </div>

  <footer class="footer">
    <p style="color:#eee;text-align:right;padding-right:5vw;">© Copyright 2016 Timothy Wright</p>
  </footer>

  <script type="text/javascript">
    $(window).scroll(function() {
      if ($(this).scrollTop() > $('.header').height()){
        $('.navbar').addClass("affix");
        $('.red-bg').addClass("affix");
      } else {
        $('.navbar').removeClass("affix");
        $('.red-bg').removeClass("affix");
      }
    });
  </script>
</body>


</html>
