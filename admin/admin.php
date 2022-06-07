<?php


include "../admin_header.php";
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid" style="background: #fae63a;">
	<div class="container">
		<div class="row table-responsive">
			
			<h1>Service History</h1>
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
						
						<th scope="col">status</th>
						<th scope="col">Service Charges & Update</th>
						<th scope="col"></th>
            <th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
					
					include"../dbcon.php";
					
					$data = "SELECT * FROM servicedetails";
					$result =mysqli_query($con,$data);
					
					while ($d=mysqli_fetch_array($result)) {
					?>
					<tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo $d['cutomername']?></td>
						<td><?php echo $d['email']?></td>
						<td><?php echo $d['bikenumber']?></td>
						<td><?php echo $d['brand']?></td>
						<td><?php echo $d['modelname']?></td>
						<td><?php echo $d['dateandtime']?></td>
				
						<td><?php echo $d['status']?></td>
					
				<td>
		        <form method="post" action="status_update.php" >
		        <textarea name="comment"> </textarea> 
		        </td>  	
		        <input type="hidden" name="id" value="<?php echo $d['id'];?>">
		        <td>
		        
                    <button type="submit" name="approved" class="btn btn-dark">Approved</button>
		    	    <button type="submit" name="rejected" class="btn btn-danger">Reject</button>
		        </form>
		        </td>
					  <td>                               		
                 		<a href="delete.php?id=<?php echo $d['id']?>" class="btn btn-danger" style="font-size: 10px ; ">Delete</a>
                 	    </td>
                      
					</tr>
					<?php
                 	}
                 	?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php


include "../footer.php";
?>