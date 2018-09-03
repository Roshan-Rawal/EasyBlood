<?php
ob_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;	

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$db_host="localhost";
$db_name="easyblood";
$db_user="root";
$db_password="root";
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());
function newuser()
{	
	//$from="roshanrawal43@gmail.com";
	$table="blood_donors";
	$name=$_POST['Name'];
	$contact=$_POST['Contact'];
	$blood_group=$_POST['Bloodgroup'];
	$city=$_POST['City'];
	$email=$_POST['Email'];	
	
	$query="insert into $table (name,contact,blood_group,city,email) values('$name','$contact','$blood_group','$city','$email')";
	$data=mysql_query($query) or die("failed to insert data into database ".mysql_error());
}
newuser(); 
mysql_close($con);
header("Location:Thanks_donors.php");
?>