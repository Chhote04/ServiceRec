<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">
			    <img style="width: 68px;" src="../image/1.png">
		    </a>
		   
    <button class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse"  style="width: 77px;" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto">
        
        <li><a class="nav-link nav-link2 active" href="dashboard.php">HOME</a></li>
				<li><a class="nav-link nav-link2 active" href="all_sr.php">Service History</a></li>
       
        <li>
          
               
        </li>
        <li style="margin:10px;">
           <a href="../logout.php" class="btn btn-primary" style="text-decoration:none;">
                	Logout</a>
                </li>
        </li>
      </ul>
    </div>
  </div>
</nav>




<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height: 225px; margin-top: 90px; " src="../image/images.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 225px; margin-top: 90px;" src="../image/4b660fd0fcc3a8f0b36266aa45d941f0.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 225px; margin-top: 90px;" src="../image/images.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	
<div class="container-fluid"  style="background: #fae63a;">
	<div class="container">
		<div class="row">
			<h1 class="text-center">All service History</h1>
			
		    <div class="col-md-12 table-responsive">
				
			<table class="table">
				<thead>
					<tr>
						<th scope="col">S No.</th>
						<th scope="col">Cutomer Name</th>

						<th scope="col">Email</th>
						<th scope="col">Bike Number</th>
						<th scope="col">Brand</th>
						<th scope="col">Model Name</th>
						<th scope="col">Date and Time</th>
						<th scope="col">Service Charge</th>
						<th scope="col">status</th>
                        

					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
					
					include"../dbcon.php";
					
					$data = "SELECT * FROM servicedetails";
					$result =mysqli_query($con,$data);
					
					while ($d=mysqli_fetch_array($result)) {
						// echo "<pre>";
      //            		print_r($d);
					

					?>
					<tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo $d['cutomername']?></td>
						<td><?php echo $d['email']?></td>
						<td><?php echo $d['bikenumber']?></td>
						<td><?php echo $d['brand']?></td>
						<td><?php echo $d['modelname']?></td>
						<td><?php echo $d['dateandtime']?></td>
						<td><?php echo $d['servicecharge']?></td>
						<td><?php echo $d['status']?></td>
					    
                      
					</tr>
					<?php
                 	}
                 	?>
				</tbody>
			</table>
			</div>
		    
			
		</div>
	</div>
</div>
</body>
</html>
<?php


include "../footer.php";
?>