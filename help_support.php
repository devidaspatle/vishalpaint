

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

		<script src="assets/vendor/modernizr/modernizr.js"></script>

		<!-- Head Libs -->		

         <script>

        	function disable(){//alert("dgtdfr");

				//document.getElementById('save').disabled = true;

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

						<h2>Help and Support</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

								<li><span>Help and Support&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

														<form id="form"  method="POST" class="form-horizontal" onSubmit="disable();">

							

                            	

                                <div class="col-md-12">

							<section class="panel">

								<header class="panel-heading" style="background-color:#171717">

									<h2 class="panel-title" style="color:#FFFFFF" align="center">Help and Support</h2>

								</header>

                                <div class="col-md-12">&nbsp;</div>

                                    <div class="col-md-12 col-lg-6 col-xl-6">

                                        <section class="panel panel-featured-left panel-featured-quaternary">

                                            <div class="panel-body">

                                                <div class="widget-summary">

                                                    

                                                    <div class="widget-summary-col">

                                                        <div class="summary">

                                                         <a style="float :left;"><img height="70" width="70" src="assets/images/member.png" alt="Customer Care"></a>

                                                          

                                                             <div class="info" style="text-align: center">

                                                                 <h1 class="title" style="font-size:26px; line-height: 34px;"><b>Customer Care</b></h1>

                                                                <strong class="amount">+91-9579010026</strong>

                                                             

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </section>

                                    </div>

									 <div class="col-md-12 col-lg-6 col-xl-6">

                                        <section class="panel panel-featured-left panel-featured-tertiary">

                                            <div class="panel-body">

                                                <div class="widget-summary">

                                                    

                                                    <div class="widget-summary-col">

                                                        <div class="summary">

                                                              <a style="float :left;"><img height="70" width="70" src="assets/images/member12.PNG" alt="Live Support"></a>

                                                             <div class="info" style="text-align: center">

                                                              

                                                                <h4 class="title" style="font-size:26px; line-height: 34px;"><b>Live Support</b></h4>

                                                                <strong class="amount">+91-9579010026 </strong>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </section>

                                    </div>

							</section>

						</div>

                             <div class="col-md-12">

                            &nbsp;

                            </div>

                         

                               <div class="col-md-12 col-lg-12 col-xl-12">

                                

                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12">

							<section class="panel">

								<div class="panel-body" style="border:1px solid #999999;">

									<div class="row">

										<div class="col-lg-12">

                                            <header class="panel-heading" style="background-color:#171717;">

                                                <h2 class="panel-title" style="color:#FFFFFF;" align="center">Sales</h2>

                                            </header>

                                            <div class="col-md-12">&nbsp;</div>

                                            <table class="table table-bordered table-striped mb-none">

                                     <tbody>

                                                                                                 <tr>

                                                             <td>+91 9579010026 ( Nagpur )</td>

                                                   

                                                        </tr>

                                                               

                                                                                                               </tbody>

                                              </table>

										</div>

									</div>

								</div>

							</section>

						</div>

                                

                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12">

							<section class="panel">

								<div class="panel-body" style="border:1px solid #999999;">

									<div class="row">

										<div class="col-lg-12">

                                            <header class="panel-heading" style="background-color:#171717;">

                                                <h2 class="panel-title" style="color:#FFFFFF;" align="center">Support</h2>

                                            </header>

                                            <div class="col-md-12">&nbsp;</div>

                                            <table class="table table-bordered table-striped mb-none">

                                     <tbody>

                          

                                                                                                            <tr>

                                                             <td>+91 9579010026</td>

                                                   

                                                        </tr>

                                                        

                                                                                                                                </tbody>

                                              </table>

										</div>

									</div>

								</div>

							</section>

						</div>

                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12">

							<section class="panel">

								<div class="panel-body" style="border:1px solid #999999;">

									<div class="row">

										<div class="col-lg-12">

                                            <header class="panel-heading" style="background-color:#171717;">

                                                <h2 class="panel-title" style="color:#FFFFFF;" align="center">Billing</h2>

                                            </header>

                                            <div class="col-md-12">&nbsp;</div>

                                            <table class="table table-bordered table-striped mb-none">

                                     <tbody>

                                                                                                            <tr>

                                                               <td>+91 9579010026</td>

                                                   

                                                        </tr>

                                                                                                                            </tbody>

                                              </table>

										</div>

									</div>

								</div>

							</section>

						</div>

                        </div>

                           <div class="col-md-12">

                            &nbsp;

                            </div>

                              <div class="col-md-12">

                              <div class="row">

                                <div class="col-md-6">

                        

                            	<h3><b>Head Office :</b> Nagpur </h3>

								

                          

                            </div>

                              <div class="col-md-6">

                              <h3><b>Working hour :</b> 09:00am - 08:00pm </h3>

								<h3><b>Email Address :</b> contact@test.in</h3>

                              </div>

                                </div>

                                </div>

                           </form>

						</div>

                        </div>

					<!-- end: page -->

		</section>

 </div>





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

		<script src="assets/javascripts/custom.js"></script>

		

		<script src="assets/javascripts/ajaxupload.3.5.js"></script>

	

	</body>

</html>