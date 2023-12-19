<?php
error_reporting(0);
include_once("includes/db_config.php");

//echo "SELECT * FROM loan_installment where  application_no  =  '".$applicationno."'";
//die;
$resLoan = mysqli_query($con, "SELECT * FROM loan_installment");
$numcst = mysqli_num_rows($resLoan);

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
    <script type="text/javascript" class="init">	
$(document).ready(function() {
	$('#example').DataTable();
} );

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

}


.userbox .name {

font-size: 10px;

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

<?php include "left.php"; ?>

				<section role="main" class="content-body">
<form id="form"  method="POST" action="" class="form-horizontal" onSubmit="disable();">				

						<header class="panel-heading">
						<div class="panel-body">
                        	
										
							<div class="form-group col-sm-4">

											<label class="col-sm-5 control-label">Start Date<span class="required">*</span></label>

											<div class="col-sm-7">
											<input type="date" name="startdate" id="startdate"  maxlength="30"  class="form-control" value="<?php echo $startdate?>">
												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										


										<div class="form-group col-sm-4">

											<label class="col-sm-5 control-label">End Date <span class="required">*</span></label>

											<div class="col-sm-7">
												<input type="date" name="enddate" id="enddate"  maxlength="30"  class="form-control" value="<?php echo $enddate?>">

												<span class="red" id="err_city"></span>

											</div>

										</div>
											<div class="form-group col-sm-4">

											<div class="col-sm-8">
											<button type="submit" name="submit" class="btn btn-warning">Search</button>	 &nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button>
												<span class="red" id="err_city"></span>

											</div>

										</div>
										</div>
									
						</header>
					</form>
					<header class="page-header">

						<h2> Loan Payment Details </h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Loan Executive Report  &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>

					<!-- start: page -->

					<section class="panel">	
<div><form method="POST" action="loan_deposit_export_file.php"><input type="submit" name="export_excel" value="Export">
	<input type="hidden" name="enddate" value="<?php echo $enddate?>">
<input type="hidden" name="startdate" value="<?php echo $startdate?>"></form></div>
						
						<div class="panel-body">

								<table id="example" class="table table-striped table-bordered" style="width:100%">

								<thead>

									<tr>

										<th>Month</th>
										<th>Name</th>
										<th>Recipt No</th>
                                        <th>Balance(Rs.)</th>
										<th>EMI</th>
										<th>Principal</th>
										<th>Interest</th>
										<th>Payment Date </th>
									</tr>

								</thead>

								<tbody>

									<?php
								
									  while($rowLoan = mysqli_fetch_array($resLoan)) 
									  { 
										$applicationno = $rowLoan['application_no'];
									    $resultCustomerLoan = mysqli_query($con, "SELECT * FROM loan_application where  application_no  =  '".$applicationno."'");
										$rowCustomerLoan = mysqli_fetch_array($resultCustomerLoan);

							$name_of_applicant =  ucfirst($rowCustomerLoan['firstname']).' '.ucfirst($rowCustomerLoan['middlename']).' '.ucfirst($rowCustomerLoan['lastname']);
																	?>
										<tr>

										<td align="center"><?php 
											 $monthNum = sprintf("%02s",$rowLoan['payment_month']); 
											 $dateObj   = DateTime::createFromFormat('!m', $monthNum);
											 echo $monthName = $dateObj->format('F'); 
											 ?></td>

										<td><?php echo $name_of_applicant;?></td>

										<td><?php echo $rowLoan['recipt_no'];?></td>
                                        
                                        <td><?php
										
											$loan_amount1 = $rowCustomerLoan['loan_amount'];
										 $loan_amount = $sum += $rowLoan['emi_installment'];
										 
										 echo $totalsum = $loan_amount1 - $loan_amount;
										 ?></td>
                                        
                                        <td><?php echo $rowLoan['emi_installment'];?></td>
                                        
                                        <td><?php echo $rowLoan['principal'];?></td>

										<td><?php echo $rowLoan['interest'];?></td>
                                       
                                        <td><?php
										       $originalDate = $rowLoan['payment_date'];
												if(!empty($originalDate))
												{
												echo  date("d-m-Y", strtotime($originalDate));
												}
										?></td>

									</tr>
								<?php } ?>		
                                <?php if(!empty($numcst)){?>							
									<tr>
										<td colspan="4" align="right"><b>Total Payment</b></td>
									
										<td><b><?php 
										$sum = 0;
										$sum1 =0;
										$resLoan = mysqli_query($con, "SELECT * FROM loan_installment");
										while($row = mysqli_fetch_assoc($resLoan))
										{ 
										$sum += $row['emi_installment'];
										$principal += $row['principal'];
										$interest  += $row['interest'];
										
										}
											echo $sum;
										?></b>
                                         </td>

										<td><?php echo $principal; ?></td>
										<td><?php echo $interest; ?></td>
									</tr>	
                                    <?php } ?>
								</tbody>

							</table>
						</div>

					</section>

					<!-- end: page -->

				</section>

			</div>			

		</section>




<script type="text/javascript" class="init">	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>


	</body>

</html>