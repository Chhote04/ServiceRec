<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Bike Service</title>


<!-- CSS only --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 <!--    <link rel="stylesheet" type="text/css" href="css/mob_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/ipad_rsponsive.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vujahday+Script&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/FAV.png">

<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-da fixed-top hnav">
	    <div class="container-fluid">
		    <a href="#" class="navbar-brand">
			    <img style="width: 68px;" src="image/R.jpeg">
		    </a>
		    
		   
		<!-- toggler button -->
		<!--buttpn start --->
			<button style="color: whitesmoke!important;" class="navbar-toggler" data-bs-target="#ab" data-bs-toggle="collapse" >
				<span class="navbar-toggler-icon" style="color: whitesmoke;" ></span>
			</button>
		<!---button end--->
		<div class="collapse navbar-collapse" id="ab" style="color: whitesmoke!important;">
			<ul class="navbar-nav ms-auto">
				<!-- <li class="list"><a class="nav-link nav-link2 active" href="">HOME</a></li>
				<li class="list"><a class="nav-link nav-link2 active" href="">ABOUT</a></li>
				<li class="list"><a class="nav-link nav-link2 active" href="">SERVICE</a></li>
				<li class="list"><a class="nav-link nav-link2 active" href="">OTHER</a></li> -->
				<li class="list">
                
                <a href="logout.php" class="btn btn-primary" style="text-decoration:none;">
                	Logout</a>
                </li>
       
				<li class="list">
				<input type="checkbox" id="shows">
                <label for="shows" class="btn btn-primary">
                	<?php
                  
                  include 'session.php';

                  echo $_SESSION['n']; 
		               ?></label>
                </li>
			</ul>
		</div>
	
    </div>
</nav>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height: 225px;" src="image/images.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 225px;" src="image/4b660fd0fcc3a8f0b36266aa45d941f0.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 225px;" src="image/images.jpeg" class="d-block w-100" alt="...">
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
	
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-12 text-center bg-denger">
				<h1>Bike Details </h1>
				<a href="http://localhost/addmitionform/db.php"><button class="btn btn-primary" style="width: 128px;">Cilck HERE</button></a>
				<h1>Employee Details</h1>
				<a href="http://localhost/addmitionform/db.php"><button class="btn btn-primary" style="width: 128px;">Cilck HERE</button></a>
				<h1>Products Sale and Purchase Details</h1>
				<a href="http://localhost/addmitionform/db.php"><button class="btn btn-primary" style="width: 128px;">Cilck HERE</button></a>
			</div>
		</div>
	</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12"><br><br>
					<b><h1 style="font-family: 'cursive;'; font-size:39px;   line-height: 50px; letter-spacing: 3px; color: #0fff;"> <span style="color: #fad00;">CONTACT</span>US</h1></b>
					<p style="color: #0fff; font-size:15px; line-height: 20px;">With as much love as you make portraits for your dear ones, I prepare the orders given by you with equal love. In my work you will always find beauty that attractiveness. It has always been my aim to make the order placed by you beautiful and attractive. I do not guarantee that my customer is 100% satisfied with my work, but I give my 200% in your work, but my customers are 99% satisfied with my work.</p>
					<br>
					<br>
					<div class="row">
						<div class="col-md-6">
							<span style="color:white;">
								<strong style="color:#fcb21b;">Address</strong>
								<br> kati Ghati A.B. Road lashkar Gwalior (474010) Madhya Pradesh India. 
							</span>
						</div><br>
						<div class="col-md-6">
							<span style="color:white;">
								<strong style="color:#fcb21b;">FOR Enquiry </strong>
								<br>  Mobile: <a style="text-decoration: none; color:#fcb21b;" href=""><b>+919977434313</b></a> 
								<br> Email: <a style="text-decoration: none; color:#fcb21b;" href=""><b>khanarifart15@gmail.com</b></a> 
							</span>
						</div>
					   
				
					    </div>
              <div class="social-icons text-left fs" style="font-size: 25px;">
							
							<a href="https://www.instagram.com/arif_khan.15/" target="_blank" rel="noreferrer"><i class="fab fa-instagram"></i></a>
						</div>	
 			</div>
           
	</div>
</div>

</body>
</html>