<?php 
error_reporting(0);
include_once("includes/db_config.php");
require_once('includes/check_session.php'); 

$user_id = $_SESSION['rsoftId'];

 $applicationno = $_POST['customerId'];

$name = explode(" ", $applicationno);
$fname = $name['0'];
$mname = $name['1'];
$lname = $name['2'];
//echo "SELECT * FROM loan_application where  where firstname =  '".$fname."' and middlename = '".$mname."' and lastname = '".$lname."'";
//die;
$resultCustomerLoan = mysqli_query($con, "SELECT * FROM loan_application where   firstname =  '".$fname."' and middlename = '".$mname."' and lastname = '".$lname."'");
$totalCustomerLoan = mysqli_num_rows($resultCustomerLoan);
$rowCustomerLoan = mysqli_fetch_array($resultCustomerLoan);
 $application_no = $rowCustomerLoan['application_no'];

$resultCustLoan = mysqli_query($con, "SELECT * FROM loan_application");

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

		<script src="assets/vendor/modernizr/modernizr.js"></script>

		<!-- Head Libs -->		

        

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
<style type="text/css">

    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("loan-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

<?php include "left.php"; ?>

				<!-- end: sidebar -->



				<section role="main" class="content-body">

					<header class="page-header">

						<h2>Loan Installment</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

								<li><span>Loan Installment &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

					<form id="form" method="POST" class="form-horizontal" >

							<div class="panel-body">

								<div class="col-md-2">&nbsp;</div>									

																

								<div class="col-md-12">

									<div class="form-group col-sm-12">

										<label class="col-sm-4 control-label">Customer Name <span class="required">*</span></label>
											<div class="col-sm-4">
												<select id="customerId" name="customerId" class="form-control" required>
												<option value="">Select Loan Customer Name </option>
                                              
                                                 <?php 
												while($rowExecutive = mysqli_fetch_array($resultCustLoan))
												{
												$name_of_applicant =	$rowExecutive['firstname'].' '.$rowExecutive['middlename'].' '.$rowExecutive['lastname']
												?>
									<option value="<?php echo $name_of_applicant;?>"><?php echo ucwords($name_of_applicant);?></option>	
												<?php }?>
											</select>
										</div>
										<!--div class="col-sm-4">
                                          <input type="text" name="customerId" id="customerId" autocomplete="off" placeholder="Search Customer Name..."  class="form-control"/>
                                            <div class="result"></div>
											

										</div-->
								<div class="col-md-4"><button type="submit" class="btn btn-warning">Search</button>	

											
											
										</div>
		
									</div>
															

								</div>

							</div>	

						</form>
						<div>&nbsp;</div>
</div>
				
					<div class="col-md-12" style="background-color:#FFFFFF">
							
							<form id="form"  method="POST" action="loan_installment_code.php" class="form-horizontal" onSubmit="disable();">
							<input type="hidden" name="customer_id" id="customer_id"  value="<?php echo $application_no;?>" />
								<section class="panel" style="background-color:#FFFFFF">

									<header class="panel-heading">

										<h2 class="panel-title">Loan Installment</h2>

									</header>

									<div class="panel-body" style="background-color:#FFFFFF">

										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">First Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="firstName" id="firstName" maxlength="100" 
                                                class="form-control" required  value="<?php echo $rowCustomerLoan['firstname'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Middle Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="middleName" id="middleName"  maxlength="100" class="form-control" required value="<?php echo $rowCustomerLoan['middlename'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Last Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="lastName" id="lastName" maxlength="100" class="form-control" required  value="<?php echo $rowCustomerLoan['lastname'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City<span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="city" id="city" maxlength="100" class="form-control"  required value="<?php echo $rowCustomerLoan['present_city'];?>" />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Email </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-envelope"></i>

													</span>

													<input type="email"  name="emailid" id="emailid"  onChange="check_mail_id()" maxlength="100" class="form-control" value="<?php echo $rowCustomerLoan['emailid'];?>"  /><!--required-->

												</div>



											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Phone </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-phone"></i>

													</span>

													<input type="text" name="mobile_number" id="mobile_number"  maxlength="12" class="form-control"   value="<?php echo $rowCustomerLoan['phone'];?>" />

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
									
 <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Payment Mode <span class="required">*</span></label>

											<div class="col-sm-8">

											<select id="payment_mode" name="payment_mode" class="form-control" required>
													<option value="">Select</option>
                                                    <option value="1">Cash</option>
													<option value="2">Chaque </option>
                                                    <option value="3">DD</option>
												</select>
												<span class="red" id="err_emptype"></span>

											</div>

										</div>


										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Mode Number </label>

											<div class="col-sm-8">

												
											<input type="text" name="payment_number" id="payment_number"  class="form-control"   value="" />
												<span class="red" id="err_emptype"></span>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Loan Installment(Rs)  <span class="required">*</span></label>

											<div class="col-sm-8">
											<input type="text" name="emi_installment" value="" id="emi_installment" maxlength="10" class="form-control" required  />

											</div>

										</div>	
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Month  <span class="required">*</span></label>

											<div class="col-sm-8">
											<select id="payment_month" name="payment_month" class="form-control" required onChange="document.cf.typ[1].checked=true">							                                                
													<?php
													$curmonth = date("F");
                                                    for($i = 1 ; $i <= 12; $i++)
                                                    {
                                                        $allmonth = date("F",mktime(0,0,0,$i,1,date("Y")))
                                                        ?>
                                                        <option value="<?php echo $i;?>" 
                                                        <?php
                                                        if($curmonth==$allmonth)
                                                        {
                                                            echo 'selected';
                                                        }
                                                        ?> 
                                                        >
                                                        <?php
                                                        echo date("F",mktime(0,0,0,$i,1,date("Y")));
                                                        //Close tag inside loop
                                                        ?>
                                                        </option>
                                                        <?php
                                                    }?></select>

											</div>

										</div>	
													
                                                    
                                               <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Interest (Rs.) <span class="required">*</span></label>

											<div class="col-sm-8">
											<input type="text" name="interest" value="" id="interest" maxlength="10" class="form-control" required  />

											</div>

										</div>		      
										 <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Principal (Rs.) <span class="required">*</span></label>

											<div class="col-sm-8">
											<input type="text" name="principal" value="" id="principal" maxlength="10" class="form-control" required />

											</div>

										</div>	
                                        
                                       						



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Date <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>

                                                 	<!--<input type="date" name="doj" id="doj" value="" autocomplete="off" maxlength="30" class="form-control">-->

													<input type="date" name="payment_date" id="payment_date" maxlength="30" required  class="form-control">

												</div>

												<span class="red" id="err_doj"></span>

											</div>

										</div>
										



									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>

												<button type="reset" class="btn btn-default">Reset</button>


												<button type="button" onClick="window.location.href='executive_master.php'" name="" class="btn btn-default">Back</button>

											</div>

										</div>

									</footer>

								</section>

							</form>
					
						</div>


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

		<script src="assets/javascripts/custom.js"></script>

		

		<script src="assets/javascripts/ajaxupload.3.5.js"></script>

		

      

	</body>

</html>