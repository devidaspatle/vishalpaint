<?php
error_reporting(0);
include_once("includes/db_config.php");

$applicationno = $_GET['customerId'];
//echo "SELECT * FROM loan_installment where  application_no  =  '".$applicationno."'";
//die;
$resLoan = mysqli_query($con, "SELECT * FROM loan_installment where  application_no  =  '".$applicationno."'");


$resultCustomerLoan = mysqli_query($con, "SELECT * FROM loan_application where  application_no  =  '".$applicationno."'");
$rowCustomerLoan = mysqli_fetch_array($resultCustomerLoan);
$name_of_applicant =  ucfirst($rowCustomerLoan['firstname']).' '.ucfirst($rowCustomerLoan['middlename']).' '.ucfirst($rowCustomerLoan['lastname']);
$approval_loan = $rowCustomerLoan['approval_loan'];
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



<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
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

				<section role="main" class="content-body">

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
				<input type="button" onClick="printDiv('printableArea')" value="Print" />
					<!-- start: page -->
				<div id="printableArea"  style="border:dotted">
						<div class="panel-body">
						<div class="col-lg-12" align="center"><h3 style="color:#006633">Bhoyarnath Mutual Nidhi Limited</h3></div>
                        <div class="col-lg-12" align="center"><h4>Loan Payment Details - <?php	echo $name_of_applicant; ?></h4></div>
						<div class="col-md-6"><b>Application No: &nbsp;&nbsp; <span style="color: #0033CC"><?php echo $rowCustomerLoan['application_no'];?> </span></b></div>
                        <div class="col-md-6" align="right"><b>Loan Amt : &nbsp; &nbsp;<span style="color: #0033CC">
						<?php	echo $approval_loan; ?>/-</span></b></div>
								<table  class="table table-striped table-bordered" style="width:100%">

								<thead>

									<tr>

										<th>Month</th>
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
										$loan_amount1 = 0;
										$loan_amount = 0;
										$sum = 0;
										$totalsum = 0;						
									  while($rowLoan = mysqli_fetch_array($resLoan)) 
									  { 
										?>
										<tr>

										<td align="center"><?php 
											 $monthNum = sprintf("%02s",$rowLoan['payment_month']); 
											 $dateObj   = DateTime::createFromFormat('!m', $monthNum);
											 echo $monthName = $dateObj->format('F'); 
											 ?></td>

										<td><?php echo $rowLoan['recipt_no'];?></td>
                                        
                                        <td><?php
										  $loan_amount = $sum += $rowLoan['principal'];
										 
										 echo $totalsum = $approval_loan - $loan_amount;
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
										<td colspan="6" align="right"><b>Total Payment</b></td>
									
										<td><b><?php 
										$sum = 0;
										$sum1 =0;
										while($row = mysqli_fetch_assoc($resultCustInst))
										{ 
										$sum += $row['exe_payment'];
										$sum1 += $row['bonus_point'];
										}
											echo $total = $sum + $sum1;
										?></b>
                                         </td>

										<td>&nbsp;</td>

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




<script type="text/javascript" class="init">	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>


	</body>

</html>