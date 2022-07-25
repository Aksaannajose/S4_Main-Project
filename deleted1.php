if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM company_registration_table  WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}