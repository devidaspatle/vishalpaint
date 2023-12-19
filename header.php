<?php   
include "includes/check_session.php";   
    $i=1;
	$now = new DateTime();
	$dateofbirth = $now->format('Y-m-d');
	$resultCustomerss = mysqli_query($con, "SELECT * FROM customer_registration where date_of_birth = '".$dateofbirth."'");
	$numbirthday = mysqli_num_rows($resultCustomerss);
	$userid =$_SESSION['rsoftId'];
	$resultAdmin = mysqli_query($con, "SELECT * FROM users where userName = '".$userid."'");
	$rowAdmin = mysqli_fetch_array($resultAdmin);
?>
        <header class="header">
	<div class="logo-container">
		<a href="dashboard.php" class="logo" style="text-decoration: none;">
			<img src="logo.png" style="width:245px;">
			<!-- <img src="../" height="35" alt="Porto Admin" /> -->
		</a>
		<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>
    
	<!-- start: search & user box -->
	<div class="header-right">	
		
    	<span class="separator"></span>
		<ul class="notifications">
        	<li class="top_head">
            <a   href="login/emi-calculator.html" target="_blank"  class="btn btn-primary" style="background-color:#0088cc;text-align:left;"><b>EMI Calculator</b></a>
        </li>
        <li class="top_head">
            <a  href="feedback.php" class="btn btn-primary" style="background-color:#E36159;" title="Feedback"><b>FeedBack</b></a>
            </li>
         
            		
            <li>
			            	<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" title="Birthday">
                            <i class="fa fa-birthday-cake"></i>
                <span class="badge"><?php echo $numbirthday;?></span>
            </a>&nbsp;&nbsp;
            
            <div class="dropdown-menu notification-menu large">
                <div class="notification-title">
                    <span class="pull-right label label-default"><?php echo $numbirthday;?></span>
                    	Member's Birthday
                </div>
                <div class="content">
                     <ul>
                           			 <?php 
                                           while($rowCustomerss = mysqli_fetch_array($resultCustomerss)) {
                                     $name_of_applicantss =  ucfirst($rowCustomerss['firstName']).' '.ucfirst($rowCustomerss['middleName']).' '.ucfirst($rowCustomerss['lastName']);
                                            ?>
                                            <li>
                                             <a href="manage_birthday.php" class="clearfix" >
                                              <span><i class="fa fa-user"></i></span> &nbsp;&nbsp;&nbsp;<span class="name"><?php echo $name_of_applicantss;?></span><br />
                                              <span><i class="fa fa-mobile"></i></span>&nbsp;&nbsp;&nbsp;<span class="contact"><?php echo $rowCustomerss['mobile_number'];?></span>
                                            </a>
                                            </li>
                                          <?php  $i++;}?>
                                            </ul>
                </div>
                                    <div align="center">
                        <a href="manage_birthday.php" class="btn btn-primary" style="width:50%">View More</a>
                    </div>
                                 <div>&nbsp;</div>
          </div>
        </li>
      </ul>
         <span class="separator"></span>
		<div id="userbox" class="userbox">
			<a href="dashboard.php" data-toggle="dropdown">
				<figure class="profile-picture">
							<img src="assets/img/logo.jpg" alt="BHOYARNATH" height="32" width="32" class="img-circle" >
					
						                </figure>
				<div class="profile-info">
					<span class="name">
					<?php 				$empid = $rowAdmin['empid'];
										$resultEmployee = mysqli_query($con, "SELECT * FROM employee_registration where id = '$empid'");
										$rowEmployee =mysqli_fetch_array($resultEmployee);
										echo $rowEmployee['fullname'];
					?> </span>
					<span class="role">

                    <?php //echo $rowAdmin['role'];
							$role = $rowAdmin['role'];
										if($role ==1)
										{
										echo "administrator";
										}
										else if($role ==2)
										{
										echo "Admin";
										}
										else
										{
										echo "Employee";
										}
					?> </span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				
				 <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                 <li><a role="menuitem" tabindex="-1" href="settings.php"><i class="fa fa-user"></i> My Profile</a></li>
					    <li><a role="menuitem" tabindex="-1" href="change-password.php"><i class="fa fa-lock"></i> Change Password</a></li>
								 <li class="nav-item">
                                
                                    <a href="logout.php"> Logout</a>

                               
                            </li>
                           </ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>