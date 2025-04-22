<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Resort Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Resort Online Reservation</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Home</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li class = "active"><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room</a></li>		
			<li><a href = "hall.php">Hall</a></li>	
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">	
		<div class = "panel panel-default">
			
			<div class = "panel-body">
				<a class = "btn btn-success disabled">Guest Info</a>
				<a class = "btn btn-info" href = "checkin.php"> Room Info</a>
				<a class = "btn btn-warning" href = "checkout.php"> Hall Info</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>First Name </th>
							<th>Middle Name</th>
							
							<th>Last Name</th>
							<th>Contact No</th>
							<th>Address</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM guest") or die(mysqli_error());
							while($fetch = $query->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $fetch['firstname']?></td>
							<td><?php echo $fetch['middlename']?></td>
							<td><?php echo $fetch['lastname']?></td>
							<td><?php echo $fetch['contactno'] ?></strong></td>
							<td><?php echo $fetch['address']?></td>
							
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
	
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>

</html>