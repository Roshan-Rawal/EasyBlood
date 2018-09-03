<?php include('header.php'); 

$db_host="localhost";
$db_name="id4442182_moodcafe";
$db_user="id4442182_moodcafe";
$db_password="Roshan@98";

$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);

$table="emails";
$email=$_POST['email'];
$sum=$_POST['sum'];

$query="insert into $table(email,score) values('$email','$sum')";

$data=mysqli_query($con,$query);

$from='hello.moodcafe@gmail.com';

$msg="Thanks for using Moodcafe. Your depression level score is $sum.

Disclaimer: Please note that the result is only for the purpose of testing and holds no reliability as of now. Feel free to reach out to us at contact@moodcafe.in for any further query, suggestion or to work with us.

Regards
Team MoodCafe";

mail($email,"Your Depression Assessment Result",$msg,'From:'.$from);


// This is corn code to remember user after one day
$fetch_query="select * from $table";
$fetch_data = mysqli_query($con,$fetch_query);
while($row=mysqli_fetch_array($fetch_data))
{
        $e_mail=$row['email'];
        $create_on = $row['create_on'];
        $create_date=date_create(date("Y-m-d",strtotime($create_on)));
        $current_date=date_create(date("Y-m-d"));
        $diff=date_diff($current_date,$create_date);
        $days=$diff->format("%a");
        echo $days;
        if($days==2)
        {
          
           mail($e_mail,"Your Depression Assessment Result","Thanks For using moodcafe. This is second mail going to you",'From:'.$from);
        }  
        
}



mysqli_close($con);

$Img=$_POST['Img'];
$status=$_POST['status'];
$Img= 'images\\'.$Img;



		echo '<center><br><div class="row"><div class="col-md-2"></div><div class="col-md-8 text-center"</div><div class="row" style="background-color:#e0ebeb"><div class="col-lg-6 col-xs-12 col-sm-12 col-md-6"><br><h2>Depression level</h2><img src='.$Img.'></div><div class="col-lg-6 col-xs-12 col-sm-12 col-md-6"><p style="margin-top:90px; font-size:25px">Your depression level is:
		    '.$status.'</p><br><br><a href="index.php" class="btn btn-info" style="font-size:20px;" role="button">Go to Home</a><br><br></div><div class="col-md-2"></div></div></center><br><br>';

include('footer.php'); ?>