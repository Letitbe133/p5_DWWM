<?php

class Database
{
    public $db;
    private $host;
    private $dbname;
    private $charset;
    private $dsn;
    private $userName;
    private $password;

    public function __construct($config)
    {
        extract($config);
        $this->host = $host;
        $this->dbname = $dbname;
        $this->charset = $charset;
        $this->userName = $userName;
        $this->password = $pwd;

        $this->dsn = $this->createDsn();
    }

    public function connect()
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ];

        try {
            // code...
            $this->db = new PDO($this->dsn, $this->userName, $this->password, $options);

            return $this->db;
        } catch (PDOException $error) {
            throw $error;
        }
    }

    private function createDsn()
    {
        return "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
    }
}
