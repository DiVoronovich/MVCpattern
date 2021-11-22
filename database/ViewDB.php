<?php

class ViewDB extends DB
{
    function __construct() {
    }
    public function viewDb($sql)
    {
        $instance = parent::getInstance();
        $conn = $instance->getConnection();
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($rows as $row) {
            print("Автор: " . $row['author'] . "<br>");
        }
    }
}