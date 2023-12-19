

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

						<h2>Executive  Registration</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Executive  Registration &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>

					<!-- start: page -->

					<section class="panel">	

                    		<header class="panel-heading">

								<h2 class="panel-title">Executive  Registration</h2>

							</header>

                    					

						<header class="panel-heading">

							<a href="create_executive_registration.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create Executive Registration</a>

						</header>

						<div class="panel-body">

																												<table class="table table-bordered table-striped mb-none" id="datatable-default">

								<thead>

									<tr>

										<th>Sr.No</th>

										<!--<th>Photo</th>-->

										<th>Name</th>

										<th>Contact No.</th>

										<th>Employee Type</th>

										<th>Salary</th>

										<th>Training Charge</th>

										<th>Date of Birth</th>

										<th>Date of Join</th>

										<th>Action</th>

									</tr>

								</thead>

								<tbody>

																		<tr>

										<td>1</td>

										<!--<td align="center"><img src="" height="100" width="100" /></td>-->

										<td>Kapil<br><br>Punch Id : 0</td>

										<td>9756629990</td>

										<td>Trainer</td>

										<td>RS 15,000.00</td>

										<td>RS 9,000.00</td>

										<td>01-01-1970</td>

										<td>25-04-2019</td>

										<td align="center">

											<a href="editregister.html?act=edit&type=T1RRPQ==" title="Edit" onClick="return confirm('Do You Want To Edit This Record ?');"><i class="fa fa-edit"></i>

											</a>&nbsp;

                                            											<a href="registration.html?act=del&type=T1RRPQ==" title="Delete" onClick="return confirm('Do You Want To Delete This Record ?');">

												<i class="fa fa-trash"></i>

											</a>

                                                                                        <br><br><p><a target="_blank" href="Staff_IdCard.html?act=print&type=T1RRPQ==" onClick="return confirm('Do You Want To Print This Record ?');" title="Id Card Print"><i class="fa fa-print"></i>

											</a></p>

										</td>

									</tr>	

																		<tr>

										<td>2</td>

										<!--<td align="center"><img src="" height="100" width="100" /></td>-->

										<td>Rohan Singh <br><br>Punch Id : 0</td>

										<td>9876645890</td>

										<td>Employee</td>

										<td>RS 15,000.00</td>

										<td>RS 0.00</td>

										<td>01-01-1970</td>

										<td>13-04-2019</td>

										<td align="center">

											<a href="editregister.html?act=edit&type=T0RZPQ==" title="Edit" onClick="return confirm('Do You Want To Edit This Record ?');"><i class="fa fa-edit"></i>

											</a>&nbsp;

                                            											<a href="registration.html?act=del&type=T0RZPQ==" title="Delete" onClick="return confirm('Do You Want To Delete This Record ?');">

												<i class="fa fa-trash"></i>

											</a>

                                                                                        <br><br><p><a target="_blank" href="Staff_IdCard.html?act=print&type=T0RZPQ==" onClick="return confirm('Do You Want To Print This Record ?');" title="Id Card Print"><i class="fa fa-print"></i>

											</a></p>

										</td>

									</tr>	

																		<tr>

										<td>3</td>

										<!--<td align="center"><img src="" height="100" width="100" /></td>-->

										<td>Sanaya Mehra<br><br>Punch Id : 0</td>

										<td>9182736450</td>

										<td>Employee</td>

										<td>RS 15,000.00</td>

										<td>RS 0.00</td>

										<td>01-01-1970</td>

										<td>13-04-2019</td>

										<td align="center">

											<a href="editregister.html?act=edit&type=T0RVPQ==" title="Edit" onClick="return confirm('Do You Want To Edit This Record ?');"><i class="fa fa-edit"></i>

											</a>&nbsp;

                                            											<a href="registration.html?act=del&type=T0RVPQ==" title="Delete" onClick="return confirm('Do You Want To Delete This Record ?');">

												<i class="fa fa-trash"></i>

											</a>

                                                                                        <br><br><p><a target="_blank" href="Staff_IdCard.html?act=print&type=T0RVPQ==" onClick="return confirm('Do You Want To Print This Record ?');" title="Id Card Print"><i class="fa fa-print"></i>

											</a></p>

										</td>

									</tr>	

																		<tr>

										<td>4</td>

										<!--<td align="center"><img src="" height="100" width="100" /></td>-->

										<td>Monika Mehta<br><br>Punch Id : 0</td>

										<td>9877656453</td>

										<td>Employee</td>

										<td>RS 15,000.00</td>

										<td>RS 0.00</td>

										<td>01-01-1970</td>

										<td>13-04-2019</td>

										<td align="center">

											<a href="editregister.html?act=edit&type=T0RRPQ==" title="Edit" onClick="return confirm('Do You Want To Edit This Record ?');"><i class="fa fa-edit"></i>

											</a>&nbsp;

                                            											<a href="registration.html?act=del&type=T0RRPQ==" title="Delete" onClick="return confirm('Do You Want To Delete This Record ?');">

												<i class="fa fa-trash"></i>

											</a>

                                                                                        <br><br><p><a target="_blank" href="Staff_IdCard.html?act=print&type=T0RRPQ==" onClick="return confirm('Do You Want To Print This Record ?');" title="Id Card Print"><i class="fa fa-print"></i>

											</a></p>

										</td>

									</tr>	

																		<tr>

										<td>5</td>

										<!--<td align="center"><img src="uploadfiles/abc962vedo_363.jpg" height="100" width="100" /></td>-->

										<td>Arti<br><br>Punch Id : 0</td>

										<td>9870192658</td>

										<td>Receptionist</td>

										<td>RS 20,000.00</td>

										<td>RS 0.00</td>

										<td>01-01-1988</td>

										<td>13-05-2019</td>

										<td align="center">

											<a href="editregister.html?act=edit&type=T0RNPQ==" title="Edit" onClick="return confirm('Do You Want To Edit This Record ?');"><i class="fa fa-edit"></i>

											</a>&nbsp;

                                            											<a href="registration.html?act=del&type=T0RNPQ==" title="Delete" onClick="return confirm('Do You Want To Delete This Record ?');">

												<i class="fa fa-trash"></i>

											</a>

                                                                                        <br><br><p><a target="_blank" href="Staff_IdCard.html?act=print&type=T0RNPQ==" onClick="return confirm('Do You Want To Print This Record ?');" title="Id Card Print"><i class="fa fa-print"></i>

											</a></p>

										</td>

									</tr>	

																		<tr>

										<td>6</td>

										<!--<td align="center"><img src="" height="100" width="100" /></td>-->

										<td>Deepak Verma <br><br>Punch Id : 0</td>

										<td>9988776650</td>

										<td>Trainer</td>

										<td>RS 15,000.00</td>

										<td>RS 1,000.00</td>

										<td>01-01-1970</td>

										<td>10-04-2019</td>

										<td align="center">

											<a href="editregister.html?act=edit&type=TnpRPQ==" title="Edit" onClick="return confirm('Do You Want To Edit This Record ?');"><i class="fa fa-edit"></i>

											</a>&nbsp;

                                            											<a href="registration.html?act=del&type=TnpRPQ==" title="Delete" onClick="return confirm('Do You Want To Delete This Record ?');">

												<i class="fa fa-trash"></i>

											</a>

                                                                                        <br><br><p><a target="_blank" href="Staff_IdCard.html?act=print&type=TnpRPQ==" onClick="return confirm('Do You Want To Print This Record ?');" title="Id Card Print"><i class="fa fa-print"></i>

											</a></p>

										</td>

									</tr>	

																		<tr>

										<td>7</td>

										<!--<td align="center"><img src="" height="100" width="100" /></td>-->

										<td>Jatin H Patel<br><br>Punch Id : 0</td>

										<td>9377245245</td>

										<td>Accountant</td>

										<td>RS 0.00</td>

										<td>RS 0.00</td>

										<td>01-01-1970</td>

										<td>05-04-2019</td>

										<td align="center">

											<a href="editregister.html?act=edit&type=TmpRPQ==" title="Edit" onClick="return confirm('Do You Want To Edit This Record ?');"><i class="fa fa-edit"></i>

											</a>&nbsp;

                                            											<a href="registration.html?act=del&type=TmpRPQ==" title="Delete" onClick="return confirm('Do You Want To Delete This Record ?');">

												<i class="fa fa-trash"></i>

											</a>

                                                                                        <br><br><p><a target="_blank" href="Staff_IdCard.html?act=print&type=TmpRPQ==" onClick="return confirm('Do You Want To Print This Record ?');" title="Id Card Print"><i class="fa fa-print"></i>

											</a></p>

										</td>

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