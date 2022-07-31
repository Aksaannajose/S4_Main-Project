<?php
//database connection
include('connection.php');
$id = $_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM `card_activation` WHERE `id` = '$id'");
$rows=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"  />
<meta http-equiv="X-UA-Compatible"content="width=device">
<meta name="viewport"  content="width=device">
<title></title>
<link rel="stylesheet"  href="stylejob.css"  />
</head>
<body>

<div class="container">
<div class="apply_box">
<h1><font color=Black><span class="title_small"></span>
</h1>

<img src='upload_images/<?php echo $rows["image"]; ?>' width=100px height=150px>
<br>
<br>

<p style="margin-left:-100px;width:300px;height:40px;margin-top:65px"><b>Placed at</p></b>
<input readonly style="margin-left:-550px;width:300px;height:40px"
id="placed company" 
type="text"
name="placed company"
value="<?php echo  $rows['placed company'];?>"> 

<!--<img src='upload_images/<?php echo $rows["image"]; ?>' width=100px height=150px>-->

<form action="addCourse function.php" method="POST">
<div class="form_container">
<div class="form_control">
<p >Student Id.</p>
<input readonly style="width:300px;height:40px"
id="card_no"
type="number"
name="card_no"
value="<?php echo  $rows['u_card'];?>"> 
</div><br><br>

<p style="margin-left:-550px;width:300px;height:40px;margin-top:65px"><b>First Name</p></b><br><br>
<input readonly
id="user_first_name"  style="margin-left:0px;width:300px;height:40px;margin-top:-35px"
type="text"
name="user_first_name"
value="<?php echo  $rows['u_f_name'];?>"> 
</div><br>


<p style="margin-left:-110px;width:300px;height:40px;margin-top:-10px"><b>Last Name</p></b>
<input  readonly style="margin-left:-550px;width:300px;height:40px;margin-top:-80px"
id="user_last_name"
type="text"
name="user_last_name"
value="<?php echo  $rows['u_l_name'];?>"> 
</div><br>





<!--<img src='upload_images/<?php echo $row["image"]; ?>' width=60px height=60px>-->


<!--<div class="button_container">
<button type="submit" <font color=grey name="submit">Add</button>
</div>-->

</div>
</html>
</body>
</form>