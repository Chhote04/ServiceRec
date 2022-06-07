<?php
include "dbcon.php";
$id = $_GET['id'];
$data ="DELETE FROM registration where id = $id";
$result= mysqli_query($con,$data);
if($result){
	header('location:display_rg.php');
}
?>