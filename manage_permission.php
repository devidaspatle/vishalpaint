<?php
include_once("includes/check_session.php");
include_once("includes/db_config.php");
$resultPermission = mysqli_query($con, "SELECT * FROM user_permission where currentStatus = 'Y'");
$totalPermission =mysqli_num_rows($resultPermission);

$sqlg = "SELECT * FROM menus where  currentStatus  = 'Y'";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_num_rows($resultQgl);

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

						<h2>Manage Permission</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Manage Permission &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>

					<!-- start: page -->

					<section class="panel">	

					
							<div class="col-md-12">
							
							<form id="form"  method="POST" action="user_permission_code.php" class="form-horizontal" onSubmit="disable();">
							<input type="hidden" name="member_type"   value="0" />
								<section class="panel">

									<header class="panel-heading">

										<h2 class="panel-title">User Permission</h2>

									</header>

									<div class="panel-body">
								<div class="form-group col-sm-4">

										<label class="col-sm-4 control-label">Group <span class="required">*</span></label>

											<div class="col-sm-8">
										<select id="group_id" name="group_id" class="form-control">
												<option value="">Select Menu</option>
                                                 <option value="1">Admin</option>
                                                  <option value="2">Employee</option>
                                                </select>												
                                                <span class="red" id="err_gymname"></span>

											</div>
 
										</div>
										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Menu <span class="required">*</span></label>

											<div class="col-sm-8">
												<select id="menu_id" name="menu_id[]" class="form-control" multiple>
												<option value="">Select Menu</option>
                                                 <?php 
												while($rowMenu = mysqli_fetch_array($resultQgl))
												{
												?>
												<option value="<?php echo $rowMenu['id'];?>"><?php echo $rowMenu['menu_name'];?></option>	
												<?php }?>
											</select>
											<span class="red" id="err_gymname"></span>

											</div>

										</div>
                                        <div class="form-group col-sm-2">

												<button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>

												<button type="reset" class="btn btn-default">Reset</button>
 
										</div>
                                        </div>
								

								</section>

							</form>
				
						</div>

						

						<div class="panel-body">

    
<table id="example" class="table table-striped table-bordered" style="width:100%">

								<thead>

									<tr>										
										<th>Sr. No.</th>
										<th>Group Name</th>
										<th>Menu Name</th>										
                                        <th>User</th>
									</tr>

								</thead>

								<tbody>

									<?php
									 $i = 1;
									  while($rowPermission = mysqli_fetch_array($resultPermission)) 
									  { 
									    $userid = $rowPermission['user_id'];
									    $resultlogo=mysqli_query($con, "select * from users  where id = '".$userid."'");
										$rowlogo = mysqli_fetch_array($resultlogo);
										$user_id = $rowlogo['userName'];
									?>
										<tr>
										<td><?php echo $i++;?></td>

										<td align="center">
										<?php 
										if($rowPermission['group_id']==1)
										{
										echo "Admin";
										}
										if($rowPermission['group_id']==2)
										{
										echo "Employee";
										}
										?></td>
										<td style="padding-left:10px;">
										<?php 
										$sqlges = "SELECT * FROM menus where  currentStatus  = 'Y'";
										$resultQgls = mysqli_query($con, $sqlges); 
										$menuid = $rowPermission['menu_id'];
										$array =  explode(',', $menuid);
										foreach ($array as $item) {
											 $sqlges = "SELECT * FROM menus where  id  = '".$item."'";
											 $resultQgls = mysqli_query($con, $sqlges); 
											 $menuname = mysqli_fetch_array($resultQgls);
											 $menu_name = $menuname['menu_name'];
											 echo "<li>$menu_name</li>";
										}
										?></td>

									<td><?php echo $user_id; ?> </td>

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
		
		<script type="text/javascript" class="init">	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>



	</body>

</html>