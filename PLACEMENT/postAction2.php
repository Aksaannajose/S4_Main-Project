<?php 
include( 'connection.php');
$id = $_GET['id'];
$sts = mysqli_query($conn,"SELECT  Status FROM `college_registration_table` where id='$id'");
$rows=mysqli_fetch_array($sts);
if( $rows['Status']== '1'){
$up = mysqli_query($conn,"UPDATE `college_registration_table` SET  Status='0' WHERE `id`='$id' ");
header("location:admin admin college.php");
}
if( $rows['Status']== '0')
{
$up1 = mysqli_query($conn,"UPDATE `college_registration_table` SET  Status='1' WHERE `id`='$id' ");
header("location:admin admin college.php");
}

?>