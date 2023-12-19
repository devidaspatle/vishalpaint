<?php
//error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];

$custId =  $_POST['custId'];
$customerId = $_POST['customerId'];
$payment_month = $_POST['payment_month'];
//echo "SELECT parent_id FROM executive_member WHERE application_no = '622871599'";

	
$sqlg = "SELECT * FROM customer_installment where application_no = '$customerId' and payment_month = '".$payment_month."'";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_num_rows($resultQgl);
if(empty($rownum))
{

if(isset($_POST['submit']))
{ 
@extract($_POST);
	
	
$sqlg = "SELECT * FROM customer_installment order by id desc";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_fetch_array($resultQgl);
$application_no = $rownum['application_no'];

$transdate = date('d-m-Y', time());
$payment_month = date('m', strtotime($transdate));
$recipt_no = 100000 + $rownum['id'];

  $sql = "INSERT INTO `customer_installment`(`id`, `user_id`, `customer_installment_id`, `application_no`, `recipt_no`, `payment_mode`, `payment_number`,  `payment_price`,  `payment_date`, `payment_month`,  `postDateTime`, `postModifyDateTime`, `currentStatus`) VALUES (NULL, '$user_id', '$customer_installment_id', '$customerId','$recipt_no', '$payment_mode', '$payment_number', '$payment_price',  now(), '$payment_month',   now(), now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {

$sqlg = "SELECT * FROM executive_commissions where customerId='$customerId'";
$resultQgl = mysqli_query($con, $sqlg); 
$numCustomer = mysqli_num_rows($resultQgl);


if(empty($numCustomer))
{
 $sqlComm = "INSERT INTO `executive_commissions`(`id`, `payment_price`, `payment_tds`,`payment_percent`, `bonus_point`, `postDateTime`, `executiveId`,  `customerId`,`user_id`) VALUES (NULL, '$payment_price',  '$tds_price', '$commission_parcent', '300', now(), '$executiveId','$customerId','$user_id')";
 $result = mysqli_query($con, $sqlComm);

 
    ////print($parent_result);
	//die;
$sqlMember = "SELECT * FROM executive_member";
$resultMember = mysqli_query($con, $sqlMember); 
while($rows = mysqli_fetch_array($resultMember))
{
$executiveId = $rows['application_no'];
if($executiveId != $customerId )
{
$sqlMember = "INSERT INTO `executive_commissions`(`id`, `payment_price`, `payment_tds`, `payment_percent`,`bonus_point`,  `postDateTime`, `executiveId`,  `customerId`,`user_id`) VALUES (NULL, '$payment_price',  '$tds_price ','0.5', '50', now(), '$executiveId','$customerId','$user_id')";
$result = mysqli_query($con, $sqlMember);
}
}
//die;
}
else
{
$sqlMember = "SELECT * FROM executive_member";
$resultMember = mysqli_query($con, $sqlMember); 
while($rows = mysqli_fetch_array($resultMember))
{
$executiveId = $rows['application_no'];
if($executiveId != $customerId )
{
$sqlComm = "INSERT INTO `executive_commissions`(`id`, `payment_price`, `payment_tds`, `payment_percent`,`bonus_point`,  `postDateTime`, `executiveId`,  `customerId`,`user_id`) VALUES (NULL, '$payment_price',  '$tds_price ','0.5', '50', now(), '$executiveId','$customerId','$user_id')";
$result = mysqli_query($con, $sqlComm);
}
}
} 

  	
	echo '<script type="text/javascript">alert("Customer Added Payment Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("payment_recipt.php?customer_id='.$customerId.'&&month='.$payment_month.'");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
}
else
{
	echo '<script type="text/javascript">alert("Allready Customer Payment Paid, This Month...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_customer.php");</script>';	
}

if(isset($_POST['Update'])=='Update')
{
  

  $sql = "UPDATE customer_installment SET `user_id`='$user_id', `parent_id`='$parent_id', `date_of_join`='$date_of_join' , `postModifyTime`= now() WHERE `id`='$gid'";

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Customer Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("executive_master.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
