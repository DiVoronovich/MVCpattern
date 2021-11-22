<?php

class DB
{
    private static $instance;  // экземпляр объекта
    private $connection;
    private $host = 'mysql';
    private $user = 'root';
    private $password = 'root';
    private $db = 'article';

    private function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->db);

        if ($this->connection == false) {
            print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
        } else {
            print("Соединение с bd установлено успешно" . "<br>");
        }
    }

    public static function getInstance()
    {    // Возвращает единственный экземпляр класса. @return Singleton
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