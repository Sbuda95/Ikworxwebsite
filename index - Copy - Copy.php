<?php 

//Customers send any queries to admin email

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $to = "demo@ikworx.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
	$subject = $_POST['subject'];
	$message = $_POST['message']; //this is the message from the textarea
    $contact_number = $_POST['contact_number'];
	
	//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ashur.aserv.co.za';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'Calendar@ikworx.co.za';                 // SMTP username
    $mail->Password = 'Password@2018';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($from, $first_name);
    //$mail->addAddress('gntimba@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('sbuda95@gmail.com');               // Name is optional
    //$mail->addReplyTo($from, $first_name);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Verify order';
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<div class="alert alert-success">Your email was successfully sent</div>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    echo "Mail Sent. Thank you, " . $first_name . ", we will contact you shortly.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 50.5s;
  animation-name: fade;
  animation-duration: 50.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<title>HTML Template</title>

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<!-- Owl Carousel -->
<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

<!-- Magnific Popup -->
<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<!-- Header -->
<header id="home"> 
  <!-- Background Image -->
  <div class="bg-img" style="background-image: url('img/IKdoor.jpg');">
    <div class="overlay"></div>
  </div>
  <!-- /Background Image --> 
  
  <!-- Nav -->
  <nav id="nav" class="navbar nav-transparent">
    <div class="container">
      <div class="navbar-header"> 
        <!-- Logo -->
        <div class="navbar-brand"> <a href="index.html"> <img class="logo" src="img/ikworx logo1.png" alt="logo"> <img class="logo-alt" src="img/ikworx logo1.png" alt="logo"> </a> </div>
        <!-- /Logo --> 
        
        <!-- Collapse nav button -->
        <div class="nav-collapse"> <span></span> </div>
        <!-- /Collapse nav button --> 
      </div>
      
      <!--  Main navigation  -->
      <ul class="main-nav nav navbar-nav navbar-right">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#service">Services</a></li>
        <li><a href="#team">Team</a></li>
        <!-- <li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li> -->
        <li><a href="#contact">Contact</a></li>
      </ul>
      <!-- /Main navigation --> 
      
    </div>
  </nav>
  <!-- /Nav --> 
  
  <!-- home wrapper -->
<!-- Slideshow container -->
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/background3.jpg" style="width:100%">
  <div class="text">Slide 1</div>
</div>

<div class="mySlides fade">
  <img src="img/background2.jpg" style="width:100%">
  <div class="text">Slide 2</div>
</div>

<div class="mySlides fade">
  <img src="img/IKworx image.png" style="width:100%">
  <div class="text">Slide 3</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> 
  
</header>
<!-- /Header --> 

<!-- About -->
<div id="about" class="section md-padding" > 
  
  <!-- Container -->
  <div class="container" style="background-image: url('img/Services wallpaper.png'); height: 900px; width: 1270px;"> 
    
    <!-- Row -->
    <div class="row"> 
      
      <!-- Section header -->
      <div class="section-header text-center">
        <h2 class="title">About Us</h2>
      </div>
      <!-- /Section header --> 
      
      <!-- about -->
      <div>
        <div>
          <center>
         
          </center>
          <center><p>Innovative Knowledge Worx, is a BBBEE Level 2 consulting company based in Fourways Johannesburg. We specialize in a variety of services ranging from Team</center> <center>Building, Project Management, Information Management, Information Technology, Finance, Human Capital Solutions as well as construction </br></center><center>and pool maintenance. We have also invested in a Corporate Social Investment Responsibility (SCI), which is a sector of the business that</br></center> <center>focuses on the implementation of ICT in underprivileged communities. </p></center>
          <center>
            <h3><i>Company History</i></h3>
          </center>
          <center><p>Innovative Knowledge Worx has been providing clients with flexible Information Management and Human Capital solutions to ICT problems and projects since 2010,</br></center> <center>spanning numerous industries and technologies. Ultimately, our goal is to provide resources to complete your projects with the high quality you expect. </br></center><center>We believe in taking a proactive role in securing the best talent for your company’s needs today, tomorrow, and in the future.
            
            Managing the ongoing</center> <center>manpower requirements of an information and IT organization can be a formidable challenge to even the most effective executive. </br></center><center>Our success is dependent on the quality of our technical professionals and our dedication to customer satisfaction.</br></center><center> Whether it is providing you with the right individual for your current needs or</br></center><center> taking you to the next level of information technology </p></br></center>
        </div>
