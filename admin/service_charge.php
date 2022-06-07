<?php
include'../dbcon.php';

if (isset($_POST['update'])) {
	// echo 'approved';
	
	$servicecharge = $_POST['servicecharge'];
	$id =$_POST['id'];

	$data = "UPDATE servicedetails SET servicecharge='$servicecharge' where id = $id";
	$result = mysqli_query($con,$data);
	if ($result) {
		header('location:admin.php');

	}
}



?>