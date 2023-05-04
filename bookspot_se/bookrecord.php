<?php
//addserver_page.php
include("data_class.php");
// $branchsub=$_POST['branchsub'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>book record</title>
    <link rel="stylesheet" type="text/css" href="style_two.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<style >
  body{
    background-image: url("https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8OHx8fGVufDB8fHx8&w=1000&q=80");

    background-size: cover;
    background-position: center;
    width: 1920px;

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
      <Button class="btn" onclick="openpart('bookrecord')"></Button>
      <div class="rightinnerdivv">  

      	<?php

            $u=new data;
            $u->setconnection();
            $u->getbook();
            $recordset=$u->getbook();

            $table="<table class='tabletwo'><tr><th style=' 
            padding: 8px;'>Book Id</th><th>Book Name</th><th>Book Detail</th><th>Book Author</th><th>Book Pub.</th><th>Subject</th><th>Book file</th><th style='width:20px;'>Action</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";

                $table.="<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                $table.="<td>$row[6]</td>"; 
                $table.="<td><button class='my-button' style='color:black; width:75px;'><a href='./uploads/$row[1]' style='text-decoration:none; width:75px'> View </a></button></td>";               
                $table.="<td><button class='my-button' style='color:black; text-decoration: none; width:75px;'><a href='deletebook_dashboard.php?deletebookid=$row[0]' style='text-decoration:none; width:75px;'>Delete</a></button></td>";
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
<!-- <footer>
      <p class="foot">Software Engineering Project</p>
</footer> -->
</body>
</html>