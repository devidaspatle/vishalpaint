<?php
error_reporting(0);
include_once("includes/db_config.php");
//require_once('includes/check_session.php'); 
$gid = $_GET['id'];
$sqlg = "SELECT * FROM feedback where id = '$gid'";
$resultQgl = mysqli_query($con, $sqlg); 
$rowQgl = mysqli_fetch_array($resultQgl);

if(isset($_POST['submit']))
{ 
	$title = $_POST['title'];
  $description = $_POST['description']; 
  $user_id = $_POST['user_id']; 
			
  $sql = "INSERT INTO feedback(`title`, `description`,`user_id`,`postDateTime`,`postModifyTime`,`currentStatus`) VALUE('$title', '$description' , '$user_id' ,now() , now(), 'Y')";
//print_r($sql);exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("feedback Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_feedback.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
  
  $feedbackid = $_POST['feedbackid'];
  $title = filter_var(str_replace("'","\'",$_POST['title']), FILTER_SANITIZE_STRING);
  $description = $_POST['description'];     
  
  
  $sql = "UPDATE feedback SET  `title`='$title', `description`='$description', `postModifyTime`=now() WHERE `id`='$feedbackid'";

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("feedback Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_feedback.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>