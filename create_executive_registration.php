
<?php 
error_reporting(0);
include_once("includes/db_config.php");
require_once('includes/check_session.php'); 

$user_id = $_SESSION['rsoftId'];

$applicationno = $_GET['customerId'];
if(!empty($applicationno))
{
$resultCustomer = mysqli_query($con, "SELECT * FROM customer_registration where application_no = $applicationno");
$totalCustomer = mysqli_num_rows($resultCustomer);
$rowCustomer = mysqli_fetch_array($resultCustomer);
}
$resultIdprooftype = mysqli_query($con, "SELECT * FROM idprooftype where  currentStatus = 'Y'");
$totalIdprooftype =mysqli_num_rows($resultIdprooftype);

$resultState = mysqli_query($con, "SELECT * FROM bh_state where currentStatus='Y'");

$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member  where currentStatus='Y'");

$resultTdsmaster = mysqli_query($con, "SELECT * FROM tdsmaster  where currentStatus='Y'");

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
	
	
	function getExecutive(id) {		
		var strURL="findMembercount.php?parent_id="+id; 
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('mebdiv').innerHTML=req.responseText;						
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
<?php include "left.php"; ?>

				<!-- end: sidebar -->



				<section role="main" class="content-body">

					<header class="page-header">

						<h2>Convert Executive </h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

								<li><span>Convert Executive &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">
						

						

						<div>&nbsp;</div>
						<div class="col-md-12">
							<?php //if(!empty($totalCustomer)) { ?>
							<form id="form"  method="POST" action="executive_member_code.php" class="form-horizontal" onSubmit="disable();">
							<input type="hidden" name="member_type"   value="1" />
                            <input type="hidden" name="percent_payment"   value="0" />
                            <input type="hidden" name="exe_payment"   value="0" />
                           <input type="hidden" name="bonus_point"   value="0" />
								<section class="panel">

									<header class="panel-heading">

										<h2 class="panel-title">Convert Executive From</h2>

									</header>

									<div class="panel-body">
								
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">First Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="firstName" id="firstName" required maxlength="100" class="form-control" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Middle Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="middleName" id="middleName" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Last Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="lastName" id="lastName" required maxlength="100" class="form-control" />

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

											<label class="col-sm-4 control-label">Email</label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-envelope"></i>

													</span>

													<input type="email"  name="emailid" id="emailid"  class="form-control" /><!--required-->

												</div>



											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Phone</label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-phone"></i>

													</span>

													<input type="text" name="mobile_number" id="mobile_number"  maxlength="12" class="form-control" />

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
									<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Address <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="address" id="address" maxlength="100" class="form-control" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">City <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="city" id="city" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">State </label>

											<div class="col-sm-8">

												<input type="text" name="state" id="state"  class="form-control" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

												<input type="text" name="pincode" id="pincode"  class="form-control" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
 
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Perent ID <span class="required">*</span></label>

											<div class="col-sm-8">

												<select id="parent_id" name="parent_id" class="form-control" onChange="getExecutive(this.value)" required="required">
												<option value="">Select Perent ID</option>
                                              
                                                 <?php 
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


										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">TDS <span class="required">*</span></label>

											<div class="col-sm-8">

												<select id="tds_price" name="tds_price" class="form-control" required>
												<option value="">Select TDS </option>
                                              
                                                 <?php 
												while($rowTds = mysqli_fetch_array($resultTdsmaster))
												{
												
												?>
									<option value="<?php echo $rowTds['tds_rate'];?>"><?php echo $rowTds['tds_rate'];?></option>	
												<?php }?>
											</select>

												<span class="red" id="err_emptype"></span>
 											<div id ="mebdiv" style="color: red">
											
											</div>

											</div>

										</div>


										
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Date of Join <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>

                                                 	<!--<input type="date" name="doj" id="doj" value="" autocomplete="off" maxlength="30" class="form-control">-->

													<input type="date" name="date_of_join" id="date_of_join" maxlength="30"   class="form-control" required >

												</div>

												<span class="red" id="err_doj"></span>

											</div>

										</div>


									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>

												<button type="reset" class="btn btn-default">Reset</button>

												
												<button type="button" onClick="window.location.href='manage_executive.php'" name="" class="btn btn-default">Back</button>

											</div>

										</div>

									</footer>

								</section>

							</form>
					<?php //} ?>
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