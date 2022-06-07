<?php

include'../dbcon.php';

if (isset($_POST['feedback'])) {
	// echo 'approved';
	
	$feedback = $_POST['feedback'];
	$id =$_POST['id'];

	$data = "UPDATE servicedetails SET feedback='$feedback' where id = $id";
	$result = mysqli_query($con,$data);
	if ($result) {
		header('location:admin.php');

	}
}



?>
