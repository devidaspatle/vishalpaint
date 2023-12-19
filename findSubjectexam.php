<?php 
include ("includes/config.php");

$examid=intval($_GET['examner']);
$resultexm= mysqli_query($con,"select * from   ets_assign_subject where examiner_id = '".$examid."'  and currentStatus ='Y'");
$rowexm = mysqli_fetch_array($resultexm))
													 