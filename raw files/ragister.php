<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>addmiton</title>
</head>
<body>
<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-6" style="position: relative">
            <h1>make an appointment</h1>
            <form class="form"  action="insert_add.php" method="post"  >
                <br>
                <input type="text" name='n' placeholder="Enter Name" id="user" required>
               <br>
                <input type="Email" name='e' placeholder="Enter Email" id="email" required>
                <br>
                <input type="password" name='p' placeholder="Enter password " id="pass" required>
               <br>
               <input type="password"  placeholder="Enter password " id="cpass" required>
              <!--   <textarea class="form-control" name="" placeholder="Enter message"></textarea> -->
                
                <br>
               <!-- <label for="birthdaytime">Birthday (date and time):</label> -->
             <!--   <input class="form-control" type="datetime-local" id="birthdaytime" name="birthdaytime">
               <br> -->
                <!-- <input type="checkbox" name="">i have read all the terms and conditions<a href="">privercy and terms</a>
                <br> -->
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>
<script type="text/javascript">
    
    function validation()
        {
            var user = document.getElementById('email').value;
            var pass = document.getElementById('pass').value;
            var cpass = document.getElementById('cpass').value;
           
            




            if(user==""){
                document.getElementById("username").innerHTML='** please fill the username field';
                return false;
            }
            if((user.length <= 2) || (user.length > 20)) {
                document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
                return false;   
            }
            if(!isNaN(user)){
                document.getElementById('username').innerHTML =" ** only characters are allowed";
                return false;
            }

            // password
            if(pass==""){
                document.getElementById("password").innerHTML='** please fill the password field';
                return false;
            }
            if((pass.length <= 8) || (pass.length > 20)) {
                document.getElementById('password').innerHTML =" ** Passwords lenght must be between  5 and 20";
                return false;   
            }
            if(pass!=cpass){
                document.getElementById('c-password').innerHTML =" ** Passwords does not match the confirm password";
                return false;
            }

</script>
</body>
</html>