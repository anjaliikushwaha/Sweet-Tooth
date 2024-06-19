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
echo"Connected successfully";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$phno=$_POST['phno'];
$username=$_POST['username'];
$password=$_POST['password'];

$select="Select * from customers where Username='$username'";
$result=mysqli_query($con,$select); //fire select query and store in result 
$num=mysqli_num_rows($result);//counting no. of rows returned

    if($num==1)//if a row is returned
    {
    echo "This username already Exists! Try using another..";
    }
else{
    $ins="insert into customers(FirstName,LastName,Email,Address,Pincode,PhNo,Username,Password) values('$firstname','$lastname','$email','$address','$pincode','$phno','$username','$password')";
    mysqli_query($con,$ins);
    $_SESSION['Username']=$username; //store username in session
    header('location:menu.php');
    }

?>