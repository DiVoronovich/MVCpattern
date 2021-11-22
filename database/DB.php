<?php

class DB
{
    private static $instance;
    private $connection;
    private $host = 'mysql';
    private $user = 'root';
    private $password = 'root';
    private $db = 'article';

    private function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->db);

        if ($this->connection == false) {
            print("Error: unable to connect to MySQL " . mysqli_connect_error());
        } else {
            print("Connection with database established successfully" . "<br>");
        }
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}