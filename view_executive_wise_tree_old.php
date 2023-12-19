<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link href="http://www.expertphp.in/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="http://demo.expertphp.in/css/jquery.treeview.css" />
    <script src="http://demo.expertphp.in/js/jquery.js"></script>   
    <script src="http://demo.expertphp.in/js/jquery-treeview.js"></script>
    <script type="text/javascript" src="http://demo.expertphp.in/js/demo.js"></script>

<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);

function createTreeView($array, $currentParent, $currLevel = 0, $prevLevel = -1) {

foreach ($array as $categoryId => $category) {

if ($currentParent == $category['parent_id']) {                       
    if ($currLevel > $prevLevel) echo '<ul id="browser" class="filetree">'; 

    if ($currLevel == $prevLevel) echo " </li> ";

    echo '<li class="tree-view closed"><a class="tree-name">'.ucwords($category['firstName']).ucwords($category['lastName']).'</li>';

    if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }

    $currLevel++; 

    createTreeView ($array, $categoryId, $currLevel, $prevLevel);

    $currLevel--;               
    }   

}

if ($currLevel == $prevLevel) echo " </li>  </ul> ";

}   
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

						<h2>View Network Tree</h2>

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>View Network Tree&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>

					<!-- start: page -->

					<section class="panel">

						

						<form id="form" method="post" class="form-horizontal" >

							<!--div class="panel-body">

								<div class="col-md-2">&nbsp;</div>									

																

								<div class="col-md-12">

									<div class="form-group col-sm-12">

										<label class="col-sm-4 control-label">Executive ID <span class="required">*</span></label>

										<div class="col-sm-4">

											<input type="text" placeholder="Executive ID" name="duration" id="duration" onKeyPress="return isNumber(event,'ration')" class="form-control digits" maxlength="15" required value="" />

											<span class="red" id="err_duration"></span>

										</div>
								<div class="col-md-4"><button type="submit" name="update" class="btn btn-warning">Search</button>	

											
											
										</div>
		
									</div>
															

								</div>

							</div-->	

						</form>

						<div>&nbsp;</div>

							<form id="form"  method="POST" class="form-horizontal" onSubmit="disable();">

								<section class="panel">

									<header class="panel-heading">

										<h2 class="panel-title">View Network Tree</h2>

									</header>

									<div class="panel-body">
                                    <ul>
										<?php

										$qry="SELECT * FROM executive_member";
										$result=mysqli_query($con, $qry);

										//$result=mysql_query($qry);

										$arrayCategories = array();
																					while($row = mysqli_fetch_assoc($result)){ 

										 $arrayCategories[$row['application_no']] = array("parent_id" => $row['parent_id'], "firstName" =>                       
										 $row['firstName'].' '.$row['middleName'].' '.$row['lastName']);   
										  }
										?>
<li class="tree-view closed"><a class="tree-name">										<?php
										if(mysqli_num_rows($result)!=0)
										{
										?>
										<?php 
										createTreeView($arrayCategories, 0); ?>
										<?php
										}
										?>
										</a></li>	</ul>									</div>

									
									</div>
										
									
								</section>

							</form>

					</section>

					<!-- end: page -->

				</section>

			</div>			

		</section>



		<!-- Vendor -->

			</body>

</html><?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);

class TreeController extends Controller {
   public function treeView(){       
        $qry="SELECT * FROM executive_member";
		$result=mysqli_query($con, $qry);
		$rows= mysqli_fetch_assoc($result);
        $tree='<ul id="browser" class="filetree"><li class="tree-view"></li>';
        foreach ($rows as $row) {
             $tree .='<li class="tree-view closed"<a class="tree-name">'.$row['firstName'].'</a>';
             if(count($row->childs)) {
                $tree .=$this->childView($row);
            }
        }
        $tree .='<ul>';
        // return $tree;
        return view('files.treeview',compact('tree'));
    }
    public function childView($row){                 
            $html ='<ul>';
            foreach ($row->childs as $arr) {
                if(count($arr->childs)){
                $html .='<li class="tree-view closed"><a class="tree-name">'.$arr->name.'</a>';                  
                        $html.= $this->childView($arr);
                    }else{
                        $html .='<li class="tree-view"><a class="tree-name">'.$arr->name.'</a>';                                 
                        $html .="</li>";
                    }
                                   
            }
            
            $html .="</ul>";
            return $html;
    }    
}   
?>
<!doctype html>

