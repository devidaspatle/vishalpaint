<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];

/*$applicationno = $_POST['application_no'];
$resLoans = mysqli_query($con, "SELECT * FROM loan_installment where  application_no  =  '".$applicationno."'");
$sum = 0;
while($row = mysqli_fetch_assoc($resLoans))
{ 
$sum += $row['emi_installment'];
}
 echo $sum;
 die;
 */
if(isset($_POST['submit']))
{ 
	@extract($_POST);
	$sqlg = "SELECT * FROM loan_application order by id desc";
	$resultQgl = mysqli_query($con, $sqlg); 
	$rowQgl = mysqli_fetch_array($resultQgl);
	 
	$application_no = 100000 + $rowQgl['id'];


		 
  $custom_id = $_POST['custom_id'];
  $sql = "INSERT INTO `loan_application` (`id`, `application_no`, `user_id`, `membershipid`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `phone`, `emailid`, `belongto`, `possesscard`, `present_address`, `present_city`, `present_state`, `present_pincode`, `permanent_address`, `permanent_city`, `permanent_state`, `permanent_pincode`, `panno`, `nationality`, `idproof_type`, `idnumber`, `employer_name`, `employer_address`, `designation`, `company_id`, `contentno`, `average_monthly_income`, `average_monthly_expenditure`, `average_monthly_surplus_amount`, `loan_amount`, `tenure`, `approval_loan`,`principal`,`interest`,`emi_installment`,`processing_fees`,   `payment_mode`, `payment_date`,  `guarantor_name`, `guarantor_address`, `contact_number`, `guarantor_pincode`,`loan_document`, `postDateTime`,  `currentStatus`) VALUES (NULL, '$application_no', '$user_id', '$membershipid', '$firstname', '$middlename', '$lastname', '$gender', '$dob', '$phone', '$emailid', '$belongto', '$possesscard', '$present_address', '$present_city', '$present_state', '$present_pincode', '$permanent_address', '$permanent_city', '$permanent_state', '$permanent_pincode', '$panno', '$nationality', '$id_proof_type', '$idnumber', '$employer_name', '$employer_address', '$designation','$company_id',  '$contentno', '$average_monthly_income','$average_monthly_expenditure', '$average_monthly_surplus_amount', '$loan_amount', '$tenure','$approval_loan','$principal','$interest','$emi_installment', '$processing_fees', '$payment_mode', now(), '$guarantor_name','$guarantor_address','$contact_number','$guarantor_pincode','$loan_document', now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("Loan Application Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_loan_application.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
  @extract($_POST);
  $custom_id = $_POST['custom_id'];
 
  $sql = "UPDATE loan_application SET `user_id`='$user_id', `membershipid`='$membershipid', `firstname`='$firstname', `middlename`='$middlename',`lastname`='$lastname', `gender`='$gender', `dob`='$dob', `phone`='$phone',`emailid`='$emailid', `belongto`='$belongto', `possesscard`='$possesscard', `present_address`='$present_address',`present_city`='$present_city', `present_state`='$present_state', `present_pincode`='$present_pincode', `permanent_address`='$permanent_address',`permanent_city`='$permanent_city', `permanent_state`='$permanent_state', `permanent_pincode`='$permanent_pincode', `panno`='$panno',`nationality`='$nationality', `idproof_type`='$id_proof_type', `idnumber`='$idnumber', `employer_name`='$employer_name', `employer_address`='$employer_address',`designation`='$designation', `contentno`='$contentno', `average_monthly_income`='$average_monthly_income', `average_monthly_expenditure`='$average_monthly_expenditure',`average_monthly_surplus_amount`='$average_monthly_surplus_amount',`loan_amount`='$loan_amount', `tenure`='$tenure',`approval_loan`='$approval_loan',`principal`='$principal',`interest`='$interest',`emi_installment`='$emi_installment',`processing_fees`='$processing_fees', `payment_mode`='$payment_mode', `loan_document`='$loan_document', `postModifyTime`= now() WHERE `id`='$custom_id'";

//echo $sql;
//print_r($sql);
//exit; 

  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Loan Application Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_loan_application.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
