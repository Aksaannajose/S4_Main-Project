<?php
  
    // Connect to database 
    $conn=mysqli_connect("localhost","root","","placement_portal");
  
    // Check if id is set or not, if true,
    // toggle else simply go back to the page
    if (isset($_GET['id'])){
  
        // Store the value from get to 
		
        $Userid=$_GET['id'];
  
        // SQL query that sets the status to
        // 0 to indicate deactivation.
        $sql="UPDATE college_registration_table SET  `Status`=0 WHERE id='$Userid'";
        $a="UPDATE login_table SET  `Status`=1 WHERE id='$Userid'";
        // Execute the query
     



	 $r = mysqli_query($conn,$sql);
		if($r){
			echo"1";
			$ar = mysqli_query($conn,$sql);
			if($ar){
			header('location: admin admin college.php');
			}
		}
		
    }
  
    
    
?>

