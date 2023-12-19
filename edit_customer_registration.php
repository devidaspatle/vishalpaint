<?php 
error_reporting(0);
include_once("includes/db_config.php");
require_once('includes/check_session.php');
$customer_id = $_GET['type'];
//$customer_id = random_string(8, 'abcdefghijklmnopqrstuvwxyz');
$user_id = $_SESSION['rsoftId'];
$resultCustomers = mysqli_query($con, "SELECT * FROM customer_registration where id = '$customer_id'");
$totalCustomers =mysqli_num_rows($resultCustomers);
$rowCustomers = mysqli_fetch_array($resultCustomers);

$resultIdprooftype = mysqli_query($con, "SELECT * FROM idprooftype where  currentStatus = 'Y'");
$totalIdprooftype =mysqli_num_rows($resultIdprooftype);

$resultState = mysqli_query($con, "SELECT * FROM bh_state where currentStatus='Y'");

$resultPlantype = mysqli_query($con, "SELECT * FROM plan_master where currentStatus='Y'");
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
 <script language="javascript" type="text/javascript">


function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	
	function getPlan(id) {		
		var strURL="findPlan.php?plan_type="+id; 
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('subjiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
 <script type="text/javascript">
		function calc() {
		  var y = document.getElementById("plan_type").value;
		  var i = document.getElementById("plan_price").value;
		  var p = document.getElementById("plan_parcent").value;
		  
		  var amt = i * y;
		  var o = (amt/p);
		  var tamt  = amt + o;
		  document.getElementById("total_rs").value = tamt.toFixed(2);
		}
		</script>
<?php include "left.php"; ?>

				<!-- end: sidebar -->



				<section role="main" class="content-body">

					<header class="page-header">

						<h2>Edit Customer Registration</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

								<li><span>Edit Customer Registration&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

							<form id="form"  method="POST" action="customer_code.php" class="form-horizontal" onSubmit="disable();">
	<input type="hidden" name="customer_id" id="customer_id" value="<?php echo $rowCustomers['id'];?>" />
								<section class="panel">

									<header class="panel-heading">

										<h2 class="panel-title">Edit Customer Registration</h2>

									</header>

									<div class="panel-body">

										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">First Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="firstName" id="firstName" maxlength="100" class="form-control" required value="<?php echo $rowCustomers['firstName'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Middle Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="middleName" id="middleName" maxlength="100" class="form-control" required value="<?php echo $rowCustomers['middleName'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Last Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="lastName" id="lastName" maxlength="100" class="form-control" required value="<?php echo $rowCustomers['lastName'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Father/Husband Name<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="father_name" id="father_name" maxlength="100" class="form-control" required value="<?php echo $rowCustomers['father_name'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										

										



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Gender </label>

											<div class="col-sm-8">

												<select id="gender" name="gender" class="form-control" >

													<option value="">Select</option>
													<option value="M" <?php if($rowCustomers['gender'] == "M") { echo "selected='selected'";}?>>Male</option>

													<option value="F" <?php if($rowCustomers['gender'] == "F") { echo "selected='selected'";}?>>Female</option>
	
												</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Email <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-envelope"></i>

													</span>

													<input type="email"  name="emailid" id="emailid" onChange="check_mail_id()" maxlength="100" class="form-control"  value="<?php echo $rowCustomers['emailid'];?>"/><!--required-->

												</div>



											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Phone <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-phone"></i>

													</span>

													<input type="text" name="mobile_number" id="mobile_number"  maxlength="10" class="form-control"  required value="<?php echo $rowCustomers['mobile_number'];?>"/>

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Alternate Phone <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-phone"></i>

													</span>

													<input type="text" name="mobile_numberalt" id="mobile_numberalt"  maxlength="10" class="form-control"   value="<?php echo $rowCustomers['mobile_numberalt'];?>" />

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
										<div class="form-group col-sm-12"><h4>Present Address</h4></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address </label>

											<div class="col-sm-8">

												<textarea name="present_address" id="present_address" rows="2" class="form-control" > <?php echo $rowCustomers['present_address'];?></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" required name="present_city" id="present_city" maxlength="100" class="form-control" value="<?php echo $rowCustomers['present_city'];?>"  />

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
												<option value="<?php echo $rowState['sta_id'];?>"<?php if($rowState['sta_id'] == $rowCustomers['present_state']) { echo "selected='selected'";}?>><?php echo $rowState['sta_name'];?></option>	
												<?php }?>
											</select>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

												<input type="text" name="present_pincode" id="present_pincode" maxlength="50" class="form-control" value="<?php echo $rowCustomers['present_pincode'];?>"  />

												<span class="red" id="err_city"></span>

											</div>

										</div>

										<div class="form-group col-sm-12"><h4>Permanent  Address</h4></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address </label>

											<div class="col-sm-8">

												<textarea name="permanent_address" id="permanent_address" rows="2" class="form-control" ><?php echo $rowCustomers['permanent_address'];?></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" required name="permanent_city" id="permanent_city" maxlength="100" class="form-control" value="<?php echo $rowCustomers['permanent_city'];?>"  />

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
												<option value="<?php echo $rowStates['sta_id'];?>"<?php if($rowStates['sta_id'] == $rowCustomers['permanent_state']) { echo "selected='selected'";}?>><?php echo $rowStates['sta_name'];?></option>	
												<?php }?>
											</select>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

												<input type="text" name="permanent_pincode" id="permanent_pincode" maxlength="50" class="form-control" value="<?php echo $rowCustomers['permanent_pincode'];?>"  />

												<span class="red" id="err_city"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Date of Registration <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>

                                                 	<!--<input type="date" name="doj" id="doj" value="" autocomplete="off" maxlength="30" class="form-control">-->

													<input type="date" name="date_of_join" id="date_of_join"  maxlength="30"   class="form-control" value="<?php echo $rowCustomers['date_of_join'];?>" >

												</div>

												<span class="red" id="err_doj"></span>

											</div>

										</div>

										

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Age </label>

											<div class="col-sm-8">

												<input type="text" name="age" id="age"   maxlength="10" class="form-control" value="<?php echo $rowCustomers['age'];?>"  /><!--required-->

												<span class="red" id="err_empsalary"></span>

											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Date of Birth </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>
 								<input type="date" name="date_of_birth" id="date_of_birth"  maxlength="30"  class="form-control" value="<?php echo $rowCustomers['date_of_birth'];?>" ><!--required-->

												</div>

												<span class="red" id="err_dob"></span>

											</div>

										</div>

										

										<div class="form-group col-sm-6" id="trainid" >

											<label class="col-sm-4 control-label">PAN No.<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="pan_number" id="pan_number"  maxlength="10"  class="form-control" value="<?php echo $rowCustomers['pan_number'];?>" >

												<span class="red" id="err_trpanrges"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Nationality</label>

											<div class="col-sm-8">

												<input type="text" name="nationality" value="Indian" id="nationality" maxlength="100" class="form-control" readonly="readonly"  />

												<span class="red" id="err_nationality"></span>

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
								<option value="<?php echo $rowIdproofType['id'];?>"<?php if($rowIdproofType['id'] == $rowCustomers['id_proof_type']) { echo "selected='selected'";}?>><?php echo $rowIdproofType['proof_type'];?></option>	
												<?php }?>
											</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">ID Proof Number</label>

											<div class="col-sm-8">

												<input type="text" name="id_number" id="id_number" maxlength="100" required class="form-control" value="<?php echo $rowCustomers['id_number'];?>"  />

												<span class="red" id="err_biomatricid"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Plan Type <span class="required">*</span></label>

											<div class="col-sm-8">
											<select id="plan_type" name="plan_type" class="form-control" required onChange="getPlan(this.value)">

												<option value="">Select Plan Type</option>
                                                 <?php 
									while($rowPlanType = mysqli_fetch_array($resultPlantype))
												{
												?>
			<option value="<?php echo $rowPlanType['plan_name'];?>"<?php if($rowPlanType['plan_name'] == $rowCustomers['plan_type']) { echo "selected='selected'";}?>><?php echo $rowPlanType['plan_name'];?></option>	
												<?php }?>
											</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										  <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Parcentage Plan  <span class="required">*</span></label>

											<div class="col-sm-8">
											 <div id ="subjiv">
									<input type="text" name="plan_percent"  id="plan_percent" maxlength="100" class="form-control" readonly value="<?php echo $rowCustomers['plan_percent'];?>"  />
											</div>
												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Plan Price <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="plan_price"  id="plan_price" maxlength="100" class="form-control" value="<?php echo $rowCustomers['plan_price'];?>"  />

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Total Payment</label>

											<div class="col-sm-8">

												<input type="text" name="total_rs" value="<?php echo $rowCustomers['total_payment'];?>"  id="total_rs" maxlength="100" class="form-control" onClick="calc()" required />

												<span class="red" id="err_biomatricid"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Payment Type <span class="required">*</span></label>

											<div class="col-sm-8">

												<select id="payment_type" name="payment_type" class="form-control" required>

													<option value="">Select</option>
                                                    <option value="1"<?php if($rowCustomers['payment_type'] == 1) { echo "selected='selected'";}?>>Cash</option>

													<option value="2"<?php if($rowCustomers['payment_type'] == 2) { echo "selected='selected'";}?>>Chaque </option>

                                                    <option value="3"<?php if($rowCustomers['payment_type'] == 3) { echo "selected='selected'";}?>>DD</option>

												</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Card Number</label>

											<div class="col-sm-8">

												<input type="text" name="payment_number"  id="payment_number" maxlength="100" class="form-control" value="<?php echo $rowCustomers['payment_number'];?>"/>

												<span class="red" id="err_mobile_number"></span>

											</div>

										</div>
										  <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Executive Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<select id="parent_id" name="parent_id" class="form-control">
												<option value="0">Select Perent ID</option>
                                              
                                                 <?php 
												 $resultExecutive = mysqli_query($con, "SELECT * FROM executive_member  where  member_type ='Y'");

												while($rowExecutive = mysqli_fetch_array($resultExecutive))
												{
												$name_of_applicant =	$rowExecutive['firstName'].' '.$rowExecutive['middleName'].' '.$rowExecutive['lastName']
												?>
									<option value="<?php echo $rowExecutive['application_no'];?>" <?php if($rowExecutive['application_no'] == $rowCustomers['parent_id']) { echo "selected='selected'";}?>><?php echo ucwords($name_of_applicant);?></option>	
												<?php }?>
											</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>

											</div>
									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="submit" id="save" class="btn btn-warning">Save</button>

												<button type="reset" class="btn btn-default">Reset</button>

											
												<input type="hidden" name="Update" id="Update" value="Update">

												<button type="button" onClick="window.location.href='manage_customer.php'" name="" class="btn btn-default">Back</button>

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