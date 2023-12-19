<?php
error_reporting(0);
include_once("includes/db_config.php");
require_once('includes/check_session.php'); 
$gid = $_GET['id'];
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];

if(isset($_POST['submit']))
{ 
	
  $designation = $_POST['designation']; 
  $user_id = $_POST['user_id']; 
			
  $sql = "INSERT INTO designation(`designation`, `user_id`,`postDateTime`,`postModifyTime`,`currentStatus`) VALUE('$designation',  '$user_id' ,now() , now(), 'Y')";
//print_r($sql);exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("TDS Master Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_designation.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
  
  $tdsid = $_POST['tdsid'];
  $designation = filter_var(str_replace("'","\'",$_POST['designation']), FILTER_SANITIZE_STRING);
      
  
  
  $sql = "UPDATE designation SET  `designation`='$designation', `postModifyTime`=now() WHERE `id`='$tdsid'";

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Designation Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_designation.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>