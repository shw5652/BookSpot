<?php
//addserver_page.php
include("data_class.php");
include('include/scripts.php');



$bookname=$_POST['bookname'];
$bookdetail=$_POST['bookdetail'];
$bookaudor=$_POST['bookaudor'];
$bookpub=$_POST['bookpub'];
$branchsub=$_POST['branchsub'];
?>


<?php
if (move_uploaded_file($_FILES["bookphoto"]["tmp_name"],"uploads/" . $_FILES["bookphoto"]["name"])) {

    $bookpic=$_FILES["bookphoto"]["name"];

$obj=new data();
$obj->setconnection();
$obj->addbook($bookpic,$bookname,$bookdetail,$bookaudor,$bookpub, $branchsub);
     ?>
            <script>
                swal({
                  title: "Added..!",
                  text: "One new book has been added!",
                  icon: "success",
                });
            </script>
            <?php
  } 
  else {
     echo "File not uploaded";
  }

include('include/scripts.php');
  ?>
<!-- </body>
</html> -->


