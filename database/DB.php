<?php

declare(strict_types=1);

/**
 * Class to work with the database.
 */
class DB
{
    /**
     * Connection with the database.
     *
     * @var mysqli|null
     */
    private static ?mysqli $connection = null;

    /**
     * @var string
     */
    private static string $host = 'mysql';

    /**
     * @var string
     */
    private static string $user = 'root';

    /**
     * @var string
     */
    private static string $password = 'root';

    /**
     * @var string
     */
    private static string $db = 'article';

    /**
     * Pattern singleton implemented to prevent multiple database connections.
     */
    private function __construct()
    {
    }

    /**
     * Establish the connection with the database.
     *
     * @return mysqli
     * @throws Exception
     */
    private static function getConnection(): mysqli
    {
        if (self::$connection === null) {
            $mysqli = mysqli_connect(self::$host, self::$user, self::$password, self::$db);
            if (self::$connection === false) {
                throw new Exception("Error: unable to connect to MySQL " . mysqli_connect_error());
            }
            self::$connection = $mysqli;
        }
        return self::$connection;
    }

    /**
     * @param $sql
     * @return string[][]
     * @throws Exception
     */
    public static function getData($sql): array
    {
        $result = mysqli_query(self::getConnection(), $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}