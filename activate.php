<?php
  
    // Connect to database 
    $con=mysqli_connect("localhost","root","","placement_portal");
  
    // Check if id is set or not if true toggle,
    // else simply go back to the page
    if (isset($_GET['id'])){
  
        // Store the value from get to a 
        
        $selected_college=$_GET['id'];
  
        // SQL query that sets the status
        // to 1 to indicate activation.
        $sql="UPDATE 'company_registration_table` SET  `status`=1 WHERE id='$Username'";
  
        // Execute the query
        mysqli_query($con,$sql);
    }
  
    // Go back to 
    header('location: admin.php');
?>