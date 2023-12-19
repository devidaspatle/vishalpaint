<?php
include "includes/check_session.php";
include_once("includes/db_config.php");
$customerId = $_GET['customerId'];
$resultCustomerInstallment = mysqli_query($con, "SELECT * FROM customer_installment where application_no  = '$customerId'");
$totalCustomerInstallment =mysqli_num_rows($resultCustomerInstallment);

$resultCustInst = mysqli_query($con, "SELECT SUM(payment_price) AS price FROM customer_installment where application_no  = '$customerId'");

$resultCustomer = mysqli_query($con, "SELECT * FROM customer_registration  where application_no   = '".$customerId."'");
$rowCustomer = mysqli_fetch_array($resultCustomer);


?>

<!doctype html>

<html class="fixed">

	<head>

		<!-- Basic -->

		<meta charset="utf-8">


		 <title>BHOYARNATH | Mutual Nidhi Limited</title>

	
		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">



		<!-- Vendor CSS -->

		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />



		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />

		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />



		<!-- Specific Page Vendor CSS -->

		<link rel="stylesheet" href="assets/vendor/select2/css/select2.css" />

		<link rel="stylesheet" href="assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />

		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />



		<!-- Theme CSS -->

		<link rel="stylesheet" href="assets/stylesheets/theme.css" />



		<!-- Skin CSS -->

		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />



		<!-- Theme Custom CSS -->

		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">



		<!-- Head Libs -->

		<script src="assets/vendor/modernizr/modernizr.js"></script>



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

						<h2>Manage Customer  Payment History</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Customer  Payment History &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>

					<!-- start: page -->

					<section class="panel">	

						<div class="panel-body">
  						<div class="col-lg-12" align="center"><h3>Bhoyarnath Mutual Nidhi Limited</h3></div>
						<div class="col-md-6"><b>Application No: &nbsp;&nbsp; <?php echo $rowCustomer['application_no'];?> </b></div>
                        <div class="col-md-6" align="right"><b>Customer Name:&nbsp; &nbsp;
						<?php	echo $name_of_parents =	ucfirst($rowCustomer['firstName']).' '.ucfirst($rowCustomer['middleName']).' '.ucfirst($rowCustomer['lastName']);									
						?></b></div>
							<table class="table table-bordered table-striped mb-none" id="datatable-default">

								<thead>

									<tr>

										<th>Sr.No</th>
										<th>Receipt No.</th>
																			
										<th>Payment Mode</th>

										<th>Payment Rs.</th>

										<th>Payment Month</th>
										<th>Payment Date </th>
                                        <th>Action </th>
									</tr>

								</thead>

								<tbody>

									<?php
									 $i = 1;
									  while($rownum = mysqli_fetch_array($resultCustomerInstallment)) 
									  { 
									$application_no = $rownum['application_no'];
									$sqlgs = "SELECT * FROM customer_registration where application_no = '".$application_no."'";
									$resultQgl = mysqli_query($con, $sqlgs); 
									$rowCustomer = mysqli_fetch_array($resultQgl);                                           
									?>
										<tr>
										<td><?php echo $i++; ?></td>										
										<td><?php echo $rownum['recipt_no'];?></td>
										<td>
                                        <?php 
										if($rownum['payment_mode'] == 1)
										{
										echo "Cash";
										}
										else if($rownum['payment_mode'] == 2)
										{
										echo "Chaque";
										}
										else if($rownum['payment_mode'] == 3)
										{
										echo "DD";
										}
										?>
                                        </td>
									
										<td><?php echo $rownum['payment_price'];?></td>

										<td>
										<?php 
										if($rownum['payment_month'] == 1)
										{
										echo "January";
										}
										else if($rownum['payment_month'] == 2)
										{
										echo "February";
										}
										else if($rownum['payment_month'] == 3)
										{
										echo "March";
										}
										else if($rownum['payment_month'] == 4)
										{
										echo "April";
										}
										else if($rownum['payment_month'] == 5)
										{
										echo "May";
										}
										else if($rownum['payment_month'] == 6)
										{
										echo "June";
										}
										else if($rownum['payment_month'] == 7)
										{
										echo "July";
										}
										else if($rownum['payment_month'] == 8)
										{
										echo "August";
										}
										else if($rownum['payment_month'] == 9)
										{
										echo "September";
										}
										else if($rownum['payment_month'] == 10)
										{
										echo "October";
										}
										else if($rownum['payment_month'] == 11)
										{
										echo "November";
										}
										else if($rownum['payment_month'] == 12)
										{
										echo "December";
										}
										?></td>

										<td><?php 
												$originalDate = $rownum['payment_date'];
												if(!empty($originalDate))
												{
												echo  date("d-m-Y", strtotime($originalDate));
												}
											?>
                                        
                                        </td>

<td><a href="print_recipt.php?customer_id=<?php echo $rownum['id'];?>">Print</a></td>									</tr>	
								<?php } ?>									
									<tr>
										<td colspan="3" align="right"><b>Total Payment</b></td>
									
										<td><b><?php 
										
										while ($row = mysqli_fetch_assoc($resultCustInst)){ echo $row['price'];}

										?></b></td>

										<td>&nbsp;</td>

									</tr>	
								</tbody>

							</table>

						</div>

					</section>

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

		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>

		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>

		

		<!-- Specific Page Vendor -->

		<script src="assets/vendor/select2/js/select2.js"></script>

		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>

		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>

		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

		

		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>

		

		<!-- Theme Custom -->

		<script src="assets/javascripts/theme.custom.js"></script>

		

		<!-- Theme Initialization Files -->

		<script src="assets/javascripts/theme.init.js"></script>



		<!-- Examples -->

		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>

		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>

		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>

		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>



		<script src="assets/javascripts/forms/examples.validation.js"></script>

	</body>

</html>