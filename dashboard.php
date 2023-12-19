<?php
include "includes/check_session.php";
include_once("includes/db_config.php");
$resultCustomer = mysqli_query($con, "SELECT * FROM customer_registration");
$totalCustomer =mysqli_num_rows($resultCustomer);

$resultEmployees = mysqli_query($con, "SELECT * FROM employee_registration");
 $totalEmployees =mysqli_num_rows($resultEmployees);

 $resultExecutive = mysqli_query($con, "SELECT * FROM executive_member where member_type ='Y'");
 $totalExecutive =mysqli_num_rows($resultExecutive);

 $resultLoan = mysqli_query($con, "SELECT * FROM loan_application");
 $totalLoan =mysqli_num_rows($resultLoan);
?>
<!doctype html>
<html class="fixed">
    <head>
        <!-- Head Libs -->
        <script src="assets/vendor/modernizr/modernizr.js"></script>
<!-- Basic -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BHOYARNATH | Mutual Nidhi Limited</title>
        
        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="assets/vendor//bootstrap-datepicker/css/bootstrap-datepicker3.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.theme.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="assets/vendor/morris.js/morris.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

        <!-- Head Libs -->
        <script src="assets/vendor/modernizr/modernizr.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
 
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"/>
   
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
 
<style>
    
    .whit
    {
        color: white;
    }

    .widget-summary .summary .amount {
    margin-right: .2em;
    font-size: 14px;
    /* font-size: 15px; */
    font-weight: 600;
    color: #333;
    vertical-align: middle;
    text-align: -webkit-center;

}


.widget-summary .widget-summary-col {
    display: table-cell;
    vertical-align: center;
    width: 100%;
   
}

.bg-primary {
    background: #0088cc;
    display: inline-block;
}

.bg-secondary {
    background: #E36159;
    color: #FFF;
   
    display: inline-block;
}

.bg-tertiary {
    background: #2BAAB1;
    color: #FFF;
   display: inline-block;
}
.bg-quaternary {
    background: #734BA9;
    color: #FFF;
   display: inline-block;
}


.widget-summary {
    /* display: table; */
    width: 100%;
}

.widget-summary .summary-icon {
    margin-right: 0px;
    font-size: 4.2rem;
    width: 90px;
    height: 90px;
    line-height: 90px;
    text-align: center;
    color: #fff;
    -webkit-border-radius: 55px;
    border-radius: 55px;
}

.widget-summary .widget-summary-col {
    display: initial;
    vertical-align: top;
    width: 100%;
}

.panel-body {
    padding: 0px;
}

.panel-heading
{
background-color:#03486B
}
.table.mb-none {
    margin-bottom: 0 !important;
    background-color: white;
}

.panel-title {
    color: #33353F;
    font-size: 20px;
    font-weight: 400;
    line-height: 20px;
    padding: 0;
    text-transform: none;
    color: #FFFFFF;
    text-align: center;
}
.panel-body.block1 .widget-summary {
    text-align: center;
}
td {
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
}

