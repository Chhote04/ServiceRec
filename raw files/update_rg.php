<?php
include"dbcon.php";
$id =$_POST['id'];
$a =$_POST['uname'];
$b =$_POST['em'];
$c =$_POST['pw'];
$d =$_POST['cpw'];


$data="UPDATE registration SET username='$a',email='$b',password='$c',cpassword='$d' where id = $id";
$result=mysqli_query($con,$data);

if($result){
	header('location:display_rg.php');
}


?>