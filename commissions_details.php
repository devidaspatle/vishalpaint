<?php
error_reporting(0);
include "includes/check_session.php";
include_once("includes/db_config.php");
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$application_no =  $_POST['application_no'];
$typeid = $_POST['typeid'];

if($typeid==1)

{	
$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member  WHERE  firstName  != 'BHOYARNATH'");
}
if($typeid==2)
{
	
$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member WHERE  application_no  = '".$application_no."'");
}
if($typeid==3)
{
	
$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member WHERE  application_no  = '".$application_no."'");
}
$totalExecutive =mysqli_num_rows($resultExecutive);

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
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Fbuttons%2Fexamples%2Fhtml5%2FoutputFormat-function.html" async></script>
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
				<form id="form"  method="POST" action="" class="form-horizontal" onSubmit="disable();">				

						<header class="panel-heading">
						<div class="panel-body">
                        <div class="rows">
	<div class="form-group col-sm-12">

											

											<div class="col-sm-12">
											
<input type="radio" name="typeid" value="1" required="required"> <b>&nbsp; All&nbsp; </b><input type="radio"  name="typeid" value="2" required="required">&nbsp; <b>Group  &nbsp;</b><input type="radio"  name="typeid" value="3" required="required"><b> &nbsp;Self </b>

											</div>

										</div>

										
                        	<div class="form-group col-sm-4">

                                                <label class="col-sm-5 control-label">Exect. Name<span class="required">*</span></label>

											<div class="col-sm-7">
											<select id="application_no" name="application_no" class="form-control" required>
                                              
                                                 <?php 
												 $resultExecutives = mysqli_query($con, "SELECT * FROM executive_member  where currentStatus='Y' and member_type='Y'");
												while($rowExecutive = mysqli_fetch_array($resultExecutives))
												{
												$name_of_applicant =	$rowExecutive['firstName'].' '.$rowExecutive['middleName'].' '.$rowExecutive['lastName']
												?>
									<option value="<?php echo $rowExecutive['application_no'];?>"><?php echo ucwords($name_of_applicant);?></option>	
												<?php }?>
											</select>
												

											</div>

										</div>

										
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
										</div>
                                        <div class="row" align="center">
											<div class="form-group col-sm-12">
										
											<button type="submit" name="submit" class="btn btn-warning">Search</button>	 &nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button>
												<span class="red" id="err_city"></span>

											</div>

										</div>
										</div>
									
						</header>
					</form>
					
                                                <div align="center">
                                                <h2 style="color:#006633">Monthly Commissions Details </h2>
                                                <div><b>Period: <span style="color: #0033CC"><?php 
												if(!empty($startdate))
												{
												echo  date("d-m-Y", strtotime($startdate));
												}
												$startdate;?> To <?php
												if(!empty($enddate))
												{
												echo  date("d-m-Y", strtotime($enddate));
												} ?></span></b></div>
                                                <?php 
												if(!empty($application_no))
												{
												$resultExecut = mysqli_query($con, "SELECT * FROM executive_member WHERE  application_no  = '".$application_no."'");
												$rowQgl = mysqli_fetch_array($resultExecut);
												?>
<div><b>Executive Name : <span style="color: #0033CC"><?php echo $name = ucfirst($rowQgl['firstName']).' '.ucfirst($rowQgl['middleName']).' '.ucfirst($rowQgl['lastName']); ?></span></b></div>
<?php
} 
?>
</div>
					<!-- start: page -->
<header class="page-header">

						<h2>Commission Executive Details </h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Monthly Commission Executive Details  &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>			

							<section class="panel">	
	<div><form method="POST" action="commission_export_file.php"><input type="submit" name="export_excel" value="Export">
	<input type="hidden" name="enddate" value="<?php echo $enddate?>">
	<input type="hidden" name="startdate" value="<?php echo $startdate?>"></form></div>

						<div class="panel-body">

<table id="example" class="table table-striped table-bordered" style="width:100%">

								<thead>

									<tr>
										<th>Ex. Code</th>
										<th>Name</th>
										<th>Amount</th>
										<th>Comm</th>
										<th>% Payment</th>
                                        <th>Less TDS</th>
                                        <th>Net Comm</th>
										</tr>

								</thead>

								<tbody>

									<?php
									  while($rowExecutive = mysqli_fetch_array($resultExecutive)) 
									  { 
									  	$name_of_applicant =  ucfirst($rowExecutive['firstName']).' '.ucfirst($rowExecutive['middleName']).' '.ucfirst($rowExecutive['lastName']);
										$customerId = $rowExecutive['application_no'];										
										$resultExt = mysqli_query($con, "SELECT * FROM executive_commissions where executiveId  = '".$customerId."' and DATE(postDateTime)  BETWEEN '".$startdate."' AND '".$enddate."'");
										$payment_price =0;
										$bonus_point =0;
										$payment_percent =0;
										$totalpayment =0;
										$total =0;
										$tds =0;
										$grtotal = 0;
									while($rowexecu = mysqli_fetch_array($resultExt))
									{
										$payment_price += $rowexecu['payment_price'];
										$payment_percent += $rowexecu['payment_percent'];
										$totalpayment = $payment_price * $payment_percent /100;
										$bonus_point += $rowexecu['bonus_point'];
										$payment_tds = $rowexecu['payment_tds'];
										$total = $payment_percent + $bonus_point;
										$tds += $total * $payment_tds/100;
									}
									?>
										<tr>

										<td align="center"><?php echo $rowExecutive['application_no'];?></td>

									<td><a href="executive_payment_history.php?executiveId=<?php echo $rowExecutive['application_no'];?>"><?php echo $name_of_applicant;?></a></td>

										<td><?php echo $payment_price;?></td>

                                        <td><?php echo $bonus_point;?></td>

										<td><?php echo $payment_percent;?></td>
										<td><?php echo $tds; ?></td>
                                         <td><?php  echo $grtotal = $total-$tds;?></td>                                       
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






	</body>

</html>