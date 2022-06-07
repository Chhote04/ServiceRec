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
 

<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">
			    <img style="width: 68px;" src="../image/1.png">
		    </a>
		     <label style="margin-left: 42px;" for="shows" class="btn btn-dark">
                	<?php
                  
                 

                  echo $_SESSION['n']; 
		               ?></label>
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
           <a href="logoutad.php" class="btn btn-dark" style="text-decoration:none;">
                	Logout</a>
                </li>
        </li>
      </ul>
    </div>
  </div>
</nav>





</body>
</html>