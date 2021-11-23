<?php
include "database/DB.php";
include "database/ViewDB.php";

$sql = 'SELECT author FROM authors';
$authorsList = DB::getData($sql);
$obj = new ViewDB();
$obj->output($authorsList);
