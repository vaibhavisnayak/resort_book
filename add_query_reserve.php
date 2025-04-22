<?php
session_start();
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_guest'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['idate'];
		$checkout=$_POST['odate'];
		$extra=(int)$_POST['extra_bed'];
		$room_no=$_POST['room_no'];
		
	    if(isset($_SESSION['room_no']) ){
			header("Location:payment-1.php");
		
		}
		 if( isset($_SESSION['idate'])){
			header("Location:payment-1.php");
			
		 }
			if(isset($_SESSION['extra_bed'])){
			header("Location:payment-1.php");
			exit();
		}
		
		$conn->query("INSERT INTO `guest` (firstname, middlename, lastname, address, contactno) VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactno')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'NotAvailable'&& 'room_no'='$room_no'") or die(mysqli_error());
		$row = $query2->num_rows;
		if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Must be present date')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Available'") or die(mysqli_error());
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>	
										</li>
									</ul>";
							}
						"</div>";
				}else{	
						if($guest_id = $fetch['guest_id']){
							
							
							$room_id = $_REQUEST['room_id'];
							$cin =strtotime( $_POST['idate']);
		                    $cout=strtotime($_POST['odate']);
                            $c=$cout-$cin;
							 if($c<0){
								echo "<script>alert('Invalid check out')</script>";
							 }else{
							$days=floor($c/(60*60*24));
							$q=$conn->query("SELECT price FROM room where room_id= '$room_id'");
							while($fetch = $q->fetch_array()){
					        $f=$fetch['price'];
							}
							$bill=($days*(int)$f)+((int)$extra*800);
							$conn->query("INSERT INTO `transaction`(guest_id, room_id,room_no, status, checkin,checkout,days,extra_bed,bill) VALUES('$guest_id', '$room_id','$room_no', 'NotAvailable', '$checkin','$checkout','$days','$extra','$bill')") or die(mysqli_error());
							$_SESSION['room_no']=$room_no;
							header("location:payment-1.php");
							
							$_SESSION['extra_bed']=$extra;
							header("location:payment-1.php");
						
							$_SESSION['idate']=$checkin;
							header("location:payment-1.php");
							exit();
						}}else{
							echo "<script>alert('Error Javascript Exception!')</script>";
						}
				}	
			}	
	}	
	session_destroy();
?>