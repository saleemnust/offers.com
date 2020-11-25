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
<!-- Vendor Styles -->
<link href="css/magnific-popup.css" rel="stylesheet"> 
<!-- Block Styles -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/gallery-1.css" rel="stylesheet"> 

<style type="text/css">
	
	img.cs-rounded-circle {
    border-radius: 50%;
    width: 300px;
    height: 300px;
    margin: 0px auto;
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
                        <li ><a href="create_offer.php">Create offer</a></li>
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
                        <li><a href="contact.php">Contact us</a></li>
                       
                        <?php
                        if(isset($_SESSION['logged_in_user'])){
                          echo "<li ><a href='logout.php'>Logout</a></li>";
                        }
                        else
                        {
                          echo "<li><a href='login.php'>Login</a></li>";
                          header("Location: login.php");
                        }
                        ?>

                    <li><a href="profile.php" class="btn btn-primary btn-xs" style="background-color:#ffffff"  ><span class="glyphicon glyphicon-log-out" class = 'active'></span> <?php if(isset($_SESSION['logged_in_user'])) {echo $_SESSION['logged_in_user'];} ?></a></li>

                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </header>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Profile</h2>
			</div>
		</div>
	</div>
	</section>	
			  <!-- Start Gallery 1-2 -->
<center>
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
    	 	<div class="container">

			
            <!-- /.gallery-filter -->
            
            <div class="row">
                <div id="isotope-gallery-container">
                    <div class="col-md-6 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative " >
                        <div class="gallery-item">
                            <div class="gallery-thumb ">
                                <img src="azizi/images/saleem.jpg" class="img-responsive cs-rounded-circle" alt="1st gallery Thumb" >
                                <div class="image-overlay"></div>
                                <a href="azizi/images\saleem.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="https://www.facebook.com/uzairziaulislam?ref=br_rs" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
	                                <h5><?php if(isset($_SESSION['logged_in_user'])) {echo  ucwords($_SESSION['logged_in_user']);} ?>   
                                    </h5>
                                    <?php 
                                    if(isset($_SESSION['logged_in_user_email']))
                                    {
                                    $session_email =$_SESSION['logged_in_user_email'];
                                    $query = "select * from verified_user where email = '$session_email'";
                                    $result = $conn->query($query);
                                    while ($row = mysqli_fetch_array($result)) 
                                    {
                                       $email= $row['email'];
                                    }
                                    echo $email;

                                    }
                                    ?>
                            	</div>
                            </div>
                        </div>
                    </div>
                  

            <!-- /.row --> 
</section>
</center>
    <!--// End Gallery 1-2 -->  



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
 
</body>
</html>