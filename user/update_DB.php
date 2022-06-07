<?php
include"../dbcon.php";
$id =$_POST['id'];
$a =$_POST['cn'];
$b =$_POST['em'];
$c =$_POST['mn'];
$d =$_POST['bn'];
$e =$_POST['bra'];
$f =$_POST['mdn'];
$g =$_POST['bcn'];
$h =$_POST['sd'];
$i =$_POST['sdt'];


$data="UPDATE servicedetails SET cutomername='$a',email='$b',mobilenumber='$c',bikenumber='$d',brand='$e',modelname='$f',bikechassisnumber='$g',servicedescription='$h',dateandtime='$i', where id = $id";
$result=mysqli_query($con,$data);

if($result){
	header('location:display_DB.php');
}
?>