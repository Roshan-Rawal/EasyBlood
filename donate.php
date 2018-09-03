<?php include("header.php") ?>

<?php 
$db_host="localhost";
$db_name="easyblood";
$db_user="root";
$db_password="root";
$table="blood_donors";
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());
$fetch_query="select * from $table";
$result=mysql_query($fetch_query) or die("Faild to fetch data from the table".mysql_error());
$i=1;
?>
	</br>
	<div class="container" style="background-color:#9999ff;text-align:center">
	<h1> Our Blood Donors and Register to be Donor </h1>
	</div>
	</br>
	</br>
	<div class="container" style="border:solid #80ffcc 4px;background-color:#ffff99">
	</br>
	<div class="row">
	<div class="col-lg-8">
	<div class="table-responsive">          
    <table id="table" class="table table-hover table-mc-light-blue">
    <thead>
      <tr>
		<th>ID </th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>BloodGroup</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
	<?php while($row=mysql_fetch_array($result))
	{ ?>
      <tr>
		<td><?php echo $i ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['contact'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['blood_group'] ?></td>
        <td><?php echo $row['city'] ?></td>
      </tr>
    <?php 
		$i++;
		} ?>
	</tbody>
  </table>
  </div>
	</div>
	<div class="col-lg-4">
	<form action="donate_connection.php" method="post">
  <div class="form-group">
    <input type="name" class="form-control" placeholder="Name" name="Name" id="name" required="">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Contact" name="Contact" id="contact" required="">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Email" name="Email" id="email" required="">
  </div>
  <div class="form-group">
  <select class="form-control" placeholder="Blood Group" name="Bloodgroup" id="bloodgroup" required="">
	<option>Select Blood Group </option>
    <option>A+</option>
    <option>A</option>
	<option>B+</option>
	<option>O-</option>
	<option>O+</option>
	<option>B-</option>
  </select>
</div>
  <div class="form-group">
  <select class="form-control" placeholder="city" name="City" id="city" required="">
	<option>Select City </option>
    <option>Ahmedabad</option>
    <option>Surat</option>
  </select>
</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
	</br>
	</div>
	</div>
	<?php include("footer.php") ?>