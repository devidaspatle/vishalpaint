<?php 
include ("includes/db_config.php");

 $parentid=intval($_GET['parent_id']);

//echo "select * from executive_member where parent_id = '".$parentid."'  and currentStatus  ='Y'";

$resultexm= mysqli_query($con,"select * from executive_member where parent_id = '".$parentid."'  and currentStatus  ='Y'");
$rowexm = mysqli_num_rows($resultexm);

if($rowexm>=5)
{
	echo "already five executive member add not  given six member commission";
}
?>
<input type="hidden" name="parent_count" id="parent_count" value="<?php echo $rowexm; ?>">