<?php 
$loanid = $_GET['type'];
include_once("includes/db_config.php");
$custom_id = $_GET['type'];

$resultLoan = mysqli_query($con, "SELECT * FROM  loan_application where id = '$loanid'");
$rowLoan = mysqli_fetch_array($resultLoan);

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
<input type="hidden" name="custom_id" id="custom_id" maxlength="100" class="form-control" required value="<?php echo $custom_id;?>" />
								<section class="panel">

									<header class="panel-heading">

										<h3 class="panel-title">Personal Details</h3>

									</header>

									<div class="panel-body">

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Customer ID <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="membershipid" id="membershipid" maxlength="100" class="form-control" required value="<?php echo $rowLoan['membershipid'];?>"  />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>


											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">First Name<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="firstname" id="firstname" maxlength="100" class="form-control" required value="<?php echo $rowLoan['firstname'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Middle Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="middlename" id="middlename" maxlength="100" class="form-control" required value="<?php echo $rowLoan['middlename'];?>" />

												<span class="red" id="err_emptype"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Last Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="lastname" id="lastname" maxlength="100" class="form-control" required value="<?php echo $rowLoan['lastname'];?>" />

												<span class="red" id="err_emptype"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Gender </label>

											<div class="col-sm-8">
											<?php if($rowLoan['gender']=="Male"){?>
											<input type="radio" id="gender" name="gender" value="Male" checked="checked" /> &nbsp; Male &nbsp;
										   <?php } else{ ?>
										<input type="radio" id="gender" name="gender" value="Male" checked="checked" /> &nbsp; Male &nbsp;
										<?php } if($rowLoan['gender']=="Female"){?>
												<input type="radio" id="gender" name="gender" value="Female" checked="checked"/> Female
											<?php } else { ?>
												<input type="radio" id="gender" name="gender" value="Female" /> Female
											<?php } ?>
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
 								<input type="date" name="dob" id="dob" maxlength="30"  class="form-control" value="<?php echo $rowLoan['dob'];?>" ><!--required-->

												</div>

												<span class="red" id="err_dob"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Phone <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-phone"></i>

													</span>

													<input type="text" name="phone" id="phone" onKeyPress="return isNumber(event,'phone')" maxlength="10" class="form-control"  required value="<?php echo $rowLoan['phone'];?>" />

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Email ID <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-envelope"></i>

													</span>

													<input type="email"  name="emailid" id="emailid" onChange="check_mail_id()" maxlength="100" class="form-control" value="<?php echo $rowLoan['emailid'];?>"   /><!--required-->

												</div>

											</div>

										</div>	
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Whether belong to <span class="required">*</span></label>

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

											<label class="col-sm-4 control-label">Whether possess BPL Card:  <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">
										<?php if($rowLoan['possesscard']=="Yes"){?>
											<input id="possesscard" name="possesscard" type="radio" value="Yes"  checked="checked"> &nbsp;Yes &nbsp;
										   <?php } else{ ?>
										<input id="possesscard" name="possesscard" type="radio" value="Yes"> &nbsp;Yes &nbsp;
										<?php } if($rowLoan['possesscard']=="No"){?>
												 <input id="possesscard" name="possesscard" type="radio" value="No" checked="checked"> &nbsp; No
											<?php } else { ?>
												 <input id="possesscard" name="possesscard" type="radio" value="No"> &nbsp; No
											<?php } ?>

											


												</div>



											</div>

										</div>	
										<div class="form-group col-sm-12"><h4 class="panel-title">Present Address</h4></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address </label>

											<div class="col-sm-8">

												<textarea name="present_address" id="present_address" rows="2" class="form-control" ><?php echo $rowLoan['present_address'];?></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" required name="present_city" id="present_city" maxlength="100" class="form-control" value="<?php echo $rowLoan['present_city'];?>"  />

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
												<option value="<?php echo $rowState['sta_id'];?>" <?php if($rowState['sta_id'] == $rowLoan['present_state']) { echo "selected='selected'";}?> ><?php echo $rowState['sta_name'];?></option>	
												<?php }?>
											</select>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

												<input type="text" name="present_pincode" id="present_pincode" maxlength="50" class="form-control" value="<?php echo $rowLoan['present_pincode'];?>" />

												<span class="red" id="err_city"></span>

											</div>

										</div>

										<div class="form-group col-sm-12"><h4>Permanent Address</h4></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address </label>

											<div class="col-sm-8">

												<textarea name="permanent_address" id="permanent_address" rows="2" class="form-control" ><?php echo $rowLoan['permanent_address'];?></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" required name="permanent_city" id="permanent_city" maxlength="100" class="form-control" value="<?php echo $rowLoan['permanent_city'];?>" />

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
												<option value="<?php echo $rowStates['sta_id'];?>"<?php if($rowStates['sta_id'] == $rowLoan['permanent_state']) { echo "selected='selected'";}?>><?php echo $rowStates['sta_name'];?></option>	
												<?php }?>
											</select>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

												<input type="text" name="permanent_pincode" id="permanent_pincode" maxlength="50" class="form-control" value="<?php echo $rowLoan['permanent_pincode'];?>" />

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

													<input type="text" required name="guarantor_name" id="guarantor_name" maxlength="100" class="form-control" value="<?php echo $rowLoan['guarantor_name'];?>"/>
												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address <span class="required">*</span></label>

											<div class="col-sm-8">
											<textarea name="guarantor_address" id="guarantor_address" rows="2" class="form-control" ><?php echo $rowLoan['guarantor_address'];?></textarea>
											
												<span class="red" id="err_city"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Contact No. </label>

											<div class="col-sm-8">

													<input type="text" required name="contact_number" id="contact_number" maxlength="10" class="form-control" value="<?php echo $rowLoan['phone'];?>"/>
												<span class="red" id="err_address"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

													<input type="text" required name="guarantor_pincode" id="guarantor_pincode" maxlength="10" class="form-control" value="<?php echo $rowLoan['phone'];?>"/>
												<span class="red" id="err_address"></span>

											</div>

										</div>
										<div class="form-group col-sm-12"><h4>Occupation Details</h4></div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Employer's Name<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="employer_name" id="employer_name"  maxlength="10" required class="form-control" value="<?php echo $rowLoan['employer_name'];?>" >

												<span class="red" id="err_traincharges"></span>

											</div>

										</div>
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address </label>

											<div class="col-sm-8">

												<textarea name="permanent_address" id="employer_address" rows="2" class="form-control" ><?php echo $rowLoan['employer_address'];?></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Designation<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="designation" id="designation"  maxlength="10" required class="form-control" value="<?php echo $rowLoan['designation'];?>" >

												<span class="red" id="err_traincharges"></span>

											</div>

										</div>

                                         <div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Contact No.<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="contentno" id="contentno"  maxlength="10" required class="form-control" value="<?php echo $rowLoan['contentno'];?>" >

												<span class="red" id="err_traincharges"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">PAN No.<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="panno" id="panno"  maxlength="10" required class="form-control" value="<?php echo $rowLoan['panno'];?>" >

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
												<option value="<?php echo $rowIdproofType['id'];?>"<?php if($rowIdproofType['id'] == $rowLoan['idproof_type']) { echo "selected='selected'";}?>><?php echo $rowIdproofType['proof_type'];?></option>	
												<?php }?>
											</select>
												<span class="red" id="err_emptype"></span>

											</div>

										</div>
									<div class="form-group col-sm-12"><h4>Income/Expenditure Details</h4></div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Average Monthly Income :</label>

											<div class="col-sm-8">

												<input type="text" name="average_monthly_income" value="<?php echo $rowLoan['average_monthly_income'];?>"  id="average_monthly_income" maxlength="100" class="form-control"  />

												<span class="red" id="err_idnumber"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Average Monthly Expenditure </label>

											<div class="col-sm-8">

												<input type="text" name="average_monthly_expenditure" id="average_monthly_expenditure" maxlength="100" class="form-control" value="<?php echo $rowLoan['average_monthly_expenditure'];?>"  />

												<span class="red" id="err_payment_number"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Average Monthly Surplus Amount</label>

											<div class="col-sm-8">

												<input type="text" name="average_monthly_surplus_amount"  id="average_monthly_surplus_amount" maxlength="100" class="form-control" value="<?php echo $rowLoan['average_monthly_surplus_amount'];?>"  />

												<span class="red" id="err_payment_number"></span>

											</div>

										</div>		
										
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Loan Document </label>

											<div class="col-sm-8">

												<textarea name="present_address" id="loan_document" rows="2" class="form-control" ><?php echo $rowLoan['loan_document'];?></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
										<div class="form-group col-sm-12"><h4>Loan Details</h4></div>

										<div class="form-group col-sm-6">

											<label class="col-sm-6 control-label">Required Loan Amount(In Rupees) :</label>

											<div class="col-sm-6">

												<input type="text" name="loan_amount"  id="loan_amount" maxlength="100" class="form-control" value="<?php echo $rowLoan['loan_amount'];?>"  />

												<span class="red" id="err_idnumber"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Tenure </label>

											<div class="col-sm-8">

												<input type="text" name="tenure"  id="tenure" maxlength="100" class="form-control" value="<?php echo $rowLoan['tenure'];?>"   />

												<span class="red" id="err_payment_number"></span>

											</div>

										</div>

											<div class="form-group col-sm-12">

											<label class="col-sm-4 control-label">Loan Re-Payment Mode </label>

											<div class="col-sm-8">

												Weekly &nbsp;<input type="radio" name="payment_mode" value="weekly" id="payment_mode" /> &nbsp; &nbsp;

												Monthly &nbsp;<input type="radio" name="payment_mode" value="monthly" id="payment_mode" />

											</div>

										</div>	
										 <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Required Loan Amount</label>

											<div class="col-sm-8">

												<input type="text" name="loan_amount"  id="loan_amount" maxlength="10" class="form-control" value="<?php echo $rowLoan['loan_amount'];?>" />
											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Approval Loan Amount</label>

											<div class="col-sm-8">
											<input type="text" name="approval_loan" value="<?php echo $rowLoan['approval_loan'];?>" id="approval_loan" maxlength="10" class="form-control"  />

											</div>

										</div>	
                                         <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Principal (Rs.)</label>

											<div class="col-sm-8">
											<input type="text" name="principal" value="<?php echo $rowLoan['principal'];?>" id="principal" maxlength="10" class="form-control"  />

											</div>

										</div>	
                                         <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Interest (Rs.)</label>

											<div class="col-sm-8">
											<input type="text" name="interest" value="<?php echo $rowLoan['interest'];?>" id="interest" maxlength="10" class="form-control"  />

											</div>

										</div>		
                                         <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">EMI Installment(Rs) </label>

											<div class="col-sm-8">
											<input type="text" name="emi_installment" value="<?php echo $rowLoan['emi_installment'];?>" id="emi_installment" maxlength="10" class="form-control"  />

											</div>

										</div>	
										 <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Processing Fees (Rs) </label>

											<div class="col-sm-8">
											<input type="text" name="processing_fees" value="<?php echo $rowLoan['processing_fees'];?>" id="processing_fees" maxlength="10" class="form-control"  />

											</div>

										</div>											
											</div>									
											</div>

									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="submit" name="save" id="save" class="btn btn-warning">Save</button>
<input type="hidden" name="Update"  maxlength="100" class="form-control" required value="Update" />
												<button type="reset" class="btn btn-default">Reset</button>

												<input type="hidden" name="act" id="act" value="yes">

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

		


	</body>

</html>