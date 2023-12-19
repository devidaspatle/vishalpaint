<?php 
include_once("includes/db_config.php");
require_once('includes/check_session.php'); 

$user_id = $_SESSION['rsoftId'];
$resultCustomers = mysqli_query($con, "SELECT * FROM customer_registration");
$totalCustomers =mysqli_num_rows($resultCustomers);

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

<link rel="stylesheet" type="text/css" media="screen" href="calender/jquery-ui.css" />
    <script src="calender/jquery.js"></script>
    <script src="calender/jquery-ui.js"></script>
    <script type = "text/javascript">
        $(document).ready(function () {
            var age = "";
            $('#dob').datepicker({
                onSelect: function (value, ui) {
                    var today = new Date();
                    age = today.getFullYear() - ui.selectedYear;
                    $('#age').val(age);
                },
                changeMonth: true,
                changeYear: true
            })
        })
    </script>

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

<script type="text/javascript">
	
	function multiplyBy()
	{
        num1 = document.getElementById("plan_type").value;
        num2 = document.getElementById("plan_price").value;
       total = document.getElementById("result").innerHTML = num1 * num2;
       //alert(total);
	}
</script>

<?php include "left.php"; ?>

				<!-- end: sidebar -->



				<section role="main" class="content-body">

					<header class="page-header">

						<h2>Create Customer Registration</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

								<li><span>Create Customer Registration&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

							<form id="form"  method="POST" action="customer_code.php" class="form-horizontal" onSubmit="disable();">

								<section class="panel">

									<header class="panel-heading">

										<h2 class="panel-title">Create Customer Registration</h2>

									</header>

									<div class="panel-body">

										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">First Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="firstName" id="firstName" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Middle Name <span class="required">*</span></label>
											<div class="col-sm-8">

												<input type="text" name="middleName" id="middleName" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Last Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="lastName" id="lastName" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Father/Husband Name<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="father_name" id="father_name" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										

										



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Gender </label>

											<div class="col-sm-8">

												<select id="gender" name="gender" class="form-control"  required >

													<option value="">Select</option>

													<option value="M">Male</option>

													<option value="F">Female</option>

													

												</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Email </label>

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

											<label class="col-sm-4 control-label">Phone <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-phone"></i>

													</span>

													<input type="text" name="mobile_number" id="mobile_number"  maxlength="10" class="form-control" />

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Alternate Phone </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-phone"></i>

													</span>

													<input type="text" name="mobile_numberalt" id="mobile_numberalt"  maxlength="10" class="form-control"/>

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
										<div class="form-group col-sm-12"><h4>Present Address</h4></div>	
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

										<div class="form-group col-sm-12"><h4>Permanent  Address</h4></div>	
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

													<input type="date" name="date_of_join" id="date_of_join" value="" maxlength="30" required  class="form-control">

												</div>

												<span class="red" id="err_doj"></span>

											</div>

										</div>

										



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Date of Birth </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>
 								<input class="date form-control" type="text" name="date"   placeholder="Date of Birth(DD/MM/YYYY)"/>

												</div>

												<span class="red" id="err_dob"></span>

											</div>

										</div>

										

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Age </label>

											<div class="col-sm-8">
  											<input class="age form-control" type="text" name="age" readonly placeholder="Age" />
												<span class="red" id="err_empsalary"></span>

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
												<option value="<?php echo $rowIdproofType['id'];?>"><?php echo $rowIdproofType['proof_type'];?></option>	
												<?php }?>
											</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">ID Proof Number</label>

											<div class="col-sm-8">

												<input type="text" name="id_number" value="0" id="id_number" maxlength="100" class="form-control" required  />

												<span class="red" id="err_biomatricid"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Plan Type <span class="required">*</span></label>

											<div class="col-sm-8">
											<select id="plan_type" name="plan_type" class="form-control" required onChange="getPlan(this.value)" >

												<option value="">Select Plan Type</option>
                                                 <?php 
												while($rowPlanType = mysqli_fetch_array($resultPlantype))
												{
												?>
										<option value="<?php echo $rowPlanType['plan_name'];?>"><?php echo $rowPlanType['plan_name'];?> Month</option>	
												<?php }?>
											</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Parcentage Plan  <span class="required">*</span></label>

											<div class="col-sm-8">
											 <div id ="subjiv">
											<input type="text" name="plan_percent"  id="plan_percent" maxlength="100" class="form-control" readonly  />
											</div>
												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Plan Price <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="plan_price"  id="plan_price" maxlength="100" class="form-control"  />
												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Total Payment</label>

											<div class="col-sm-8">

												<input type="text" name="total_rs" value="" id="total_rs" maxlength="100" class="form-control" onClick="calc()" required />

												<span class="red" id="err_biomatricid"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Payment Mode <span class="required">*</span></label>

											<div class="col-sm-8">

												<select id="payment_type" name="payment_type" class="form-control" required>

													<option value="">Select</option>
                                                    <option value="1">Cash</option>

													<option value="2">Chaque </option>

                                                    <option value="3">DD</option>

												</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Card Number</label>

											<div class="col-sm-8">

												<input type="text" name="payment_number" value="" id="payment_number" maxlength="100" class="form-control"  />

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
									<option value="<?php echo $rowExecutive['application_no'];?>"><?php echo ucwords($name_of_applicant);?></option>	
												<?php }?>
											</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>

											</div>
									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>

												<button type="reset" class="btn btn-default">Reset</button>

												<input type="hidden" name="act" id="act" value="yes">

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

   
 <script type="text/javascript">  
