<?php
session_start();
include("dbcon.php");
$a=$_POST['em'];
$b=$_POST['pw'];


$check = "select * from registration where email='$a' and password='$b'";
$result=mysqli_query($con,$check);
$d=mysqli_fetch_array($result);
// echo '<pre>';
// print_r($result);
$total=mysqli_num_rows($result);
// $d=mysqli_fetch_array($result);
if($total == 1){
	$_SESSION['n']=$d['username'];
	$_SESSION['e']=$d['email'];
	$_SESSION['id']=$d['id'];

	$role = $d['role'];
	if ($role == 1) {
		header("location:user/admin.php");
	}else if ($role == 0) {
		header("location:admin/admin.php");
	}else if ($role == 2) {
		header("location:admin/hr.php");
	}
	}else{
	header("location:index.php");
}

?>