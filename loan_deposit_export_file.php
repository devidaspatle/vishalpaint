	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
	<?php 
	error_reporting(0);
	$startdate =$_POST['startdate'];
	$enddate =$_POST['enddate'];
//include "includes/check_session.php";
include_once("includes/db_config.php");
$output='';
	if(isset($_POST["export_excel"]))
						{
							if(!empty($startdate))
							{
								$resultLoan = mysqli_query($con, "SELECT * FROM loan_installment WHERE payment_date   BETWEEN '".$startdate."' AND '".$enddate."'");
							}
							else
							{
								$resultLoan = mysqli_query($con, "SELECT * FROM loan_installment");
							}
							if($result =mysqli_num_rows($resultLoan)>0)
							{
							$output .='<table border="1">

								<thead>
									<tr>
										<th colspan="7" align="center"><h3>Bhoyarnath Mutual Nidhi Limited</h3><h4>Loan Application Details</h4></th>
										
									</tr>
									<tr>
										<th>Application No.</th>
										<th>Name</th>
										<th>Contact No.</th>
										<th>Recipt No.</th>
										<th>Payment Mode</th>
										<th>Principal.</th>
										<th>Interest</th>
										<th>Payment Month</th>
										<th>Interest</th>
										<th>Loan Date</th>
									</tr>';

								$output .='</thead>';
								$output .='<tbody>';
									
									 $i = 1;
									  while($rowLoan = mysqli_fetch_array($resultLoan)) 
									  { 
										$applicationno = $rowLoan['application_no'];
 										$resultCustomerLoan = mysqli_query($con, "SELECT * FROM loan_application where  application_no  =  '".$applicationno."'");
										$rowCustomerLoan = mysqli_fetch_array($resultCustomerLoan);

									$name_of_applicant =  ucfirst($rowCustomerLoan['firstname']).' '.ucfirst($rowCustomerLoan['middlename']).' '.ucfirst($rowCustomerLoan['lastname']);
										$originalDate = $rowLoan['payment_date'];
										if(!empty($originalDate))
										{
										 $payment_date =  date("d-m-Y", strtotime($originalDate));
										}
										if($rowLoan['payment_mode']==1)
										{
										 $paymentmode =  "Cash";
										}
									   if($rowLoan['payment_mode']==2)
										{
										 $paymentmode =  "Chaque";
										}
									   if($rowLoan['payment_mode']==3)
										{
										 $paymentmode =  "DD";
										}

										$output .='<tr>

										<td align="center">'.$rowCustomerLoan['application_no'].'</td>

										<td> '.$name_of_applicant.'</td>

										<td>'. $rowCustomerLoan['phone'].'</td>

										<td> '.$rowLoan['recipt_no'].' </td>									

										<td> '.$paymentmode.' </td>

										<td>'. $rowLoan['principal'].'</td>

										<td>'. $rowLoan['interest'].'</td>

										<td>'. $rowLoan['emi_installment'].'</td>

										<td>'. $rowLoan['payment_month'].'</td>

										<td>'. $payment_date .'</td>
									</tr>';
										
                                } 
                                     
								$output .='</tbody>';
								$output .='</table>';
								 header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=loandata.xls');
  echo $output;                           
							
						}
					}
							?>
