<?php
include("connection.php");
if(isset($_POST[  'submit' ]))
	{
		$first_name=$_POST[  'first_name' ];
		$last_name=$_POST[  'last_name' ];
		$email=$_POST[  'email' ];
		$job_role=$_POST[  'job_role' ];
		$address=$_POST[  'address' ];
		$city=$_POST[  'city' ];
		$pincode=$_POST[  'pincode' ];
         $date=$_POST[  'date' ];
		 $upload=$_POST[  'upload' ];
		 
		 
		 
		$result=mysqli_query($conn,"INSERT  into   job_table 
		(`First Name`, `Last Name`, `Email`, `Job Role`, `Address`, `City`, `Pincode`, `D.O.B`, `Upload your CV`)values('$first_name','$last_name','$email','$job_role','$address','$city','$pincode','$date',' $upload')");
		
		if($result)
		{
			echo "sucess";
		}
		else
		{
			echo "failed";
		}
	}
?>
