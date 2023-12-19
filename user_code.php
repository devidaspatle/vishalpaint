<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];


$custom_id = $_POST['custom_id'];

$sqlg = "SELECT * FROM employee_registration where id = '$gid'";
$resultQgl = mysqli_query($con, $sqlg); 
$rowQgl = mysqli_fetch_array($resultQgl);

if(isset($_POST['submit']))
{
    	
@extract($_POST);
$ten_digit_random_number = mt_rand(100000,999999);
$emp_id = $ten_digit_random_number;

  $sql = "INSERT INTO `users` (`id`, `user_id`, `userName`, `passWord`,  `empid`, `name`, `role`,`currentStatus`, `postDateTime`, `MdPostDateTime`) VALUES (NULL, '$user_id',  '$userName', '$passWord', '$employee_id', '$name',  '$role', 'Y', now(), now())";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("Employee Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_user.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
 @extract($_POST);
 $userid = $_POST['userid'];
  $sql = "UPDATE users SET `user_id`='$user_id', `userName`='$userName', `empid`='$employee_id', `name`='$name', `role`='$role', `MdPostDateTime`= now()  WHERE `id`='$userid'";
//echo $sql;
//die;
  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("User Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_user.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
