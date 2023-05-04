<?php 

include("db.php");

class data extends db {

   private $bookpic;
    private $bookname;
    private $bookdetail;
    private $bookaudor;
    private $bookpub;
    private $branchsub;
    private $journal_name;
    private $journal_detail;
    private $journal_file;

    
    private $id;
    private $book;
    private $userselect;


    function __construct() {
        // echo " constructor ";
        // echo "</br></br>";
    }


    function addnewuser($name,$email,$pasword){
        $this->name=$name;
        $this->pasword=$pasword;
        $this->email=$email;
        // $this->type=$type;


         $q="INSERT INTO userdata(id, name, email, pass)VALUES('','$name','$email','$pasword')";

        if($this->connection->exec($q)) {
            echo "User added successfully.";
            header("Location:admin_service_dashboard.php?msg=New Add done");
        }

        else {
            echo "Error";
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    }



    // }
    function userLogin($t1, $t2) {
        $q="SELECT * FROM userdata where email='$t1' and pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();
        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                header("location: otheruser_dashboard.php?userlogid=$logid");
            }
        }

        else {
            header("location: index.php?msg=Invalid Credentials");
        }

    }

    function adminLogin($t1, $t2) {

        $q="SELECT * FROM admin where email='$t1' and pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();

        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                header("location: admin_service_dashboard.php?logid=$logid");
            }
        }

        else {
            header("location: index.php?msg=Invalid Credentials (or you are not an admin)");
        }

    }



    function addbook($bookpic, $bookname, $bookdetail, $bookaudor, $bookpub, $branchsub) {
        $this->$bookpic=$bookpic;
        $this->bookname=$bookname;
        $this->bookdetail=$bookdetail;
        $this->bookaudor=$bookaudor;
        $this->bookpub=$bookpub;
        $this->branchsub=$branchsub;

       $q="INSERT INTO book (id,bookpic,bookname, bookdetail, bookaudor, bookpub, branchsub)VALUES('','$bookpic', '$bookname', '$bookdetail', '$bookaudor', '$bookpub', '$branchsub')";

        if($this->connection->exec($q)) {
           
            header("Location:admin_service_dashboard.php?msg=done");

        }

        else {
            header("Location:admin_service_dashboard.php?msg=fail");
        }

    }

    function addjournal($journal_name, $journal_author, $journal_file) {
        $this->$journal_file=$journal_file;
        $this->journal_name=$journal_name;
        $this->journal_author=$journal_author;

       $q="INSERT INTO journal (id, journal_name, journal_author,  journal_file)VALUES('','$journal_name', '$journal_author', '$journal_file')";

        if($this->connection->exec($q)) {
            header("Location:admin_service_dashboard.php?msg=done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=fail");
        }

    }
    
    function userdata() {
        $q="SELECT * FROM userdata ";
        $data=$this->connection->query($q);
        return $data;
    }

    function viewbook($branchsub) {
        $q="SELECT * FROM book where branchsub='$branchsub'";
        $data=$this->connection->query($q);
        return $data;
    }

    function viewjournal() {
        $q="SELECT * FROM journal";
        $data=$this->connection->query($q);
        return $data;
    }

    function getbook() {
        $q="SELECT * FROM book";
        $data=$this->connection->query($q);
        return $data;
    }

    function getjournal() {
        $q="SELECT * FROM journal";
        $data=$this->connection->query($q);
        return $data;
    }

    
    
    function delteuserdata($id){
        $q="DELETE from userdata where id='$id'";
        if($this->connection->exec($q)){
    
            
           header("Location:admin_service_dashboard.php?msg=done");
        }
        else{
           header("Location:admin_service_dashboard.php?msg=fail");
        }
    }

    function deletebook($id){
        $q="DELETE from book where id='$id'";
        if($this->connection->exec($q)){
           header("Location:admin_service_dashboard.php?msg=done");
        }
        else{
           header("Location:admin_service_dashboard.php?msg=fail");
        }
    }

    function deletejournal($id){
        $q="DELETE from journal where id='$id'";
        if($this->connection->exec($q)){
           header("Location:admin_service_dashboard.php?msg=done");
        }
        else{
           header("Location:admin_service_dashboard.php?msg=fail");
        }
    }

    function userdetail($id){
        $q="SELECT * FROM userdata where id ='$id'";
        $data=$this->connection->query($q);
        return $data;
    }

}