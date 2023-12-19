<?php
error_reporting(0);
include_once("includes/db_config.php");
require_once('includes/check_session.php'); 

$user_name = $_SESSION['rsoftId'];
$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];

$gid = $_GET['id'];

if(isset($_POST['submit']))
{ 
	$plan_name = $_POST['plan_name'];
  $plan_price = $_POST['plan_price'];
  $plan_parcent = $_POST['plan_parcent'];
  
  //$user_id = $_POST['user_id'];  
			
  $sql = "INSERT INTO plan_master(`plan_name`, `plan_price`, `plan_parcent`, `user_id`,`postDateTime`,`postModifyTime`,`currentStatus`) VALUE('$plan_name', '$plan_price', '$plan_parcent', '$user_id' ,now() , now(), 'Y')";
//print_r($sql);exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("Customer Plan Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_customer_plan.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
  
  $tdsid = $_POST['tdsid'];
  $plan_name = filter_var(str_replace("'","\'",$_POST['plan_name']), FILTER_SANITIZE_STRING);
  $plan_parcent = $_POST['plan_parcent'];     
  
  
  $sql = "UPDATE plan_master SET  `plan_name`='$plan_name', `plan_price`='$plan_price', `plan_parcent`='$plan_parcent', `postModifyTime`=now() WHERE `id`='$tdsid'";
 
  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Customer Plan Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_customer_plan.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>