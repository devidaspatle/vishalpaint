<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];


$gid = $_GET['type'];
$executiveid = $_POST['executiveid'];
$sqlg = "SELECT * FROM executive_member where id = '$parent_id'";
$resultQgl = mysqli_query($con, $sqlg); 
$rowQgl = mysqli_fetch_array($resultQgl);




if(isset($_POST['submit']))
{ 
  @extract($_POST);
  
    
$sqlg = "SELECT * FROM executive_member order by id desc";
$resultQgl = mysqli_query($con, $sqlg); 
$rowQgl = mysqli_fetch_array($resultQgl);
 
$transdate = date('d-m-Y', time());
$application_no = 1000000 + $rowQgl['id'];
   
  $sql = "INSERT INTO `executive_member`(`id`, `user_id`, `customerId`, `application_no`, `parent_id`, `father_name`, `firstName`,  `middleName`,  `lastName`, `date_of_join`,  `gender`, `mobile_number`, `emailid`, `city`,`address`,`state`,`member_type`, `percent_payment`, `exe_payment`, `bonus_point`,  `payment_date`,  `postDataTime`, `postModifyTime`, `currentStatus`) VALUES (NULL, '$user_id', '$customerId', '$application_no', '$parent_id', '$father_name', '$firstName', '$middleName', '$lastName', '$date_of_join',  '$gender',  '$mobile_number', '$emailid', '$city','$address','$state', '$member_type', '0', '0','0',  now(),  now(), now(),'Y')"; 

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
    
  $sql = "INSERT INTO `executive_tds`(`id`, `user_id`, `tds_price`, `commission_parcent`, `promotions`,  `application_no`, `postDateTime`, `postModifyDateTime`, `currentStatus`) VALUES (NULL, '$user_id', '$tds_price','3','1','$application_no',  now(), now(),'Y')";
  $result = mysqli_query($con, $sql);

  echo '<script type="text/javascript">alert("Executive Added Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_executive.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
  

   
@extract($_POST);
 $sql = "UPDATE executive_member SET `user_id`='$user_id', `parent_id`='$parent_id', `date_of_join`='$date_of_join' , `postModifyTime`= now() WHERE `id`='$executiveid'";

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Executive Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_executive.php");</script>';
  
}

$_SESSION['message']="Unsucessfull";
}

?>
