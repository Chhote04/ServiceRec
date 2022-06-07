<?php
include'../dbcon.php';

if (isset($_POST['approved'])) {
	// echo 'approved';
	$status ="Approved";
	$comment = $_POST['comment'];
	$id =$_POST['id'];

	$data = "UPDATE servicedetails SET status='$status',comment='$comment' where id = $id";
	$result = mysqli_query($con,$data);
	if ($result) {
		header('location:admin.php');

	}
}


if (isset($_POST['rejected'])) {
	$status ="rejected";
	$comment = $_POST['comment'];
	$id =$_POST['id'];

	$data = "UPDATE servicedetails SET status='$status',comment='$comment' where id = $id";
	$result = mysqli_query($con,$data);
	if ($result) {
		header('location:admin.php');
		
	}
}



?>