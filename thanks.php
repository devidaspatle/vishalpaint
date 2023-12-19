    <?php
    define("DB_HOST", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "bhoyarnath");
    $con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("Error : ");
    if(mysqli_connect_errno($con)) {
      echo "Failed to connect MySQL: " .mysqli_connect_error();
    } else {
      //If you want to export or backup the whole database then leave the $table variable as it is
      //If you want to export or backup few table then mention the names of the tables within the $table array like below
      //eg, $tables = array("wp_commentmeta", "wp_comments", "wp_options");
      $tables = array();
        $backup_file_name = DB_NAME.".sql";
        backup_database($con, $tables, $backup_file_name);
      }
    ?>
    <?php
    function backup_database($con, $tables = "", $backup_file_name) {
      if(empty($tables)) {
        $tables_in_database = mysqli_query($con, "SHOW TABLES");
        if(mysqli_num_rows($tables_in_database) > 0) {
          while($row = mysqli_fetch_row($tables_in_database)) {
            array_push($tables, $row[0]);
          }
        } 
      } else {
        // Checking for any table that doesn't exists in the database
        $existed_tables = array();
        foreach($tables as $table) {
          if(mysqli_num_rows(mysqli_query($con, "SHOW TABLES LIKE '".$table."'")) == 1) {
            array_push($existed_tables, $table);
          }
        }
        $tables = $existed_tables;
      }
      $contents = "--\n-- Database: `".DB_NAME."`\n--\n-- --------------------------------------------------------\n\n\n\n";
      foreach($tables as $table) {
        $result        = mysqli_query($con, "SELECT * FROM ".$table);
        $no_of_columns = mysqli_num_fields($result);
        $no_of_rows    = mysqli_num_rows($result);
        //Get the query for table creation
        $table_query     = mysqli_query($con, "SHOW CREATE TABLE ".$table);
        $table_query_res = mysqli_fetch_row($table_query);
        $contents .= "--\n-- Table structure for table `".$table."`\n--\n\n";
        $contents .= $table_query_res[1].";\n\n\n\n";
        /**
         *  $insert_limit -> Limits the number of row insertion in a single INSERT query. 
         *           Maximum 100 rowswe will insert in a single INSERT query.
         *  $insert_count -> Counts the number of rows are added to the INSERT query. 
         *                   When it will reach the insert limit it will set to 0 again.
         *  $total_count  -> Counts the overall number of rows are added to the INSERT query of a single table.
         */
        $insert_limit = 100;
        $insert_count = 0;
        $total_count  = 0;
        while($result_row = mysqli_fetch_row($result)) {
          /**
           * For the first time when $insert_count is 0 and when $insert_count reached the $insert_limit 
           * and again set to 0 this if condition will execute and append the INSERT query in the sql file. 
           */
          if($insert_count == 0) {
            $contents .= "--\n-- Dumping data for table `".$table."`\n--\n\n";
            $contents .= "INSERT INTO ".$table." VALUES ";
          }
          //Values part of an INSERT query will start from here eg. ("1","mitrajit","India"),
          $insert_query = "";
          $contents .= "\n(";
          for($j=0; $j<$no_of_columns; $j++) {
            //Replace any "\n" with "\\n" escape character.
            //addslashes() function adds escape character to any double quote or single quote eg, \" or \'
            $insert_query .= "'".str_replace("\n","\\n", addslashes($result_row[$j]))."',";
          }
          //Remove the last unwanted comma (,) from the query.
          $insert_query = substr($insert_query, 0, -1)."),";
          /*
           *  If $insert_count reached to the insert limit of a single INSERT query
           *  or $insert count reached to the number of total rows of a table
           *  or overall total count reached to the number of total rows of a table
           *  this if condition will exceute.
           */
          if($insert_count == ($insert_limit-1) || $insert_count == ($no_of_rows-1) || $total_count == ($no_of_rows-1)) {
            //Remove the last unwanted comma (,) from the query and append a semicolon (;) to it
            $contents .= substr($insert_query, 0, -1);
            $contents .= ";\n\n\n\n";
            $insert_count = 0;
          } else {
            $contents .= $insert_query;
            $insert_count++;
          }
          $total_count++;        
        }  
      }
      //Set the HTTP header of the page.
        header('Content-Type: application/octet-stream');   
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"".$backup_file_name."\"");  
        echo $contents; exit;
    }
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

						<h2>Backup</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Backup&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

							<h1>Thanks</h1>

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



		<script>

			$(document).ready(function(){

 			$('[data-toggle="tooltip"]').tooltip();   

			});

		</script>

	</body>

</html>