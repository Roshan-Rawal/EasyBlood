<?php
ob_start();  
$db_host="localhost";
$db_name="easyblood";
$db_user="root";
$db_password="root";

$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());

	$table="contact";
	
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];	
	$message=$_POST['message'];
	
	$query="insert into $table(f_name,l_name,contact,email,message) values('$f_name','$l_name','$contact','$email','$message')";
	$data=mysql_query($query) or die("failed to insert data into database ".mysql_error());
	if($data)
	{
		echo "Data inserted successfully";
	}
	else
	{
		echo"Data doesn't insert";
	}
	mysql_close($con);
	header("Location:contact.php");
?>