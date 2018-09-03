<?php include("header.php") ?>

	<!-- Emergency request starts here -->
	<div class="container-fluid" style="height:300px;width:100%;background-color:#ff8080">
	<div class="text-center" style="margin-top:120px;">
	<button type=button class="btn btn-primary" data-target="#loginModal" data-toggle="modal" style="color:bl;background-color:#006699;height:50px;width:300px;font-size:20px">Send Emergency request </button>
	
	<div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
	<button class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title">Send Emergency Request</h4>
	</div>
	<div class="modal-body">
	<form action="connection.php" method="post">
  <div class="form-group">
    <input type="name" class="form-control" name="Name" placeholder="Your Name" required="">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="Contact" placeholder="Contact" required="">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="Email" placeholder="Email" required="">
  </div>
  <div class="form-group">
    <textarea class="form-control" placeholder="message" name="Comment" required="" rows="5"></textarea>
  </div>
  <button type="submit" name="submit" value="redirect" class="btn btn-primary">Submit</button>
</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

		
	<!-- Emergency request ends here-->
		
	<!-- AboutUS strats here -->
	<div class="container-fluid" style=" margin-top:20px;padding-bottom:70px;>
	<div class="row">
	<div class="col-lg-6">
	<h2>EasyBlood </h2>
	<p> This is an emrgency portal in which you can send your message to those guys who really want to donate blood. Its works very easily in any emergency case you have 
	to only send emergency request ..where you have to type your name email contact and message where you want and all that things. Hope it will help you. And yes 
	to help other share it as much as you can.Thank you :)
	</p>
	<p>
	We need your support to make it more and more popular as you can so at the end when everone will connected to it so when any one require thte blood then the 
	will flow to all the public. So among them who can help they will come forward and help our society to make it more better. So its an humble request to you 
	join this revoluion so any body can get the blood at energency. And yes if you have enough time then also it will works like you can choose the blood banks cities 
	regarding you. You have to select the banks from which you can get it.</p>
	<p>
	This is an emrgency portal in which you can send your message to those guys who really want to donate blood. Its works very easily in any emergency case you 
	have to only send emergency request ..where you have to type your name email contact and message where you want and all that things. Hope it will help you. 
	And yes to help other share it as much as you can.Thank you :) We need your support to make it more and more popular as you can so at the end when everone 
	will connected to it so when any one require thte blood then the will flow to all the public. So among them who can help they will come forward and help 
	our society to make it more better. So its an humble request to you join this revoluion so any body can get the blood at energency. And yes if you have 
	enough time then also it will works like you can choose the blood banks cities regarding you. You have to select the banks from which you can get it.
	</p>
	</p>
	</div>
	<div class="col-lg-6">
	<img src="images/blood_donation.jpg" alt="about us" width="100%" height="100%" />
	</div>
	</div>
	
	<!-- AboutUS ends here -->
	<!-- Slider starts here -->
	<div class="container-fluid text-center">
	<h1 style="color:#993300"> Our Heroes </h1>
	</div>
	<div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="3000" >
	<ol class="carousel-indicators">
	<li data-target="#mycarousel" data-slide-to="0"class="active"></li>
	<li data-target="#mycarousel" data-slide-to="1"></li>
	<li data-target="#mycarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	<div class="item active">
	<img src="images/slide1.jpg" style="width:100%;" />
		<div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
	</div>
	<div class="item">
	<img src="images/slide2.jpg" style="width:100%;" />
	<div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
	</div>
	<div class="item">
	<div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
	<img src="images/slide3.jpg" style="width:100%;"/>
	
	</div>
	</div>
	<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	</div>
	
	<!-- Slider Ends here -->
	
	<?php include("footer.php") ?>