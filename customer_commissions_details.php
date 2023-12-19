<?php
error_reporting(0);
include_once("includes/db_config.php");
$customerId = $_GET['custpmerid'];
$executiveid = $_GET['executiveid'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$resultCustomer = mysqli_query($con, "SELECT * FROM executive_commissions where  customerId  = '".$customerId."' and  executiveId  = '".$executiveid."'");
$totalCustomer =mysqli_num_rows($resultCustomer);
//echo "SELECT SUM(payment_price) AS price FROM executive_member where parent_id   = '$executiveId'";
//die;

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

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=8ffc0b31bc8d9ff82fbb94689dd1d7ff">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" src="/media/js/site.js?_=df7cd4213eec7fc146048acf402cae00"></script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fstyling%2Fbootstrap.html" async></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
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

						<h2>Customer Commission Details </h2>

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

							

							</ol>

						</div>

					</header>

					<!-- start: page -->

				<section class="panel">	

<input type="button" onClick="printDiv('printableArea')" value="Print" />
					<!-- start: page -->
					<?php 

					$resultExecutives2 = mysqli_query($con, "SELECT * FROM executive_member  where application_no = $customerId and currentStatus='Y' and member_type='Y'");
						  $rowExecutive2 = mysqli_fetch_array($resultExecutives2);
					?>
				<div id="printableArea"  style="border:dotted">
						<div class="panel-body">
  						<div class="col-lg-12" align="center"><h3 style="color:#006633">Bhoyarnath Mutual Nidhi Limited</h3></div>
  						<div class="col-lg-12" align="center" style="color: #0033CC; font-size: 16px; font-weight: bold;">Self Commission Details</div>
						<div class="col-md-12" align="center"><b>Application No: &nbsp;&nbsp; <span style="color: #0033CC"><?php echo $customerId ;?> </span></b></div>
                        
								<table id="example" class="table table-striped table-bordered" style="width:100%">

								<thead>

									<tr>
										<th>Name</th>
										<th>Month</th>
										<th>Amount</th>
										<th>Bonus</th>
										<th>Payment</th>
                                        <th>Net Comm</th>
                                        <th>Less TDS</th>
                                        <th>Total</th>
									
									</tr>

								</thead>

								<tbody>

									<?php
									  while($rowCustomer = mysqli_fetch_array($resultCustomer)) 
									  { 
										$resultCustomers = mysqli_query($con, "SELECT * FROM customer_registration where application_no  = '".$customerId."'");
										$rowexecuss = mysqli_fetch_array($resultCustomers);

										$name_of_applicant =  ucfirst($rowexecuss['firstName']).' '.ucfirst($rowexecuss['middleName']).' '.ucfirst($rowexecuss['lastName']);
										$payment_price = $rowCustomer['payment_price'];
										$payment_percent = $rowCustomer['payment_percent'];
										$totalpayment = $payment_price * $payment_percent /100;
										$bonus_point = $rowCustomer['bonus_point'];
										$payment_tds = $rowCustomer['payment_tds'];
										$total = $payment_percent + $bonus_point;
										$tds = $total * $payment_tds/100;
									?>
										<tr>
										<td><?php echo $name_of_applicant;?></td>
										<td><?php 
										if($rowCustomer['payment_month'] == 1)
										{
										echo "January";
										}
										else if($rowCustomer['payment_month'] == 2)
										{
										echo "February";
										}
										else if($rowCustomer['payment_month'] == 3)
										{
										echo "March";
										}
										else if($rowCustomer['payment_month'] == 4)
										{
										echo "April";
										}
										else if($rowCustomer['payment_month'] == 5)
										{
										echo "May";
										}
										else if($rowCustomer['payment_month'] == 6)
										{
										echo "June";
										}
										else if($rowCustomer['payment_month'] == 7)
										{
										echo "July";
										}
										else if($rowCustomer['payment_month'] == 8)
										{
										echo "August";
										}
										else if($rowCustomer['payment_month'] == 9)
										{
										echo "September";
										}
										else if($rowCustomer['payment_month'] == 10)
										{
										echo "October";
										}
										else if($rowCustomer['payment_month'] == 11)
										{
										echo "November";
										}
										else if($rowCustomer['payment_month'] == 12)
										{
										echo "December";
										}
										?></td>
										<td><?php echo $rowCustomer['payment_price'];?></td>

                                        <td><?php echo $rowCustomer['bonus_point'];?></td>

										<td><?php echo $rowCustomer['payment_percent'];?></td>
                                        <td><?php echo $total;?></td>
										<td><?php echo $tds; ?></td>
                                         <td><?php echo $grtotal = $total-$tds;?></td>
                                       
									</tr>
								<?php } ?>		
                                <?php if(!empty($totalCustomer)){?>							
									<tr>
										<td colspan="2" align="right"><b>Total Payment</b></td>
									<?php 
									$payment_prices =0;
										$bonus_points =0;
										$totalpayments =0;
										$totals =0;
										$tdss =0;
									$resultCustomeres = mysqli_query($con, "SELECT * FROM executive_commissions where  customerId  = '".$customerId."' and  executiveId  = '".$executiveid."'");
									while($rowexecus = mysqli_fetch_array($resultCustomeres))
									{
									 
										$payment_prices += $rowexecus['payment_price'];
										$payment_percents += $rowexecus['payment_percent'];
									
										$bonus_points += $rowexecus['bonus_point'];
										
										$totals = $totalpayments + $bonus_points+$payment_percents;
										$tdss = $totals * $rowexecus['payment_tds']/100;
									}
									
						
										?>
                                        
										<td><?php echo $payment_prices;?></td>
										
                                        <td><?php echo $bonus_points;?></td>

										<td><?php echo $payment_percents;?></td>
                                        <td><?php echo $totals;?></td>
										<td><?php echo $tdss; ?></td>
                                         <td><?php  echo $grtotal = $totals-$tdss;?></td>                                       
									</tr>

                                    <?php } ?>
								</tbody>

							</table>
						</div>
</div>
					</section>

					<!-- end: page -->

				</section>

			</div>			

		</section>


		<!-- Vendor -->
<script type="text/javascript" class="init">	
		$(document).ready(function() {
			$('#example').DataTable();
		} );

	</script>
		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>

		<!-- Vendor -->


	</body>

</html>