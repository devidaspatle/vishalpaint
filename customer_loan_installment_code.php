<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];


$customerId = $_POST['customerId'];
$payment_month = $_POST['payment_month'];
$sqlg = "SELECT * FROM loan_installment where application_no = '$customerId' and payment_month = '".$payment_month."'";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_num_rows($resultQgl);
if(empty($rownum))
{

if(isset($_POST['submit']))
{ 
@extract($_POST);
	
	
$sqlg = "SELECT * FROM loan_installment order by id desc";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_fetch_array($resultQgl);
$application_no = $rownum['application_no'];

//$transdate = date('d-m-Y', time());
//$payment_month = date('m', strtotime($transdate));
$recipt_no = 100000 + $rownum['id'];

  $sql = "INSERT INTO `loan_installment`(`id`, `user_id`,  `application_no`, `recipt_no`, `payment_mode`, `payment_number`,  `principal`, `interest`,`emi_installment`,   `payment_date`, `payment_month`,  `postDateTime`, `currentStatus`) VALUES (NULL, '$user_id',  '$customer_id','$recipt_no', '$payment_mode', '$payment_number', '$principal',  '$interest', '$emi_installment',  now(), '$payment_month',  now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {

$sqlg = "SELECT * FROM loan_installment order by desc";
$resultQgl = mysqli_query($con, $sqlg); 
echo $customer_id = mysqli_insert_id($resultQgl);
	
	echo '<script type="text/javascript">alert("Customer Added Loan Payment Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("loan_payment_recipt.php?customer_id='.$customer_id.'&&month='.$payment_month.'");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
}
else
{
	echo '<script type="text/javascript">alert("Allready Customer Loan Payment Paid, This Month...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_loan_application.php");</script>';	
}

if(isset($_POST['Update'])=='Update')
{
  

  $sql = "UPDATE customer_installment SET `user_id`='$user_id', `payment_mode`='$payment_mode', `payment_number`='$payment_number' `principal`='$principal', `interest`='$interest'  WHERE `id`='$gid'";

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Customer Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_loan_application.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