.block
    {
        padding:20px 10px;
    }
    strong.amount {
    padding-left:10px;
    position:absolute; 
    top:20px; 
    text-align:left !important; 
    color:white !important;
}
.widget-summary h4.amount {
    padding-top: 10px;
}
@media(max-width:1140px) {
.table-responsive td, .table-responsive th {
font-size: 10px;
}
}
@media(min-width:991px) {
.table-responsive {
    overflow-x: unset;
}
}
</style>
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
@media  only screen and (min-width: 768px) {
.top_head {
 display:block;
}
}
@media  only screen and (min-width: 768px) and (max-width:1100px) {
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

@media  only screen and (max-width: 767px) {
.top_head {
     display:none;
}
}
</style>  
    </head>
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


@media  only screen and (min-width: 768px) {
.menu_not {
 display:none;
}
}

@media  only screen and (max-width: 767px) {
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
        <h2>Dashboard</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="assets/home">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span style="margin-right:20%">Dashboard&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
            </ol>
        </div>
    </header>

    <!-- start: page -->

    <div class="row">
        <div class="col-md-12">
            <section class="panel" align="center">
                 <div class="col-md-3 col-lg-3 col-xl-3">
                    <section class="panel">
                        <div class="panel-body block1">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-tertiary">
                                        <?php echo $totalCustomer; ?>
                                    </div>
                                    <div class="widget-summary-col">

                                        <!--    <h4 class="title">&nbsp;</h4>-->
                                        <div class="info">
                                            <strong><h4 class="amount"><b>Total Customer</b></h4>
                                                            </strong>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <section class="panel">
                        <div class="panel-body block1">

                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">

                                    <div class="summary-icon bg-primary">
                                        <?php echo $totalExecutive; ?>
                                    </div>
                                    <div class="widget-summary-col">

                                        <!--<h4 class="title">&nbsp;</h4>-->
                                        <div class="info" align="center">
                                            <strong><h4 class="amount"><b>Total Executive </b></h4>
                                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <section class="panel">
                        <div class="panel-body block1">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-secondary">
                                     <?php echo $totalEmployees; ?>
 </div>
                                    <div class="widget-summary-col">

                                        <!--<h4 class="title">&nbsp;</h4>-->
                                        <div class="info">
                                            <strong><h4 class ="amount"><b>Total Employees</b></h4></strong>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
               
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <section class="panel">
                        <div class="panel-body block1">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-quaternary">
                                        <?php echo $totalLoan; ?>

                                         </div>
                                    <div class="widget-summary-col">

                                        <!--     <h4 class="title">&nbsp;</h4>-->
                                        <div class="info">
                                            <strong><h4 class="amount"><b>Total   Loan Application</b></h4></strong>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="panel">

                    <div class="col-sm-12">
                        <header class="panel-heading" style="background-color:black">
                            <h2 class="panel-title" style="color:#FFFFFF" align="center">Quick Links</h2>
                        </header>
                    </div>

                    <div class="col-md-12">&nbsp;</div>
                   

                    <a href="create_customer_registration.php">
                        <div class="col-md-12 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-secondary">
                                <div class="panel-body block" style="background-color:#0088CC;">
                                    <div class="widget-summary">

                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <!-- <h4 class="title">&nbsp;</h4>-->
                                                <div class="info">
                                                    <div class=col-xs-4>
                                                        <div class="row">
                                                            <img height="70" width="70" src="assets/images/member.png" alt="member">
                                                        </div>
                                                    </div>
                                                    <div class=col-xs-8>
                                                        <div class="row">
                                                            <strong class="amount">Customer Registration
                                                                </strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </a>
                    <a href="loan_application.php">
                        <div class="col-md-12 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-tertiary">
                                <div class="panel-body block" style="background-color:#03486B;">
                                    <div class="widget-summary">

                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <!--<h4 class="title">&nbsp;</h4>-->
                                                <div class="info">
                                                    <div class="info">
                                                        <div class=col-xs-4>
                                                            <div class="row">
                                                                <img height="70" width="70" src="assets/images/employee.png" alt="employee">
                                                            </div>
                                                        </div>
                                                        <div class=col-xs-8>
                                                            <div class="row">
                                                                <strong class="amount">
                                                                        Loan Application</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </a>
                    <a href="installment.php">
                        <div class="col-md-12 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-quaternary" style="border-color: #03486b;">
                                <div class="panel-body block" style="background-color:#e36159;">
                                    <div class="widget-summary">

                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <!--         <h4 class="title">&nbsp;</h4>-->
                                                <div class="info">
                                                    <div class="info">
                                                        <div class=col-xs-4>
                                                            <div class="row">
                                                                <img height="70" width="70" src="assets/images/member12.png" alt="payment">
                                                            </div>
                                                        </div>

                                                        <div class=col-xs-8>
                                                            <div class="row">
                                                                <strong class="amount">
                                                                    Installment</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </a>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <section class="panel">
                    <div class="panel-body" style="border:1px solid #999999;height:max-content;">
                        <div class="row">
                            <div class="col-lg-12">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Executive </h2>
                                </header>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-none">

                                        <tbody>
                                            <thead>
                                            <tr>
                                                <th>Application No.</th>
                                                <th>Name </th>
                                                <th>Mobile No.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i =1; 
											$resultExecutives = mysqli_query($con, "SELECT * FROM executive_member  ORDER BY id DESC LIMIT 0, 3");
                                           while ($rowExecutive = mysqli_fetch_array($resultExecutives)) {
                                            $name_of_applicant =  ucfirst($rowExecutive['firstName']).' '.ucfirst($rowExecutive['middleName']).' '.ucfirst($rowExecutive['lastName']);
                                            ?>
                                             <tr>
                                                <td align="center"><?php echo $rowExecutive['application_no'];?></td>

                                                <td><?php echo $name_of_applicant;?></td>

                                                <td><?php echo $rowExecutive['mobile_number'];?></td>
                                            </tr>
                                          <?php  $i++; }?>
                                           
                                             <tr>
                                                <td align="center" colspan="5">
                                                    <a class="btn btn-primary" href="manage_executive.php">View More</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

           

            <div class="col-md-6 col-lg-6 col-xl-6">
                <section class="panel">
                    <div class="panel-body" style="border:1px solid #999999">
                        <div class="row">
                            <div class="col-lg-12">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Customer Registration </h2>
                                </header>
                               
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-none">
                                        <thead>
                                            <tr>
                                                <th>Application No.</th>
                                                <th>Name </th>
                                                <th>Mobile No.</th>
                                                <th>Amount </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i =1; 
											
											$sqlg = "SELECT * FROM customer_installment  ORDER BY id DESC LIMIT 0, 3";
											$resultCustomers = mysqli_query($con, $sqlg); 
											
                                           while ($rownum  = mysqli_fetch_array($resultCustomers)) {
										   $application_no = $rownum['application_no'];
										    $sqlgs = "SELECT * FROM customer_registration where application_no = '".$application_no."'";
											$resultQgl = mysqli_query($con, $sqlgs); 
											$rowCustomer = mysqli_fetch_array($resultQgl);
										   
                                            $name_of_applicant =  ucfirst($rowCustomer['firstName']).' '.ucfirst($rowCustomer['middleName']).' '.ucfirst($rowCustomer['lastName']);
                                             
                                            ?>
                                             <tr>
                                              
                                                <td align="center"><?php echo $rowCustomer['application_no'];?></td>

                                                <td><?php echo $name_of_applicant;?></td>

                                                <td><?php echo $rowCustomer['mobile_number'];?></td>

                                                <td><?php echo $rownum['payment_price'];?></td>
                                            </tr>
                                          <?php  $i++;}?>
                                                                 
                                            <tr>
                                                <td align="center" colspan="5">
                                                    <a class="btn btn-primary" href="manage_customer.php">View More</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>

        <div class="row">
             <div class="col-md-6 col-lg-6 col-xl-6">
                <section class="panel">
                    <div class="panel-body" style="border:1px solid #999999;height:max-content;">
                        <div class="row">
                            <div class="col-lg-12">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Loan Application</h2>
                                </header>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-none">
                                       <thead>
                                            <tr>
                                                <th>Name </th>
                                                <th>Mobile No.</th>
                                                <th>Loan Amount </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1;
											$now = new DateTime();
											$dateofbirth = $now->format('Y-m-d');
                                            $resultCustomerss = mysqli_query($con, "SELECT * FROM loan_application  ORDER BY id DESC LIMIT 0, 3");
                                           while($rowCustomerss = mysqli_fetch_array($resultCustomerss)) {
                                            $name_of_applicantss =  ucfirst($rowCustomerss['firstname']).' '.ucfirst($rowCustomerss['middlename']).' '.ucfirst($rowCustomerss['lastname']);
                                           
                                            ?>
                                             <tr>    
                                                <td><?php echo $name_of_applicantss;?></td>
                                                <td><?php echo $rowCustomerss['phone'];?></td>
                                                <td><?php 
												echo $rowCustomerss['loan_amount'];
												
												?>
												</td>
                                            </tr>
                                          <?php  $i++;}?>
                                                               
                                          

                                             <tr>
                                                <td align="center" colspan="5">
                                                    <a class="btn btn-primary" href="manage_birthday.php">View More</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6">
                <section class="panel">
                    <div class="panel-body" style="border:1px solid #999999;">
                        <div class="row">
                            <div class="col-lg-12">
                                <header class="panel-heading">
                                    <h2 class="panel-title"> Due Installment Payment</h2>
                                </header>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-none">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Mobile No.</th>
                                                <th>Month </th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i =1;
                                            $resultCustomers = mysqli_query($con, "SELECT * FROM customer_registration ORDER BY id DESC LIMIT 0, 3");
                                           while ($rowCustomers = mysqli_fetch_array($resultCustomers)) {
                                            $name_of_applicants =  ucfirst($rowCustomers['firstName']).' '.ucfirst($rowCustomers['middleName']).' '.ucfirst($rowCustomers['lastName']);
                                            ?>
                                             <tr>    
                                                <td><?php echo $name_of_applicants;?></td>
                                                <td><?php echo $rowCustomers['mobile_number'];?></td>
                                                <td><?php echo $month = date('M');?></td>
                                                <td><?php echo $rowCustomers['plan_price'];?></td>
                                            </tr>
                                          <?php  $i++;}?>
                                           
                                                 <tr>
                                                <td align="center" colspan="3">
                                                    <a class="btn btn-primary" href="due_installment_payment.php">View More</a>
                                                </td>
                                            </tr>
                                           </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery-appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot.tooltip/flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris.js/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap.svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>

		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>
		<!-- Theme Custom -->

		<script src="assets/javascripts/theme.custom.js"></script>
		<!-- Theme Initialization Files -->

		<script src="assets/javascripts/theme.init.js"></script>

		<!-- Examples -->

		<script src="assets/javascripts/forms/examples.validation.js"></script>
	
		<script src="assets/javascripts/ajaxupload.3.5.js"></script>
		<script src="assets/javascripts/custom.js"></script>

	
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    </body>
</html>