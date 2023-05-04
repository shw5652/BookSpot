<?php
include("data_class.php");

$deletebookid=$_GET['deletebookid'];

$branchsub=$_GET['dbnamed'];


$obj=new data();
$obj->setconnection();
$obj->deletebook($deletebookid);