<?php

include("../dbcon.php");
$user_id=$_POST['user_id'];
$a=$_POST['cn'];
$b=$_POST['em'];
$c=$_POST['mn'];
$d=$_POST['bn'];
$e=$_POST['bra'];
$f=$_POST['mdn'];
$g=$_POST['bcn'];

$h=$_POST['sd'];
$i=$_POST['sdt'];

$k=$_POST['feedback'];


$data = "insert into servicedetails(user_id,cutomername,email,mobilenumber,bikenumber,brand,modelname,bikechassisnumber,servicedescription,dateandtime,feedback)value('$user_id','$a','$b','$c','$d','$e','$f','$g','$h','$i','$k')";
$result=mysqli_query($con,$data);
if($result){
	header('location:display_DB.php');
}

//for image name change
// file part start
//$filename =$_FILES['image']['name'];
//$tmpname =$_FILES['image']['tmp_name'];

//$new_img_name = md5(rand()).'.' .$filename;

//$file = "upload/". $new_img_name;
//move_uploaded_file($tmpname,$file);

// file part end
?>
