<?php
	$id=$_GET['delete'];
	include('db.php');
	mysqli_query($conn,"delete from `college_registration_table` where id='$id'");
	// echo "<script>alert('Deleted Successfully');</script>";
	// sleep(10);
	header('location:admin admin college.php?alertmsg="Deleted Successfully"');
?>