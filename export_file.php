	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
	<?php 
	$startdate =$_POST['startdate'];
	$enddate =$_POST['enddate'];
//include "includes/check_session.php";
include_once("includes/db_config.php");
$output='';
	if(isset($_POST["export_excel"]))
						{
							if(!empty($startdate))
							{
								$resultCustomers = mysqli_query($con, "SELECT * FROM loan_application WHERE payment_date  BETWEEN '".$startdate."' AND '".$enddate."'");
							}
							else
							{
								$resultCustomers = mysqli_query($con, "SELECT * FROM loan_application");
							}
							if($result =mysqli_num_rows($resultCustomers)>0)
							{
							$output .='<table border="1">

								<thead>
									<tr>
										<th colspan="7" align="center">Loan Application Details</th>
										
									</tr>
									<tr>
										<th>Application No.</th>
										<th>Name</th>
										<th>Gender </th>
										<th>Contact No.</th>
										<th>City</th>
										<th>Loan Date</th>
                                        <th>Loan Amount</th>
                                        
									</tr>';

								$output .='</thead>';
								$output .='<tbody>';
									
									 $i = 1;
									  while($rowCustomer = mysqli_fetch_array($resultCustomers)) 
									  { 
									$name_of_applicant =  ucfirst($rowCustomer['firstname']).' '.ucfirst($rowCustomer['middlename']).' '.ucfirst($rowCustomer['lastname']);
										$originalDate = $rowCustomer['payment_date'];
										if(!empty($originalDate))
										{
										 $payment_date =  date("d-m-Y", strtotime($originalDate));
										}
										if($rowCustomer['gender'] == 'M'){$gender = "Male";} else {$gender = "Female";}
									
										$output .='<tr>

										<td align="center">'.$rowCustomer['application_no'].'</td>

										<td> '.$name_of_applicant.'</td>

										<td> '.$gender.' </td>

										<td>'. $rowCustomer['phone'].'</td>

										<td>'. ucfirst($rowCustomer['present_city']).'</td>
										<td>'. $payment_date .'</td>

                                        <td>'. ucfirst($rowCustomer['loan_amount']).'</td>
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
