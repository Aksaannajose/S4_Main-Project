<?php
include("connection.php");
if(isset($_POST[  'submit' ]))
	{
		$course=$_POST[  'course' ];
		$amount=$_POST[  'amount' ];
		
		 
		$result=mysqli_query($conn,"INSERT  into course_table (`Course`, `Amount`)values('$course','$amount')");


		if($result)
		{
			echo "Sucessfully Added";
		}
		else
		{
			echo "failed";
		}
	}
?>
