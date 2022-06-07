<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			
			<h1 class="text-center bg-denger">Admin Dashboard Registration and login Details</h1>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Username</th>

						<th scope="col">Email</th>
						<th scope="col">Password</th>
						<th scope="col"> Confirm Password</th>
						

					</tr>
				</thead>
				<tbody>
					<?php
					include"dbcon.php";
					$data = "SELECT * FROM registration";
					$result =mysqli_query($con,$data);
					while ($d=mysqli_fetch_array($result)) {
						// echo "<pre>";
      //            		print_r($d);
					

					?>
					<tr>
						<td><?php echo $d['id']?></td>
						<td><?php echo $d['username']?></td>
						<td><?php echo $d['email']?></td>
						<td><?php echo $d['password']?></td>
						<td><?php echo $d['cpassword']?></td>
						
					    <td>

                 		
                 		<a href="edit_rg.php?id=<?php echo $d['id']?>" class="btn btn-info" style="font-size: 10px ; ">Edit</a>
                 	
                 	    </td>
                      
					</tr>
					<?php
                 	}
                 	?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>