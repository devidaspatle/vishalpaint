<?php 

include_once("includes/db_config.php");
$custom_id = $_GET['type'];

$resultLoan = mysqli_query($con, "SELECT * FROM  loan_application where id = '$custom_id'");
$rowLoan = mysqli_fetch_array($resultLoan);

 $id_proof_type = $rowLoan['idproof_type'];

$resultIdprooftype = mysqli_query($con, "SELECT * FROM idprooftype where  id = '$id_proof_type'");

 $present_state = $rowLoan['present_state'];

$resultState = mysqli_query($con, "SELECT * FROM bh_state where sta_id = $present_state");
 
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

						<h2>Loan Application Deatils</h2>

					

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

<input type="button" onClick="printDiv('printableArea')" value="Print" />
					<!-- start: page -->
				<div id="printableArea"  style="border:dotted">
					<div class="row">

						<div class="col-md-12">

						
								<section class="panel">

									    <div style="color: #000000; font-size:12px; padding-top:-15px;">
                                        <table class="table" style="background-color:#FFFFFF;">
								<thead>
									<tr>
									   <td colspan="6">  <div style="background-color:#FFFFFF;">
<div style="text-align:center"><img src="logo.png" style="width:300px; height:50px;"></div>
<div style="text-align:center; font-size:14px"><b style="color: #006600">Regd. No. 304365</b></div>
<div style="text-align:center; font-size:14px; color:#000066"><h5><b>Address: Near Sahu Kirana Shop, Jagdish Nagar, Katol Road , Nagpur -13</b></h5></div>
<div style="text-align:center; font-size:14px;color:#000066"><h5><b>Email:bhoyarnathnidhi@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone. No. 7744965631, 776870623</b></h5></div>

										<div style="text-align:center" class="panel-title">Loan Application Form - <?php echo $rowLoan['application_no'];?></div></td>
									</tr>
                                  <tr>
									   
									  <td width="27%">Full Name: </td>
									<td colspan="3"><?php echo $name =  ucfirst($rowLoan['firstname']).' '.ucfirst($rowLoan['middlename']).' '.ucfirst($rowLoan['lastname']);?></td>
									</tr>
                                    <tr>
										<td>Gender:</td>
										<td width="24%"><?php if($rowLoan['gender'] == 'M'){echo "Male";} else {echo "Female";};?></td>
                                      <td width="26%">Date of Birth:</td>
							  <td width="17%">
												<?php 
												 $dateofbirth = $rowLoan['dob'];
												if(!empty($dateofbirth))
												{
												echo  date("d-m-Y", strtotime($dateofbirth));
												}
												?></td>
								  </tr>
                                    <tr>
										<td>Phone:</td>
										<td><?php echo $rowLoan['phone'];?></td>
                                         <td>Email ID:</td>
										<td><?php echo $rowLoan['emailid'];?></td>
									</tr>
                                     <tr>									  
										<td>Whether belong to: </td>
										<td><?php 
												$belongto = $rowLoan['belongto'];
												if($belongto == 1)
												{
												echo "ST";
												}
												if($belongto == 2)
												{
												echo "SC";
												}
												if($belongto == 3)
												{
												echo "OBC";
												}
												if($belongto == 4)
												{
												echo "General";
												}
												?>										</td>
                                        <td>Whether possess BPL Card: </td>
										<td><?php echo $rowLoan['possesscard'];?></td>
									</tr>
                                     <tr>
									   <td colspan="4"><b>Present Address</b></td>	
									</tr>
                                     <tr>
									   <td colspan="4"><?php echo ucfirst($rowLoan['present_address']);?>, <?php echo ucfirst($rowLoan['present_city']);?>, <?php 
												   $rowState = mysqli_fetch_array($resultState);
												   echo ucfirst($rowState['sta_name']);
												 ?> , <?php echo $rowLoan['present_pincode'];?> </td>
									</tr>
                                    
                                       <tr>
									   <td colspan="4"><b>Loan Guarantor </b></td>	
									</tr>
                                    <tr>
									   <td colspan="4">Name: <?php echo ucfirst($rowLoan['guarantor_name']);?> , Address: 
									   <?php echo ucfirst($rowLoan['guarantor_address']);?>-<?php echo ucfirst($rowLoan['guarantor_pincode']);?> , Phone:  <?php echo ucfirst($rowLoan['contact_number']);?>.</td>
									</tr>
                                     <tr>
									   <td colspan="4"><b>Present Address</b></td>	
									</tr>
                                     <tr>
									   <td colspan="4"><?php echo ucfirst($rowLoan['present_address']);?>, <?php echo ucfirst($rowLoan['present_city']);?>, <?php 
												   $rowState = mysqli_fetch_array($resultState);
												   echo ucfirst($rowState['sta_name']);
												 ?> , <?php echo $rowLoan['present_pincode'];?> </td>
									</tr>
                                    
                                     <tr>
									   <td colspan="4"><b>Occupation Details</b></td>	
									</tr>
                                     

                                                                        <tr>
									   <td>Employer's Name:</td>
										<td> <?php echo ucfirst($rowLoan['employer_name']);?></td>
										<td>Address:</td>
                                        <td><?php echo ucfirst($rowLoan['employer_address']); ?></td>
									</tr>
                                       <tr>
									   <td>Designation:</td>
										<td><?php  echo $rowLoan['designation'];?></td>
										<td>Contact No.:</td>
										<td><?php echo $rowLoan['contentno'];?></td>
									</tr>
									<tr>
									   <td>PAN No.:</td>
										<td><?php  echo $rowLoan['panno'];?>									</td>
										<td>Company ID:</td>
										<td><?php  echo $rowLoan['company_id'];?></td>
									</tr>
                                    <tr>
									<td>   ID proof Type:
									</td>
									 
										<td><?php 
													$rowIdproofType = mysqli_fetch_array($resultIdprooftype);
												    echo $rowIdproofType['proof_type'];
												 ?></td>
									    <td>ID Proof Number:</td>
								      <td><?php  echo $rowLoan['idnumber'];?></td>
								     
                                  </tr>
                                    <tr><td colspan="4"><b>Income/Expenditure Details</b></td></tr>
                                    <tr>
									   <td>Average Monthly Income :</td>
										<td> 	<?php echo $rowLoan['average_monthly_income'];?></td>
										<td colspan="2">Average Monthly Expenditure: &nbsp;&nbsp;<?php echo $rowLoan['average_monthly_expenditure'];?>	 </td>
										
									</tr>
                                    <tr>
									   <td colspan="2">Average Monthly Surplus Amount: <?php echo $rowLoan['average_monthly_surplus_amount'];?></td>
										
										<td>&nbsp; </td>
										<td>&nbsp;</td>
									</tr>
                                    <tr><td colspan="2"><b>Loan Details</b></td></tr>
                                    <tr>
									   <td colspan="2">Required Loan Amount(In Rupees):&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rowLoan['loan_amount'];?></td>
										
										<td>Loan Tenure(Years):</td>
										<td><?php echo $rowLoan['tenure'];?>										</td>
									</tr>
                                    <tr>
									   <td>Approval Loan Amount:</td>
										<td><?php echo $rowLoan['approval_loan'];?></td>
										<td>Principal (Rs.): </td>
										<td><?php echo $rowLoan['principal'];?>										</td>
									</tr>
                                     <tr>
									   <td>Interest (Rs.):</td>
										<td><?php echo $rowLoan['interest'];?></td>
										<td>EMI Installment(Rs):  </td>
										<td><?php echo $rowLoan['emi_installment'];?>										</td>
									</tr>
                                    
                                    <tr><td colspan="4"> <div class="form-group col-sm-12" align="right" style="padding-right:10px; padding-top:40px;">

											 Authorised by

										</div></td></tr>
								</thead>
                                </table>

								  </div>
									
								</section>

						</div>

					</div>
                   
</div>
					<!-- end: page -->

				</section>

			</div>
 <footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												
												<button type="button" onClick="window.location.href='loan_application.php'" name="" class="btn btn-default">Back</button>

											</div>

										</div>

									</footer>

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