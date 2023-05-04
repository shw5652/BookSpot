
<?php
include("data_class.php");

$bookid=$_GET['bookid'];

// $branchsub=$_GET['dbnamed'];


$obj=new data();
$obj->setconnection();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>show pdf</title>
</head>
<body>
		<div class ="div1">
			<a href='./uploads/<?php echo $bookid ?>'> <?php echo $bookid ?></a>
		</div>	
</body>
</html>