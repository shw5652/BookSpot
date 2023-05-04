<?php
//addserver_page.php
include("data_class.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user record</title>
    <link rel="stylesheet" type="text/css" href="style_two.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style >
  body{
    background-image: url("https://wallpapercave.com/wp/wp2036081.jpg");

    background-size: cover;
    background-position: center;
    

  }
</style>
<body>

    <!-- <header class="head">
  <nav>
    <div class="logo"> <img src="logo.jpg" alt="">
    </div>
    <ul>
      <button class="my-button" id="button1"><a href="admin_service_dashboard.php" style="color:black; text-decoration: none;" >Home</button>
      <button class="my-button" id="button8" ><a href="index.php" style="color:black; text-decoration: none;" >Logout</a></button>
    </ul>
  </nav>
</header> -->
<main>

<div class="left">
  <nav>
    <ul>
      <li>
      <img src="logo.jpg" alt="" style="width:50px; height: 50px;">
      <span style="text-align: center; text-decoration: none; text-justify: center; text-size:bold; cursor: cursor;"> &nbsp;&nbsp;   <b>Book Spot</b></span> 
    </a>
      
    </li>
      <li>
        <!-- <a href="#"> -->
        <i class="fas fa-home"></i>
      <a href="admin_service_dashboard.php" style="color:black; text-decoration: none;" >Home</button></a></li>

      <li>
        <i class="fas fa-book"></i>
      <span class="nav-items"><a href="addbook.html" style="color:black; text-decoration: none;" >Add Book</button></a></span>
      </li>
      <li>
        <i class="fas fa-file"></i>
      <span class="nav-items"><a href="addjournal.html" style="color:black; text-decoration: none;" >Add Journal</button></a></span>
      </li>
      <li>
        <i class="fas fa-user"></i>
      <span class="nav-items"><a href="adduser.html" style="color:black; text-decoration: none;" >Add User</a></button></span>
      </li>
      <li>
        <i class="fas fa-portrait"></i>
      <span class="nav-items"><a href="userrecord.php" style="color:black; text-decoration: none;" >User Record</a></button></span>
      </li>
      <li>
        <i class="fas fa-book-reader"></i>
      <span class="nav-items"><a href="bookrecord.php" style="color:black; text-decoration: none;" >Book Details</a></button></span>
      </li>
      <li>
        <i class="fas fa-newspaper"></i>
      <span class="nav-items"><a href="journalecord.php" style="color:black; text-decoration: none;" >Journal Details</a></button></span>
      </li>
      <li>
        <i class="fas fa-sign-out-alt"></i>
      <span class="nav-items"><a href="index.php" style="color:black; text-decoration: none;" >Logout</a></button></span>
    </li>
    </ul>
  </nav>
</div>

	<div class="container">
    <div class="row"></div>
    <div class="leftinnerdiv">
      <!-- <Button class="btn" onclick="openpart('userrecord')">User Record</Button> -->
      <div class="rightinnerdiv">  
     
      	<?php

            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();

            $table="<table class='table'><tr><th> Name</th><th>Email</th><th>Action</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td><button class='my-button' style='color:black; text-decoration: none; width:75px;'><a href='deleteuser.php?useriddelete=$row[0]' style='text-decoration:none;width:75px;'>Delete</button></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
?>
            </div>
            </div>


            </div>
</main>
<footer>
      <p class="foot">Software Engineering Project</p>
</footer>
</body>
</html>

