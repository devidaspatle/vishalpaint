<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];


if(isset($_POST['Update'])=='Update')
{
	@extract($_POST);
  
  $sql = "UPDATE sms_configuration  SET `staff_registration`='$staff_registration', `member_registration`='$member_registration', `member_registration_with_payment`='$member_registration_with_payment', `group_registration`='$group_registration' , `member_payment`='$member_payment', 
  `group_payment`='$group_payment', `renew_group`='$renew_group', `birthday_message`='$birthday_message', `upcoming_renewal`='$upcoming_renewal', `due_notification`='$due_notification', `postModifyDateTime` = now() WHERE `id`='$edit_id'";

  if (mysqli_query($con, $sql, MYSQLI_STORE_RESULT) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("SMS Configuration  Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("sms_configuration.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
