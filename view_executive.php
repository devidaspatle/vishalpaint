<?php 
error_reporting(0);
include_once("includes/db_config.php");
require_once('includes/check_session.php');
$executive_id = $_GET['type'];
//$customer_id = random_string(8, 'abcdefghijklmnopqrstuvwxyz');
$user_id = $_SESSION['rsoftId'];

$sqlg = "SELECT * FROM executive_member where application_no = '$executive_id'";
$resultQgl = mysqli_query($con, $sqlg); 
$rowCustomers = mysqli_fetch_array($resultQgl);


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
	<div class="panel-body" style="color: #000000; font-size:14px">
							<table class="table">
								<thead>
									<tr>
									   <td colspan="6">  <div style="background-color:#FFFFFF;">
<div style="text-align:center"><img src="logo.png" style="width:450px; height:70px;"></div>
<div style="text-align:center; font-size:14px"><b style="color: #006600">Regd. No. 304365</b></div>
<div style="text-align:center; font-size:14px; color:#000066"><h5><b>Address: Near Sahu Kirana Shop, Jagdish Nagar, Katol Road , Nagpur -13</b></h5></div>
<div style="text-align:center; font-size:14px;color:#000066"><h5><b>Email:bhoyarnathnidhi@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone. No. 7744965631, 776870623</b></h5></div>

										<div style="text-align:center"><h2 class="panel-title"><b>View Executive Details</b></h2></div></td>
									</tr>
                                    <tr>
									   <td>Executive ID </td>
										<td><?php echo ucfirst($rowCustomers['application_no']);?></td>
										<td>Parent Id </td>
										<td>
										<?php 
											$resultCusts = mysqli_query($con, "SELECT * FROM executive_member where  application_no  = '".$rowCustomers['application_no']."'");
											$rowCusts = mysqli_fetch_array($resultCusts);
											echo ucfirst($rowCusts['firstName']).' '.ucfirst($rowCusts['middleName']).' '.ucfirst($rowCusts['lastName']);
											?>
                                           </td>
									</tr>
                                    <tr>
									   <td>First Name </td>
										<td><?php echo ucfirst($rowCustomers['firstName']);?></td>
										<td>Middle Name</td>
										<td><?php echo ucfirst($rowCustomers['middleName']);?></td>
									</tr>
                                    <tr>
									   <td>Last Name </td>
										<td><?php echo ucfirst($rowCustomers['lastName']);?></td>
										<td>Father/Husband</td>
										<td><?php echo ucfirst($rowCustomers['father_name']);?></td>
									</tr>
                                    <tr>
									   <td>Gender</td>
										<td><?php if($rowCustomers['gender'] == 'M'){echo "Male";} else {echo "Female";};?></td>
										<td>Email</td>
										<td><?php echo $rowCustomers['emailid'];?></td>
									</tr>
                                     <tr>
									   <td>Phone</td>
										<td><?php echo $rowCustomers['mobile_number'];?></td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
                                     <tr>
									   <td colspan="4"><h5><b>Present Address</b></h5></td>	
									</tr>
                                     <tr>
									   <td>Address</td>
										<td> <?php echo ucfirst($rowCustomers['address']);?></td>
										<td>City</td>
										<td><?php echo ucfirst($rowCustomers['city']);?></td>
									</tr>
                                    
                                      
									<tr>
									   <td>State</td>
										<td><?php  echo ucfirst($rowCustomers['state']); ?></td>
									  <td>Date of Join </td>
										<td><?php 
												 $dateofjoin = $rowCustomers['date_of_join'];
												if(!empty($dateofjoin))
												{
												echo  date("d-m-Y", strtotime($dateofjoin));
												}
												?></td>
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