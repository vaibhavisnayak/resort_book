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
          <center> 
          <div style = "margin-left:70; width: 500px;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Your Booking Information</h3></strong> 
          <?php
          
   session_start();
   require_once 'admin/connect.php';
  
   $room_no=$_SESSION['room_no'];
   $extra_bed=$_SESSION['extra_bed'];
   $checkin=$_SESSION['idate'];
   $sql = ("SELECT room_id,guest_id,checkout,bill FROM transaction WHERE room_no='$room_no' && extra_bed='$extra_bed' && checkin='$checkin'");
   $result=$conn->query($sql);
   if($result->num_rows>0){
   while($fetch= $result->fetch_assoc()){
    echo "Guest Id:".$fetch['guest_id']."<br>";
    echo "Room Id:".$fetch['room_id']."<br>";
    $_SESSION['edit']=$fetch['room_id'];
   
    echo "Checkin Date:".$checkin."<br>";
    echo "Checkout Date:".$fetch['checkout']."<br>";
    echo "Extra Bed:".$extra_bed."<br>";
    echo "Total Bill:".$fetch['bill']."<br>";
   }
     }else{
      echo"no records";
     } 
     if(isset($_POST['edit'])){
      $sql="DELETE  FROM transaction WHERE room_no='$room_no' && extra_bed='$extra_bed' && checkin='$checkin'";
      $conn->query($sql);
     header("Location:reservation.php");
     }
     $conn->close();
    
    ?>
  <br>
  <form action="" method="post">
  <input class = "btn btn-info" type='submit' value='Edit' name='edit'><br>
    </form><br>
 <form action="card.php" method="post">
 <input class = "btn btn-info" type='submit' value="Proceed To Pay">
 </form>
    </div>
    </div></div>
          <center>

      
</body>
</html>