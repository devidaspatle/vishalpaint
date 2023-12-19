<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Basic -->
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Mobile Metas -->
		<title>Gym Solution </title>
		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../wgym/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../wgym/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../wgym/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<!-- Theme CSS -->
		<link rel="stylesheet" href="../wgym/assets/stylesheets/theme.css" />
		<!-- Skin CSS -->
		<link rel="stylesheet" href="../wgym/assets/stylesheets/skins/default.css" />
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../wgym/assets/stylesheets/theme-custom.css">
	<!--<script type="text/javascript">
      if (location.protocol != 'https:')
      {
       location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
      }
    </script>-->
		<!-- Head Libs -->
		<script src="../wgym/assets/vendor/modernizr/modernizr.js"></script>
		<script type="text/javascript">
			function get_validate()
			{
				var err=0;
				if (document.getElementById('usremail').value==='')
				{
					document.getElementById('err_usremail').innerHTML='Please Enter Email ID or Mobile Number.';
					err++;
				}
				else
				{
					document.getElementById('err_usremail').innerHTML='';
				}
				if (document.getElementById('usrpwd').value==='')
				{
					document.getElementById('err_usrpwd').innerHTML='Please Enter Password.';
					err++;
				}
				else
				{
					document.getElementById('err_usrpwd').innerHTML='';
				}
				if (err>0)
				{
					return false;
				}
			}
		</script>
        <style>
/*    .back_banner {
    background-repeat: no-repeat;
    background-image: url(../wgym/assets/images/login_back.jpg);
    background-size: cover;
    background-position: center;
}*/
.overlay {
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
}
.mt-xl {
    text-align: center;
    background-color: rgb(0, 136, 204);
    margin-top: 25px !important;
}
.body-sign .panel-sign .panel-title-sign .title {
    /* background-color: rgba(0, 126, 255, 0.5); */
    text-align: center;
    /* background-color: #0088cc; */
}
.body-sign .panel-sign .panel-title-sign .title {
    /* background-color: #CCC; */
    /* border-radius: 5px 5px 0 0; */
    color: #FFF;
    display: inline-block;
    font-size: 1.2rem;
    line-height: 2rem;
    padding: 13px 17px;
    font-size: 22px;
    vertical-align: bottom;
}
.body-sign .panel-sign .panel-body {
    background-color: rgba(50, 61, 72, 0.7);
    /* background: #FFF; */
    /* border-top: 5px solid #CCC; */
    /* border-radius: 5px 0 5px 5px; */
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    padding: 33px 33px 15px;
    /* background-color: rgba(0, 136, 204,0.3); */
    /* background-color: rgba(0, 126, 255, 0.5); */
}
label {
    font-size: 18px;
    color: #fff;
	}
	body .btn-primary {
    font-size: 18px;
    width: 80%;
	    margin: 0 auto;
	}
	.forgot_pass {
	    padding-bottom: 20px;
}
.forgot_pass a{
   font-size: 16px;
    color: #fff !important; 
	}
	.forgot_pass a:hover {
    text-decoration:none !important; 
	}
	p.text-center.text-muted.mt-md.mb-md {
    color: #fff !important;
}
section.body-sign {
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
}
/*.carousel-inner {
 position: relative;
}*/
#background { 
    position:fixed; left: 0px; 
    top: 0px; background-size:100%;  
     width:100%; height:100%; 
     -webkit-user-select: none; -khtml-user-select: none; 
     -moz-user-select: none; -o-user-select: none; user-select: none; 
     /* z-index:9990; */
    background-repeat: no-repeat;
    background-size: cover;
	    background-position: center;
    }
		</style>