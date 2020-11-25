<?php
include 'database_connection.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>get all offers around you</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style type="text/css"> 
 .fa {
    padding: 20px;
    font-size: 30px;
    width: 100px;
    text-align: center;
    text-decoration: none;
    margin: 15px 2px;
  }

  .fa:hover {
      opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .fa-google {
    background: #dd4b39;
    color: white;
  }

  .fa-linkedin {
    background: #007bb5;
    color: white;
  }

  .fa-instagram {
    background: #125688;
    color: white;
  }
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
<body>

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
                        <li><a href="meet_team.php">Meet the Team</a></li>
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
                        <li class="active"><a href="contact.php">Contact us</a></li>
                   <?php
                        if(isset($_SESSION['logged_in_user'])){
                          echo "<li><a href='logout.php'>Logout</a></li>";
                        }
                        else
                        {
                          echo "<li><a href='login.php'>Login</a></li>";
                        }
                        ?>

                    <li><a href="profile.php" class="btn btn-primary btn-xs" style="background-color:#ffffff"  ><span class="glyphicon glyphicon-log-out" ></span> <?php if(isset($_SESSION['logged_in_user'])) {echo $_SESSION['logged_in_user'];} ?></a></li>

                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>

	<section id="content">
	
	<div class="container">
	<div class="row">
	<div class="col-md-6">
			

			<a href="https://www.facebook.com" class="fa fa-facebook"></a>
			<a href="https://twitter.com" class="fa fa-twitter"></a>
			<a href="https://google.com" class="fa fa-google"></a>
			<a href="https://linkedin.com" class="fa fa-linkedin"></a>
			<a href="https://instagram.com" class="fa fa-instagram"></a><br><br><br><br>


		   <!-- Form itself -->
    <form name="sentMessage" id="contactForm">
		 <div class="control-group">
          <div class="controls">
  			       <input type="text" class="form-control"  pattern="[A-Za-z ' ']{3,}"
  			   	    placeholder="Full Name" id="name" required ></p>
  		   </div>
	    </div> 	        
        <div class="control-group">
             <div class="controls">
        			<input type="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" id="email" required> </p>
        		</div>
      	 </div> 	

        <div class="control-group">
            <div class="controls">
        				 <textarea rows="10" cols="100" class="form-control" 
                               placeholder="Message" id="message" required>               
                 </textarea>
        		</div>
        </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	          <button type="submit" class="btn btn-primary pull-right">Send</button><br />
    </form>
  </div>
<div class="col-md-6">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
</script><div style="overflow:hidden;height:500px;width:600px;">
<br><br><br><br><br><br><br>

	<div id="gmap_canvas" style="height:500px;width:600px;"></div>
	<style>
	#gmap_canvas img
	{max-width:none!important;
		background:none!important
	}
</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div>
<script type="text/javascript">
 function init_map()
 {
 	var myOptions = {zoom:14,center:new google.maps.LatLng(33.642537,72.990474),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);

 	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(33.642537, 72.990474)});

 	infowindow = new google.maps.InfoWindow({content:"<b>NUST</b><br/>CR 7, School of Electrical Engineering and Computer Sciences(SEECS)<br/> Islamabad" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);
 	});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>
							</div>
	</div>
 
	</section>




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
    </footer></div>
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
<script src="js/animate.js"></script> 
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
</body>
</html>