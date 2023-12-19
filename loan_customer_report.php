<?php
error_reporting(0);
include "includes/check_session.php";
include_once("includes/db_config.php");
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$application_no =  $_POST['application_no'];
if(empty($startdate))
{
$resultCustomer = mysqli_query($con, "SELECT * FROM loan_application order by id desc");
}
else
{
$resultCustomer = mysqli_query($con, "SELECT * FROM loan_application WHERE payment_date  BETWEEN '".$startdate."' AND '".$enddate."' ");

}
$totalCustomer =mysqli_num_rows($resultCustomer);

$output='';
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


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <style type="text/css" class="init">
    
    </style>
    <script type="text/javascript" src="/media/js/site.js?_=a64810efc82bfd3b645784011efa5963"></script>
   
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
   
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

<?php include "left.php"; ?>

				<!-- end: sidebar -->

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
					
                                             <div align="center">
                                            <h2>Customer Loan Details </h2>
                                            <div><b>Period: <?php 
												if(!empty($startdate))
												{
												echo  date("d-m-Y", strtotime($startdate));
												}
												$startdate;?> To <?php
												if(!empty($enddate))
												{
												echo  date("d-m-Y", strtotime($enddate));
												} ?></b></div>
</div>
					<!-- start: page -->
<header class="page-header">

						<h2>Customer Loan Report </h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Customer Loan Report  &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>
					<section class="panel">	
<div><form method="POST" action="export_file.php"><input type="submit" name="export_excel" value="Export">
	<input type="hidden" name="enddate" value="<?php echo $enddate?>">
<input type="hidden" name="startdate" value="<?php echo $startdate?>"></form></div>
						<div class="panel-body">

								<table id="example" class="table table-striped table-bordered" style="width:100%">

								<thead>

									<tr>
										<th>Application No.</th>
										<th>Name</th>
										<th>Gender </th>
										<th>Contact No.</th>
										<th>City</th>
										<th>Loan Date</th>
                                        <th>Loan Amount</th>
                                        
									</tr>

								</thead>

								<tbody>

									<?php
									 $i = 1;
									  while($rowCustomer = mysqli_fetch_array($resultCustomer)) 
									  { 
									$name_of_applicant =  ucfirst($rowCustomer['firstname']).' '.ucfirst($rowCustomer['middlename']).' '.ucfirst($rowCustomer['lastname']);

									?>
										<tr>

										<td align="center"><?php echo $rowCustomer['application_no'];?></td>

										<td><a href="installment_payment_history.php?customerId=<?php echo $rowCustomer['application_no']; ?>"><?php echo $name_of_applicant;?></a></td>

										<td><?php if($rowCustomer['gender'] == 'M'){echo "Male";} else {echo "Female";};?></td>

										<td><?php echo $rowCustomer['phone'];?></td>

										<td><?php echo ucfirst($rowCustomer['present_city']);?></td>
										<td>
										<?php 
										$originalDate = $rowCustomer['payment_date'];
										if(!empty($originalDate))
										{
										echo  date("d-m-Y", strtotime($originalDate));
										}
										?></td>

                                        <td><?php echo ucfirst($rowCustomer['loan_amount']);?></td>
									</tr>
								<?php } ?>		
                               
                                     
								</tbody>
                               <?php if(!empty($totalCustomer)){?>							
									<tr>
										<td colspan="6" align="right"><b>Total Payment</b></td>
									
										<td><b><?php 
										$sumsamount = 0;
										if(empty($startdate))
										{
										$resultLoanes = mysqli_query($con, "SELECT * FROM loan_application");
										}
										else
										{
										$resultLoanes = mysqli_query($con, "SELECT * FROM loan_application WHERE  payment_date  BETWEEN '".$startdate."' AND '".$enddate."'");
										}
											
										while($rowss= mysqli_fetch_array($resultLoanes))
										{ 
										//echo "hello";
									    $sumsamount += $rowss['loan_amount'];
										}
											echo $sumsamount;
										?></b>
                                         </td>

									

									</tr>	
                                    <?php } ?>
							</table>
						</div>


					</section>

					<!-- end: page -->

				</section>

			</div>			

		</section>


		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>


	</body>

</html>