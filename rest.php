<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$user_name = $_SESSION['rsoftId'];

$resultlogo=mysqli_query($con, "select * from users  where userName = '".$user_name."'");
$rowlogo = mysqli_fetch_array($resultlogo);

function createTreeView($array, $currentParent, $currLevel = 0, $prevLevel = -1) {

foreach ($array as $categoryId => $category) {

if ($currentParent == $category['parent_id']) {                       
    if ($currLevel > $prevLevel) echo " <ol class='tree'> "; 

    if ($currLevel == $prevLevel) echo " </li> ";

    echo '<li> <label for="subfolder2">'.ucwords($category['firstName']).ucwords($category['lastName']).'</label> <input type="checkbox" name="subfolder2"/>';

    if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }

    $currLevel++; 

    createTreeView ($array, $categoryId, $currLevel, $prevLevel);

    $currLevel--;               
    }   

}

if ($currLevel == $prevLevel) echo " </li>  </ol> ";

} 
?>

<?php

										$qry="SELECT * FROM executive_member";
										$result=mysqli_query($con, $qry);

										//$result=mysql_query($qry);
										
										$arrayCategories = array();

										while($row = mysqli_fetch_assoc($result)){
										
										 $arrayCategories[$row['application_no']] = array("parent_id" => $row['parent_id'], "firstName" =>                       
										 $row['firstName'].' '.$row['middleName'].' '.$row['lastName']);   
										
										  }
?>
<div id="content" class="general-style1">
<?php
if(mysqli_num_rows($result)!=0)
{
?>
<?php 
createTreeView($arrayCategories, 0); ?>
<?php
}
?>

</div>

