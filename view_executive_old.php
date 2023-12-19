<?php 
error_reporting(0);
include_once("includes/db_config.php");
require_once('includes/check_session.php');
$executive_id = $_GET['type'];
//$customer_id = random_string(8, 'abcdefghijklmnopqrstuvwxyz');
$user_id = $_SESSION['rsoftId'];

$sqlg = "SELECT * FROM executive_member where application_no    = '$executive_id'";
$resultQgl = mysqli_query($con, $sqlg); 
$rowQgl = mysqli_fetch_array($resultQgl);
$customerId = $rowQgl['customerId'];

$resultCustomers = mysqli_query($con, "SELECT * FROM customer_registration where  application_no  = '$customerId'");
$totalCustomers =mysqli_num_rows($resultCustomers);
$rowCustomers = mysqli_fetch_array($resultCustomers);
$present_state = $rowCustomers['present_state'];

$resultState = mysqli_query($con, "SELECT * FROM bh_state where sta_id = $present_state");

$resultIdprooftype = mysqli_query($con, "SELECT * FROM idprooftype where  currentStatus = 'Y'");
$totalIdprooftype =mysqli_num_rows($resultIdprooftype);

//$plan_type = $rowCustomers['plan_type'];
 $plan_type = $rowCustomers['plan_type'];
$resultPlantype = mysqli_query($con, "SELECT * FROM plan_master whpere id = '$plan_type'");
?>

<!doctype html>

<html class="fixed">

	<head>

		<!-- Basic -->

		<meta charset="utf-8">



		 <title>BHOYARNATH | Mutual Nidhi Limited</title>

		

		<!-- Web Fonts  -->

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">



		<!-- Vendor CSS -->

		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />

		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />



		<!-- Theme CSS -->

		<link rel="stylesheet" href="assets/stylesheets/theme.css" />



		<!-- Skin CSS -->

		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />



		<!-- Theme Custom CSS -->

		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<script src="assets/vendor/modernizr/modernizr.js"></script>

		<!-- Head Libs -->		

        

	</head>

	<body>

		<section class="body">



			<!-- start: header -->

			<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

.notifications > li .notification-icon {

    /* background: #FFF; */

    border-radius: 50%;

    /* box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.3); */

    /* display: inline-block; */

    /* height: 30px; */

    /* position: relative; */

    /* width: 30px; */

    text-align: center;

    font-size:12px;

    margin-left:8px;

}

@media only screen and (min-width: 768px) {

.top_head {

 display:block;

}

}

@media only screen and (min-width: 768px) and (max-width:1100px) {

.logo h4 {

font-size: 14px;

} 

.top_head a {

font-size: 12px;

    padding: 5px;



}

.header .separator {

margin: 0 5px 0 !important;

}

.userbox .name {

font-size: 10px;

}

}



@media only screen and (max-width: 767px) {

.top_head {

	 display:none;

}

}

</style>

<?php include "header.php"; ?>


<script type="text/javascript">

	function isNumber(evt,id) {

	    evt = (evt) ? evt : window.event;

      	var charCode = (evt.which) ? evt.which : evt.keyCode;

      	if (charCode > 31 && (charCode < 43 || charCode > 57)) {

          document.getElementById(id).style.border = "1px solid red";

          return false;

      	}

      	else

      	{

      	  document.getElementById(id).style.border = "";

          return true;

      	}

	}

	 

	function checkEmail_div(id1,id2)

	{

	    if (document.getElementById(id1).value === '')

	    {

	    	document.getElementById(id1).style.borderColor = "";

		    document.getElementById(id2).innerHTML='';

	    }

	    else

	    {

		    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;



		    if (!filter.test(document.getElementById(id1).value))

		    {

		       document.getElementById(id1).value='';

		       document.getElementById(id1).style.border = "1px solid red";

		       document.getElementById(id2).innerHTML='<font color="#FF0000">Please provide a valid Email Address.</font>';

		       document.getElementById(id1).focus();

		    }

		    else

		    {

		       document.getElementById(id1).style.borderColor = "";

		       document.getElementById(id2).innerHTML='';

		    }

		}

	}  	

