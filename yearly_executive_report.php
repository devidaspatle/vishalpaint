<?php
error_reporting(0);
include "includes/check_session.php";
include_once("includes/db_config.php");
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$application_no =  $_POST['application_no'];
if(empty($startdate))
{
$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member");
}
else
{
$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member WHERE date_of_join  BETWEEN '".$startdate."' AND '".$enddate."' ");

}
$totalExecutive =mysqli_num_rows($resultExecutive);

 $sqlg = "SELECT * FROM executive_member where  application_no = '".$application_no."'";

$resultQgl = mysqli_query($con, $sqlg); 
$rowQgl = mysqli_fetch_array($resultQgl);

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
    <script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js"></script>
    <script type="text/javascript" class="init">

$(document).ready(function() {
    var buttonCommon = {
        exportOptions: {
            format: {
                body: function ( data, row, column, node ) {
                    // Strip $ from salary column to make it numeric
                    return column === 5 ?
                        data.replace( /[$,]/g, '' ) :
                        data;
                }
            }
        }
    };

    $('#example').DataTable( {
       
        dom: 'Bfrtip',
        buttons: [
            $.extend( true, {}, buttonCommon, {
                extend: 'copyHtml5'
            } ),
            $.extend( true, {}, buttonCommon, {
                extend: 'excelHtml5'
            } ),
            $.extend( true, {}, buttonCommon, {
                extend: 'pdfHtml5'
            } )
        ]
    } );
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
<h2>Commissions Details </h2>
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

						<h2> Executive Report </h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span> Executive Report  &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>
					<section class="panel">	

						<div class="panel-body">

								<table id="example" class="table table-striped table-bordered" style="width:100%">

								<thead>

									<tr>
										<th align="center">Application No.</th>
										<th>Name</th>
										<th>Amount</th>
										<th>Bonus Point</th>
                                        <th>Total Amount</th>
										<th>Less TDS </th>
										<th>Total</th>
										<th>Percent %</th>
									</tr>

								</thead>

								<tbody>

									<?php
									
									  while($rowExecutive = mysqli_fetch_array($resultExecutive)) 
									  { 
									$name_of_applicant =  ucfirst($rowExecutive['firstName']).' '.ucfirst($rowExecutive['middleName']).' '.ucfirst($rowExecutive['lastName']);

									?>
										<tr>

										<td align="center"><?php echo $rowExecutive['application_no'];?></td>

										<td><?php 
										if($rowExecutive['application_no']==1001)
										  {
											echo "Bhoyarnath Mutual Nidhi Limited";
										  }
										else
										  {
											echo $name_of_applicant;
										  }
										?></td>

										<td><?php echo $rowExecutive['exe_payment'];?></td>

										<td><?php echo $rowExecutive['bonus_point'];?></td>
									 
										<td><?php echo $total = $rowExecutive['exe_payment'] + $rowExecutive['bonus_point'];?></td>
                                         <td><?php echo $rowExecutive['tds'];?></td>
                                        <td><?php echo $rowExecutive['tds'];?></td>

										<td><?php echo $rowExecutive['percent_payment'];?></td>
									</tr>
								<?php } ?>		
                               
                                     
								</tbody>
                               <?php if(!empty($totalExecutive)){?>							
									<tr>
										<td colspan="7" align="right"><b>Total Payment</b></td>
									
										<td><b><?php 
										$sum = 0;
										$sum1 =0;
										if(empty($startdate))
											{
											$resultExecutives = mysqli_query($con, "SELECT * FROM executive_member");
											}
											{
											$resultExecutives = mysqli_query($con, "SELECT * FROM executive_member WHERE  date_of_join  BETWEEN '".$startdate."' AND '".$enddate."' ");
											
											}
										while($row = mysqli_fetch_assoc($resultExecutives))
										{ 
										$sum += $row['exe_payment'];
										$sum1 += $row['bonus_point'];
										}
											echo $total = $sum + $sum1;
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




<script type="text/javascript" class="init">	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>


	</body>

</html>