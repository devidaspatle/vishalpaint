<?php 
include_once("includes/db_config.php");
$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member");
$totalExecutive =mysqli_num_rows($resultExecutive);

$resultIdprooftype = mysqli_query($con, "SELECT * FROM idprooftype where  currentStatus = 'Y'");
$totalIdprooftype =mysqli_num_rows($resultIdprooftype);

$resultState = mysqli_query($con, "SELECT * FROM bh_state where currentStatus='Y'");
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

<?php include "left.php"; ?>

				<!-- end: sidebar -->



				<section role="main" class="content-body">

					<header class="page-header">

						<h2>Loan Application From</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><a href="registration.html">Loan Application From</a></li>

								<li><span>Loan Application From&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

						<form id="form"  method="POST" action="loan_application_code.php" class="form-horizontal" onSubmit="disable();">

								<section class="panel">

									<header class="panel-heading">

										<h3 class="panel-title">Personal Details</h3>

									</header>

									<div class="panel-body">

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Customer ID</label>

											<div class="col-sm-8">

												<input type="text" name="membershipid" id="membershipid" maxlength="100" class="form-control"/>

												<span class="red" id="err_gymname"></span>

											</div>

										</div>


											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">First Name<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="firstname" id="firstname" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Middle Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="middlename" id="middlename" maxlength="100" class="form-control" required />

												<span class="red" id="err_emptype"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Last Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="lastname" id="lastname" maxlength="100" class="form-control" required />

												<span class="red" id="err_emptype"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Gender </label>

											<div class="col-sm-8">
												<input type="radio" id="gender" name="gender" value="M" /> &nbsp; Male &nbsp;

												<input type="radio" id="gender" name="gender" value="F" /> Female
												

												<span class="red" id="err_emptype"></span>

											</div>

										</div>



										<div class="form-group col-sm-6">


										<label class="col-sm-4 control-label">Date of Birth </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>
 								<input type="date" name="dob" id="dob" autocomplete="off" maxlength="40"  class="form-control">

												</div>

												<span class="red" id="err_dob"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Phone </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-phone"></i>

													</span>

													<input type="text" name="phone" id="phone" maxlength="12" class="form-control"/>

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Email ID </label>
											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-envelope"></i>

													</span>

													<input type="email"  name="emailid" id="emailid" onChange="check_mail_id()" maxlength="100" class="form-control"  /><!--required-->

												</div>

											</div>

										</div>	
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Whether belong to </label>
											<div class="col-sm-8">

												<div class="input-group">
													<input id="belongto" name="belongto"  type="radio" value="4"> General &nbsp;
                                                    <input id="belongto" name="belongto" type="radio" value="3"> OBC &nbsp;
                                                    <input id="belongto" name="belongto" type="radio" value="2"> SC  &nbsp; 
                                                    <input id="belongto" name="belongto" type="radio" value="1"> ST &nbsp; 
												</div>

											</div>

										</div>	
										<div class="form-group col-sm-6">

											<label class="col-sm-6 control-label" style="text-align:left">Whether possess BPL Card: </label>

											<div class="col-sm-6" style="text-align:left">

												<div class="input-group">
													<input id="possesscard" name="possesscard" type="radio" value="Yes"> &nbsp;Yes &nbsp;
                                                    <input id="possesscard" name="possesscard" type="radio" value="No"> &nbsp; No

												</div>



											</div>

										</div>	
										<div class="form-group col-sm-12"><h4 class="panel-title">Present Address</h4></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address </label>

											<div class="col-sm-8">

												<textarea name="present_address" id="present_address" rows="2" class="form-control" ></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" required name="present_city" id="present_city" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>

										



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">State </label>

											<div class="col-sm-8">

												<select id="present_state" name="present_state" class="form-control" required >

												<option value="">Select</option>
                                                 <?php 
												while($rowState = mysqli_fetch_array($resultState))
												{
												?>
												<option value="<?php echo $rowState['sta_id'];?>"<?php if($rowState['sta_id'] == 26) { echo "selected='selected'";}?>><?php echo $rowState['sta_name'];?></option>	
												<?php }?>
											</select>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

												<input type="text" name="present_pincode" id="present_pincode" maxlength="50" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>

										<div class="form-group col-sm-12"><h4>Permanent Address</h4></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address </label>

											<div class="col-sm-8">

												<textarea name="permanent_address" id="permanent_address" rows="2" class="form-control" ></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" required name="permanent_city" id="permanent_city" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>

										



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">State </label>

											<div class="col-sm-8">

											 <select id="permanent_state" name="permanent_state" class="form-control" required >

													<option value="">Select</option>
                                                 <?php 
                                                 $resultStates = mysqli_query($con, "SELECT * FROM bh_state where currentStatus='Y'");
												while($rowStates = mysqli_fetch_array($resultStates))
												{
												?>
												<option value="<?php echo $rowStates['sta_id'];?>"<?php if($rowStates['sta_id'] == 26) { echo "selected='selected'";}?>><?php echo $rowStates['sta_name'];?></option>	
												<?php }?>
											</select>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

												<input type="text" name="permanent_pincode" id="permanent_pincode" maxlength="50" class="form-control" />

												<span class="red" id="err_pincode"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Nationality</label>

											<div class="col-sm-8">

												<input type="text" name="nationality" value="Indian" id="nationality" maxlength="100" class="form-control"  />

												<span class="red" id="err_nationality"></span>

											</div>

										</div>
                                        
                                        <div class="form-group col-sm-12"><h4 class="panel-title">Loan Guarantor</h4></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Name </label>

											<div class="col-sm-8">

													<input type="text" required name="guarantor_name" id="guarantor_name" maxlength="100" class="form-control" />
												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address <span class="required">*</span></label>

											<div class="col-sm-8">
											<textarea name="guarantor_address" id="guarantor_address" rows="2" class="form-control" ></textarea>
											
												<span class="red" id="err_city"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Contact No. </label>

											<div class="col-sm-8">

													<input type="text" required name="contact_number" id="contact_number" maxlength="10" class="form-control" />
												<span class="red" id="err_address"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

													<input type="text" required name="guarantor_pincode" id="guarantor_pincode" maxlength="10" class="form-control" />
												<span class="red" id="err_address"></span>

											</div>

										</div>
										<div class="form-group col-sm-12"><h4>Occupation Details</h4></div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Employer's Name</label>

											<div class="col-sm-8">

												<input type="text" name="employer_name" id="employer_name"  maxlength="100"  class="form-control">

												<span class="red" id="err_traincharges"></span>

											</div>

										</div>
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address </label>

											<div class="col-sm-8">

												<textarea name="permanent_address" id="employer_address" rows="2" class="form-control" ></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Designation</label>

											<div class="col-sm-8">

												<input type="text" name="designation" id="designation"  maxlength="10"  class="form-control">

												<span class="red" id="err_traincharges"></span>

											</div>

										</div>
