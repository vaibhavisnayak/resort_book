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
		<li><a href = "cancel.php">Cancel</a></li>|
		<li><a href = "rulesandregulation.php">Rules and Regulation</a></li>
		

	</ul>
    <?php
require_once 'connect.php';
session_start();
if(isset($_POST['cancel'])){
	$d=$_SESSION['id'];
    $r=$_SESSION['r'];
    $sql_i="SELECT * from transaction where guest_id='$d'";
    if($conn->query($sql_i)===true){
        $sql="DELETE * from transaction where guest_id='$d'&& transaction_id='$r'";
        $conn->query($sql);
        echo"dd";
    }else{
		$conn->error;
	}
    
}
session_destroy();
?>
      </body></html>