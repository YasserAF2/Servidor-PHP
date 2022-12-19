<?php
ini_set('display_errors', 1);
include_once "config/Config.php";

class Db{
    private string $host;
    private string $user;
    private string $password;
    private string $dbname;
    public $conection;

    public function __construct(){
        $this->host = servername;
        $this->user = username;
        $this->password = password;
        $this->dbname = dbname;

        $this->conection = new mysqli($this->host, $this->user,$this->password, $this->dbname);

        if($this->conection->connect_error){
            die("Connection failer: ".$this->conection->connect_error);
        }
    }



}

?>