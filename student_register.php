<?php
include 'header.php';
include 'connection.php';
if(isset($_POST['submit']))
    {
	include("connection.php");
  	$Name = $_POST['name'];
    $Username = $_POST['username'];
    $Password=$_POST['password'];
	$College = $_POST['college'];
    $Course=$_POST['course'];
    $Graduation %=$_POST['gcgpa'];
	$Backlog=$_POST['backlog'];
    $Graduated =$_POST['gyear'];

    $res=mysqli_query($conn,"select * from student_register _table where Username='$Username'");
    $chk=mysqli_num_rows($res);
    if($chk==0)
    {
      $query2="INSERT INTO `student_register _table`(`Name`,`Username`,`Password`,`College`,`Course`,`Graduation %`,'Backlog',`Graduted`)VALUES('$name','$username','$password','$college','$course','$gcgpa','$backlog','$gyear','$1')";
  $result=mysqli_query($conn,$query2) or die("ERROR".mysqli_error($conn));
  
  $query3="INSERT INTO `student_login_table`(`Username`, `Password`,`role_id`) VALUES ('$username','$password','1')";
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

 <input type="text" name="name" id="name" class="form-control rounded-left" placeholder="Name"onclick="spanr()" >
 <span id='msg'></span>
	            <div class="form-group">
	              <input type="text"  name="username" id="username" class="form-control rounded-left" placeholder="Username" onclick="spanr()"></div>
				  <span id='msg15' style="color:red;"></span>
				<div class="form-group">
				<input type="password" name="password" id="password" class="form-control rounded-left" placeholder="Password"  onclick="spanr()"></div>
				 <span id='msg15' style="color:red;"></span>
				 
				 <div class="form-group">
	              <input type="text"  name="college" id="college" class="form-control rounded-left" placeholder="College" onclick="spanr()"></div>
				  <span id='msg15' style="color:red;"></span>
				 
				 
				<div class="form-group">
				<select name="course" id="course"class="form-control rounded-left" id="exampleFormControlSelect2" onclick="spanr()">
                      <option>Course</option>
                      <option>MCA</option>
                      <option>MBA</option>
					   <option>Btec</option> 
					  <option>BCA</option>
                      <option>Bcom</option>
                      
                    </select></div>
					 <span id='msgdis'></span>
				
				<div class="form-group">
	              <input type="text"  name="gcgpa" id="gcgpa" class="form-control rounded-left" placeholder="Graduation %" onclick="spanr()"></div>
				  <span id='msg15' style="color:red;"></span>
				 
				
				
				
				<div class="form-group">
                    <select  name="backlog" id="backlog" class="form-control rounded-left" id="exampleFormControlSelect2" onclick="spanr()">
                      <option>Backlog</option>
                      <option>0</option>
                      <option>1</option>
                    </select></div
					<span id='msgs'></span>
					
				<div class="form-group">
                    <select  name="gyear" id="gyear" class="form-control rounded-left" id="exampleFormControlSelect2" onclick="spanr()">
                      <option>Graduated</option>
                      <option>2018</option>
                      <option>2019</option>
                      <option>2020</option>
					  <option>2022</option>
                    </select></div
					<span id='msgu'></span>
 
                    <br>
					<p> Alrady have an account? <a href="student_login.php" class="btn">Log In </a> </p> 
	
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
<?php
include 'footer.php';
?>
