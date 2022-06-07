<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Bike Service</title>


<!-- CSS only --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mob.css">
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
<nav class="navbar navbar-expand-md fixed-top hnav">
	<div class="container-fluid">
		<a href="#" class="navbar-brand">
			<img style="width: 68px;" src="image/1.png">
		</a>
        
		<!-- toggler button -->
		<!--buttpn start --->
			<button style="color: whitesmoke!important;" class="navbar-toggler" data-bs-target="#ab" data-bs-toggle="collapse" >
				<span class="navbar-toggler-icon" style="color: whitesmoke;" ></span>
			</button>
		<!---button end--->
		<div class="collapse navbar-collapse" id="ab" style="color: whitesmoke!important;">
			<ul class="navbar-nav ms-auto">
				<li class="list"><a class="nav-link nav-link2 active" href="">HOME</a></li>
				<li class="list"><a class="nav-link nav-link2 active" href="">ABOUT</a></li>
				<li class="list"><a class="nav-link nav-link2 active" href="">SERVICE</a></li>
				
				<li class="list">
                    <input type="checkbox" id="show">
                    <label for="show" class="btn btn-primary">Login</label>
                    <div class="container">
                    <label for="show" class="close-btn" title="close">×</label>
                    <h1>Welcome</h1>
                    <form action="lg_check.php" method="post">
                        <label>Email</label>
                        <input type="text" name="em">
                        <label>Password</label>
                        <input type="password" name="pw">
                        <a href="#">Forgot Password?</a>
                        <button>Submit</button>
                        <div class="link">Not a member? <a href="#">Sigup here</a></div>
            
                    </form>
                    </div>
                </li>
				<li class="list">
                    <input type="checkbox" id="shows">
                    <label for="shows" class="btn btn-primary">Registration</label>
                    <div class="container">
                        <label for="shows" class="close-btn" title="close">×</label>
                        <h1>Welcome</h1>
                        <form   action="insert_rg.php" method="post" >
            
                          <input type="text" name="un" placeholder="Enter Username"  style="color:red;">
                          
                          <input type="Email" name="em" placeholder="Enter Email" id="email" style="color:red;">
                          <span id="email" class=" bg-danger text-white" ></span>
                          <input type="password" name="pw" placeholder="Enter Password" id="pass" style="color:red;">
                          <span id="pass" class=" bg-danger text-white" ></span>
                          <input type="password" name="cpw" placeholder="Enter Confirm Password" id="cpass" style="color:red;">
                          <span id="c-pass" class=" bg-danger text-white" ></span>
                          <!-- <a href="#">Forgot Password?</a> -->
                          <button class="btn btn-primary">Submit</button>
                          <!-- <div class="link">Not a member? <a href="#">Sigup here</a></div> -->
            
                      </form>
                  </div>
                </li>
			</ul>
		</div>
	
    </div>
</nav>

<div class="container-fluid df">
  <br><br><br><br>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <h1 class="d-block w-100" >Record Your Vehicle Service  and Product Purchase Details</h1>
    </div>
    <div class="carousel-item">
      <h2 class="d-block w-100 text-white" >Don't forget to Servicing or repair you vehicles </h2>
    </div>
   
  </div>
</div>


</div>
<div class="container-fluid bg-dark" >
	<div class="row">
		<div class="col-md-6">
			<img style="width:142px;" src="image/footer_logo.jpg">
		</div>
		<div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h1>Support</h1>
                    <h4>clsuman03@gmail.com</h4>
                </div>
                <div class="col-md-6">
                    <br>
                    <h1>Contact Us</h1>
                    <h4>+917222979886</h4>
                </div>
                
            </div>
			
		</div>
	</div>

<script type="text/javascript">
    
    function validation()
        {
            var user = document.getElementById('email').value;
            var pass = document.getElementById('pass').value;
            var cpass = document.getElementById('cpass').value;
           
            




            if(email==""){
                document.getElementById("email").innerHTML='** please fill the username field';
                return false;
            }
            if((email.length <= 2) || (user.length > 20)) {
                document.getElementById('email').innerHTML =" ** Username lenght must be between 2 and 20";
                return false;   
            }
            if(!isNaN(email)){
                document.getElementById('email').innerHTML =" ** only characters are allowed";
                return false;
            }

            // password
            if(pass==""){
                document.getElementById("pass").innerHTML='** please fill the password field';
                return false;
            }
            if((pass.length <= 8) || (pass.length > 20)) {
                document.getElementById('pass').innerHTML =" ** Passwords lenght must be between  5 and 20";
                return false;   
            }
            if(pass!=cpass){
                document.getElementById('c-pass').innerHTML =" ** Passwords does not match the confirm password";
                return false;
            }
 }
</script>
</body>
</html>