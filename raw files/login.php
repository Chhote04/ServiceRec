<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>addmiton</title>
    <style type="text/css">
        
        body{
  height: 100vh;
  text-align: center;
}
  /*Trigger Button*/
.login-trigger {
  font-weight: bold;
  color: #fff;
  background: linear-gradient(to bottom right, #B05574, #F87E7B);
  padding: 15px 30px;
  border-radius: 30px;
  position: relative; 
  top: 50%;
}

/*Modal*/
h4 {
  font-weight: bold;
  color: #fff;
}
.close {
  color: #fff;
  transform: scale(1.2)
}
.modal-content {
  font-weight: bold;
  background: linear-gradient(to bottom right,#F87E7B,#B05574);
}
.form-control {
  margin: 1em 0;
}
.form-control:hover, .form-control:focus {
  box-shadow: none;  
  border-color: #fff;
}
.username, .password {
  border: none;
  border-radius: 0;
  box-shadow: none;
  border-bottom: 2px solid #eee;
  padding-left: 0;
  font-weight: normal;
  background: transparent;  
}
.form-control::-webkit-input-placeholder {
  color: #eee;  
}
.form-control:focus::-webkit-input-placeholder {
  font-weight: bold;
  color: #fff;
}
.login {
  padding: 6px 20px;
  border-radius: 20px;
  background: none;
  border: 2px solid #FAB87F;
  color: #FAB87F;
  font-weight: bold;
  transition: all .5s;
  margin-top: 1em;
}
.login:hover {
  background: #FAB87F;
  color: #fff;
}

    </style>
</head>
<body>

<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-6" style="position: relative">
            <h1>make an appointment</h1>
            <form class="form"  action="login_check.php" method="post"  >
                <br>
                
                <input type="Email" name='e' placeholder="Enter Email"  required>
                <br>
                <input type="password" name='p' placeholder="Enter password " required>
               <br>
              
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>
</body>
</html>