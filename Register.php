<?php
include 'header.php';
include 'connection.php';
if(isset($_POST['submit']))
    {
	include("connection.php");
  	$Company_Name = $_POST['txtname'];
    $Username = $_POST['Username'];
    $Password=$_POST['Password'];
    

    $res=mysqli_query($conn,"select * from company_register_table where Username='$Username'");
    $chk=mysqli_num_rows($res);
    if($chk==0)
    {
      $query2="INSERT INTO `company_register_table`(`Company_Name`,`Username`,`Password`)VALUES('$Company_Name','$Username','$Password')";
  $result=mysqli_query($conn,$query2) or die("ERROR".mysqli_error($conn));
  
  $query3="INSERT INTO `company_login_table`(`Username`, `Password`) VALUES ('$Username','$Password')";
  $result1=mysqli_query($conn,$query3) or die("ERROR".mysqli_error($conn));
  
  header("Location:Login.php");
    }
    else
    {
      echo "<script>alert('Userid already exists');</script>";
      
  // header("Location:Login.php");
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
  background-image:  url("./img/engg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
</style>
 
 
     <center>
     <form   method="post" name="myform" >

 <input type="text" name="txtname" id="txtname" class="form-control rounded-left" placeholder="Company_Name"onclick="spanr()" >
 <span id='msg'></span>
	            <div class="form-group">
	              <input type="text"  name="Username" id="Username" class="form-control rounded-left" placeholder="Username" onclick="spanr()"></div>
				  <span id='msg15' style="color:red;"></span>
				<div class="form-group">
				<input type="Password" name="Password" id="Password" class="form-control rounded-left" placeholder="Password"  onclick="spanr()"></div>
				 <span id='msg15' style="color:red;"></span>
				
                    <br>
					<p> Alrady have an account? <a href="Login.php" class="btn">Sign In </a> </p> 
	
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
                    //alert('Please enter  name');
                    document.getElementById('msg').style.color='red';
                    document.getElementById('msg').innerHTML='First letter must be capital';
                    return false; 
                }
				 var val = document.getElementById('Username').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg15').innerHTML="Enter a Valid Email";
		
		     document.getElementById('Username').value = "";
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
    var val = document.getElementById('Username').value;
    
    {
        document.getElementById('msg15').innerHTML="Enter a Valid Email";
		
		     document.getElementById('Username').value = "";
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
                else if(document.getElementById('Password').value=="Please enter a valid password")
                {
                   
				   document.getElementById('msg15').innerHTML="Please enter a Valid password";
		
		     document.getElementById('Password').value = "";
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
