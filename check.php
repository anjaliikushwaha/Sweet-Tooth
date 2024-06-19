<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$db="sweettooth";


// Create connection
$con =new mysqli($servername, $username, $password, $db);

// Check connection
if(!$con){
die("Connection failed: ". mysqli_connect_error());
}


$username=$_POST['username'];
$password=$_POST['password'];

$select="SELECT * from customers where Username='$username' AND Password='$password'";
$result=mysqli_query($con,$select);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['Username']=$username; //store username in session
    header('location:menu.php');
    echo "Logged in successfully!";
}
else{ echo "<script language=\"JavaScript\">\n";
echo "alert('Username or Password was incorrect!');\n";
echo "window.location='login.php'";
echo "</script>";
 
}
?>