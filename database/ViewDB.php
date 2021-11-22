<?php

//include "DB.php";

class ViewDB
{
    function __construct()
    {
    }

    public function viewDb($sql)
    {
        $rows = DB::getData($sql);
        foreach ($rows as $row) {
            print("Author: " . $row['author'] . "<br>");
        }
    }
}