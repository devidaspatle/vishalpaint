<?php
error_reporting(0);
include_once("includes/check_session.php");
include_once("includes/db_config.php");
$typeid = $_GET['type'];

$resulTDesignations = mysqli_query($con, "SELECT * FROM designation where  id = '$typeid'");
$rowDesignations =mysqli_fetch_array($resulTDesignations);

$resultDesignation = mysqli_query($con, "SELECT * FROM designation where  currentStatus = 'Y'");
$totalDesignation =mysqli_num_rows($resultDesignation);
?>

<!doctype html>

<html class="fixed">

	<head>

	

		<meta charset="utf-8">

	

		<!-- Basic -->

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

						<h2>Designation</h2>

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Designation &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>

					<!-- start: page -->

					<section class="panel">

						

						<form id="form" action="designation_code.php" method="post" class="form-horizontal" >

							<div class="panel-body">

								<div class="col-md-2">&nbsp;</div>									

										  <input type="hidden" name="user_id" id="user_id" value="1" />						

								<div class="col-md-12">

									<div class="form-group col-sm-12">

										<label class="col-sm-4 control-label">Designation <span class="required">*</span></label>

										<div class="col-sm-6">

											<input type="text" placeholder="Designation" name="designation" id="designation"  class="form-control digits" maxlength="15" required value="<?php echo $rowDesignations['designation'];?>" />

											<span class="red" id="err_duration"></span>

										</div>

									</div>
							<div class="col-md-2">&nbsp;</div>
																	

								</div>

							</div>	



							<footer class="panel-footer">

								<div class="row">

									<div class="col-sm-12 col-sm-offset-4">

										<?php if(empty($typeid)) { ?>											

											 <button type="submit" name="submit" class="btn btn-warning">Save</button>	
										<?php } else { ?>
											<input type="hidden"  name="Update"  value="Update">
											<input type="hidden"  name="tdsid"  value="<?php echo $typeid; ?>">	
 											<button type="submit" name="update" class="btn btn-warning">Update</button>	
 										<?php } ?>
											<button type="reset" class="btn btn-default">Reset</button>

											<input type="hidden" name="act" id="act" value="yes">

											

									</div>

								</div>

							</footer>

						</form>

						<div>&nbsp;</div>

						<header class="panel-heading">

							<h2 class="panel-title">Designation Master</h2>

						</header>

						<div class="panel-body">

																

							<table class="table table-bordered table-striped mb-none" id="datatable-default">

								<thead>

									<tr>

										<th>Sr.No</th>

										<th>Designation</th>

										<th style="text-align:center;">Action</th>

									</tr>

								</thead>

								<tbody>

									<?php
									$i = 1;
									while($rowDesignation = mysqli_fetch_array($resultDesignation)) 
									 { 
									?>
									<tr>

										<td><?php echo $i++;?></td>

										<td><?php echo $rowDesignation['designation'];?></td>
										<!--<td>30 days</td>-->

										<td align="center">

											<a href="manage_designation.php?act=edit&type=<?php echo $rowDesignation['id'];?>" title="Edit" onClick="return confirm('Do You Want To Edit This Record ?');"><i class="fa fa-edit"></i></a> &nbsp; &nbsp; &nbsp;

											<a href="manage_designation.php?act=del&type=<?php echo $rowDesignation['id'];?>" title="Delete" onClick="return confirm('Do You Want To Delete This Record ?');"><i class="fa fa-trash"></i></a>

										 </td>

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