<html class="fixed">

	<head>

	

		<meta charset="utf-8">

	

		<!-- Basic -->

		 <title>BHOYARNATH | Mutual Nidhi Limited</title>

		<link rel="stylesheet" type="text/css" href="style.css" media="screen">

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
    <link href="http://www.expertphp.in/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="http://demo.expertphp.in/css/jquery.treeview.css" />
    <script src="http://demo.expertphp.in/js/jquery.js"></script>   
    <script src="http://demo.expertphp.in/js/jquery-treeview.js"></script>
    <script type="text/javascript" src="http://demo.expertphp.in/js/demo.js"></script>
<?php include "left.php"; ?>

				<!-- end: sidebar -->

				<section role="main" class="content-body">

					<header class="page-header">

						<h2>View Executive Wise Tree</h2>

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>View Executive Wise Tree&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>

					<!-- start: page -->

					<section class="panel">

						<div>                                    <ul>										<?php

								 $qry="SELECT * FROM executive_member where  application_no = '".$_POST['application_no']."' ";

										$result=mysqli_query($con, $qry);

										//$result=mysql_query($qry);

										$arrayCategories = array();

										while($row = mysqli_fetch_assoc($result)){ 

										 $arrayCategories[$row['id']] = array("parent_id" => $row['parent_id'], "firstName" =>                       
										 $row['firstName'].' '.$row['middleName'].' '.$row['lastName']);   
										  }
										?>
									<li class="tree-view closed"><a class="tree-name">
										<?php
										if(mysqli_num_rows($result)!=0)
										{
										?>
										<?php 
										createTreeView($arrayCategories, 0); ?>
										<?php
										}
										?></a>
										</li>

</ul><</div>

						<form id="form" method="post" class="form-horizontal" >

							<div class="panel-body">

								<div class="col-md-2">&nbsp;</div>									

																

								<div class="col-md-12">

									<div class="form-group col-sm-12">

										<label class="col-sm-4 control-label">Executive ID <span class="required">*</span></label>

										<div class="col-sm-4">

											<input type="text" placeholder="Executive ID" name="application_no" id="application_no" onKeyPress="return isNumber(event,'ration')" class="form-control digits" maxlength="15" required value="" />

											<span class="red" id="err_duration"></span>

										</div>
								<div class="col-md-4"><button type="submit" name="update" class="btn btn-warning">Search</button>	

											
											
										</div>
		
									</div>
															

								</div>

							</div>	

						</form>

						<div>&nbsp;</div>

							<form id="form"  method="POST" class="form-horizontal" onSubmit="disable();">

								<section class="panel">

									<header class="panel-heading">

										<h2 class="panel-title">View Executive Wise Tree</h2>

									</header>

									<div class="panel-body">
                                    <ul>										<?php

								 $qry="SELECT * FROM executive_member where  application_no = '".$_POST['application_no']."' ";

										$result=mysqli_query($con, $qry);

										//$result=mysql_query($qry);

										$arrayCategories = array();

										while($row = mysqli_fetch_assoc($result)){ 

										 $arrayCategories[$row['id']] = array("parent_id" => $row['parent_id'], "firstName" =>                       
										 $row['firstName'].' '.$row['middleName'].' '.$row['lastName']);   
										  }
										?>
									<li class="tree-view closed"><a class="tree-name">
										<?php
										if(mysqli_num_rows($result)!=0)
										{
										?>
										<?php 
										createTreeView($arrayCategories, 0); ?>
										<?php
										}
										?></a>
										</li>

</ul></div>
										
									
								</section>

							</form>

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