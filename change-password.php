
<?php 

error_reporting(0);
include "includes/check_session.php";
include_once("includes/db_config.php");
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



		<!-- Head Libs -->

		<script src="assets/vendor/modernizr/modernizr.js"></script>

		 <script src="assets/javascripts/ajaxupload.3.5.js"></script>

		 <script type="text/javascript">

		 	function check_match()

		 	{

		 		var np = document.getElementById('newpass').value;

		 		var cp = document.getElementById('conpass').value;

		 		if (np != cp)

		 		{

		 			document.getElementById('err_newpass').innerHTML="Password Must Match.";

		 			document.getElementById('newpass').style.border="1px solid #a94442";

					document.getElementById('conpass').style.border="1px solid #a94442";

		 			return false;

		 		}

		 	}

		 	function check_pass(val)

		 	{

		 		var eid=document.getElementById('edit_id').value;



		 		if (val==='')

		 		{

		 			return false;

		 		}

	           	var httpxml;

	           

	           	try

	           	{

	              	// Firefox, Opera 8.0+, Safari

	              	httpxml=new XMLHttpRequest();

	           	}

	           	catch (e)

	           	{

	              	// Internet Explorer

	              	try

	              	{

	                 	httpxml=new ActiveXObject("Msxml2.XMLHTTP");

	              	}

	              	catch (e)

	              	{

	                 	try

	                 	{

	                    	httpxml=new ActiveXObject("Microsoft.XMLHTTP");

	                 	}

	                 	catch (e)

	                 	{

	                    	alert("Your browser does not support AJAX!");

	                    	return false;

	                 	}

	              	}

	           	}

	           	function stateck() 

	           	{

	              	if(httpxml.readyState==4)

	              	{

	                	var rsponse=httpxml.responseText;

	                	if (rsponse=="no")

	                	{

	                		document.getElementById('oldpass').style.border = "1px solid #a94442";

							document.getElementById('oldpass').focus();

							document.getElementById('oldpass').value='';

							document.getElementById('err_oldpass').innerHTML="Wrong Password. Please Try Again.";

	                	}

	                	else

	                	{

	                		document.getElementById('oldpass').style.border = "";

	                		document.getElementById('err_oldpass').innerHTML='';

	                	}

	              	}

	           	}  

	           

	           	var url="action_layer.html";

	           	url=url+"?action=check_pass&id="+eid+"&val="+val;

	           	//alert(url);

	           	httpxml.onreadystatechange=stateck;

	           	httpxml.open("GET",url,true);

	           	httpxml.send(null);

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

						<h2>Change Password</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Change Password&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

													

							<form id="form" action="" method="POST" class="form-horizontal" onSubmit="return check_match()">

								

                                <input type="hidden" name="edit_id" id="edit_id" value="Tnc9PQ==" />

                                <section class="panel">

									<header class="panel-heading">

										<h2 class="panel-title">Change Password</h2>

									</header>

									<div class="panel-body">

										<div class="form-group col-sm-12">

											<label class="col-sm-4 control-label">Old Password <span class="required">*</span></label>

											<div class="col-sm-6">

												<input type="password" name="oldpass" id="oldpass" class="form-control" required onChange="check_pass(this.value);"/>

												<span class="required" id="err_oldpass"></span>

											</div>

										</div>

										<div class="form-group col-sm-12">

											<label class="col-sm-4 control-label">New Password <span class="required">*</span></label>

											<div class="col-sm-6">

												<input type="password" name="newpass" id="newpass" class="form-control" required/>

												<span class="required" id="err_newpass"></span>

											</div>

										</div>

										<div class="form-group col-sm-12">

											<label class="col-sm-4 control-label">Confirm Password <span class="required">*</span></label>

											<div class="col-sm-6">

												<input type="password" name="conpass" id="conpass" class="form-control" required/>

												<span class="required" id="err_conpass"></span>

											</div>

										</div>

									</div>

									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-6 col-sm-offset-3">

												<button type="submit" name="update" class="btn btn-warning">Update</button>

												<button type="reset" class="btn btn-default">Reset</button>

											</div>

										</div>

									</footer>

								</section>

							</form>

						</div>

					</div>

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

	</body>

</html>