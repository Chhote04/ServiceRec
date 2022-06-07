<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <!-- CSS only --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
 <!--    <link rel="stylesheet" type="text/css" href="css/mob_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/ipad_rsponsive.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vujahday+Script&display=swap" rel="stylesheet">
 
    <link rel="icon" type="image/x-icon" href="../image/R.png">
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">
			    <img style="width: 68px;" src="../image/SR.png">
		    </a>
		     <label style="margin-left: 42px;" for="shows" class="btn btn-dark">
                	<?php
                  include "dbcon.php";
                  include 'session.php';

                  echo $_SESSION['n'];   
		               ?></label>
    <button class="navbar-toggler" data-bs-target="#ab"  data-bs-toggle="collapse" style="width: 77px;" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse " id="ab">
      <ul class="navbar-nav ms-auto">
        
        <li><a class="nav-link nav-link2 active" href="admin.php">Home</a></li>
				<li><a class="nav-link nav-link2 active" href="display_DB.php">Service History</a></li>
       
        <li>
          
               
        </li>
        <li style="margin:10px;">
           <a href="../logout.php" class="btn btn-dark" style="text-decoration:none;">
                	Logout</a>
                </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleFade" style="margin-top:90px;" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height: 355px;" src="../image/ib1.jpg" class="d-block w-100" alt="../image/ib1.jpg">
    </div>
    <div class="carousel-item">
      <img style="height: 355px;" src="../image/ib2.jpg" class="d-block w-100" alt="../image/ib2.jpg">
    </div>
    <div class="carousel-item">
      <img style="height: 355px;" src="../image/ib3.jpg" class="d-block w-100" alt="../image/ib3.jpg">
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
  





</body>
</html>