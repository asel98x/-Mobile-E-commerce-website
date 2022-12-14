<?php

namespace database;

class DBController
{
    protected  $host = 'localhost';
    protected $user = 'root';
    protected $password = "";
    protected $database = "shopee";

    public $conn = null;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->conn->connect_error){
            echo "Fail".$this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection(){
        if($this->con!=null){
            $this->con->close();
            $this->conn->null;
        }
    }

}
