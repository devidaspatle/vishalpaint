<?php 
error_reporting(0);
include_once("includes/db_config.php");
require_once('includes/check_session.php'); 

$user_id = $_SESSION['rsoftId'];

$applicationno = $_GET['customerId'];

$resultCustomer = mysqli_query($con, "SELECT * FROM loan_application where  application_no  = '".$applicationno."'");
$totalCustomer = mysqli_num_rows($resultCustomer);
$rowCustomer = mysqli_fetch_array($resultCustomer);

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

						<h2>Loan Installment</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

								<li><span>Loan Installment &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">

						
				
					<div class="col-md-12" style="background-color:#FFFFFF">
							
							<form id="form"  method="POST" action="loan_installment_code.php" class="form-horizontal" onSubmit="disable();">
							<input type="hidden" name="customer_id" id="customer_id"  value="<?php echo $applicationno ;?>" />
								<section class="panel" style="background-color:#FFFFFF">

									<header class="panel-heading">

										<h2 class="panel-title">Loan Installment</h2>

									</header>

									<div class="panel-body" style="background-color:#FFFFFF">

										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">First Name </label>

											<div class="col-sm-8">

												<input type="text" name="firstName" id="firstName" maxlength="100" class="form-control"  readonly value="<?php echo $rowCustomer['firstname'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Middle Name </label>

											<div class="col-sm-8">

												<input type="text" name="middleName" id="middleName"  maxlength="100" class="form-control" readonly value="<?php echo $rowCustomer['middlename'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Last Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="lastName" id="lastName" maxlength="100" class="form-control" readonly   value="<?php echo $rowCustomer['lastname'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="city" id="city" maxlength="100" class="form-control" readonly  value="<?php echo $rowCustomer['present_city'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Email <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-envelope"></i>

													</span>

													<input type="email" required name="emailid" id="emailid" readonly onChange="check_mail_id()" maxlength="100" class="form-control" value="<?php echo $rowCustomer['emailid'];?>"  /><!--required-->

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

													<input type="text" name="mobile_number" id="mobile_number"  maxlength="12" class="form-control"  readonly  value="<?php echo $rowCustomer['mobile_number'];?>" />

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
									
 <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Payment Mode <span class="required">*</span></label>

											<div class="col-sm-8">

											<select id="payment_mode" name="payment_mode" class="form-control" required>
													<option value="">Select</option>
                                                    <option value="1">Cash</option>
													<option value="2">Chaque </option>
                                                    <option value="3">DD</option>
												</select>
												<span class="red" id="err_emptype"></span>

											</div>

										</div>


										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Mode Number </label>

											<div class="col-sm-8">

												
											<input type="text" name="payment_number" id="payment_number"  class="form-control"  value="" />
												<span class="red" id="err_emptype"></span>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">EMI Installment(Rs)  <span class="required">*</span></label>

											<div class="col-sm-8">
											<input type="text" name="emi_installment" value="" id="emi_installment" maxlength="10" class="form-control" required  />

											</div>

										</div>	
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Month </label>

											<div class="col-sm-8">
											<select id="payment_month" name="payment_month" class="form-control" required onChange="document.cf.typ[1].checked=true">							                                                
													<?php
													$curmonth = date("F");
                                                    for($i = 1 ; $i <= 12; $i++)
                                                    {
                                                        $allmonth = date("F",mktime(0,0,0,$i,1,date("Y")))
                                                        ?>
                                                        <option value="<?php echo $i;?>" 
                                                        <?php
                                                        if($curmonth==$allmonth)
                                                        {
                                                            echo 'selected';
                                                        }
                                                        ?> 
                                                        >
                                                        <?php
                                                        echo date("F",mktime(0,0,0,$i,1,date("Y")));
                                                        //Close tag inside loop
                                                        ?>
                                                        </option>
                                                        <?php
                                                    }?></select>

											</div>

										</div>	
													
                                                    
                                               <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Interest (Rs.) <span class="required">*</span></label>

											<div class="col-sm-8">
											<input type="text" name="interest" value="" id="interest" maxlength="10" class="form-control"  required  />

											</div>

										</div>		      
										 <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Principal (Rs.) <span class="required">*</span></label>

											<div class="col-sm-8">
											<input type="text" name="principal" value="" id="principal" maxlength="10" class="form-control" required  />

											</div>

										</div>	
                                        
                                       						



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Date <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>

                                                 	<!--<input type="date" name="doj" id="doj" value="" autocomplete="off" maxlength="30" class="form-control">-->

													<input type="date" name="commission_date" id="commission_date" maxlength="30" required  class="form-control"  value="<?php echo $rowCustomer['commission_date'];?>">

												</div>

												<span class="red" id="err_doj"></span>

											</div>

										</div>
										



									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>

												<button type="reset" class="btn btn-default">Reset</button>


												<button type="button" onClick="window.location.href='executive_master.php'" name="" class="btn btn-default">Back</button>

											</div>

										</div>

									</footer>

								</section>

							</form>
					
						</div>


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