<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];

$sqlg = "SELECT * FROM customer_registration order by id desc";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_fetch_array($resultQgl);
$application_no = 1000000 + $rownum['id'];

if(isset($_POST['submit']))
{ 

	

	@extract($_POST);
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$middleName = $_POST['middleName'];
    //$ten_digit_random_number = mt_rand(1000000000,9999999999);
	//$application_no = $ten_digit_random_number;
	//$customer_id = random_str(8, 'abcdefghijklmnopqrstuvwxyz');
	//$code_no = '74';
	$age =40;
	$name_of_applicant =  $firstName.' '.$middleName.' '.$lastName;

  $sql = "INSERT INTO `customer_registration` (`id`,`user_id`, `customer_id`, `application_no`,`parent_id`, `firstName`,`middleName`,`lastName`, `father_name`, `present_address`, `present_city`, `present_state`, `present_pincode`, `permanent_address`, `permanent_city`, `permanent_state`, `permanent_pincode`, `date_of_join`, `date_of_birth`, `age`, `gender`, `pan_number`, `mobile_number`, `emailid`, `nationality`, `id_proof_type`, `payment_type`, `id_number`, `payment_number`, `plan_type`, `plan_price`, `plan_percent`,`total_payment`, `postDataTime`, `postModifyDateTime`, `currentStatus`) VALUES (NULL, '$user_id','$customer_id', '$application_no','$parent_id', '$firstName','$middleName','$lastName', '$father_name', '$present_address', '$present_city', '$present_state', '$present_pincode', '$permanent_address', '$permanent_city', '$permanent_state', '$permanent_pincode', '$date_of_join', '$date', '$age', '$gender', '$pan_number', '$mobile_number', '$emailid', '$nationality', '$id_proof_type','$payment_type', '$id_number', '$payment_number', '$plan_type', '$plan_price','$plan_parcent','$total_rs', now(), now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {

	echo '<script type="text/javascript">alert("Customer Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_customer.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
	@extract($_POST);
  
 $typeid = $_POST['customer_id'];
 $sql = "UPDATE customer_registration SET `user_id`='$user_id',`parent_id`='$parent_id', `firstName`='$firstName' , `middleName`='$middleName', `lastName`='$lastName', `father_name`='$father_name', `present_address`='$present_address', `present_city`='$present_city', `present_state`='$present_state', `present_pincode`='$present_pincode', `permanent_address`='$permanent_address', `permanent_city`='$permanent_city', `permanent_state`='$permanent_state', `permanent_pincode`='$permanent_pincode' , `date_of_join`='$date_of_join' , `date_of_birth`='$date_of_birth' , `age`='$age' , `gender`='$gender' , `pan_number`='$pan_number'  , `mobile_number`='$mobile_number' , `emailid`='$emailid' , `nationality`='$nationality' , `id_proof_type`='$id_proof_type' , `payment_type`='$payment_type' , `id_number`='$id_number' , `payment_number`='$payment_number', `plan_type`='$plan_type' , `plan_price`='$plan_price' ,  `plan_percent`='$plan_parcent' , `total_payment`='$total_rs' , `postModifyDateTime` = now() WHERE `id`='$typeid'";
//die;
  if (mysqli_query($con, $sql, MYSQLI_STORE_RESULT) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Customer Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_customer.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