function getAge(dateString) {
  var now = new Date();
  var today = new Date(now.getYear(),now.getMonth(),now.getDate());
  var yearNow = now.getYear();
  var monthNow = now.getMonth();
  var dateNow = now.getDate();

  var dob = new Date(dateString.substring(6,10),
                     dateString.substring(3,5),                   
                     dateString.substring(0,2)-1                  
                     );

  var yearDob = dob.getYear();
  var monthDob = dob.getMonth();
  var dateDob = dob.getDate();
  var age = {};
  var ageString = "";
  var yearString = "";
  var monthString = "";
  var dayString = "";


  yearAge = yearNow - yearDob;

  if (monthNow >= monthDob)
  var monthAge = monthNow - monthDob + 1;
  else {
    yearAge--;
    var monthAge = 12 + monthNow -monthDob;
  }

  if (dateNow >= dateDob)
    var dateAge = dateNow - dateDob;
  else {
    monthAge--;
    var dateAge = 31 + dateNow - dateDob;

    if (monthAge < 0) {
      monthAge = 11;
      yearAge--;
    }
  }

  age = {
      years: yearAge,
      months: monthAge,
      days: dateAge
      };

  if ( age.years > 1 ) yearString = " years";
  else yearString = " year";
  if ( age.months> 1 ) monthString = " months";
  else monthString = " month";
  if ( age.days > 1 ) dayString = " days";
  else dayString = " day";


  if ( (age.years > 0) && (age.months > 0) && (age.days > 0) )
    ageString = age.years;
  else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
    ageString = "Only " + age.days + dayString + " old!";
  else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
    ageString = age.years + yearString + " old. Happy Birthday!!";
  else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
    ageString = age.years + yearString + " and " + age.months + monthString + " old.";
  else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
    ageString = age.months + monthString + " and " + age.days + dayString + " old.";
  else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
    ageString = age.years + yearString + " and " + age.days + dayString + " old.";
  else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
    ageString = age.months + monthString + " old.";
  else ageString = "Oops! Could not calculate age!";

  return ageString;
}
$(".date").on("change", function(){
var dob = $('.date').val();
 var age = getAge(dob); 
 $('.age').val(age);
});

//alert(getAge('09/09/1989'));


    </script>  



	</body>

</html>