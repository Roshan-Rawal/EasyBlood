<!DOCTYPE html>
<html lang="en">
  <head>
  <title>
  EasyBlood
  </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <style>
  #popup
  {
	  display:none;
  }
  .fa {
    padding: 10px;
    font-size: 20px;
    width: 40px;
	height:30px;
    text-align: center;
    text-decoration: none;
}

/* Add a hover effect if you want */
.fa:hover {
    opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
    background: #3B5998;
    color: white;
}

/* Twitter */
.fa-twitter {
    background: #55ACEE;
    color: white;
}
/* Instagram*/
.fa-instagram {
    background: #55ACEE;
    color: white;
}

   .affix {
      top: 0;
      width: 100%;
  }
  #id{
  background-image:url("images/logo.png");
  }
  .tales {
  width: 100%;
}
.carousel-inner{
  width:100%;
  max-height: 500px !important;
}
  .navbar-custom {
    background-color: #de4949;
	
}
.navbar-custom li:hover
 {
	background-color:#ffcccc;
}
.navbar-custom li:link
 {
	background-color:#b3e0ff;
}


  /* Smaller than standard 960 (devices and browsers) */
@media only screen and (max-width: 959px) {}

/* Tablet Portrait size to standard 960 (devices and browsers) */
@media only screen and (min-width: 768px) and (max-width: 959px) {}

/* All Mobile Sizes (devices and browser) */
@media only screen and (max-width: 767px) {}

/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
@media only screen and (min-width: 480px) and (max-width: 767px) {}

/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (max-width: 479px) {}
  </style>
  
  </head>
  <body>
		
	 <div class="container-fluid">
		<div style="float:left;margin-left:40px">
		<a href="index.php"><h1> <img src="images/logo.png" height="65px" width="150px" alt="logo" /></h1></a>
		</div>
		<div style="float:right;margin-top:20px;margin-right:30px;color:red">
		<h2> Donate Blood Provide Lives </h2>
		</div>
	</div>	
	
	<!-- Its header -->
	<nav  class="navbar navbar-default navbar-custom"> <!-- Just add this code to stuck nav at the top = data-spy="affix" data-offset-top="100" -->
	<div class="container-fluid">
	<button type="button" class="navbar-toggle" 
	data-toggle="collapse"
	data-target=".navbar-collapse">
	<span class="sr-only">Toggle Navigation </span>
	<span  class="icon-bar"></span>
	<span  class="icon-bar"></span>
	<span  class="icon-bar"></span>
	</button>
	<div class="navbar-collapse collapse" style="font-size:18px">
	<ul class="nav navbar-nav navbar-left"style="color:#ffffff;">
	<li><a href="index.php"style="color:#ffffff;">Home</a></li>
	<li class="dropdown"><a href="#" class="dropdown-toggle"
	data-toggle="dropdown"style="color:#ffffff;">BloodBanks<b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li class="dropdown-header">Areawise</li>
	<li><a href="ahmedabad.php">Ahmedabad</a></li>
	<li><a href="surat.php">Surat</a></li>
	<li class="dropdown-header">SectorWise</li>
	<li><a href="private.php">Private</a></li>
	<li><a href="government.php">Government</a></li>
	</ul>
	</li>
	<li><a href="donate.php"style="color:#ffffff;">Donate</a></li>
	<li><a href="aboutus.php"style="color:#ffffff;">About Us</a></li>
	<li><a href="contact.php"style="color:#ffffff;">Contact</a></li>
	</ul>
	</div>
	</div>
	</nav>
	<!-- Header ends here -->
