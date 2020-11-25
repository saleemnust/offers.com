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
<body  style="background-color: #B2BABB">
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
						<li class="active"><a href="create_offer.php">Create offer</a></li>
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
                          echo "<li><a href='logout.php'>Logout</a></li>";
                        }
                        else
                        {
                          //echo "<li><a href='login.php'>Login</a></li>";
		                     echo "<script type='text/javascript'>alert('You must log in first');
                      window.location='login.php';
                      </script>";
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
                <h2 class="pageTitle">Create offer</h2>
            </div>
        </div>
    </div>
    </section>



        <div class="fh5co-pricing-style-2"  style="background-color: #B2BABB">
            <div class="container">
                <div class="row">
                    <div class="row p-b">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Pricing Plans</h2>

							<div id="div1"></div>



                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">We provide different plans. You can choose the best suited for you. </p>
                            <button id="button1">click here for more info</button>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pricing">
                    <div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
                         <h3 class="pricing-title">Basic</h3>
                         <p class="pricing-sentence">One day offer</p>
                         <div class="pricing-price"><span class="pricing-currency">$</span>10<span class="pricing-period">/ day</span></div>
                         <ul class="pricing-feature-list">
                             <li class="pricing-feature">Offer will be available on </li>
                             <li class="pricing-feature">website for a day.</li>

                         </ul>
                         <button class="btn btn-success btn-outline">Choose plan</button>
                     </div>
                     <div class="pricing-item pricing-item--featured wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
                        <h3 class="pricing-title">Standard</h3>
                         <p class="pricing-sentence">three day offer</p>
                         <div class="pricing-price"><span class="pricing-currency">$</span>20<span class="pricing-period">/ 3day</span></div>
                         <ul class="pricing-feature-list">
                             <li class="pricing-feature">Offer will be available on </li>
                             <li class="pricing-feature">website for three days.</li>

                         </ul>
                         <button class="btn btn-success btn-lg">Choose plan</button>
                     </div>
                     <div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
                        <h3 class="pricing-title">Enterprise</h3>
                         <p class="pricing-sentence">Five day offer</p>
                         <div class="pricing-price"><span class="pricing-currency">$</span>40<span class="pricing-period">/ 5day</span></div>
                         <ul class="pricing-feature-list">
                             <li class="pricing-feature">Offer will be available on </li>
                             <li class="pricing-feature">website for five days.</li>

                         </ul>
                         <button class="btn btn-success btn-outline">Choose plan</button>
                     </div>
                 </div>
              </div>
            </div>
        </div>
        







<div class="container">
<div class="col-lg-9">
<br>

  <div class="progress" style="margin-left: 200px;">

 <div class="progress progress-striped active">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>
</div>


  <form enctype="multipart/form-data" class=" form-horizontal" action="index.php" method="post"  id="reg_form">
    <fieldset>
    	        <legend> Account information </legend>
        <fieldset>
        <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">
        E-Mail
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="format: caos@gmail.com.">*</a>
    	</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required placeholder="E-Mail Address" class="form-control"  type="text">
          </div>
        </div>
      </div>
     <div class="form-group">
        <label class="col-md-4 control-label">
        Account Number
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="format: 123456789101.">*</a>
    	</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="account_number" pattern="[0-9]{12}"  required placeholder="Account Number" class="form-control"  type="text">
          </div>
        </div>
      </div>
     </fieldset>
   <legend> Offer Details </legend>
     <fieldset>   
     <div class="form-group">
        <label class="col-md-4 control-label" >
        Product Name
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="adidas, puma etc.">*</a>
    	</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="product_name" required placeholder="Please enter your product name" class="form-control"  type="text">
          </div>
        </div>
      </div>
            
      <div class="form-group">
        <label class="col-md-4 control-label">
        Phone #
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="enter your mobile number.">*</a>
    	</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input name="phone" pattern="[0-9]{4}-[0-9]{7}"  required placeholder="0301-6063167" class="form-control" type="text">
          </div>
        </div>
      </div>
            
      <div class="form-group">
        <label class="col-md-4 control-label">
        Address
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="enter your complete address.">*</a>
    	</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="address" required placeholder="Address" class="form-control" type="text">
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label">
        City
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="enter your city name here.">*</a>
    	</label>
        
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="city" pattern="[A-Za-z]{3,}" required placeholder="city" class="form-control"  type="text">
          </div>
        </div>
      </div>
            	 

      <div class="form-group">

        <label class="col-md-4 control-label">
        	   Zip Code
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="enter your city zip code.">*</a>
       </label>

 
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="zip" pattern="[0-9]{3,}" required placeholder="Zip Code" class="form-control"  type="text">

          </div>
        </div>
      </div>


     <div class="form-group">
        <label class="col-md-4 control-label" >
        Discount
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="total discount on product.">*</a>
    	</label>
        
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="discount" pattern="[0-9]{1,2}%" required placeholder="Please enter the discount on product (format: 0%)" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
    
        <div class="form-group">
        <label class="col-md-4 control-label"> 
        Offer description 
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="complete discription of offer.">*</a>
    	</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="offer_description" required placeholder="Please describe your offer "></textarea>
          </div>
        </div>
      </div>
     <div class="form-group">
        <label class="col-md-4 control-label" >
        Link
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="Please enter the URL of your website.">*</a>
    	</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="link" required placeholder="Please enter the URL of your website." class="form-control"  type="text" id="link" class="link">
          </div>
        </div>
      </div>

     <div class="form-group">
        <label class="col-md-4 control-label" >
        Validity
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="Please enter the number of days of the offer.">*</a>
    	</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input pattern="[0-9]{1,2}" required placeholder="Please enter the number of days of the offer)" class="form-control"  type="text" name="validity" id="validity">
          </div>
        </div>
      </div>

     <div class="form-group">
        <label class="col-md-4 control-label" >
        Total Amount
      	 <a href="#" data-toggle="popover" data-trigger="hover" data-content="Total amount to be paid">*</a>
    	</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  class="form-control"  type="text"  name="amount" id="amount" readonly>
          </div>
        </div>
      </div>


        <div class="form-group">
        <label class="col-md-4 control-label">Picture </label>
        <div class="col-md-6  inputGroupContainer">


          <div class="form-group">
             <input type="file" name="pic" id="pic" accept="image/*" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" name="submitOffer" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
        </div>
      </div>
    </fieldset>
  </form>
</div>

</div>

</div>
<!-- /.container --> 


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
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();  

    $("#button1").click(function(){
        $.ajax({url: "file.txt", success: function(result){
            $("#div1").html(result);
        }});
    });



var valeur = 0;
$('input').change(function(){
  $('input:checked').each(function(){

       if ( $(this).attr('value').length > 0 )
       {
          // valeur =  $(this).attr('value');
    	valeur += 7.7;
  
       }
        if ( $(this).attr('value').length == 0 )
       {
          // valeur =  $(this).attr('value');
    	valeur -= 7.7;  
       }
  });
      	valeur += 7.7;

  $('.progress-bar').css('width', valeur+'%').attr('aria-valuenow', valeur); 
});


});
$(document).ready(function(){

$("#validity").keyup(function(){


   var amount = $(this).val();
   var totalAmount = amount * 1000;
    //$("#amount").css("color", "red").slideUp(2000).slideDown(2000);
    $("#amount").css("background-color", "lightblue")
	$('#amount').val(totalAmount);

});
	//function blink_text() {  
	   // $('#amount').fadeOut(500);  
	   // $('#amount').fadeIn(500);  
	//}  
	//setInterval(blink_text, 1000); 

});
</script>
</body>
</html>