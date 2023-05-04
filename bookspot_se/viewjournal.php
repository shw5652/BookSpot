<?php
//addserver_page.php
include("data_class.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>journal record</title>
    <link rel="stylesheet" href="style_two.css">
  <link rel="stylesheet" href="style_three.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<!-- <style>
	.btn {
    background-color: #ffe3e3;
    color: black;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}
body{
  background: #beafaf;
}

.container,
.row,
.imglogo {
    margin:auto;
}

.innerdiv {
    text-align: center;
    /* width: 500px; */
    margin: 100px;
}
input{
    margin-left:20px;
}
.leftinnerdiv {
    float: left;
    width: 25%;
}

.rightinnerdiv {
    float: right;
    width: 75%;
}

.innerright {
    background-color: #f3bd7e;
}

.btn {
    background-color: #ffe3e3;
    color: black;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}

.btn,
a {
    text-decoration: none;
    color: black;
    font-size: large;
}

th{
    background-color: #16DE52;
    color: black;
}
td{
    background-color: #b1fec7;
    color: black;
}
td, a{
    color:black;
}

</style> -->

<body>
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

	<div class="container">
    <div class="row"></div>
    <div class="leftinnerdiv">
      <!-- <Button class="btn" onclick="openpart('bookrecord')">Journal Record</Button> -->
      <div class="rightinnerdivv">  

      	<?php


            $u=new data;
            $u->setconnection();
            $u->viewjournal();
            $recordset=$u->viewjournal();

            $table="<table class='tabletwo'><tr><th style=' 
            padding: 8px;'>Journal Id</th><th>Journal Name</th><th>Journal Author</th><th>Journal file</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";

                $table.="<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>"; 
                $table.="<td><a href='./uploads/$row[3]'> View </a></td>";               
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";


            echo $table;
?>
            </div>
            </div>


            </div>
</body>
</html>
