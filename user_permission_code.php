<?php
//error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];
 
$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
 $user_id = $rowlogo['id'];

$groupId = $_POST['group_id'];
$menu_id = $_POST['menu_id'];
$menuid = implode(',', $menu_id);
$sqlg = "SELECT * FROM user_permission where  group_id  = '$groupId'";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_num_rows($resultQgl);

if(isset($_POST['submit']))
{ 
	@extract($_POST);
	
$sql = "INSERT INTO `user_permission`(`id`, `user_id`, `group_id`, `menu_id`, `postDateTime`, `postModifyDateTime`, `currentStatus`) VALUES (NULL, '$user_id', '$group_id', '$menuid', now(), now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("User Permission Added  Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_permission.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}

if(isset($_POST['Update'])=='Update')
{
  

  $sql = "UPDATE user_permission SET `user_id`='$user_id', `group_id`='$group_id', `menu_id`='$menu_id' , `postModifyTime`= now() WHERE `id`='$gid'";

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("User Permission Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("executive_master.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
