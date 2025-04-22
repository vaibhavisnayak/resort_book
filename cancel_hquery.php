<!DOCTYPE html>
<html >
	<head>
		<title>Resort Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<style>
      .m{
        width:30%;
    
        margin:0 auto;
        padding:45px;
        border:7px solid #ccc;
        border-radius:5px;
    }
    </style>
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
		
		

	</ul>
  <br />
<form class="m" action="" method="post">
    <center><h4>Your Booking Information</h4>
    <img src="profle.png"width="150px" ><br>
    <?php
    require_once 'admin/connect.php';
    session_start();


if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $name=$_POST["name"];
    $contact=$_POST["contact"];
    $sql="SELECT guest_id from guest where contactno='$contact'&& firstname='$name'";
   $result=$conn->query($sql);
   if($result->num_rows>0){

    while($row=$result->fetch_assoc()){
      $id=$row['guest_id'];
     
    }
  $result=$conn->query("SELECT * FROM htransaction WHERE guest_id = '$id'");
  $p=$result->num_rows;
    if($p>0){      
        while($row=$result->fetch_assoc()){         
            echo "Guest Id:".$id."<br>";
            
            $r=$row['transaction_id'];
            echo "Name:".$name."<br>";
            echo "Hall Id:".$row['hall_id']."<br>";
            echo "Hall type:".$row['hall_type']."<br>";
            
            echo "Check In:".$row['checkin']."<br>";
            echo "Check Out:".$row['checkout']."<br>";
            echo "Bill:".$row['bill']."<br>";
            echo "</form>";
            $sql="DELETE  from htransaction where guest_id='$id'&& transaction_id='$r'";
        $conn->query($sql);
    }}else{
       echo $conn->error;
    }}else{
     echo "error:".$conn->error;  
    }
}
$conn->close();
session_destroy();
?>  
<br>

<h4>Booking Canceled Succssfully</h4><br>
<h4 Style="color:blue;">Your Payment will be Refunded Within 7days</h4>
</center>
</form>

</body></html>