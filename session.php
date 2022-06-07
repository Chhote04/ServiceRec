<?php

session_start();
if(empty($_SESSION['e']))
{
	header("location:index.php");
}
?>