</script>			<!-- end: header -->



			<div class="inner-wrapper">

				<!-- start: sidebar -->

				<style>

/*span.help_btn a {

    color: #abb4be;

    text-decoration: none;

    font-size: 1.3rem;

        padding: 12px 25px;

}



span.help_btn div {

    margin: 30px 0;

}*/

.help_btn {

    margin-top: 50px;

    padding: 10px 25px;

}

.faq_btn {

  padding: 10px 25px;

 }

ul.nav-main li i {

    margin-right: 1.1em;

}

.help_btn i.fa.fa-question-circle {

  font-size: 2.0rem;

}

.faq_btn i.fa.fa-info-circle {

  font-size: 2.0rem;

}

.help_btn a, .faq_btn a{

	text-decoration:none;

	}



	ul.nav-main > li > a:hover, ul.nav-main > li > a:focus {

    background-color:#03486B;

}





ul.nav-main li .nav-children li a:hover, ul.nav-main li .nav-children li a:focus {

    background:#03486B;

}





@media only screen and (min-width: 768px) {

.menu_not {

 display:none;

}

}



@media only screen and (max-width: 767px) {

.menu_not {

    float: right;

    margin: 16px 0;

	 display:block;

}

}

</style>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<?php include "left.php"; ?>

				<!-- end: sidebar -->



				<section role="main" class="content-body">

					<header class="page-header">

						<h2>View Executive Registration</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

								<li><span>View Executive Registration&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>


<input type="button" onClick="printDiv('printableArea')" value="Print" />
					<!-- start: page -->
				<div id="printableArea"  style="border:dotted">
					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

							
								<section class="panel">

									 <div style="background-color:#FFFFFF;">
<div style="text-align:center"><img src="logo.png" style="width:450px"></div>
<div style="text-align:center; font-size:14px"><b style="color: #006600">Regd. No. 304365</b></div>
<div style="text-align:center; font-size:14px; color:#000066"><h5><b>Address: Near Sahu Kirana Shop, Jagdish Nagar, Katol Road , Nagpur -13</b></h5></div>
<div style="text-align:center; font-size:14px;color:#000066"><h5><b>Email:bhoyarnathnidhi@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone. No. 7744965631, 776870623</b></h5></div>

										<div style="text-align:center"><h2 class="panel-title"><b>View Executive Details</b></h2></div>
&nbsp;&nbsp;
							
