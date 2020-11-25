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
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- included for models -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!-- included for models -->

<link href="css/style.css" rel="stylesheet" />
<!-- Cards -->
<link rel="stylesheet" href="css/cards.css">
<!-- Card Icons-->
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" type="text/css" href="uzair/custom-style.css">
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

.userimage{
    position: relative;
    width: 100%;
}
h2 { 
   position: absolute; 
   top: 100px; 
   left: 50px; 
   width: 100%; 
}

</style>
</head>
<body>

<div id="wrapper" class="home-page">

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

                       <li class="active"><a href="index.php">Home</a></li> 
						<li><a href="create_offer.php">Create offer</a></li>
                        <li><a href="meet_team.php">Meet the Team</a></li>
						 <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.php">Our Company</a></li>
                            <li><a href="meet_team.php">Our Team</a></li>
                            <li><a href="#">News</a></li> 
                            <li><a href="#" class="dropdown" >Investors</a> </li>

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
                          echo "<li><a href='login.php'>Login</a></li>";
                        }
                        ?>

                    <li><a href="profile.php" class="btn btn-primary btn-xs" style="background-color:#ffffff"  ><span class="glyphicon glyphicon-log-out" ></span> <?php if(isset($_SESSION['logged_in_user'])) {echo $_SESSION['logged_in_user'];} ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>


<section style="background-color: lightred">

<div class="container" style="width: 100% ">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/service1.jpg" alt="Shopping Mall" style="height:680px; width:100%;">
      </div>

      <div class="item">
        <img src="img/service2.jpg" alt="Restaurant" style="height:680px; width:100%;">
      </div>
    
      <div class="item">
        <img src="img/service3.png" alt="Cenima" style="height:680px; width:100%;">

      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>

	<!-- end header -->

	<section id="call-to-action-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12 aligncenter">
					<h3>Welcome to Chaos</h3>
					<p>If you are looking for offers in your city then you are just on the perfact place
						our website will provide you with all the offers in the city. Also you can create your own offer 
						if you want to promote your business.
					</p>

				</div> 
			</div>
		</div>
	</section>


        <section id="call-to-action-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 aligncenter">
                        <?php
                        include 'ajax_search_box.php';
                        ?>

                </div> 
            </div>
        </div>
    </section>
<marquee behavior="scroll" direction="left">

   <h4 style="color: red">
    <?php if(isset($_SESSION['logged_in_user'])) {echo 'Hey '. ucwords($_SESSION['logged_in_user']) . '! ';} ?>

    Welcome to offers.com. If you want to people know about all the offers around you, then you are just at the right place!   </h4>

</marquee>







<?php

