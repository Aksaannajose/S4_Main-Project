<?php
include 'header.php';
?>


<body style="background-color:#E0F0C8;">

<div style="background-color: grey; width: 500px;"> 


</div>
<div class="container signin">
<br>


<h3> <center> <class="text-center mb-4"> Sign In</h3></center>
<link rel="stylesheet"  href="style.css">
 <form action="login_work.php" method="post" >
 
 <style>
body {
  background-image:  url("./img/engg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
</style>
 
 
     <center>
	 
                <input type="text"  name="Username" id="Username"  placeholder="Username" require>
				<br>
				<input type="Password" name="Password" id="Password"  placeholder="Password" required>
				

               
					<p> Don't have an account? <a href="Register.php" class="btn">Sign Up </a> </p> 
	
 <br> <input type="submit"  name="submit" value="Login"   class="btn-login"/>
 </div>
 </form>
</center>


