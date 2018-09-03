<?php
ob_start();  //This if error occur in redirecting that alreay exist
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
	$table_emergency="emergency";
	$name=$_POST['Name'];
	$contact=$_POST['Contact'];
	$email=$_POST['Email'];	
	$comment=$_POST['Comment'];
	$query="insert into $table_emergency (name,contact,email,comment) values('$name','$contact','$email','$comment')";
	$data=mysql_query($query) or die("failed to insert data into database ".mysql_error());

	$fetch_query="select * from $table";
	$result=mysql_query($fetch_query) or die("Faild to fetch data from the table".mysql_error());

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	
	 //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'roshanrawal143@gmail.com';                 // SMTP username
    $mail->Password = 'Roshan@98';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
	
	while($row=mysql_fetch_array($result))
	{
		$f_name=$row['name'];
		$f_email=$row['email'];
		$f_contact=$row['contact'];
		$msg="Hello $f_name \nMyself $name \n $comment";
	
		//Recipients
    $mail->setFrom('roshanrawal143@gmail.com', 'EasyBlood');
    $mail->addAddress($f_email, $f_name);     // Add a recipient
	
	$mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Need Emergency Blood';
    $mail->Body    = $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	echo 'here ffff';
    
	if($mail->send())
	{
	echo 'Message has been sent';
	header("Location:index.php");
	}
	else
	{
		echo 'Message not sent';
	}
		//mail($email,"Emergency Blood",$msg,'From:'.$from);
		//echo "Mail sent to:".$f_email."<br>";
	
	include('way2sms-api.php');
	$uid = '7623072273';
	$pass = 'C8392H';
	sendWay2SMS($uid,$pass,$f_contact,$msg);
	}
	
	//if($data)	{
		//echo "Thanks for comment . I will aproach you soon";
	//}
}
newuser(); 



//Load composer's autoloader
//require 'vendor/autoload.php';


//try {
   

    
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content

    
//} 
//catch (Exception $e) {
  //  echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
//}
mysql_close($con);
?>