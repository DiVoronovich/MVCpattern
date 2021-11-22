<?php

class ViewDB extends DB
{
    function __construct() {
    }
    public function viewDb($sql)
    {
        $rows = parent::getData($sql);
        foreach ($rows as $row) {
            print("Author: " . $row['author'] . "<br>");
        }
    }
}