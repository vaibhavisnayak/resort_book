<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Resort Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Resort Online Reservation</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "contactus.php">Contact us</a></li> |
		<li><a href = "gallery.php">Gallery</a></li> |
		<li><a href = "hallbooking.php">Hall Booking</a></li> |
		<li><a href = "reservation.php">Room Booking</a></li> |
		<li><a href = "cancel.php">Cancel</a></li>
		

	</ul>
	<div class = "container-fluid">	
		<div class = "panel panel-default">
		
			<div class = "panel-body">
				
				<a class = "btn btn-info disabled"> Cancel Room</a>
				<a class = "btn btn-warning" href = "cancel_hall.php"> Cancel Hall</a>
				<br />
				<br />
  
  
  
    <center><h2> CANCEL YOUR ROOM BOOKING</h2><br><br>
    <form action="cancel_query.php" method="post">
        <h4>Enter your First Name:</h4>
        <input type="text" name="name" required><br>
        <h4>enter your phone number:</h4>
        <input type="text" name="contact" required><br><br>
        <input type="submit" value="your booking canceled ">
</form>
</center>
</div>
</div></div>
 </body>
</html>