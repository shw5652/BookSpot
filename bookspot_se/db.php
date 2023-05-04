<?php
class db{
protected $connection;


// public $host="localhost:3308";
// public $user="root";
// public $pass="1234@Db";
// public $db="bookspot_se";

// public $conn=mysqli_connect($host, $user,$pass, $db);

function setconnection(){
    try{
        $this->connection=new PDO('mysql:host=localhost:3308; dbname=bookspot_se','root','12345@Db');
        // echo "Done";

    }
    catch(PDOException $e){
        echo $e;
        //die();

    }
}

}
