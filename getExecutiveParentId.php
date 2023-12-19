    <?php   
	error_reporting(0);
	//require_once('includes/db_config.php'); 
	require_once('includes/check_session.php'); 
   	 $superParent = []; 
   
    function  getDirectParent($id){
    	 $con = mysqli_connect('localhost', 'root', '', 'biloyarnadhi');
    	$sqlg = "SELECT parent_id FROM executive_member where application_no = ".$id;
		$resultQgl = mysqli_query($con, $sqlg); 
		$rowQgl = mysqli_fetch_array($resultQgl);
		return  $rowQgl['parent_id'];
    }

    function getSuperParent($id){  
	 	// global $superParent12;
	 	$superParent12 = [];
    	 global $superParent ;
    	 $con = mysqli_connect('localhost', 'root', '', 'biloyarnadhi');
    	array_push($superParent,$id);
    	 
    	$sqlg = "SELECT parent_id FROM executive_member where application_no = ".$id;
		$result = mysqli_query($con, $sqlg); 
		$superId = mysqli_fetch_array($result);
		
		if(!empty($superId['parent_id'])){
			   // echo($superId['parent_id']);
			getSuperParent($superId['parent_id']);
		}else{
			  $superParent12 = $superParent;
			 // print_r($superParent12);
			   return $superParent12 ;
		}
		// return $superId['parent_id'];
		
    }

     function getParents($id){
     	 global $superParent ;
    	 $con = mysqli_connect('localhost', 'root', '', 'biloyarnadhi');
    	 $superParent1 = [];
    	  // echo "shee";
    	$direct_id = getDirectParent($id);    	
    	$sqlg = "SELECT parent_id FROM executive_member where application_no = ".$id;
		$resultQgl = mysqli_query($con, $sqlg); 
		$rowQgl = mysqli_fetch_array($resultQgl);
		// array_push($superParent1,$rowQgl['parent_id']);
		$p = getSuperParent($rowQgl['parent_id']);
		
    	  return $superParent;
    }  

    	// $r = getParents(1000009);  
    	//   print_r($r)
    ?>    