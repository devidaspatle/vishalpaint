<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);
$user_id = $rowlogo['id'];

$resultEmploy = mysqli_query($con, "SELECT * FROM employee_registration where currentStatus='Y'");
$row = mysqli_num_rows($resultEmploy);

?>

<!doctype html>

<html class="fixed">

	<head>

		<!-- Basic -->

		<meta charset="utf-8">



		 <title <title>BHOYARNATH | Mutual Nidhi Limited</title>

		

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
<script type="text/javascript" language="javascript">
function validated_form() 
{
//alert('hi');
var regexNum = /\d/;
var regexLetter = /[a-zA-z]/;
var name=document.getElementById('name').value;
var email=document.getElementById('email').value;
var mobile=document.getElementById('mobile').value;
var password=document.getElementById('password').value;
var cpassword=document.getElementById('cpassword').value;

if(name=="")
{
alert("Please Enter  Name");
document.getElementById('name').focus();
return false;
}
if(email=="")
		{
		alert("Please Enter User Email ID !");
		document.getElementById('email').focus();
		return false;
		}


 		if (document.getElementById('email').value.length>0)
		{
		i=document.getElementById('email').value.indexOf("@");
		j=document.getElementById('email').value.indexOf(".",i);
		k=document.getElementById('email').value.indexOf(",");
		kk=document.getElementById('email').value.indexOf(" ");
		jj=document.getElementById('email').value.lastIndexOf(".");
		 len=document.getElementById('email').value.length;
		 if((i>0)&&(j>(1+1))&&(k==-1)&&(kk==-1)&&(len-jj>=2))
		 //&&(len-jj<=3))
		 {
		 //document.cform.ConfirmEmail.focus();//
		 }
		 else
		 {
			alert("Please enter an exact email address.\n" + document.getElementById('email').value + " is invalid.");
			document.getElementById('email').focus();
		return false;
		 }
		 } 
if(mobile=="")
{
alert("Please Enter Mobile Number");
document.getElementById('mobile').focus();
return false;
}
if(isNaN(mobile))
{
alert("Please enter numeric value ! ");
document.getElementById('mobile').focus();
return false;
}
if(password=="")
{
alert("Please Enter your Password !");
document.getElementById('password').focus();
return false;
}
else
{
if(password.length < 6)
{
alert("Password should be more then 6 charactor");
document.getElementById('password').focus();
return false;
}	
}
if(password!==cpassword)
{
alert("Both password must be same");
document.getElementById('cpassword').focus();
document.getElementById('cpassword').value='';
return false;
}
return true();
}
</script>
<script type="text/javascript">
	function refC() {
		document.getElementById('ci').src = 'animatedcaptcha_generate.php?'+Math.random();
	}
	
	
	function passwordStrength(password)

{

        desc[1] = "Weak";
        var desc = new Array();

        desc[0] = "Very Weak";


        desc[2] = "Better";

        desc[3] = "Medium";

        desc[4] = "Strong";

        desc[5] = "Strongest";



        var score   = 0;



        //if password bigger than 6 give 1 point

        if (password.length > 4)
      
	   score++;
	   
		if (password.length > 6) score++;



        //if password has both lower and uppercase characters give 1 point      

        if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;



        //if password has at least one number give 1 point

        if (password.match(/\d+/)) score++;



        //if password has at least one special caracther give 1 point

        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;


		if (password.length > 8) score++;

		if (password.length > 10) score++;

        //if password bigger than 12 give another 1 point

        if (password.length > 12) score++;

           
   
         document.getElementById("passwordDescription").innerHTML = desc[score];

         document.getElementById("passwordStrength").className = "strength" + score;

}
	
</script>

<style type="text/css" >

#passwordStrength

{

        height:5px;

        display:block;

        float:left;
		

}



.strength0

{

        width:150px;

        background:#cccccc;

}



.strength1

{

        width:50px;


.strength2
        background:#ff0000;

}



{

        width:100px;    

        background:#ff5f5f;

}



.strength3

{

        width:140px;

        background:#56e500;

}



.strength4

{

        background:#4dcd00;

        width:150px;

}



.strength5

{

        background:#399800;

        width:150px;

}
</style>	
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

<?php include "left.php"; ?>

				<!-- end: sidebar -->



				<section role="main" class="content-body">

					<header class="page-header">

						<h2>Create User</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								
								<li><span>Create User&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>


					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

								<form id="form"  method="POST" action="user_code.php" class="form-horizontal" onSubmit="disable();">

								<section class="panel">


									<div class="panel-body">

										
										



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Employee Name  <span class="required">*</span></label>

											<div class="col-sm-8">

											<select id="employee_id" name="employee_id" class="form-control" required >
