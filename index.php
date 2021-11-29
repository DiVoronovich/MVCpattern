<?php
//include "app/database/DB.php";
//include "app/database/ViewDB.php";
//
//$sql = 'SELECT author FROM authors';
//$authorsList = DB::getData($sql);
//$obj = new ViewDB();
//$obj->output($authorsList);

require_once __DIR__ . '/vendor/autoload.php';

\Coffee\FrontController::execute();
