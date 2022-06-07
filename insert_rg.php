<?php
include("dbcon.php");
$a=$_POST['un'];
$b=$_POST['em'];
$c=$_POST['pw'];
$d=$_POST['cpw'];

$emailcheck = mysqli_query($con,"select * from registration where email='$b'");
if(mysqli_num_rows($emailcheck)>0)
{
	echo"<h1> Email already exist</h1>";
}else{


    $data = "insert into registration(username,email,password,cpassword)value('$a','$b','$c','$d')";
    $result=mysqli_query($con,$data);
    if($result){
	header('location:index.php');
   }
}
?>