if(isset($_POST['submitOffer']))
{
    $email = $_POST["email"];
    $account = $_POST["account_number"];
    $product_name = $_POST["product_name"];
    $phone = $_POST["phone"]; 
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $discount = $_POST["discount"];
    $description = $_POST["offer_description"];
    $link = $_POST["link"];    
    $validity = $_POST["validity"];
    $amount = $_POST["amount"];
    $image = $_FILES["pic"]['name'];

    $insert_offer = "insert into offer (offerid, email,account_number, productname,phone, address, city, zipcode, discount, description,link, validity, amount ,picture_source)
        values('', '$email', '$account', '$product_name',
       '$phone','$address','$city', '$zip','$discount','$description','$link',
        '$validity', '$amount', '$image')";
    $insert_offer_execute = $conn->query($insert_offer);


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image

        $check = getimagesize($_FILES["pic"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["pic"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
echo "<div class='fh5co-blog-style-1'>
        <div class='container'>";
$cards_count = 0;

    $select_offer = "select * from offer ORDER BY offerid ASC";
    $select_offer_execute = $conn->query($select_offer);

    $rows = mysqli_fetch_assoc($select_offer_execute);


while ($row = mysqli_fetch_array($select_offer_execute)) {
    $cards_count++;
	if($cards_count % 3 == 1) {
		echo "<div class='row p-b'>";	
	}
	$phone =  $row["phone"];
	$product_name =  $row["productname"];
	$offer_description =  $row["description"];
    $address = $row['address'];
    $city = $row['city'];
    $link = $row['link'];
	$validity =  $row["validity"];
	$discount =  $row["discount"];
    $pic = $row['picture_source'];
    
    $offer_description_limited = substr($offer_description, 0,60);

  echo "          
            <div class='col-md-4 col-sm-6 col-xs-6 col-xxs-12'>
              <div class='fh5co-post wow fadeInLeft'  data-wow-duration='1s' data-wow-delay='1.1s'>
                <a href = '$link'>
                  <div class='fh5co-post-image'>
                    <div class='fh5co-overlay'></div> 
                    <div  style = 'background-color: red; width: 130px; height:30px;'>
                    <center> <h4 style = 'color: white;'> $discount off </h4> </center>
                    </div> 

                    <img src=uzair/images/busybee.jpg alt='$product_name' class='img-responsive'>
                </a>
                  </div>

                <div class='fh5co-post-text'>
                  <h3>$product_name</a></h3>
                  <p>$offer_description_limited</p>

    <div class='container' >
    <button onclick='showModal('data')'> click here</button>
    <a href = '#myModal' data-toggle='modal' > more details </a>

  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>$product_name</h4>
        </div>
        <div class='modal-body'>
          <p>$offer_description</p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
   
                </div>
                <div class='fh5co-post-meta' >
                  <a><i class='icon-money'></i>$address</a>
				  <a><i class='icon-phone'></i>$phone</a>
                  <a><i class='icon-clock2'></i>$validity day(s)</a>
                </div>
              </div>
            </div>    
    ";
	
	if($cards_count % 3 == 0) {
		echo "</div>";	
	}
}
echo "</div>
      </div>";

?>








<!--
<center>
	<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" width="640" height="480" src="vedio/offersmistake .mp4" controls frameborder="0" allowfullscreen ></iframe>
</div>
</center>
-->
<div class="container"> <!-- start of the container user info -->
    <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-4 col-md-offset-2 image" style="float: left; ">
            <h4 style="color: blue">
            <?php
            echo date("D M j H:i:s T");
            ?>   
            </h4>
            

        </div>
        <div class="col-md-4 col-lg-4 col-sm-4" style="float: left;">
            <h4 style="color: blue">

            <?php
                $fp = fopen("user.txt", "w");
                $sql="select count(*) from chaos.verified_user  ";
    
                $result = $conn->query($sql);
                $row = $result -> fetch_row();
                echo "Total users of our website:  ";?><?php
                fwrite($fp, $row[0]);
                fclose($fp);
                $fp = fopen("user.txt", "r");
                echo fread($fp, filesize("user.txt"));
                
            ?>
        </h4>
        </div>
    </div>
</div> <!-- end of the container user info -->



	<section id="content"> </section>
	
	
		<section id="call-to-action-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12 aligncenter">
					<h2 class="aligncenter"  style="color: white">Our Services</h2><br/><br/><br/><br/><br/><br/><br/>
                    <p style="color: white"> We promote national as well as international shopping brands.</p></div>
				<br/>
			</div>
		</div> 
			<div class="row">
		<div class="skill-home"> <div class="skill-home-solid clearfix"> 
		<div class="col-md-3 text-center">
		<span class="icons c1"><i class="fa fa-book"></i></span> <div class="box-area">
		<h3>Online Shopping</h3> <p>Customers can enjoy various brands on single platform.</p></div>
		</div>
		<div class="col-md-3 text-center"> 
		<span class="icons c2"><i class="fa fa-users"></i></span> <div class="box-area">
		<h3>Brand's Promotions</h3> <p> We promote different brands on the basis of their seasonal sales.  </p></div>
		</div>
		<div class="col-md-3 text-center"> 
		<span class="icons c3"><i class="fa fa-trophy"></i></span> <div class="box-area">
		<h3>Offers</h3> <p> We offer promo codes for discounts to our registered customers.</p></div>
		</div>
		<div class="col-md-3 text-center"> 
		<span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
		<h3>User's Feedback</h3> <p>We welcome feedback from registered users about their experience with us.</p>
		</div></div>
		</div></div>
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
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script>
$(document).ready(function() {
  //carousel options
  $('#quote-carousel').carousel({
    pause: true, interval: 10000,
  });
});


</script>
<script type="text/javascript">
function showModal(data)
{
    alert('hello');
   //you can do anything with data, or pass more data to this function. i set this data to modal header for example
   $("#myModal .modal-title").html('hello');
   $("#myModal").modal();
}

</script>
<?php
//session_start();
include 'database_connection.php';
include 'sendMail.php';
$fname = "Saleem";
$lname = "Awan";
$cell_num = "0301-6063167";
$address = "Attar1 Hostel Nust University";
$city = "Islamabad";
$zip = "46000";
$email = "saleem1.ms1882@gmail.com";
$account = "55-5541-54534-534";
$product = "pizza";
$discount = "20%";
$description = "Its my product with 20% of";
$validity = "3";

$from = "chaosknight751@gmail.com";
$headers = "From:".$from;
$body = "
Detail of your form that you have filled are as follows.<br>
<table width='600' border='1'>
<tr bgcolor='#0099FF'>
      <td>$fname</td><br>
      <td>$lname</td>
  </tr>
<tr bgcolor='#0099FF'>
      <td>$cell_num</td><br>
      <td>$address</td>
  </tr>
<tr bgcolor='#0099FF'>
      <td>$city</td><br>
      <td>$zip</td>
  </tr>
<tr bgcolor='#0099FF'>
      <td>$email</td><br>
      <td>$account</td>
  </tr>
<tr bgcolor='#0099FF'>
      <td>$product</td><br>
      <td>$discount</td>
  </tr>
<tr bgcolor='#0099FF'>
      <td>$description</td><br>
      <td>$validity</td>
  </tr>
  </table>";
    //sendEmail($email,$body,$headers);
?>



</body>
</html>
