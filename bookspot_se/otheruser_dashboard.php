<?php
session_start();

// $userloginid=$_SESSION["userid"] = $_GET['userlogid'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="style_two.css">
      <link rel="stylesheet" href="style_three.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- <marquee direction="right"   >
    <h1>Welcome to Book Spot!!</h1>
    
    </marquee> -->
</head>

<style >
body{
 background-image: url("bb2.jpg");
 background-repeat: no-repeat;
 background-size: cover;
}

h1{
    font-size: 60px;
    font-weight: 500;
    line-height: 50px;
    margin-top: 45px;
    text-align: center;
    color: black;
}
</style>


</style>
<body>

<!-- <button class="my-button2" type="button2"><a href="userprofile.php" style="color:black; text-decoration: none;" >My Profile</button> -->
<!-- <button class="my-button3" type="button3" ><a href="selectyear.html" style="color:black; text-decoration: none;" >View book</a></button>
<button class="my-button3" type="button4" ><a href="viewjournal.php" style="color:black; text-decoration: none;" >View Journal</a></button>
<button class="my-button3" type="button4" ><a href="index.php" style="color:black; text-decoration: none;" >Logout</a></button> -->

<div class="left">
  <nav>
    <ul>
      <li>
      <img src="logo.jpg" alt="" style="width:50px; height: 50px;">
      <span style="text-align: center; text-decoration: none; text-justify: center; text-size:bold; cursor: cursor;"> &nbsp;&nbsp;   Book Spot</span> 
    </a>
      
    </li>
      <li>
        <!-- <a href="#"> -->
        <i class="fas fa-home"></i>
      <a href="otheruser_dashboard.php" style="color:black; text-decoration: none; text-justify: center;" >Home</button></a></li>

      <li>
        <i class="fas fa-book"></i>
      <span class="nav-items"><a href="selectyear.html" style="color:black; text-decoration: none;" >View Book</button></a></span>
      </li>
      <li>
        <i class="fas fa-file"></i>
      <span class="nav-items"><a href="viewjournal.php" style="color:black; text-decoration: none;" >View Journal</button></a></span>
      </li>
      <li>
        <i class="fas fa-sign-out-alt"></i>
      <span class="nav-items"><a href="index.php" style="color:black; text-decoration: none;" >Logout</a></button></span>
    </li>
    </ul>
  </nav>
</div>
<div class="over2">
      <h2>Welcome</h2>
      <h2>to</h2>
      <h2>BOOK SPOT</h2>
</div>


<!-- <style>


.my-button2{
  background-color: #b49be5;
  border: none;
  color:black;
  padding: 82px 24px;
  text-align: center;
  width: 40%;
  margin-top: 50px;
  margin-left: 35%;
  text-decoration: none;
  display: block;
  justify-content: center;  
  align-items: center;  
  font-size: 40px;
  border-radius: 5px;
  cursor: pointer;
}

.my-button3 {
  background-color: #b49be5;
  color:black;
  border: none;
  padding: 82px 24px;
  text-align: center;
  justify-content: center;  
   align-items: center;  
  width: 40%;
  margin-left: 35%;
  margin-top: 30px;
  text-decoration: none;
  display: block;
  font-size: 40px;
  border-radius: 5px;
  cursor: pointer;
}
.my-button2:hover {
  background-color: #5a3cf0; /* Dark green */
}
.my-button3:hover {
  background-color: #5a3cf0; /* Dark green */
}


</style> -->
</body>
</html>