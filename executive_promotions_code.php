<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];



if(isset($_POST['submit']))
{ 
	@extract($_POST); 

 $sql = "INSERT INTO `executive_tds`(`id`, `user_id`, `tds_price`, `application_no`, `commission_parcent`, `promotions`, `postDateTime`, `postModifyDateTime`, `currentStatus`) VALUES (NULL, '$user_id', '$tds_price', '$application_no','$commission_parcent', '1', now(), now(),'Y')";
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {

	$sqls = "UPDATE executive_tds SET `user_id`='$user_id', `promotions`='0', `postModifyDateTime`= now() WHERE `id`='$executive_id'";
  	$data = mysqli_query($con, $sqls);
	echo '<script type="text/javascript">alert("Customer Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("executive_promotions.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
  
@extract($_POST);
$executive_id  = $_POST['id'];
$sql = "UPDATE executive_tds SET `user_id`='$user_id', `tds_price`='$tds_price', `postModifyTime`= now() WHERE `id`='$executive_id'";
//die;
  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Customer Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("executive_promotions.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