<iframe width="1560" height="400" src="https://www.youtube.com/embed/7wkkwBtHh0M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <!-- /Container --> 
    
  </div>
</div>
<!-- /About --> 

<!-- Service -->
<div id="service" class="section md-padding"> 
  
  <!-- Container -->
  <div class="container" style="background-image: url('img/Services wallpaper2.png'); height: 1470px; width: 1270px;"> 
    
    <!-- Row -->
    <div class="row"> 
      
      <!-- Section header -->
      <div class="section-header text-center">
        <h2 class="title">Services</h2>
      </div>
      <!-- /Section header --> 
      
      <!-- service -->
      <div class="col-md-4 col-sm-6">
        <div class="service"> <i class="fa fa-diamond"></i>
          <h3>CORPORATE TRAINING</h3>
          <p>Our training services (including in-house training) are accredited the by Southern Business School. Our training programs can be tailored to meet your specific requirements and is appropriate for employee development. We aim to solidify our relationship with  </p>
        </div>
      </div>
      <!-- /service --> 
      
      <!-- service -->
      <div class="col-md-4 col-sm-6">
        <div class="service"> <i class="fa fa-rocket"></i>
          <h3>DIGITIZATION </h3>
          <p>We offer a well-rounded service when it comes to doing business in digitization. Our services ranges from creating an online newspaper for business, high quality color illustrations, foldouts, posters, manuscripts, blueprints technical drawings, yearbooks, </p>
        </div>
      </div>
      <!-- /service --> 
      
      <!-- service -->
      <div class="col-md-4 col-sm-6">
        <div class="service"> <i class="fa fa-cogs"></i>
          <h3>ICT MANAGEMENT</h3>
          <p>Information and communication technology management
            Do you have the right technology in your IT enterprise architecture or business? No one understands information technology the way we do. We are in the business of finding the best ways to implement the process of ICT, design and plan for your business`s </p>
        </div>
      </div>
      <!-- /service --> 
      
      <!-- service -->
      <div class="col-md-4 col-sm-6">
        <div class="service"> <i class="fa fa-diamond"></i>
          <h3>PROJECT MANAGEMENT </h3>
          <p>Our project management division is equipped to effectively handle the complexity of defining, organizing, planning and managing small to large scale programs as well as the day to day tactics that ensured projects success. Above all we offer the insight and smart alternatives that lead to better management decisions.</p>
        </div>
      </div>
    
      <!-- /service --> 
      
      <!-- service -->
      <div class="col-md-4 col-sm-6">
        <div class="service"> <i class="fa fa-pencil"></i>
          <h3>INFORMATION MANAGEMENT SERVICES </h3>
          <p>Here at IKWORX we tailor suits your information management needs to come up with solutions that would benefit both your companies our information management services include, system integration, document and audit control, cloud services, work flow, storage and retrieval amongst other things.</p>
        </div>
      </div>
      <!-- /service --> 
      
      <!-- service -->
      <div class="col-md-4 col-sm-6">
        <div class="service"> <i class="fa fa-flask"></i>
          <h3>CORPORATE SOCIAL INITIATIVE</h3>
          <p>This division has given us a platform to epitomize a great legacy of building 7 center in Limpopo, Mpumalanga, North West and Free State in which Information Communication Technology will be implemented in underprivileged schooling communities. This incentive is to help educate disadvantaged learners on the use of ICT to better equip themselves in informatics skills. </p>
        </div>
      </div>
      <!-- /service --> 
      
      <!-- service -->
      <div class="col-md-4 col-sm-6">
        <div class="service"> <i class="fa fa-flask"></i>
          <h3>Portfolio of consulting and professional services</h3>
          <p>Innovative Knowledge Worx offers a portfolio of consulting and professional services. Our consultants have unique perspectives on business challenges that allow us to deliver consistent results for managing and deploying technology solutions. With this expertise, we have the ability to gain a better understanding of what the competition is planning, identify potential partners, and analyze new market opportunities.</p>
        </div>
      </div>
      <!-- /service --> 
      
      <!-- service -->
      <div class="col-md-4 col-sm-6">
        <div class="service"> <i class="fa fa-flask"></i>
          <h3>INFRUSTRUCTURE MANAGEMENT</h3>
          <p>We help our clients and together we handle all aspects of their infrastructure management challenges. Organizations needing help solving policy and management problems related to public works, facilities, government installations, housing, hospitals or construction turn to IKWorx for our blend of in-depth ICT engineering knowledge and management consulting expertise. </p>
        </div>
      </div>
      <!-- /service --> 
      
      <!-- service -->
      <div class="col-md-4 col-sm-6">
        <div class="service"> <i class="fa fa-flask"></i>
          <h3>OPERATION AND COST MANAGEMENT</h3>
          <p>We analyze and assess client costs, benefits, and risks of their investments associated with existing or newly proposed programs. IKWorx adheres to a sound, documented cost estimating methodology, rigorous ISO 9001 quality controlled processes, innovative operations research techniques, and a robust library of data and modelling and simulation tools </p>
        </div>
      </div>
      <!-- /service --> 
      
      
    </div>
    <!-- /Row --> 
    
  </div>
  <!-- /Container --> 
  
</div>
<!-- /Service --> 

 


<!-- Team -->
<div id="team" class="section md-padding"> 
  
  <!-- Container -->
  <div class="container" style="background-image: url('img/team22.png'); height: 1240px; width: 1270px;"> 
    
    <!-- Row -->
    <div class="row"> 
      
      <!-- Section header -->
      <div class="section-header text-center">
        <h2 class="title">Our Team</h2>
      </div>
      <!-- /Section header --> 
      
      <!-- team -->
      <div class="col-sm-4">
        <div class="team">
          <div class="team-img"> <img class="img-responsive" src="img/Benedict.jpg" alt="">

          </div>
          <div class="team-content">
            <h3 >Benedict</h3>
            <span style ="color:#1A4D92"><strong>Human Resource</strong></span> </div>
        </div>
      </div>
      <!-- /team --> 
      
      <!-- team -->
      <div class="col-sm-4">
        <div class="team">
          <div class="team-img"> <img class="img-responsive" src="img/Leon-image.jpg" alt="">
          </div>
          <div class="team-content">
            <h3>Leon</h3>
            <span style ="color:#1A4D92"><strong>Construction</strong></span> </div>
        </div>
      </div>
      <!-- /team --> 
      
            <!-- team -->
      <div class="col-sm-4">
        <div class="team">
          <div class="team-img"> <img class="img-responsive" src="img/Manini.jpg" alt="">
          </div>
          <div class="team-content">
            <h3>Manini</h3>
            <span style ="color:#1A4D92"><strong>Marketing</strong></span> </div>
        </div>
      </div>
      <!-- /team --> 
      
            <!-- team -->
      <div class="col-sm-4">
        <div class="team">
          <div class="team-img"> <img class="img-responsive" src="img/Evidence T.jpg" alt="">
          </div>
          <div class="team-content">
            <h3>Evidence T</h3>
            <span style ="color:#1A4D92"><strong>Web Designer</strong></span> </div>
        </div>
      </div>
      <!-- /team --> 
      

      
      <!-- team -->
      <div class="col-sm-4">
        <div class="team">
          <div class="team-img"> <img class="img-responsive" src="img/veronica.jpg" alt="">
          </div>
          <div class="team-content">
            <h3>Veronica</h3>
            <span style ="color:#1A4D92"><strong>Sales Manager</strong></span> </div>
        </div>
      </div>
      <!-- /team --> 
      
    </div>
    <!-- /Row --> 
    
  </div>
  <!-- /Container --> 
  
</div>
<!-- /Team --> 

<!-- Contact -->
<div id="contact" class="section md-padding"> 
  
  <!-- Container -->
  <div class="container" style="background-image: url('img/contacts wallpaper2.png'); height: 900px; width: 1270px;"> 
    
    <!-- Row -->
    <div class="row"> 
      
      <!-- Section-header -->
      <div class="section-header text-center">
        <h2 class="title">Contact Us</h2>
      </div>
      <!-- /Section-header --> 
      
      <!-- contact -->
      <div class="col-sm-4">
        <div class="contact"> <i class="fa fa-phone"></i>
          <h3>Phone</h3>
          <p>011 464 5062</p>
        </div>
      </div>
      <!-- /contact --> 
      
      <!-- contact -->
      <div class="col-sm-4">
        <div class="contact"> <i class="fa fa-envelope"></i>
          <h3>Email</h3>
          <p>info@ikworx.com</p>
        </div>
      </div>
      <!-- /contact --> 
      
      <!-- contact -->
      <div class="col-sm-4">
        <div class="contact"> <i class="fa fa-map-marker"></i>
          <h3>Address</h3>
          <p>12-8 Incubation Drive
Riverside View Ext 15
Fourways 1685
Unit 114
Block 5</p>
        </div>
      </div>
      <!-- /contact --> 
      
      <!-- contact form -->
      <div class="col-md-8 col-md-offset-2">
        <form action="" method="post">
          <input type="text" name="first_name" placeholder="Enter your name" style="background-color:#F7F7F7; color:#060606"></br></br>
          <input type="number" name="contact_number" placeholder="Cellphone number"></br></br>
          <input type="text" name="email" placeholder="Enter your email address"></br></br>
          <input type="text" name="subject" placeholder="Subject"></br></br>
          <textarea rows="5" name="message" cols="30" placeholder="Type in a message..."></textarea>
          <input type="submit" style="background-color:#267FC0; color:#36EF62" name="submit" value="Send Message">
        </form>
      </div>
      <!-- /contact form --> 
      
    </div>
    <!-- /Row --> 
    
  </div>
  <!-- /Container --> 
  
</div>
<!-- /Contact --> 

<!-- Footer -->
<footer id="footer" class="sm-padding bg-dark"> 
  
  <!-- Container -->
  <div class="container"> 
    
    <!-- Row -->
    <div class="row">
      <div class="col-md-12"> 
        
        <!-- footer logo -->
        <div class="footer-logo"> <a href="index.html"><img src="img/ikworx logo1.png" alt="logo"></a> </div>
        <!-- /footer logo --> 
        
        <!-- footer follow -->
        <ul class="footer-follow">
          <li><a href="https://www.facebook.com/ikworx/"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/ikworx"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/company/innovative-knowledge-worx-ikworx/"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        <!-- /footer follow --> 
        
        <!-- footer copyright -->
        <div class="footer-copyright">
          <p>Copyright © 2018. All Rights Reserved. Designed by <a href="https://www.ikworx.co.za" target="_blank">IKWORX</a></p>
        </div>
        <!-- /footer copyright --> 
        
      </div>
    </div>
    <!-- /Row --> 
    
  </div>
  <!-- /Container --> 
  
</footer>
<!-- /Footer --> 

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- /Back to top --> 

<!-- Preloader -->
<div id="preloader">
  <div class="preloader"> <span></span> <span></span> <span></span> <span></span> </div>
</div>
<!-- /Preloader --> 

<!-- jQuery Plugins --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script> 
<script type="text/javascript" src="js/main.js"></script>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
</body>
</html>
