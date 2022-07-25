<?php
include("connection.php");
if(isset($_POST['submit']))
    {
	include("connection.php");
  	$College_name = $_POST['txtname'];
    $Userid = $_POST['userid'];
    $Password=$_POST['password'];
    $D=$_POST['district'];
    $S=$_POST['state'];
    $U=$_POST['university'];

    $res=mysqli_query($conn,"select * from college_registration_table where Userid='$Userid'");
    $chk=mysqli_num_rows($res);
    if($chk==0)
    {
      $query2="INSERT INTO `college_registration_table`(`College_name`,`Userid`,`Password`,`District`,`State`,`University`,`status`)VALUES('$College_name','$Userid','$Password','$D','$S','$U','1')";
  $result=mysqli_query($conn,$query2) or die("ERROR".mysqli_error($conn));
  
  $query3="INSERT INTO `login_table`(`Userid`, `Password`,`role_id`) VALUES ('$Userid','$Password','1')";
  $result1=mysqli_query($conn,$query3) or die("ERROR".mysqli_error($conn));
  
  header("Location:signin.php");
    }
    else
    {
      echo "<script>alert('Userid already exists');</script>";
      
  // header("Location:signin.php");
    }
          
  

                   
 
    }
?>

