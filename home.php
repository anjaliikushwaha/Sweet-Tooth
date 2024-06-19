<!DOCTYPE html>
<head><title>SweetTooth</title>
<style>
  .navbar{
    
    background-color:#fd79a8;
    padding:5%;
  }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  font-size:20px;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #e84393;
}

#logo{ 
	position:relative;  
  width:22%;
  float:left;
  bottom:72px;
  right:20px;
} 


.bg{
  background-image:url(images/home-bg.jpg);
  background-size: cover;
background-repeat:no-repeat;
background-position: 80% 50%;
height:350px;
padding:5% 0;
}

h1{
  font-size:90px ;
  text-align:center;
  position: relative;
  top:30%;
  color:white;
}

</style>
</head>
<body>

<div class="navbar">
  
<img src="images/logo.png"  alt="logo" id="logo" >
<ul>
<li><a href ="http://localhost/contactus.php">Contact Us</a></li>
<li><a href = "http://localhost/login.php">Menu</a></li>
<li><a href = "http://localhost/aboutus.php">About us</a> </li>
</ul>

</div>

<div class="bg">
  <h1><em>Life's Too Short To Skip Dessert!</em></h1>
</div>

</body>
</html>
