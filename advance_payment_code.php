<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];


$gid = $_GET['type'];
$sqlg = "SELECT * FROM executive_member where id = '$gid'";
$resultQgl = mysqli_query($con, $sqlg); 
$rowQgl = mysqli_fetch_array($resultQgl);

if(isset($_POST['submit']))
{ 
	@extract($_POST);
	
   // $ten_digit_random_number = mt_rand(1000000000,9999999999);
	//$application_no = $ten_digit_random_number;


  $sql = "INSERT INTO `advance_payment`(`id`, `user_id`, `application_no`, `firstName`,  `middleName`,  `lastName`, `father_name`,  `advance_payment`, `advance_date`,  `mobile_number`, `emailid`, `description`,  `postDataTime`, `postModifyTime`, `currentStatus`) VALUES (NULL, '$user_id', '$customerid', '$firstName', '$middleName', '$lastName','$father_name', '$advance_payment',  '$advance_date',  '$mobile_number', '$emailid', '$description',   now(), now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("Advance payment Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("executive_advances.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
  @extract($_POST);

   $sql = "UPDATE advance_payment SET `user_id`='$user_id', `advance_payment`='$advance_payment', `advance_date`='$advance_date' , `description`='$description', `postModifyTime`= now() WHERE `id`='$adcustomerid'";

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Advance payment Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("executive_advances.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
