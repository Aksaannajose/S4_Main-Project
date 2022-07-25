<?php
  
    // Connect to database 
    $con=mysqli_connect("localhost","root","","placement_portal");
  
    // Check if id is set or not, if true,
    // toggle else simply go back to the page
    if (isset($_GET['id'])){
  
        // Store the value from get to 
       
        $selected_college=$_GET['id'];
  
        // SQL query that sets the status to
        // 0 to indicate deactivation.
        $sql="UPDATE `company_registration_table` SET  `status`=0 WHERE id='$Username'";
  
        // Execute the query
        mysqli_query($con,$sql);
    }
  
    
    header('location: admin.php');
?>