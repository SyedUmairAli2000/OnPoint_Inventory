<?php

class Database
{
    private $dbcon;
    
    public function connect(){
        include_once("constants.php");
        $this->con = new mysqli(HOST,USER,PASS,DB);
        if($this->con){

            return $this->con;
        }
        return "Could not connect to the database";
    }
}

//$db = new Database();
//$db->connect();

?>