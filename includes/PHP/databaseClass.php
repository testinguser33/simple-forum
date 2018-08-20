<?php 

class Database{
    
    public $connection;
    
    function __construct(){
        $this->OpenConnection();
    }

    public function OpenConnection(){
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function Query($sql){
       $result = $this->connection->query($sql);
       return $result;
    }

    public function EscapeString($string){
        $escaped = $this->connection->real_escape_string($string);
        return $escaped;
    }
}

$db = new Database();

?>