
	<?php include("header.php") ?>
	<div class="container" style="border:solid #80ffcc 4px;background-color:#ffff99">
	<br>
	<div class="row">
	<div class="col-lg-5" style="border-right:solid #80ff80 2px">
	<h3 style="color:#0000ff">You can contact us in following cases</h3>
	<br>
	<ul type="circle" style="font-size:18px">
	<li>If you want to contribute in it</li>
	<br>
	<li>If you want to be volunteer in this</li>
	<br>
	<li>In case of any suggestion</li>
	<br>
	<li>Or if you have valuable feedback</li>
	<br>
	<br>
	<br>
	
	</ul>
	</div>
	<div class="col-lg-7"> 
	<form action="contact_connection.php" method="POST">
  <div class="form-group">
    <input type="name" class="form-control" placeholder="First Name" name="fname">
  </div>
  <div class="form-group">
    <input type="lname" class="form-control" placeholder="Last Name" name="lname">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Contact" name="contact">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <textarea class="form-control" placeholder="message" rows="5"name="message"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
	</br>
	</div>
	</div>
	</div>
	<?php include("footer.php") ?>
	
	