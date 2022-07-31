<?php
include("connection.php");

$id=$_GET['id'];
$status=$_GET['status'];
$q="update college_registration_table  set Status=$Status where  id=$id";

mysqli_query($conn,$q);
header('location:admin.php');
?>