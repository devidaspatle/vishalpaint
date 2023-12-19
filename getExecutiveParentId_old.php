    <?php   
	error_reporting(0);
	$customerId = $_POST['customerId'];
   	static $superParent = []; 
   
    function  getDirectParent($id){
    	 $con = mysqli_connect('localhost', 'root', '', 'biloyarnadhi');
    	$sqlg = "SELECT parent_id FROM executive_member where application_no = ".$id;
		$resultQgl = mysqli_query($con, $sqlg); 
		$rowQgl = mysqli_fetch_array($resultQgl);
		return  $rowQgl['parent_id'];
    }

    function getSuperParent($id){  
    	 static $superParent = [];
    	 $con = mysqli_connect('localhost', 'root', '', 'biloyarnadhi');
    	array_push($superParent,$id);
    	 
    	$sqlg = "SELECT parent_id FROM executive_member where application_no = ".$id;
		$result = mysqli_query($con, $sqlg); 
		$superId = mysqli_fetch_array($result);
		
		// if(!empty($superId['parent_id'])){
		// 	   // echo($superId['parent_id']);
		// 	getSuperParent($superId['parent_id']);
		// }else{
		// 	$superParent1 =  $superParent;	
		// 	// print_r($superParent);
		// 	   return 1 ;
		// }
		return $superId['parent_id'];
		
    }

     function getParents($id){
    	 $con = mysqli_connect('localhost', 'root', '', 'biloyarnadhi');
    	 $superParent1 = [];
    	  // echo "shee";
    	//$direct_id = getDirectParent($id);    	
    	$sqlg = "SELECT parent_id FROM executive_member where application_no = ".$id;
		$resultQgl = mysqli_query($con, $sqlg); 
		$rowQgl = mysqli_fetch_array($resultQgl);
		array_push($superParent1,$rowQgl['parent_id']);
		$p = getSuperParent($rowQgl['parent_id']);
		if(!empty($p)){
			array_push($superParent1,$p);
		 	getSuperParent($p);
		}
		 // print_r($superParent1);
    	  return $superParent1;
    }  

    	//$r = getParents(1000008);  
    	//print_r($r)
    ?>    