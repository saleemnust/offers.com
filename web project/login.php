<?php
//session_start();
include 'facebook_login.php';
include 'login_user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>get all offers around you</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 


    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Monsterrat:400,700|Merriweather:400,300italic,700' rel='stylesheet' type='text/css'>
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Magnific Popup-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Bootstrap  -->
    
    <!-- Cards -->
    <link rel="stylesheet" href="css/cards.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
      <link rel="stylesheet" href="rabia/loginsignup.css">

  <style type="text/css">
  .navbar-default .navbar-nav > li.dropdown:hover > a, 
  .navbar-default .navbar-nav > li.dropdown:hover > a:hover,
  .navbar-default .navbar-nav > li.dropdown:hover > a:focus {
      background-color: rgb(231, 231, 231);
      color: rgb(85, 85, 85);
  }
  li.dropdown:hover > .dropdown-menu {
      display: block;
  }
  </style>

</head>
<body  style="background-color: white">
<div id="wrapper">

    <!-- start header -->
        <header>
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                       <li><a href="index.php">Home</a></li> 
            <li><a href="create_offer.php">Create offer</a></li>
                        <li ><a href="meet_team.php">Meet the Team</a></li>
             <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.php">Our Company</a></li>
                            <li><a href="meet_team.php">Our Team</a></li>
                            <li><a href="#">News</a></li> 
                            <li><a href="#">Investors</a></li>
                    <li class="dropdown" >
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="left: 158px; top: -3px;">
                            <li><a href="about.php">Our Company</a></li>
                            <li><a href="meet_team.php">Our Team</a></li>
                            <li><a href="#">News</a></li> 
                            <li><a href="#">Investors</a></li>
                        </ul>
                    </li>
                       
                        </ul>
                    </li>
                        <li><a href="contact.php">Contact us</a></li>
                        <?php
                        if(isset($_SESSION['logged_in_user'])){
                          echo "<li class='active'><a href='logout.php'>Logout</a></li>";
                        }
                        else
                        {
                          echo "<li class='active'><a href='login.php'>Login</a></li>";
                        }
                        ?>

                    <li><a href="profile.php" class="btn btn-primary btn-xs" style="background-color:#ffffff"  ><span class="glyphicon glyphicon-log-out" ></span> <?php if(isset($_SESSION['logged_in_user'])) {echo $_SESSION['logged_in_user'];} ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Login/Signup</h2>
            </div>
        </div>
    </div>
    </section>
  </div>

  <div class="form">
      
      <ul class="tab-group" >
        <li class="tab active" ><a href="#login"  style="background-color: #a51451" id="loginButton">Log In</a></li>
        <li class="tab "><a href="#signup" style="background-color: black"  id="signupButton">Sign Up</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="login">             
          <form method="post" action= "login_user.php">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required name="email" autocomplete="on" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  value="b1@gmail.com">
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required name="password" autocomplete="on" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  value="Pak@123.">
          </div>

  <div class="field-wrap">
    <div>
      <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["email_cookie"])) { ?> checked <?php } ?>>
    <label for="remember-me">Remember me</label>
  </div>
</div>
              <p class="forgot"><a href="forgot_password.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" style="background-color: #a51451">Log In</button>

          </form>

        </div>
        <div id="signup">   
          
          <form method="post" action="verification.php">
          
          <div class="top-row">
            <div class="field-wrap">
              <input type="text" id="firstname" name="fname" placeholder="First Name"  required />
            </div>
        
            <div class="field-wrap">
              <input type="text" id="lastname" name="lname" placeholder="Last name" />
            </div>
          </div>

          <div class="field-wrap">
            <input type="email" placeholder="Email" name="email" id="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />
          </div>
          
          <div class="field-wrap">
            <input type="password" placeholder="Password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
          </div>

          <button type="submit" name="get_started" onclick="loadDoc()" class="button button-block" style="background-color: #a51451"> Get Started </button><br>
          <?php
          loginThroughFacebook();
          ?> 
          </form>

        </div>
      </div>  <!-- tab-content -->
</div> <!-- /form -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="rabia/login.js"></script>

    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Our Contact</h5>
                    <address>
                    <strong>offers.com</strong><br>
                    National university of sciences and technology<br>
                    Islamabad.</address>
                    <p>
                        <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
                        <i class="icon-envelope-alt"></i> offers@gmail.com
                    </p>
                </div>
            </div>
             <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Motto</h5>
                        Love Pakistan love people of Pakistan
              </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Quick Links</h5>
                    <ul class="link-list">
                        <li><a href="#">Latest Events</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Macro 2016 All right reserved. By </span><a href="http://webthemez.com" Macro="_blank">Caos Group</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="https://www.facebook.com" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.pinterest.com" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="https://www.googleplus.com" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
 <script>
$(document).ready(function()
{

        $('#signupButton').click(function()
  {
        $("#loginButton").css('background-color','black');
        $(this).css('background-color',"#a51451");
  });
        $('#loginButton').click(function(){
        $("#signupButton").css('background-color','black');
        $(this).css('background-color',"#a51451");
  });
});

 </script>
  <script type="text/javascript">
    function loadDoc() {
 // var fname = document.getElementById("firstname").value;
  var email = document.getElementById("email").value;
  //nam = fname+" "+lname;
  var dep = "email_address";
  var flag = false;
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var searching=JSON.parse(this.responseText);
        if(searching["email_address"]==undefined||dep==null)
          alert("***No such name Exists");
          //window.location = "login.php"; 

        else
        {
          for (var i = 0; i <= searching[dep].length; i++) 
          {
            if(searching[dep][i]==email)
            {
              flag=true;
              break;

            }
            else
            {
              flag=false;
            }

          }
          if(flag == true)
          {
            alert("You already have an account associated with this email. You should login with this account or choose a differnt email address");
            window.location = "login.php";

          }
          else
          {
            //alert("No such Name Exists");
            //window.location = "verification.php";
          }

        }

    }

  };
  xhttp.open("GET", "username.json", true);
  xhttp.send();
}
</script>




</body>
</html>
