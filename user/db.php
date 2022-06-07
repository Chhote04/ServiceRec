<?php

include "../admin_header.php";
?>
<!DOCTYPE html>
<html>
<head>  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SR - Form</title>
	



    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vujahday+Script&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/FAV.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" >
    

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid" style="background: #fae63a;">
	<div class="container" > 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
			<form  action="insert_DB.php" method="post">
			<h1 class="text-center">Bike Service Details</h1>
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']?>" name="">
			<div class="mb-3">
				<label >Customer Name</label>
				<input type="text" name="cn" placeholder="Enter Username" class="form-control" value="<?php echo $_SESSION['n']?>">
			</div>

			<div class="mb-3">
				<label>Email</label>
				<input type="Email" name="em" placeholder="Enter Email" class="form-control" value="<?php echo $_SESSION['e']?>">
			</div>
			<div class="mb-3">
				<label>Mobile No.</label>
				<input type="number" name="mn" placeholder="Enter Mobile Number" class="form-control">
			</div>
			<div class="mb-3">
				<label>Bike Number</label>
				<input type="text" name="bn" placeholder="Enter Bike Number" class="form-control">
			</div>
			<div class="mb-3">
				<div class="mb-3">
				<label>Brand</label>
				<input type="text" name="bra" placeholder="Enter Brand" class="form-control">
			</div>
			<div class="mb-3">
				<label>Model Name</label>
				<input type="text" name="mdn" placeholder="Enter Model Name" class="form-control">
			</div>

			<div class="mb-3">
				<label>Bike Chassis Number</label>
				<input type="number" name="bcn" class="form-control">
			</div>
			<div class="mb-3">
				<label>Service Description</label>
				<textarea name="sd" class="form-control"></textarea>
			</div>
			<div class="mb-3">
				<label>Date and Time</label>
				<input class="form-control" name="sdt" type="datetime-local" id="servic_date_time" >
			</div>
			
		
			<div class="mb-3">
			<button class="btn btn-primary ">Submit</button>
             </div>
		</form>
		</div>
		<div class="col-md-3"></div>
		</div>
	</div>
</div>

</body>
</html>
<?php


include "../footer.php";
?>