<option value=""> Select Employee Name </option>
                                                 <?php 
												while($rowEmplo = mysqli_fetch_array($resultEmploy))
												{
												?>
												<option value="<?php echo $rowEmplo['id'];?>"><?php echo $rowEmplo['fullname'];?></option>	
                                                
												<?php }?>
                                                
											</select>

											

											</div>

										</div>








										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">User Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-envelope"></i>

													</span>

													<input type="text" required name="userName" id="userName" maxlength="100"  class="form-control input-lg" /><!--required-->

												</div>



											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Password <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="password" required name="passWord" id="passWord" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Confirm Password</label>

											<div class="col-sm-8">

												<input type="password" required name="cpassword" id="cpassword" maxlength="100" class="form-control" />
											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Role <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													
														<select name="role" id="role" class="form-control" required >
                                                        <option value="">Select Role</option>
                                                        <option value="1">Administrator</option>
                                                        <option value="2">Admin</option>
                                                        <option value="3">Employe</option>

                                                        </select>												
                                                        </div>



											</div>

										</div>	


										
										</div>
									</div>

									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="submit" name="submit" id="submit" class="btn btn-warning">Save</button>

												<button type="reset" class="btn btn-default">Reset</button>

												<input type="hidden" name="act" id="act" value="yes">

												<button type="button" onClick="window.location.href='employee_registration.php'" name="" class="btn btn-default">Back</button>

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

		<script src="assets/javascripts/custom.js"></script>

		

		<script src="assets/javascripts/ajaxupload.3.5.js"></script>

		

        <script>



	function check_mobile_no(){

	

	

				

				var httpxml;

				

				var number = document.getElementById('phone').value;

				

				try  { // Firefox, Opera 8.0+, Safari

			  		httpxml=new XMLHttpRequest();

			  	}catch (e) { // Internet Explorer

			  		try { httpxml=new ActiveXObject("Msxml2.XMLHTTP"); }

			  		catch (e) {  

						try { httpxml=new ActiveXObject("Microsoft.XMLHTTP"); }

			    		catch (e) {

			      			alert("Your browser does not support AJAX!");

			      			return false;

			      		}

					}

			  	}

			  

				function stateck(){

					if(httpxml.readyState==3 || httpxml.readyState==2 || httpxml.readyState==1) {  }

					if(httpxml.readyState==4)  {

						var rsponse=httpxml.responseText; 

						rsponse=rsponse.trim();

						



						if(rsponse.trim() == "find"){

							document.getElementById('phone').value = '';

							document.getElementById('response').innerHTML = 'Phone Number Is Already Exist!';

							

						}

						if(rsponse.trim() == "not"){

							document.getElementById('response').innerHTML = '';

							

						}

					

					}	

				}

			

				var url="action_layer.html";

				url=url+"?action=check_mobile_no&no="+number;

				httpxml.onreadystatechange=stateck;

				httpxml.open("GET",url,true);

				httpxml.send(null);

				

			}

			

</script>

		

		<script>

			function trim(str)

		  	{

		      	return str.replace(/^\s+|\s+$/g,"");

		  	}

			

			$(function()

			{

				var btnUpload=$('#uploadprofile');

				var status=$('#picture_error');

				new AjaxUpload(btnUpload, {

				action: 'upload-file.html',

				name: 'uploadfile',

				onSubmit: function(file, ext)

				{

				 if (! (ext && /^(jpeg|jpg|png|gif|bmp)$/.test(ext))){ 

				status.html('Only JPEG.JPG,PNG or BMP files allowed');

				return false;

				}

							status.html("Wait...");

			

				},

				

				onComplete: function(file, response)

				{

					var bb=response.split('##')

					if(trim(bb[0])=="success")

					{

						document.getElementById('profileimage').src=bb[1];

						document.getElementById('profile').value=bb[1];

							status.html("");

			

						status.html("<font color='green'>Sucess..!</font>");

					}

					else

					{

						status.html("<font color='red'>OOps! something wrong.</font>");

					}

				}});

			});

		</script>

        

        <script>



	function check_mail_id(){

		

		//alert('a');

				

				var httpxml;

				

				var mail = document.getElementById('emailid').value;

				

				try  { // Firefox, Opera 8.0+, Safari

			  		httpxml=new XMLHttpRequest();

			  	}catch (e) { // Internet Explorer

			  		try { httpxml=new ActiveXObject("Msxml2.XMLHTTP"); }

			  		catch (e) {  

						try { httpxml=new ActiveXObject("Microsoft.XMLHTTP"); }

			    		catch (e) {

			      			alert("Your browser does not support AJAX!");

			      			return false;

			      		}

					}

			  	}

			  

				function stateck(){

					if(httpxml.readyState==3 || httpxml.readyState==2 || httpxml.readyState==1) {  }

					if(httpxml.readyState==4)  {

						var rsponse=httpxml.responseText; 

						rsponse=rsponse.trim();

						

						//alert(rsponse);

						

						if(rsponse.trim() == "yes"){

							document.getElementById('emailid').value = '';

							document.getElementById('response1').innerHTML = 'Email ID Has been Already Existed';

						}

						if(rsponse.trim() == "no"){

							document.getElementById('response1').innerHTML = '';

						}

					}	

				}

			

				var url="action_layer.html";

				url=url+"?action=check_mail&mail="+mail;

				//alert(url);

				httpxml.onreadystatechange=stateck;

				httpxml.open("GET",url,true);

				httpxml.send(null);

				

			}

			 

</script>

	</body>

</html>