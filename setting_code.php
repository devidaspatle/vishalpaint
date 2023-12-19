<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];

$loanid = $_POST['loanid'];
$sqlg = "SELECT * FROM company_setting where id = '$loanid'";
$resultQgl = mysqli_query($con, $sqlg); 
$rowQgl = mysqli_fetch_array($resultQgl);

if(isset($_POST['submit']))
{ 
	@extract($_POST);
	$ten_digit_random_number = mt_rand(1000000000,9999999999);
	$application_no = $ten_digit_random_number;
	$loanid = '927723';


  $sql = "INSERT INTO `company_setting` (`id`, `loanid`, `company_name`, `emailid`, `phone`, `address`, `city`, `state`, `gstno`, `invgreet`, `file`, `invtandc`,  `postDateTime`, `postModifyTime`, `currentStatus`) VALUES (NULL, '$loanid', '$company_name', '$emailid', '$phone', '$address', '$city', '$state', '$gstno', '$invgreet', '$file', '$invtandc', now(), now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("Setting Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("settings.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
  @extract($_POST);
 
	 $src1 = $_FILES['file']['tmp_name'];
	$tmp1 = explode(".", $_FILES['file']['name']);
	$shopimg1 = round(microtime(true)) . '.' . end($tmp1);
	$dest1 = 'logo/'.$shopimg1;
	if(move_uploaded_file($src1,$dest1))
	{
		$shopimg1 = round(microtime(true)) . '.' . end($tmp1);
	}
	else
	{
		$shopimg1 = "";	
	}
	
 $sql = "UPDATE company_setting SET `company_name`='$company_name', `emailid`='$emailid', `phone`='$phone', `address`='$address',`city`='$city', `state`='$state', `gstno`='$gstno', `invgreet`='$invgreet',`file`='$shopimg1', `invtandc`='$invtandc', `user_id`='$user_id', `postModifyTime`= now() WHERE `id`='$edit_id'";

//echo $sql;
//print_r($sql);
//exit; 

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Settings Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("Settings.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
