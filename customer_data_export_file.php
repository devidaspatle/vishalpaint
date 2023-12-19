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
								$resultLoan = mysqli_query($con, "SELECT * FROM customer_registration WHERE date_of_join   BETWEEN '".$startdate."' AND '".$enddate."'");
							}
							else
							{
								$resultLoan = mysqli_query($con, "SELECT * FROM customer_registration");
							}
							if($result =mysqli_num_rows($resultLoan)>0)
							{
							$output .='<table border="1">

								<thead>
									<tr>
										<th colspan="7" align="center"><h3>Bhoyarnath Mutual Nidhi Limited</h3><h4>Customer Registration Details</h4></th>
										
									</tr>
									<tr>
										<th>Application No.</th>
										<th>Name</th>
										<th>Gender </th>
										<th>Contact No.</th>
										<th>City</th>
										<th>Date of Join</th>
                                        <th>Plan Type</th>   
									</tr>';

								$output .='</thead>';
								$output .='<tbody>';
									
									 $i = 1;
									  while($rowLoan = mysqli_fetch_array($resultLoan)) 
									  { 
										$applicationno = $rowLoan['application_no'];
 										

									$name_of_applicant =  ucfirst($rowLoan['firstName']).' '.ucfirst($rowLoan['middleName']).' '.ucfirst($rowLoan['lastName']);
										$dateofjoin = $rowLoan['date_of_join'];
										if(!empty($dateofjoin))
										{
										 $date_of_join =  date("d-m-Y", strtotime($dateofjoin));
										} 

										if($rowLoan['gender']=='M')
										{
										 $gender =  "Male";
										}
									   if($rowLoan['gender']=='F')
										{
										 $gender =  "Female";
										}

										$output .='<tr>

										<td align="center">'.$rowLoan['application_no'].'</td>

										<td> '.$name_of_applicant.'</td>

										<td>'.$gender.'</td>

										<td>'. $rowLoan['mobile_number'].'</td>

										<td> '.ucfirst($rowLoan['present_city']).' </td>									

										<td> '.$date_of_join.' </td>	

										<td>'. $rowLoan['plan_type'].' Month'.'</td>

									</tr>';
										
                                } 
                                     
								$output .='</tbody>';
								$output .='</table>';
								 header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=customer_data.xls');
  echo $output;                           
							
						}
					}
							?>
