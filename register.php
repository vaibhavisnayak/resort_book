<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root"; // Default username for WAMP
$password = ""; // Default password for WAMP
$database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables to store user input
$name = "";
$email = "";
$phone = "";
$addr="";
$adno="";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $addr=$_POST["addr"];
     $adno=$_POST["adno"];
$sql="select * from rege where email='$email' ";
$result=$conn->query($sql);
        if ($result ->num_rows> 0) {
            $error="Username already exists";
           
        } else {
            $sql = "INSERT INTO rege (name, email,phone,addr,adno) VALUES ('$name', '$email','$phone','$addr','$adno')";
            if ($conn->query($sql) === TRUE) {
                $error="regstraton successful";
                echo "<script>alert('$msg');</script>";
                $_SESSION["name"] = $name;
                header("Location: login.php"); // Redirect to welcome page
                exit();
            } else {
                $error = "Error: " . $sql . "<br>" . $conn->error;
            }
        
    }
}
?>
<html><head><title>registration from</title>
<style>
    body{
        background-image: url('login2.jpg');
        background-size:cover;
       float:RIGHT;
    }
    form{
        width:50%;
    background-color:black;
        margin:0 auto;
        padding:45px;
        border:7px solid #ccc;
        border-radius:5px;
    }
    input[type="submit"]{
        padding:10px 20px;
        font-size:25px;
        border-radius:10px;
    }
    input[for="a"]{
        padding:10px 20px;
        font-size:16px;
        border-radius:10px;
    }</style>
   </head>
<body style=" color: azure;"> 
    <center>
<br>
    <H2>
    <form method="post" STYLE="float:RIGHT;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h2 style="color:WHITE;float:RIGHT;">REGISTER NOW</h2>
        
        <input for="a" type="text" id="name" name="name" placeholder="enter your name" required><br>
        <BR>
        <input for="a" type="Email" id="email" name="email" placeholder="enter your emal" required><br>
        <BR>
        <input for="a"  type="phone" id="phone" name="phone" placeholder="enter your phone number" required><br><br>
        <textarea for="a" id="addr" name="addr" rows="2" cols="25" placeholder="enter your address" required></textarea><br><br>
        <input for="a" type ="adno" id="adno" name="adno" placeholder="enter your adhar number" min="12", max="12" required><br><br>
        <input type="submit" value="Confirm" style=" background-color:hsl(0, 91%, 21%);color: azure; "><BR><BR>
        If you are alredy register<BR> then go to>>> <a href="login.php">login</a></H3><br>
    </form></H2><BR><BR><H3  STYLE="float:RIGHT;">
<?php if(isset($error)){
    echo "<script>alert('$error'); </script>";
}?>

</center>
</body>
</html>
<?php 
$conn->close();?>