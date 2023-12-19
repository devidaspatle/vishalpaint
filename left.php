 <?php
 	$userid =$_SESSION['rsoftId'];
	$resultAdmin = mysqli_query($con, "SELECT * FROM users where userName = '".$userid."'");
	$rowAdmin = mysqli_fetch_array($resultAdmin);
	?>
 <aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title">
            <!--Navigation-->&nbsp;
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
     <ul class="notifications menu_not">
            <li>
            <a class="btn btn-primary" style="background-color:#0088cc;text-align:left;"><b>SMS 126</b></a>
        </li>
        <li>
            <a  href="feedback.html" class="btn btn-primary" style="background-color:#E36159;" title="Feedback"><b>FeedBack</b></a>
            </li>
         
                        <li> <a  href="help_support.html" class="btn btn-primary" style="background-color:#2BAAB1" title="Help And Support"><b>Need a Help ?</b>
                 </a>
                 </li>
            </ul>
    <div class="nano">

        <div class="nano-content">
<nav id="menu" class="nav-main" role="navigation">
          <?php 
		   if($rowAdmin['role']=='2'){?>
				<ul class="nav nav-main">
                						<li  class="nav-active">
						<a href="dashboard.php">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>Dashboard</span>
						</a>
					</li>
                      <li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                            <span>Master Entries</span>
                        </a>
                        <ul class="nav nav-children">
							
                             <li >
                                <a href="manage_customer.php">
                                  Manage Customer
                                </a>
                            </li>  
                            <li >
                                <a href="manage_executive.php">
                                 Manage  Executive 
                                </a>
                            </li>  
                              <li >
                                <a href="employee_registration.php">
                                   Employee Registration
                                </a>
                            </li>  

                             <li >
                                <a href="manage_loan_application.php">
                                   Loan Application
                                </a>
                            </li>   
                                                                           
                        </ul>
                    </li>    
                       
                    
                     <li >
                        <a href="executive_advances.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                             Executive Advances
                        </a>
                    </li>
                   
                    <li class="nav-parent" >

                        <a href="javascript:;">
                            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                            <span>Birthday Report</span>
                        </a>
                        <ul class="nav nav-children">
                      
					
                     <li >
                        <a href="manage_birthday.php">
                         Manage  Birthday 
                        </a>
                    </li>
                       <li >
                        <a href="whatsapp_massage.php">
                          Whatsapp  Massage Send
                        </a>
                    </li>
                    
                        </ul>
                    </li>

                        <li >
                        <a href="manage_feedback.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                            Manage Feedback
                        </a>
                    </li> 
                     <li >
                        <a href="notifications.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                           Manage Notifications
                        </a>
                    </li> 
					     
                        <li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                            <span>Transactions</span>
                        </a>
                        <ul class="nav nav-children">
                            
                           <li >
                                <a href="payment_deposit.php">
                                    Receipts
                                </a>
                            </li>  
                            <li> <a href="loan_installment_deposit.php"> Loan Receipts</a></li>

                            <li > <a href="commissions_details.php">
                                
                                  Group  Commissions
                                </a>
                            </li> 
                             <li > <a href="direct_commissions_details.php">
                                
                                   Self Commissions
                                </a>
                            </li>   
                              <li >
                                <a href="view_network_tree.php">
                                   View Network Tree
                                </a>
                            </li>    
                             <li >
                                <a href="view_executive_wise_tree.php">
                                  View Executive Wise Tree
                                </a>
                            </li>    
                                                                         
                        </ul>
                    </li>                
                                        <li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                            <span>Reports</span>
                        </a>
                        <ul  class="nav nav-children">
                        	<li >
                                <a href="daily_executive_report.php">
                                	 Executive Report 
                                </a>
                            </li> 
                            <li>
                                <a href="customer_report.php">
                                	Customer Details Report 
                                </a>
                            </li> 
                             <li>
                                <a href="loan_customer_report.php">
                                	Loan Details Report 
                                </a>
                            </li> 
                             <li>
                                <a href="loan_deposit_amount_report.php">
                                	Loan Deposit Amount Report 
                                </a>
                            </li> 
                        </ul>
                    </li>
					 
                                                  
										<li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="nav nav-children">
                         
							
							 <li >
                                <a href="backup.php">
                                    Backup 
                                </a>
                            </li>                         
                        </ul>
                    </li>
					

                  
					<li>
						<a href="logout.php">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
							<span>Logout</span>
						</a>
					</li>
					
				</ul>
     <?php } if($rowAdmin['role']=='3'){?>
     <ul class="nav nav-main">
                						<li  class="nav-active">
						<a href="dashboard.php">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>Dashboard</span>
						</a>
					</li>
                      <li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                            <span>Master Entries</span>
                        </a>
                        <ul class="nav nav-children">
							
                         
                             <li >
                                <a href="manage_customer.php">
                                  Manage Customer
                                </a>
                            </li>  
                            <li >
                                <a href="manage_executive.php">
                                 Manage  Executive 
                                </a>
                            </li>  
                              <li >
                                <a href="employee_registration.php">
                                   Employee Registration
                                </a>
                            </li>  

                             <li >
                                <a href="manage_loan_application.php">
                                   Loan Application
                                </a>
                            </li>   
                                                                           
                        </ul>
                    </li>    
                       
                    
					
                     <li >
                        <a href="executive_advances.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                             Executive Advances
                        </a>
                    </li>
                   
                    <li class="nav-parent" >

                        <a href="javascript:;">
                            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                            <span>Birthday Report</span>
                        </a>
                        <ul class="nav nav-children">
                      
					
                     <li >
                        <a href="manage_birthday.php">
                         Manage  Birthday 
                        </a>
                    </li>
                       <li >
                        <a href="whatsapp_massage.php">
                          Whatsapp  Massage Send
                        </a>
                    </li>
                    
                        </ul>
                    </li>

                        <li >
                        <a href="manage_feedback.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                            Manage Feedback
                        </a>
                    </li> 
                     <li >
                        <a href="notifications.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                           Manage Notifications
                        </a>
                    </li> 
					     
                        <li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                            <span>Transactions</span>
                        </a>
                        <ul class="nav nav-children">
                            
                           <li><a href="payment_deposit.php">  Receipts  </a> </li>  
                            <li><a href="loan_installment_deposit.php"> Loan Receipts</a></li>
                             
                            <li > <a href="commissions_details.php">
                                
                                  Group  Commissions
                                </a>
                            </li> 
                             <li > <a href="direct_commissions_details.php">
                                
                                   Self Commissions
                                </a>
                            </li>   
                              <li>
                                <a href="view_network_tree.php">  View Network Tree </a>
                            </li>    
                             <li >
                                <a href="view_executive_wise_tree.php">
                                  View Executive Wise Tree
                                </a>
                            </li>    
                                                                         
                        </ul>
                    </li>                
                                        <li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                            <span>Reports</span>
                        </a>
                        <ul  class="nav nav-children">
							<li>
                                <a href="daily_executive_report.php">
                                	 Executive Report 
                                </a>
                            </li> 
                            <li>
                                <a href="customer_report.php">
                                	Customer Details Report 
                                </a>
                            </li> 
                             <li>
                                <a href="loan_customer_report.php">
                                	Loan Details Report 
                                </a>
                            </li>                            
                        </ul>
                    </li>
					 
                                                  
										
				
					<li>
						<a href="logout.php">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
							<span>Logout</span>
						</a>
					</li>
					
				</ul>
                  <?php } if($rowAdmin['role']=='1'){?>
                    <ul class="nav nav-main">
                						<li  class="nav-active">
						<a href="dashboard.php">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>Dashboard</span>
						</a>
					</li>
                      <li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                            <span>Master Entries</span>
                        </a>
                        <ul class="nav nav-children">
							
                           <li >
                                <a href="tds_master.php">
                                    TDS  Master 
                                </a>
                            </li>  
							 <li >
                                <a href="manage_designation.php">
                                  Designation
                                </a>
                            </li> 
                             <li >
                                <a href="manage_customer_plan.php">
                                  Customer Plan
                                </a>
                            </li> 
                             <li >
                                <a href="manage_customer.php">
                                  Manage Customer
                                </a>
                            </li>  
                            <li >
                                <a href="manage_executive.php">
                                 Manage  Executive 
                                </a>
                            </li>  
                              <li >
                                <a href="employee_registration.php">
                                   Employee Registration
                                </a>
                            </li>  

                             <li >
                                <a href="manage_loan_application.php">
                                   Loan Application
                                </a>
                            </li>   
                                                                           
                        </ul>
                    </li>    
                       
                    
                    <li >
                        <a href="executive_promotions.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                           Executive’s Promotions
                        </a>
                    </li> 
                     <li >
                        <a href="executive_advances.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                             Executive Advances
                        </a>
                    </li>
                   
                    <li class="nav-parent" >

                        <a href="javascript:;">
                            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                            <span>Birthday Report</span>
                        </a>
                        <ul class="nav nav-children">
                      
					
                     <li >
                        <a href="manage_birthday.php">
                         Manage  Birthday 
                        </a>
                    </li>
                       <li >
                        <a href="whatsapp_massage.php">
                          Whatsapp  Massage Send
                        </a>
                    </li>
                    
                        </ul>
                    </li>

                        <li >
                        <a href="manage_feedback.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                            Manage Feedback
                        </a>
                    </li> 
                     <li >
                        <a href="notifications.php"><i class="fa fa-retweet" aria-hidden="true"></i>
                           Manage Notifications
                        </a>
                    </li> 
					     
                        <li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                            <span>Transactions</span>
                        </a>
                        <ul class="nav nav-children">
                            
                           <li >
                                <a href="payment_deposit.php">
                                    Receipts
                                </a>
                            </li>  
                            <li> <a href="loan_installment_deposit.php"> Loan Receipts</a></li>

                           <li > <a href="commissions_details.php">
                                
                                  Group  Commissions
                                </a>
                            </li> 
                             <li > <a href="direct_commissions_details.php">
                                
                                   Self Commissions
                                </a>
                            </li>   
                              <li >
                                <a href="view_network_tree.php">
                                   View Network Tree
                                </a>
                            </li>    
                             <li >
                                <a href="view_executive_wise_tree.php">
                                  View Executive Wise Tree
                                </a>
                            </li>    
                                                                         
                        </ul>
                    </li>                
                                        <li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                            <span>Reports</span>
                        </a>
                        <ul  class="nav nav-children">
                        	<li >
                                <a href="daily_executive_report.php">
                                	 Executive Report 
                                </a>
                            </li> 
                            <li>
                                <a href="customer_report.php">
                                	Customer Details Report 
                                </a>
                            </li> 
                             <li>
                                <a href="loan_customer_report.php">
                                	Loan Details Report 
                                </a>
                            </li>                         </ul>
                    </li>
					 
                                                  
										<li class="nav-parent" >
                        <a href="javascript:;">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="nav nav-children">
                            <li >
                                <a href="settings.php">
                                    General Settings
                                </a>
                            </li> 
							  <li >
                                <a href="change-password.php">
                                    Change Password
                                </a>
                            </li>   
                             <li >
                                <a href="sms_configuration.php">
                                   SMS Configuration
                                </a>
                            </li> 
                         
                            <li >
                                <a href="sms_send.php">
                                SMS Send
                            </a>
                            </li> 
							 <li >
                                <a href="backup.php">
                                    Backup 
                                </a>
                            </li>                         
                        </ul>
                    </li>

					<li>
						<a href="manage_user.php">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
							<span>Manage User</span>
						</a>
					</li>					<li>
						<a href="manage_permission.php">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
							<span>Manage Permission</span>
						</a>
					</li>
                  
					<li>
						<a href="logout.php">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
							<span>Logout</span>
						</a>
					</li>
					
				</ul>
                <?php }?>
			</nav>
                </div>
     
    </div>
</aside> 