<?php
class Database {
    private static $instance = null;
    private $conn;

    private $servername = "localhost:7010";
    private $username = "root";
    private $password = "mypass";
    private $dbname = "designpattern";

    public function __construct(){

        print_r("create instance\n\n");
        
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) 
        {
            die("Connection failed: " . $this->conn->connect_error);
        }

    }

    public static function getInstance(){

        if (self::$instance == null) 
        {
            self::$instance = new Database();
        } 

        return self::$instance;
    }

    public function getConnection(){ 

      return $this->conn;

    }
}
