<?php
session_start();
include "connection.php";
$Userid=$_POST['userid'];
$Password=$_POST['password'];
$a=mysqli_query($conn,"SELECT * FROM `login_table` WHERE `Userid` ='$Userid' and `Password`='$Password'");
//if($a)
//{
while($row = mysqli_fetch_assoc($a))
{
	 if($row['Status']==0){
 if($row['role_id']==0)
 {
    
     $_SESSION['id']=$row['login_id'];
     header("Location:./connect-plus-1.0.0/company_ad.php");
	 
 }
 else if($row['role_id']==1)
 {
    
    $_SESSION['id']=$row['login_id'];
     header("Location:./connect-plus-1.0.0/admin.php"); 
 }
 else if($row['role_id']==2)
 {
    
    $_SESSION['id']=$row['login_id'];
    header("Location:./connect-plus-1.0.0/student_ad.php"); 
	//echo '<script>alert("User blocked");</script>';
 }
		 else if($row['role_id']==3)
	 {
    
    $_SESSION['id']=$row['login_id'];
    header("Location:./connect-plus-1.0.0/college_ad.php"); 
 }
 
 else
 {
     header("Location:connect-plus-1.0.0/admin.php");
 }
 
 
	 }
else{
echo '<script>alert("User blocked");</script>';
}
}
?>