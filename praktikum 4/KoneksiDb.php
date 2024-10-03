<?php

class KoneksiDb{
    protected $username ='root';
    protected $password = '';
    protected $host = 'localhost';
    protected $dbname = '';

    public function __construct($host, $username, $password, $dbname){
    $this->host = $host;
    $this->username = $password;
    $this->password = $password;
    $this->dbname = $dbname;

    $this->connection = new mysql($this->host, $this->username,
    $this->password, $this->dbname);
    }

    public function __destruct()
    {
        $this->connection->close();
    }

    public function getConnection(){
        return $this->connection;
    }
}