<?php
//addserver_page.php
include("data_class.php");



$journal_name=$_POST['journal_name'];
$journal_author=$_POST['journal_author'];


if (move_uploaded_file($_FILES["journal_file"]["tmp_name"],"uploads/" . $_FILES["journal_file"]["name"])) {

    $journal_file=$_FILES["journal_file"]["name"];

$obj=new data();
$obj->setconnection();
$obj->addjournal($journal_name,$journal_author,$journal_file);

echo "File added...";
  } 
  else {
     echo "File not uploaded";
  }