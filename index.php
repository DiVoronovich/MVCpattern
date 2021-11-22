<?php
include "database/DB.php";
include "database/ViewDB.php";

$sql = 'SELECT author FROM authors';
$obj = new ViewDB();
$obj->viewDb($sql);
