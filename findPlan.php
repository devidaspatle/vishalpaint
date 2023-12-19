<?php 
include_once("includes/db_config.php");
$plan_type=intval($_GET['plan_type']);

$resultPlantype = mysqli_query($con, "SELECT * FROM plan_master where plan_name = '".$plan_type."'  and currentStatus='Y'");
$rowPlanType = mysqli_fetch_array($resultPlantype);
													 
?>													
 <input type="text" name="plan_parcent"  id="plan_parcent"  class="form-control" value="<?php echo $rowPlanType['plan_parcent'];?>"  />