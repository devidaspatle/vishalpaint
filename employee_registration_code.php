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
    $rid_gal = mt_rand();

    $uploadfolder ='../empolyees/';

	$sourceimage = $uploadfolder.$rid_gal.'_'.basename($_FILES['file']['name']);

	if(move_uploaded_file($_FILES['file']['tmp_name'],$sourceimage)) 
	{ 
    $photo = $rid_gal."_". $_FILES['file']['name'];	

	}		
	@extract($_POST);
	 	
	$sqlg = "SELECT * FROM employee_registration order by id desc";
	$resultQgl = mysqli_query($con, $sqlg); 
	$rowQgl = mysqli_fetch_array($resultQgl);
	 
	$transdate = date('d-m-Y', time());
	$emp_id = 10000 + $rowQgl['id'];

  $sql = "INSERT INTO `employee_registration` (`id`, `emp_id`,  `user_id`, `fullname`, `stafftype`,  `gender`, `emailid`, `city`, `phone`, `state`, `doj`, `empsalary`, `dob`, `address`, `idprooftype`, `idnumber`,`photo`, `postDateTime`, `postModifyTime`, `currentStatus`) VALUES (NULL, '$emp_id', '$user_id',  '$fullname', '$stafftype', '$gender', '$emailid', '$city', '$phone', '$state', '$doj', '$empsalary', '$dob', '$address', '$idprooftype', '$idnumber','$sourceimage', now(), now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("Employee Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("employee_registration.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
 @extract($_POST);
  $sql = "UPDATE employee_registration SET `user_id`='$user_id', `fullname`='$fullname', `stafftype`='$stafftype', `gender`='$gender', `emailid`='$emailid', `city`='$city',`phone`='$phone', `state`='$state', `doj`='$doj', `empsalary`='$empsalary', `dob`='$dob', `address`='$address', `idprooftype`='$idprooftype', `idnumber`='$idnumber' , `postModifyTime`='$doj'  WHERE `id`='$custom_id'";
//echo $sql;
//die;
  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Employee Registrationn Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("employee_registration.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
