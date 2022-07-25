<?php

include('connection.php');
$id = $_GET['id'];
$delete = "DELETE FROM 'card_activation' WHERE 'id' = '$id'";
$run_data = mysqli_query($conn,$delete);

if($run_data){
	header('location:college_ad.php');
}else{
	echo "Donot Delete";
}


?>
