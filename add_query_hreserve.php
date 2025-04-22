<?php
session_start();
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_hall'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['idate'];
		$checkout=$_POST['odate'];
		
		
		 if( isset($_SESSION['idate'])){
			header("Location:hpay.php");
			
		 }
		 if( isset($_SESSION['hall_type'])){
			header("Location:hpay.php");
			
		 }
		
		$conn->query("INSERT INTO `guest` (firstname, middlename, lastname, address, contactno) VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactno')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		
		$query2 = $conn->query("SELECT * FROM `htransaction` WHERE `checkin` = '$checkin' && `hall_id` = '$_REQUEST[hall_id]' && `status` = 'NotAvailable'") or die(mysqli_error());
		$row = $query2->num_rows;
		if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Must be present date')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							$q_date = $conn->query("SELECT * FROM `htransaction` WHERE `status` = 'Available'") or die(mysqli_error());
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
							
							
							$hall_id = $_REQUEST['hall_id'];
							$cin =strtotime( $_POST['idate']);
		                    $cout=strtotime($_POST['odate']);
                            $c=$cout-$cin;
							if($c<0){
								echo "<script>alert('Invalid check out')</script>";
							 }else{
							$days=floor($c/(60*60*24));
							$q=$conn->query("SELECT price, hall_type FROM hall where hall_id= '$hall_id'");
							while($fetch = $q->fetch_array()){
					        $f=$fetch['price'];
							$h=$fetch['hall_type'];
						
							}
							$bill=($days*(int)$f);
							$conn->query("INSERT INTO `htransaction`(guest_id, hall_id, hall_type,status, checkin,checkout,days,bill) VALUES('$guest_id', '$hall_id','$h', 'NotAvailable', '$checkin','$checkout','$days','$bill')") or die(mysqli_error());
						
							$_SESSION['idate']=$checkin;
							header("location:hpay.php");
							$_SESSION['hall_type']=$h;
							header("location:hpay.php");
							exit();
						}}else{
							echo "<script>alert('Error Javascript Exception!')</script>";
						}
				}	
			}	
	}	
	session_destroy();
?>