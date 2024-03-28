<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script type="text/javascript" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<th>Name</th>
				<th>IPAddress</th>
				<th>Foundationnumber</th>
				<th>Date</th>
				<th>Phonenumber</th>
				<th>Timein</th>
				<th>Timeout</th>


				
			</thead>
			<tbody>
				<?php
				include('config.php');
				$query="select * from empform ";
				$res=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($res))
				{
					$Name=$row[0];
					echo"<tr>";
					echo"<td>".$row[0]."</td>";
					echo"<td>".$row[1]."</td>";
					echo"<td>".$row[2]."</td>";
					echo"<td>".$row[3]."</td>";
					echo"<td>".$row[4]."</td>";
					echo"<td>".$row[5]."</td>";
					echo"<td>".$row[6]."</td>";
					
					echo"<td><a href='upt1.php?refer=$id' class='btn btn-primary'>update</a></td>";
					echo"<td><a href='delete.php?refer=$id' class='btn btn-danger'>delete</a></td>";
					echo"</tr>";
					
				}
				?>
			</tbody>
		</table>
	</div>

</body>
</html>