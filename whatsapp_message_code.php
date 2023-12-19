<?php
include_once("includes/db_config.php");
$checkbox_id = implode(', ', $_POST['checkbox_id']);
if(isset($_POST['checkbox_id'])){
  if (is_array($_POST['checkbox_id'])) {
    foreach($_POST['checkbox_id'] as $value){
      echo $value;
    }
  } else {
    $value = $_POST['checkbox_id'];
    echo $value;
  }
}

if(isset($_POST['submit']))
{ 
	@extract($_POST);
	
$resultSms = mysqli_query($con, "SELECT * FROM sms_configuration where  currentStatus = 'Y'");
$rowSms = mysqli_fetch_array($resultSms);
$description = $rowSms['birthday_message'];

/********* start sms code *************/
 $username = "esoftz";
 $password = "123456";
 $sender1 = "ESoftZ";
 $four_digit = mt_rand(1000, 9999);

 $message = $description;

 $senderid = 'BHOYARNATH | Mutual Nidhi Limited';

 $request = "http://www.smsjust.com/sms/user/urlsms.php?username=$username&pass=$password&senderid=$sender1&dest_mobileno=$mobile&message=$message&response=Y";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $request);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	//curl_close($ch);
	//return split(',',$response);
	
/********* end sms code *************/

  $sql = "INSERT INTO `sms_send`(`id`, `customer_id`, `application_no`, `title`,  `description`,  `postDateTime`, `currentStatus`) VALUES (NULL, '$checkbox_id', '$application_no', '$title', '$description',  now(),'Y')";

//echo $sql;
//print_r($sql);
//exit;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("SMS Send Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("sms_send.php");</script>';
	
}
}
?>
