<?php
include 'header.php';
?>


<body style="background-color:#E0F0C8;">

<div style="background-color: grey; width: 500px;"> 


</div>
<div class="container signin">
<br>


<h3> <center> <class="text-center mb-4"> Log In</h3></center>
<link rel="stylesheet"  href="style.css">
 <form action="student_login_work.php" method="post" >
 
 <style>
body {
  background-image:  url("./img/5018_login.webp");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
</style>
 
 
     <center>
	 
                <input type="text"  name="username" id="username"  placeholder="Username" require>
				<br>
				<input type="password" name="password" id="password"  placeholder="Password" required>
				

               
					<p> Don't have an account? <a href="student_register.php" class="btn">Register </a> </p> 
	
 <br> <input type="submit"  name="submit" value="Login"   class="btn-login"/>
 </div>
 </form>
</center>


<?php
include 'footer.php';
?>





