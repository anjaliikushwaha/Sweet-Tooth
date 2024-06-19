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

$username=$_SESSION['Username'];
$q="Select Customer_Id from customers where Username='$username'";
$result=mysqli_query($con,$q);
$custarray = $result->fetch_assoc();
$custId=implode('',$custarray);
$today = date("Y-m-d H:i:s");  

if (isset($_POST['item1']))
 {
  $qty=$_POST['qty1'];  
  $amt=80*$qty;
  echo $qty;
  echo $amt;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('1','$qty','$today','$amt','$custId')";
  mysqli_query($con,$ins);
} 
if (isset($_POST['item2']))
 {
  $qty=$_POST['qty2'];  
  $amt=45*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('2','$qty','$today','$amt','$custId')";
 mysqli_query($con,$ins);
 echo "entered";
} 
if (isset($_POST['item3']))
 {
  $qty=$_POST['qty3'];  
  $amt=110*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('3','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
if (isset($_POST['item4']))
 {
  $qty=$_POST['qty4'];  
  $amt=40*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('4','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
if (isset($_POST['item5']))
 {
  $qty=$_POST['qty5'];  
  $amt=50*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('5','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
if (isset($_POST['item6']))
 {
  $qty=$_POST['qty6'];  
  $amt=60*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('6','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
if (isset($_POST['item7']))
 {
  $qty=$_POST['qty7'];  
  $amt=150*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('7','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
if (isset($_POST['item8']))
 {
  $qty=$_POST['qty8'];  
  $amt=120*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('8','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
if (isset($_POST['item9']))
 {
  $qty=$_POST['qty9'];  
  $amt=60*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('9','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
if (isset($_POST['item10']))
 {
  $qty=$_POST['qty10'];  
  $amt=80*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('10','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
if (isset($_POST['item11']))
 {
  $qty=$_POST['qty11'];  
  $amt=160*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('11','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
if (isset($_POST['item12']))
 {
  $qty=$_POST['qty12'];  
  $amt=25*$qty;
  $ins="insert into orders(ItemID,QTY,DateTime,Amount,Customer_Id) values('12','$qty','$today','$amt','$custId')";
    mysqli_query($con,$ins);
} 
header('location:payments.php'); 
?>