<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Company ID</label>

											<div class="col-sm-8">

												<input type="text" name="company_id" id="company_id"  maxlength="10"  class="form-control">

												<span class="red" id="err_traincharges"></span>

											</div>

										</div>

                                         <div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Contact No.</label>

											<div class="col-sm-8">

												<input type="text" name="contentno" id="contentno"  maxlength="10"  class="form-control">

												<span class="red" id="err_traincharges"></span>

											</div>

										</div>
										
								
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">ID proof Type <span class="required">*</span></label>

											<div class="col-sm-8">

									      <select id="id_proof_type" name="id_proof_type" class="form-control" required >

												<option value="">Select ID proof Type</option>
                                                 <?php 
												while($rowIdproofType = mysqli_fetch_array($resultIdprooftype))
												{
												?>
												<option value="<?php echo $rowIdproofType['id'];?>"><?php echo $rowIdproofType['proof_type'];?></option>	
												<?php }?>
											</select>
												<span class="red" id="err_emptype"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">ID Proof Number<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="id_number" id="id_number"  maxlength="10" required class="form-control">

												<span class="red" id="err_traincharges"></span>

											</div>

										</div>

									<div class="form-group col-sm-12"><h4>Income/Expenditure Details</h4></div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Average Monthly Income :</label>

											<div class="col-sm-8">

												<input type="text" name="average_monthly_income" id="average_monthly_income" maxlength="100" class="form-control"  />

												<span class="red" id="err_idnumber"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Average Monthly Expenditure </label>

											<div class="col-sm-8">

												<input type="text" name="average_monthly_expenditure" value="0" id="average_monthly_expenditure" maxlength="100" class="form-control"  />

												<span class="red" id="err_payment_number"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Average Monthly Surplus Amount</label>

											<div class="col-sm-8">

												<input type="text" name="average_monthly_surplus_amount" value="0" id="average_monthly_surplus_amount" maxlength="100" class="form-control"  />

												<span class="red" id="err_payment_number"></span>

											</div>

										</div>		
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Loan Document <span class="required">*</span></label>

											<div class="col-sm-8">
											<textarea name="loan_document" id="loan_document" rows="2" class="form-control" ></textarea>
											
												<span class="red" id="err_city"></span>

											</div>

										</div>
										<div class="form-group col-sm-12"><h4>Loan Details</h4></div>

										
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Loan Tenure (In Years) </label>

											<div class="col-sm-8">

												<input type="text" name="tenure" value="" id="tenure" maxlength="100" class="form-control"  />

												<span class="red" id="err_payment_number"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Loan Re-Payment Mode </label>

											<div class="col-sm-8">

												Weekly &nbsp;<input type="radio" name="payment_mode" value="weekly" id="payment_mode" /> &nbsp; &nbsp;

												Monthly &nbsp;<input type="radio" name="payment_mode" value="monthly" id="payment_mode" />

											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Required Loan Amount</label>

											<div class="col-sm-8">

												<input type="text" name="loan_amount" value="" id="loan_amount" maxlength="10" class="form-control"  />
											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Approval Loan Amount</label>

											<div class="col-sm-8">
											<input type="text" name="approval_loan" value="" id="approval_loan" maxlength="10" class="form-control"  />

											</div>

										</div>	
                                         <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Principal (Rs.)</label>

											<div class="col-sm-8">
											<input type="text" name="principal" value="" id="principal" maxlength="10" class="form-control"  />

											</div>

										</div>	
                                         <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Interest (Rs.)</label>

											<div class="col-sm-8">
											<input type="text" name="interest" value="" id="interest" maxlength="10" class="form-control"  />

											</div>

										</div>		
                                         <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">EMI Installment(Rs) </label>

											<div class="col-sm-8">
											<input type="text" name="emi_installment" value="" id="emi_installment" maxlength="10" class="form-control"  />

											</div>

										</div>	
										 <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Processing Fees (Rs) </label>

											<div class="col-sm-8">
											<input type="text" name="processing_fees" value="" id="processing_fees" maxlength="10" class="form-control"  />

											</div>

										</div>											
											</div>
									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>

												<button type="reset" class="btn btn-default">Reset</button>


												<button type="button" onClick="window.location.href='loan_application.php'" name="" class="btn btn-default">Back</button>

											</div>

										</div>

									</footer>

								</section>

							</form>

						</div>

					</div>

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

		

        <script>



	function check_mobile_no(){

	

	

				

				var httpxml;

				

				var number = document.getElementById('phone').value;

				

				try  { // Firefox, Opera 8.0+, Safari

			  		httpxml=new XMLHttpRequest();

			  	}catch (e) { // Internet Explorer

			  		try { httpxml=new ActiveXObject("Msxml2.XMLHTTP"); }

			  		catch (e) {  

						try { httpxml=new ActiveXObject("Microsoft.XMLHTTP"); }

			    		catch (e) {

			      			alert("Your browser does not support AJAX!");

			      			return false;

			      		}

					}

			  	}

			  

				function stateck(){

					if(httpxml.readyState==3 || httpxml.readyState==2 || httpxml.readyState==1) {  }

					if(httpxml.readyState==4)  {

						var rsponse=httpxml.responseText; 

						rsponse=rsponse.trim();

						



						if(rsponse.trim() == "find"){

							document.getElementById('phone').value = '';

							document.getElementById('response').innerHTML = 'Phone Number Is Already Exist!';

							

						}

						if(rsponse.trim() == "not"){

							document.getElementById('response').innerHTML = '';

							

						}

					

					}	

				}

			

				var url="action_layer.html";

				url=url+"?action=check_mobile_no&no="+number;

				httpxml.onreadystatechange=stateck;

				httpxml.open("GET",url,true);

				httpxml.send(null);

				

			}

			

