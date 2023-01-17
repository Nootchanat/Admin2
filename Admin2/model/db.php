<?php
class db{
    private $host,$db,$user,$pass;
    public $conn;

    public function db(){
        $this->host = 'localhost';
        $this->user = 'root'; 
        $this->pass = ''; 
        $this->db = 'registration_system'; 
    }

    public function connect(){
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
} 
?>