<?php
include "dbcon.php";
$gg = $_GET['id'];
$data = "SELECT * FROM registration where id = $gg";
$result = mysqli_query($con,$data);
$bb = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<!-- CSS only --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vujahday+Script&display=swap" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<form  action="update_rg.php" method="post">
			<h1 class="text-center">Update User Details</h1>
			<div class="mb-3">
				<input type="hidden" name="id"  value="<?php echo $bb['id']?>">
				<label>Customer Name</label>
				<input type="text" name="uname"  value="<?php echo $bb['username']?>" class="form-control">
			</div>

			<div class="mb-3">
				<label>Email</label>
				<input type="Email" name="em"  value="<?php echo $bb['email']?>" class="form-control">
			</div>
			<div class="mb-3">
				<label>Password</label>
				<input type="text" name="pw"  value="<?php echo $bb['password']?>" class="form-control">
			</div>
			<div class="mb-3">
				<label>C Password</label>
				<input type="text" name="cpw"  value="<?php echo $bb['cpassword']?>" class="form-control">
			</div>
			
			
			<button class="btn btn-primary">Submit</button>

		</form>
		</div>
	</div>

</body>
</html>