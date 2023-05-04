<?php
include("data_class.php");

$deletejournalid=$_GET['deletejournalid'];

$obj=new data();
$obj->setconnection();
$obj->deletejournal($deletejournalid);