</script>

		

		<script>

			function trim(str)

		  	{

		      	return str.replace(/^\s+|\s+$/g,"");

		  	}

			

			$(function()

			{

				var btnUpload=$('#uploadprofile');

				var status=$('#picture_error');

				new AjaxUpload(btnUpload, {

				action: 'upload-file.html',

				name: 'uploadfile',

				onSubmit: function(file, ext)

				{

				 if (! (ext && /^(jpeg|jpg|png|gif|bmp)$/.test(ext))){ 

				status.html('Only JPEG.JPG,PNG or BMP files allowed');

				return false;

				}

							status.html("Wait...");

			

				},

				

				onComplete: function(file, response)

				{

					var bb=response.split('##')

					if(trim(bb[0])=="success")

					{

						document.getElementById('profileimage').src=bb[1];

						document.getElementById('profile').value=bb[1];

							status.html("");

			

						status.html("<font color='green'>Sucess..!</font>");

					}

					else

					{

						status.html("<font color='red'>OOps! something wrong.</font>");

					}

				}});

			});

		</script>

        

        <script>



	function check_mail_id(){

		

		//alert('a');

				

				var httpxml;

				

				var mail = document.getElementById('emailid').value;

				

				try  { // Firefox, Opera 8.0+, Safari

			  		httpxml=new XMLHttpRequest();

			  	}catch (e) { // Internet Explorer

			  		try { httpxml=new ActiveXObject("Msxml2.XMLHTTP"); }

			  		catch (e) {  

						try { httpxml=new ActiveXObject("Microsoft.XMLHTTP"); }

			    		catch (e) {

			      			alert("Your browser does not support AJAX!");

			      			return false;

			      		}

					}

			  	}

			  

				function stateck(){

					if(httpxml.readyState==3 || httpxml.readyState==2 || httpxml.readyState==1) {  }

					if(httpxml.readyState==4)  {

						var rsponse=httpxml.responseText; 

						rsponse=rsponse.trim();

						

						//alert(rsponse);

						

						if(rsponse.trim() == "yes"){

							document.getElementById('emailid').value = '';

							document.getElementById('response1').innerHTML = 'Email ID Has been Already Existed';

						}

						if(rsponse.trim() == "no"){

							document.getElementById('response1').innerHTML = '';

						}

					}	

				}

			

				var url="action_layer.html";

				url=url+"?action=check_mail&mail="+mail;

				//alert(url);

				httpxml.onreadystatechange=stateck;

				httpxml.open("GET",url,true);

				httpxml.send(null);

				

			}

			 

</script>

	</body>

</html>