</div><div style="border-bottom: dotted;"></div>
									<div class="panel-body" style="color: #000000; font-size:14px">

									<div class="panel-body">

										<div class="form-group col-sm-6">

										<label class="col-sm-4">First Name </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['firstName'];?>

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4">Middle Name </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['middleName'];?>

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4">Last Name </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['lastName'];?>

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4">Father/Husband </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['father_name'];?>

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										

										



										<div class="form-group col-sm-6">

											<label class="col-sm-4">Gender </label>

											<div class="col-sm-8">
												<?php echo $rowCustomers['gender'];?>

												

												<span class="red" id="err_emptype"></span>

											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4">Email </label>

											<div class="col-sm-8">

												<div class="input-group">

												
													<?php echo $rowCustomers['emailid'];?>

												</div>



											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4">Phone </label>

											<div class="col-sm-8">

												<div class="input-group">

													

													<?php echo $rowCustomers['mobile_number'];?>

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4">Alternate Phone </label>

											<div class="col-sm-8">

												<div class="input-group">

													

													<?php echo $rowCustomers['mobile_number'];?>

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
										<div class="form-group col-sm-12"> <h5><b>Present Address</b></h5></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4">Address </label>

											<div class="col-sm-8">

												 <?php echo $rowCustomers['present_address'];?>

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4">City </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['present_city'];?>

												<span class="red" id="err_city"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4">State </label>

											<div class="col-sm-8">

											    <?php 
												   $rowState = mysqli_fetch_array($resultState);
												   echo $rowState['sta_name'];
												 ?>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4">Pincode </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['present_pincode'];?>

												<span class="red" id="err_city"></span>

											</div>

										</div>

										<div class="form-group col-sm-12"> <h5><b>Permanent  Address</b></h5></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4">Address </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['permanent_address'];?>

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4">City </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['permanent_city'];?>

												<span class="red" id="err_city"></span>

											</div>

										</div>

										



										<div class="form-group col-sm-6">

											<label class="col-sm-4">State </label>

											<div class="col-sm-8">
									<?php 
                                     $permanent_state = $rowCustomers['permanent_state'];
                                     $resultStates = mysqli_query($con, "SELECT * FROM bh_state where sta_id = '$permanent_state'");
								     $rowStates = mysqli_fetch_array($resultStates);
									 echo $rowStates['sta_name'];
									 ?>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4">Pincode </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['permanent_pincode'];?>

												<span class="red" id="err_city"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4">Date of Join </label>

											<div class="col-sm-8">

												<div class="input-group">

													
													<?php 
												 $dateofjoin = $rowCustomers['date_of_join'];
												if(!empty($dateofjoin))
												{
												echo  date("d-m-Y", strtotime($dateofjoin));
												}
												?>

												</div>

												<span class="red" id="err_doj"></span>

											</div>

										</div>

										

										<div class="form-group col-sm-6">

											<label class="col-sm-4">Age </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['age'];?>
											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4">Date of Birth </label>

											<div class="col-sm-8">

												<div class="input-group">
	
 												<?php 
												 $originalDate = $rowCustomers['date_of_birth'];
												if(!empty($originalDate))
												{
												echo  date("d-m-Y", strtotime($originalDate));
												}
												?>

 											
												</div>

											</div>

										</div>

										

										<div class="form-group col-sm-6" id="trainid" >

											<label class="col-sm-4">PAN No.</label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['pan_number'];?>

												<span class="red" id="err_trpanrges"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4">Nationality</label>

											<div class="col-sm-8">

											Indian

												<span class="red" id="err_nationality"></span>

											</div>

										</div>

								
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4">ID proof Type </label>

											<div class="col-sm-8">
											 <?php 
											 $id_proof_type = $rowCustomers['id_proof_type'];
											 $resultIdprooftype = mysqli_query($con, "SELECT * FROM idprooftype where  id = '$id_proof_type'");
													$rowIdproofType = mysqli_fetch_array($resultIdprooftype);
												    echo $rowIdproofType['proof_type'];
												 ?>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4">ID Number</label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['id_number'];?>

												<span class="red" id="err_biomatricid"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4">Plan Type </label>

											<div class="col-sm-8">
												
                                                 <?php 
												$rowPlanType = mysqli_fetch_array($resultPlantype);
												 echo $rowPlanType['plan_name'];?>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4">Plan Price </label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['plan_price'];?>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4">Payment Type </label>

											<div class="col-sm-8">
												<?php 
												$payment_type = $rowCustomers['payment_type'];
												if($payment_type == 1)
												{
												echo "Cash";
												}
												if($payment_type == 2)
												{
												echo "Chaque";
												}
												if($payment_type == 3)
												{
												echo "DD";
												}
												?>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										
										<div class="form-group col-sm-6">

											<label class="col-sm-4">Payment Number</label>

											<div class="col-sm-8">

												<?php echo $rowCustomers['payment_number'];?>

												<span class="red" id="err_mobile_number"></span>

											</div>

										</div>
											</div>
								
								</section>
</div>
							

						</div>

					</div>
	<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="button" onClick="window.location.href='manage_executive.php'" name="" class="btn btn-default">Back</button>

											</div>

										</div>

									</footer>

					<!-- end: page -->

				</section>

			</div>

		</section>



		<!-- Vendor -->

		<script src="assets/vendor/jquery/jquery.js"></script>

		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>

		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>

		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>

		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>

		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->

		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>

	
		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->

		<script src="assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->

		<script src="assets/javascripts/theme.init.js"></script>

		<!-- Examples -->

		<script src="assets/javascripts/forms/examples.validation.js"></script>

		<script src="assets/javascripts/custom.js"></script>

		<script src="assets/javascripts/ajaxupload.3.5.js"></script>

	</body>

</html>