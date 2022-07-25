
		<?php
require('db.php');
include("connection.php");
$id=$_REQUEST['unblock'];
echo $id;
mysqli_query($connection,"update  placed_table set pstatus='0' where id=$id"); 
header('location:adminview.php');
?>