<?php
include_once("includes/db_config.php");
$custom_id = $_GET['type'];
$sqlg = "SELECT * FROM employee_registration where id = '$custom_id'";
$resultQgl = mysqli_query($con, $sqlg); 
$rowQgl = mysqli_fetch_array($resultQgl);

$resultIdprooftype = mysqli_query($con, "SELECT * FROM idprooftype where  currentStatus = 'Y'");
$totalIdprooftype =mysqli_num_rows($resultIdprooftype);

$resultState = mysqli_query($con, "SELECT * FROM bh_state where currentStatus='Y'");

$resultDesignation = mysqli_query($con, "SELECT * FROM designation where currentStatus='Y'");


?>

<!doctype html>

<html class="fixed">

	<head>

		<!-- Basic -->

		<meta charset="utf-8">



		 <title <title>BHOYARNATH | Mutual Nidhi Limited</title>

		

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


			<!-- end: header -->


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

						<h2>View Employee Registration</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><a href="registration.html">Employee Registration</a></li>

								<li><span>View Employee Registration&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>

					<!-- start: page -->
<input type="button" onClick="printDiv('printableArea')" value="Print" />
					<!-- start: page -->
				<div id="printableArea"  style="border:dotted">
					<div class="row">

						<div class="col-md-12">

								
								<section class="panel">
 <div style="background-color:#FFFFFF;">
<div style="text-align:center"><img src="logo.png" style="width:450px"></div>
<div style="text-align:center; font-size:14px"><b style="color: #006600">Regd. No. 304365</b></div>
<div style="text-align:center; font-size:14px; color:#000066"><h5><b>Address: Near Sahu Kirana Shop, Jagdish Nagar, Katol Road , Nagpur -13</b></h5></div>
<div style="text-align:center; font-size:14px;color:#000066"><h5><b>Email:bhoyarnathnidhi@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone. No. 7744965631, 776870623</b></h5></div>

										<div style="text-align:center"><h2 class="panel-title"><b>View Employee Details</b></h2></div>
&nbsp;&nbsp;
							
</div><div style="border-bottom: dotted;"></div>
									<div class="panel-body" style="color: #000000; font-size:14px">

										<div class="form-group col-sm-6">

											

											<div class="col-sm-8 text-center">

												<div>				                                	

				                                	<img src="assets/images/noimage.jpg" width="100" height="100" class="fix-size" id="profileimage" />

				                                </div>

				                                

				                                <span id="picture_error"></span>

											</div>

										</div>

										


										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">Full Name </label>

											<div class="col-sm-8">

												<?php echo ucwords($rowQgl['fullname']);?>

												<span class="red" id="err_gymname"></span>

											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4">Staff Type </label>

											<div class="col-sm-8">

												
                                                 <?php 
												 $rowDesignation = mysqli_fetch_array($resultDesignation);
											
												 echo $rowDesignation['designation'];
												 ?>
											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">Gender </label>

											<div class="col-sm-8">
<?php if($rowQgl['gender'] == 'M'){echo "Male";} else {echo "Female";};?>
												

												<span class="red" id="err_emptype"></span>

											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">Email </label>

											<div class="col-sm-8">

													<?php echo $rowQgl['emailid'];?>

												</div>

                                                
											

										</div>


										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">City </label>

											<div class="col-sm-8">

												<?php echo $rowQgl['city'];?>

												<span class="red" id="err_city"></span>

											</div>

										</div>
											<div class="form-group col-sm-6">

											<label class="col-sm-4 ">State </label>

											<div class="col-sm-8">

											
                                                 <?php 
												$rowState = mysqli_fetch_array($resultState);
											    echo $rowState['sta_name'];
											    ?>
											

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">Phone </label>

											<div class="col-sm-8">

												

													<?php echo $rowQgl['phone'];?>


											</div>

										</div>	


										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">Date of Join </label>

											<div class="col-sm-8">

												
												<?php 
												 $dateofjoin =  $rowQgl['doj'];
												if(!empty($dateofjoin))
												{
												echo  date("d-m-Y", strtotime($dateofjoin));
												}
												?>
												

											</div>

										</div>

										

										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">Salary </label>

											<div class="col-sm-8">

												<?php echo $rowQgl['empsalary'];?><!--required-->

												

											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">Date of Birth </label>

											<div class="col-sm-8">
												<?php 
												 $dateofjoin =  $rowQgl['dob'];
												if(!empty($dateofjoin))
												{
												echo  date("d-m-Y", strtotime($dateofjoin));
												}
												?>
												

											</div>

										</div>

										


										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">Address </label>

											<div class="col-sm-8">

												<?php echo $rowQgl['address'];?>

												<span class="red" id="err_address"></span>

											</div>

										</div>
                                            <div class="form-group col-sm-6">

											<label class="col-sm-4 ">ID proof Type </label>

											<div class="col-sm-8">
											
                                                 <?php 
												$rowIdproofType = mysqli_fetch_array($resultIdprooftype);
												echo $rowIdproofType['proof_type'];
												?>	
												

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										   
										<div class="form-group col-sm-6">

											<label class="col-sm-4 ">ID Number</label>

											<div class="col-sm-8">

												<?php echo $rowQgl['idnumber'];?>

												<span class="red" id="err_biomatricid"></span>

											</div>

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

												
												<button type="button" onClick="window.location.href='employee_registration.php'" name="" class="btn btn-default">Back</button>

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