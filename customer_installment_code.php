<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];
require_once('getExecutiveParentId.php');

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];

$custId =  $_POST['custId'];
 $executiveId = $_POST['executiveId'];
 $customerId = $_POST['customerId'];
 $ids= $executiveId;
$parents =getParents($ids);
$execuId = implode(',',$parents);
 $directParent = getDirectParent($id);
//print_r($parents);

//  echo $lenArr = sizeof($parents);
// foreach ($parents as $item) {
 
//   echo  $item;
//   echo "<br>";
// }
 

$parentid =  $parents['0'];


$resultexms= mysqli_query($con,"select * from executive_member where parent_id = '".$parentid."' and currentStatus='Y'");
echo $rowexm = mysqli_num_rows($resultexms);


$payment_month = $_POST['payment_month'];


/*foreach( $parents as $value ){
echo $value;
echo "<br>";
}
die;
*/
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

$transdate = date('d-m-Y', time());
//$payment_month = date('m', strtotime($transdate));
$recipt_no = 100000 + $rownum['id'];

  $sql = "INSERT INTO `customer_installment`(`id`, `user_id`, `customer_installment_id`, `application_no`, `recipt_no`, `payment_mode`, `payment_number`,  `payment_price`,  `payment_date`, `payment_month`,  `postDateTime`, `postModifyDateTime`, `currentStatus`) VALUES (NULL, '$user_id', '$customerId', '$customerId','$recipt_no', '$payment_mode', '$payment_number', '$payment_price',  now(), '$payment_month',   now(), now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {

$sqlg = "SELECT * FROM executive_commissions where customerId='$customerId'";
$resultQgl = mysqli_query($con, $sqlg); 
 $numCustomer = mysqli_num_rows($resultQgl);

if(empty($numCustomer))
{
	 $commissions = $payment_price * 3 /100;
	
	  $sqlComm = "INSERT INTO `executive_commissions`(`id`, `payment_month`, `payment_price`, `payment_tds`,`payment_percent`, `bonus_point`, `postDateTime`, `executiveId`,  `customerId`,`user_id`) VALUES (NULL, '$payment_month',  '$payment_price',  '$tds_price', '$commissions', '300', now(), '$executiveId','$customerId','$user_id')";
	$result = mysqli_query($con, $sqlComm);

    ////print($parent_result);
	//die;
//die;
$resultexm= mysqli_query($con,"select * from executive_member where parent_id = '".$parentid."'  and currentStatus  ='Y'");
$rowexm = mysqli_num_rows($resultexm);


	 $execommissions = $payment_price * 0.5 /100;
	 foreach ($parents as $item) {
 
	$sqlCommexe = "INSERT INTO `executive_commissions`(`id`, `payment_month`, `payment_price`, `payment_tds`,`payment_percent`, `bonus_point`, `postDateTime`, `executiveId`,  `customerId`,`user_id`) VALUES (NULL,  '$payment_month', '$payment_price',  '$tds_price', '$execommissions', '50', now(), '$item','$customerId','$user_id')";
      $resultexe = mysqli_query($con, $sqlCommexe);
}
	 
   

//die;


}
else
{
	$execommissions = $payment_price * 0.5 /100;
	$commissions = $payment_price * 3 /100;
	 $sqlComm = "INSERT INTO `executive_commissions`(`id`, `payment_month`, `payment_price`, `payment_tds`,`payment_percent`, `bonus_point`, `postDateTime`, `executiveId`,  `customerId`,`user_id`) VALUES (NULL,  '$payment_month', '$payment_price',  '$tds_price', '$commissions', '0', now(), '$executiveId','$customerId','$user_id')";
	$result = mysqli_query($con, $sqlComm);
     
    
     foreach ($parents as $item) {
	 $sqlCommexe = "INSERT INTO `executive_commissions`(`id`, `payment_month`, `payment_price`, `payment_tds`,`payment_percent`, `bonus_point`, `postDateTime`, `executiveId`,  `customerId`,`user_id`) VALUES (NULL,  '$payment_month', '$payment_price',  '$tds_price', '$execommissions', '0', now(), '$item','$customerId','$user_id')";
	   $resultexe = mysqli_query($con, $sqlCommexe);
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
	echo '<script type="text/javascript">window.location.assign("payment_deposit.php");</script>';	
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
