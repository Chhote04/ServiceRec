<?php

include "../admin_header.php";
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SR - View Service Records</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid" style="background: #fae63a;">
	<div class="container table-responsive">
		<div class="row">
			<h1>Service History in Details</h1>
			<table class="table">
				<tr><thead>
					<?php
					include"../dbcon.php";
				    
					$rt=$_GET['id'];
					$data = "SELECT * FROM servicedetails where id = '$rt'";
					$result =mysqli_query($con,$data);
					while ($d=mysqli_fetch_array($result)) {
						// echo "<pre>";
      //            		print_r($d);
					

					?>

					<td><b><?php echo $d['modelname']?>'s Details</b></td></thead>
				</tr>
				<?php
                 	}
                 	?>
			</table>
			<h3></h3>
			<table class="table">
				<thead style="font-size: 12px;">
					<tr>
						<th scope="col">S No.</th>
						<th scope="col">Cutomer Name</th>

						<th scope="col">Email</th>
						<th scope="col">Mobile Number</th>
						<th scope="col">Bike Number</th>
						<th scope="col">Brand</th>
						<th scope="col">Model Name</th>
						<th scope="col">Bike Chassis Number</th>
						<th scope="col">Service Description</th>
						<th scope="col">Date and Time</th>
						
                        <th scope="col">Feedback</th>
                       <th scope="col">Service Charges & Updates</th>
                        <th scope="col">Action</th>

					</tr>

				</thead>
				<tbody style="font-size: 12px;">
					<?php
					$i=1;
					include"../dbcon.php";
					$rt=$_GET['id'];
					$data = "SELECT * FROM servicedetails where id = '$rt'";
					$result =mysqli_query($con,$data);
					while ($d=mysqli_fetch_array($result)) {
						// echo "<pre>";
      //            		print_r($d);
					

					?>
					<tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo $d['cutomername']?></td>
						<td><?php echo $d['email']?></td>
						<td><?php echo $d['mobilenumber']?></td>
						<td><?php echo $d['bikenumber']?></td>
						<td><?php echo $d['brand']?></td>
						<td><?php echo $d['modelname']?></td>
						<td><?php echo $d['bikechassisnumber']?></td>
						<td><?php echo $d['servicedescription']?></td>
						<td><?php echo $d['dateandtime']?></td>
						
						<td><?php echo $d['feedback']?></td>
						<td><?php echo $d['comment']?></td>
					    <td>
                 		<a href="edit_DB.php?id=<?php echo $d['id']?>" class="btn btn-info" style="font-size: 10px ; ">Feedback</a>
                 		<!-- <a href="delete_DB.php?id=<?php echo $d['id']?>" class="btn btn-danger" style="font-size: 10px ; ">Delete</a> -->
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