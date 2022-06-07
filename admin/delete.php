<?php

include "../dbcon.php";
$id = $_GET['id'];
$data ="DELETE FROM servicedetails where id = $id";
$result= mysqli_query($con,$data);
if($result){
	header('location:admin.php');
}
?>