<?php
include 'header.php';
include 'connection.php';
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
  
  header("Location:src/verifymail.php?email=$Userid");
    }
    else
    {
      echo "<script>alert('Userid already exists');</script>";
      
  // header("Location:signin.php");
    }
         
    }
?>
<br><br>
<html>
    <head>
    <link rel="stylesheet" type ="text/css" href="style.css">

</head>
<div class="container signin">
<body style="background-color:#E0F0C8;">

<div class="login-box">
</div>
<h3> <center> <class="text-center mb-4"></h3></center>
 
 <style>
body {
  background-image:  url("./img/5018_login.webp");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
</style>
 
 
     <center>
     <form   method="post" name="myform" >

 <input type="text" name="txtname" id="txtname" class="form-control rounded-left" placeholder=" Enter college name"onclick="spanr()" >
 <span id='msg'></span>
	            <div class="form-group">
	              <input type="text"  name="userid" id="userid" class="form-control rounded-left" placeholder="Username" onclick="spanr()"></div>
				  <span id='msg15' style="color:red;"></span>
				<div class="form-group">
				<input type="password" name="password" id="password" class="form-control rounded-left" placeholder="Password"  onclick="spanr()"></div>
				 <span id='msg15' style="color:red;"></span>
				<div class="form-group">
				<select name="district" id="district"class="form-control rounded-left" id="exampleFormControlSelect2" onclick="spanr()">
                      <option>District</option>
                      <option>Kottayam</option>
                      <option>Delhi</option>
					  <option>Banglore</option>
                      <option>Pathanamthitta</option>
                      <option>Chennai</option> 
                    </select></div>
					 <span id='msgdis'></span>
				
				<div class="form-group">
                    <select  name="state" id="state" class="form-control rounded-left" id="exampleFormControlSelect2" onclick="spanr()">
                      <option>State</option>
                      <option>Kerala</option>
                      <option>Delhi</option>
                      <option>Andhra Pradesh</option>
                      <option>India</option>
                    </select></div
					<span id='msgs'></span>
					
				<div class="form-group">
                    <select  name="university" id="university" class="form-control rounded-left" id="exampleFormControlSelect2" onclick="spanr()">
                      <option>University</option>
                      <option>Mahatma Gandhi University</option>
                      <option>Delhi University</option>
                      <option>Kerala Technical University</option>
					  <option>Banglore University</option>
                    </select></div
					<span id='msgu'></span>
 
                    <br>
					<p> Alrady have an account? <a href="signin.php" class="btn">Sign In </a> </p> 
	
  <input type="submit"  name="submit" value="Register"    class="btn-login" onclick="return validate()" >
 </form>
</center>
</div>
<br><br>
<br><br>
<br><br>
<script>
            function validate()
            {
				var txtname = document.myform.txtname.value.trim();
				 if (document.myform.txtname.value.trim()==""){
					 document.getElementById('msg').style.color='red';
                    document.getElementById('msg').innerHTML='Enter a value';
                    return false; 
				 }
                if (txtname.charAt(0)!=txtname.charAt(0).toUpperCase())
                {
                    //alert('Please enter College name');
                    document.getElementById('msg').style.color='red';
                    document.getElementById('msg').innerHTML='First letter must be capital';
                    return false; 
                }
				 var val = document.getElementById('userid').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg15').innerHTML="Enter a Valid Email";
		
		     document.getElementById('userid').value = "";
        return false;
    }

				

				else
					return true;
			}
			
			function spanr(){
				document.getElementById('msg').innerHTML="";
				document.getElementById('msg15').innerHTML="";
				document.getElementById('msgdis').innerHTML="";
				document.getElementById('msgs').innerHTML="";
				document.getElementById('msgu').innerHTML="";
			}
</script>
				
					<span id="msg15" style="color:red;"></span>
<script>		

function Validata()
 
{
    var val = document.getElementById('userid').value;
    
    {
        document.getElementById('msg15').innerHTML="Enter a Valid Email";
		
		     document.getElementById('userid').value = "";
        return false;
    }
document.getElementById('msg15').innerHTML=" ";
    return true;
	<span id="msg15" style="color:red;"></span>
}
</script>
                           <span id="msg15" style="color:red;"></span>
<script>
		function v()
            {
                if(document.getElementById('msg').style.color='red'){return false;}
				 if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
                else if(document.getElementById('password').value=="Please enter a valid password")
                {
                   
				   document.getElementById('msg15').innerHTML="Please enter a Valid password";
		
		     document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msg15').innerHTML=" ";
    return true;
	<span id="msg15" style="color:red;"></span>
				   

                }
                else
                {
                    return true;

                }

            }
            </script>
            </body>

