<?php
//database connection
include('connection.php');

//adding data to the database
if(isset($_POST['submit'])){
	$u_card = $_POST['card_no'];
	$u_f_name = $_POST['user_first_name'];
	$u_l_name = $_POST['user_last_name'];
	$u_birthday = $_POST['user_dob'];
	$u_gender = $_POST['user_gender'];
	$u_email = $_POST['user_email'];
	$u_phone = $_POST['user_phone'];
	$u_state = $_POST['state'];
	$u_dist = $_POST['dist'];
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  	$insert_data = "INSERT INTO `card_activation`(`u_card`, `u_f_name`, `u_l_name`, `u_birthday`, `u_gender`, `u_email`, `u_phone`, `u_state`, `u_dist`) VALUES ('$u_card','$u_f_name','$u_l_name','$u_birthday','$u_gender','$u_email','$u_phone','$u_state','$u_dist')";
	$run_data = mysqli_query($conn,$insert_data);
  	if($run_data){
  		header('location:college_ad.php');
  	}else{
  		echo "Data not insert";
		echo $u_email;
  	}

}

?>