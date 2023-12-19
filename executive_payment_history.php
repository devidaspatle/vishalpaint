<?php
error_reporting(0);
include_once("includes/db_config.php");
$executiveId = $_GET['executiveId'];
$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member where application_no    = '".$executiveId."'");
$totalExecutive =mysqli_num_rows($resultExecutive);
$rowExecut = mysqli_fetch_array($resultExecutive);
$payment_prices =0;
$bonus_points =0;
$totals =0;
$tdss =0;
$grtotals = 0;
$payment_percents=0;
$resultExecess = mysqli_query($con, "SELECT * FROM executive_commissions where executiveId = '".$executiveId."'");
while($rowexecus = mysqli_fetch_array($resultExecess))
{
	$payment_prices += $rowexecus['payment_price'];
	$payment_percents += $rowexecus['payment_percent'];
	$bonus_points += $rowexecus['bonus_point'];
	$payment_tdss = $rowexecus['payment_tds'];
	$totalpaymentes = $payment_prices * $payment_percents/100;								
	$totales = $payment_percents + $bonus_points;
	$tdss += $totales * $payment_tdss/100;
	$date = $rowexecus['date'];
}
									
$resultExecutives = mysqli_query($con, "SELECT * FROM executive_member where  	parent_id    = '".$executiveId."'");
$numExecutive =mysqli_num_rows($resultExecutives);

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

						<h2> Group Commission Details </h2>


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
				<div id="printableArea"  style="border:dotted">

						<div class="panel-body">
  						<div class="col-lg-12" align="center"><h3 style="color:#006633">Bhoyarnath Mutual Nidhi Limited</h3></div>
                        <div class="col-lg-12" align="center" style="color: #0033CC; font-size: 16px; font-weight: bold;">Group Commission Details</div>
						<div class="col-md-6"><b>Application No: &nbsp;&nbsp; <span style="color: #0033CC"><?php echo $rowExecut['application_no'];?> </span></b></div>
                        <div class="col-md-6" align="right"><b>Executive Name:&nbsp; &nbsp;<span style="color: #0033CC">
						<?php	echo $name_of_parents =	ucfirst($rowExecut['firstName']).' '.ucfirst($rowExecut['middleName']).' '.ucfirst($rowExecut['lastName']);									
						?></span></b></div>
								<table id="example" class="table table-striped table-bordered" style="width:100%">

								<thead>

									<tr>
										<th>Appl. No.</th>
										<th>Name</th>
										<th>Amount</th>
										<th>Bonus</th>
										<th>Comm</th>
                                        <th>Net Comm</th>
                                        <th>Less TDS</th>
                                        <th>Net Comm.</th>								
									</tr>

								</thead>

								<tbody>
                                       <tr>
										<td align="center"><?php echo $rowExecut['application_no'];?></td>
									    <td><?php echo $name_of_parents;?></td>
										<td><?php echo $payment_prices;?></td>
										<td><?php echo $bonus_points;?></td>
										<td><?php echo $payment_percents;?></td>
                                        <td><?php echo $totales;?></td>
										<td><?php echo $tdss; ?></td>
                                         <td><?php  echo $grtotals = $totales-$tdss;?></td>    
                                                                         
									</tr>

									<?php
									   
									  while($rowExecutive = mysqli_fetch_array($resultExecutives)) 
									  { 
										$name_of_applicant =  ucfirst($rowExecutive['firstName']).' '.ucfirst($rowExecutive['middleName']).' '.ucfirst($rowExecutive['lastName']);
										$executiveIds = $rowExecutive['application_no'];										
										$resultExt = mysqli_query($con, "SELECT * FROM executive_commissions where executiveId  = '".$executiveIds."'");
										$payment_price =0;
										$bonus_point =0;
										$payment_percent =0;
										$totals =0;
										$grtotal = 0;
										$totalpayments =0;
										$tds =0;
									while($rowexecu = mysqli_fetch_array($resultExt))
									{
										$payment_price += $rowexecu['payment_price'];
										$bonus_point += $rowexecu['bonus_point'];
										$payment_tds = $rowexecu['payment_tds'];
										$payment_percent += $rowexecu['payment_percent'];
										$totalpayments = $payment_price * $payment_percent/100;	
										$totals = $payment_percent + $bonus_point;							
										$tds += $totals * $payment_tds/100;							
									}
									?>
                                    
										<tr>
										<td align="center"><?php echo $rowExecutive['application_no'];?></td>
									    <td><?php echo $name_of_applicant;?></td>
										<td><?php echo $payment_price;?></td>
										<td><?php echo $bonus_point;?></td>
										<td><?php echo $payment_percent;?></td>
                                        <td><?php echo $totals;?></td>
										<td><?php echo $tds; ?></td>
                                         <td><?php  echo $grtotal = $totals-$tds;?></td>                                       
									</tr>
								<?php } ?>		
                                <?php if(!empty($totalExecutive)){?>							
									<tr>
										<td colspan="2" align="right"><b>Total Payment</b></td>
										<?php    
								$resultExecutive1 = mysqli_query($con, "SELECT * FROM executive_member where parent_id    = '".$executiveId."'");
									    $tds1 = 0;
										$totalpayments1 =0;
										$totals1 =0;
										$payment_price1 =0;
										$bonus_point1 =0;
										$payment_tds1 = 0;
										$payment_percent1 =0;
									 while($rowExecutive1 = mysqli_fetch_array($resultExecutive1)) 
									  { 
										$executiveIdss = $rowExecutive1['application_no'];										
										$resultExt1 = mysqli_query($con, "SELECT * FROM executive_commissions where executiveId  = '".$executiveIdss."'");
										while($rowexecu1 = mysqli_fetch_array($resultExt1))
										{
											$payment_price1 += $rowexecu1['payment_price'];
											$payment_percent1 += $rowexecu1['payment_percent'];
											$bonus_point1 += $rowexecu1['bonus_point'];
											$payment_tds1 = $rowexecu1['payment_tds'];
											$totalpayments1 = $payment_price1 * $payment_percent1/100;	
																
											$tds1 = $totals1 * $payment_tds1/100;											
										}
										
									}
										?>
                                        
										<td><b><?php echo $payment_prices+$payment_price1;?></b></td>
                                        <td><b><?php echo $comm = $bonus_points+$bonus_point1;?></b></td>
										<td><b><?php echo $totalpayment = $payment_percents+$payment_percent1;?></b></td>
                                         <td><b><?php   echo $gtotals = $comm + $totalpayment;
										 ?></b></td>
                                         <td><b><?php echo $lestds = $tds1+$tdss; ?></b></td>
                                         <td><b><?php  echo $grtotals = $gtotals - $lestds;?></b></td>                                       
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