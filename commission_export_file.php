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
								$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member WHERE  application_no  = '".$application_no."' and date_of_join  BETWEEN '".$startdate."' AND '".$enddate."' ");
							}
							else
							{
								$resultExecutive = mysqli_query($con, "SELECT * FROM executive_member");
							}
							if($result =mysqli_num_rows($resultExecutive)>0)
							{
							$output .='<table border="1">

								<thead>
									<tr>
										<th colspan="7" align="center"><h3>Bhoyarnath Mutual Nidhi Limited</h3><h4>Commission Executive Details</h4></th>
										
									</tr>
									<tr>
										<th>Ex. Code</th>
										<th>Name</th>
										<th>Amount</th>
										<th>Comm</th>
										<th>% Payment</th>
                                        <th>Less TDS</th>
                                        <th>Net Comm</th>
									</tr>';

								$output .='</thead>';
								$output .='<tbody>';
									
									 $i = 1;
									
									 while($rowExecutive = mysqli_fetch_array($resultExecutive)) 
									  { 
									  	$name_of_applicant =  ucfirst($rowExecutive['firstName']).' '.ucfirst($rowExecutive['middleName']).' '.ucfirst($rowExecutive['lastName']);
										$customerId = $rowExecutive['application_no'];										
										$resultExt = mysqli_query($con, "SELECT * FROM executive_commissions where executiveId  = '".$customerId."'");
										$payment_price =0;
										$bonus_point =0;
										$totalpayment =0;
										$total =0;
										$tds =0;
										$grtotal = 0;
									while($rowexecu = mysqli_fetch_array($resultExt))
									{
										$payment_price += $rowexecu['payment_price'];
										$payment_percent = $rowexecu['payment_percent'];
										$totalpayment = $payment_price * $payment_percent /100;
										$bonus_point += $rowexecu['bonus_point'];
										$payment_tds = $rowexecu['payment_tds'];
										$total = $totalpayment + $bonus_point;
										$tds += $total * $payment_tds/100;
									}

										$output .='<tr>

										<td align="center">'.$rowExecutive['application_no'].'</td>

										<td> '.$name_of_applicant.'</td>

										<td>'. $payment_price.'</td>

										<td> '.$bonus_point.' </td>									

										<td> '.$totalpayment.' </td>

										<td>'. $tds.'</td>

										<td>'. $grtotal = $total-$tds.'</td>

									</tr>';
										
                                } 
                                     
								$output .='</tbody>';
								$output .='</table>';
								 header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=commissiondata.xls');
  echo $output;                           
							
						}
					}
							?>
