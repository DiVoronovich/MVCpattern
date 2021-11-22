<?php

class DB
{
    private static $connection;
    private static $host = 'mysql';
    private static $user = 'root';
    private static $password = 'root';
    private static $db = 'article';

    private function __construct()
    {
    }

    public static function getConnection()
    {
        if (empty(self::$connection)) {
            self::$connection = mysqli_connect(self::$host, self::$user, self::$password, self::$db);
            if (self::$connection == false) {
                print("Error: unable to connect to MySQL " . mysqli_connect_error());
            } else {
                print("Connection with database established successfully" . "<br>");
            }
        }
        return self::$connection;
    }

    public function getData($sql)
    {
        $result = mysqli_query(self::getConnection(), $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $rows;
    }
}