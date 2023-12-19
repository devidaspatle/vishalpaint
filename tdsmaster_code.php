<?php
error_reporting(0);
include_once("includes/db_config.php");
//require_once('includes/check_session.php'); 
$gid = $_GET['id'];

if(isset($_POST['submit']))
{ 
	$tds_name = $_POST['tds_name'];  
  $tds_rate = $_POST['tds_rate']; 
  $user_id = $_POST['user_id']; 
  $commission_parcent = $_POST['commission_parcent']; 
			
  $sql = "INSERT INTO tdsmaster(`tds_name`, `tds_rate`,`commission_parcent`,`user_id`,`postDateTime`,`postModifyTime`,`currentStatus`) VALUE('$tds_name', '$tds_rate','$commission_parcent', '$user_id' ,now() , now(), 'Y')";
//print_r($sql);exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("TDS Master Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("tds_master.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
  @extract($_POST);
  $tdsid = $_POST['tdsid'];
  $tds_name = filter_var(str_replace("'","\'",$_POST['tds_name']), FILTER_SANITIZE_STRING);
  $tds_rate = $_POST['tds_rate'];     
  
  
  $sql = "UPDATE tdsmaster SET  `tds_name`='$tds_name', `tds_rate`='$tds_rate',`commission_parcent`='$commission_parcent', `postModifyTime`=now() WHERE `id`='$tdsid'";

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("TDS Master Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("tds_master.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>