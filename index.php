<?php
include "database/DB.php";
include "database/ViewDB.php";

//$instance = DB::getInstance();
//$conn = $instance->getConnection();
//
//$instance2 = DB::getInstance();
//$conn2 = $instance2->getConnection();
//
//echo ($instance === $instance2);

$sql = 'SELECT author FROM authors';
$obj = new ViewDB();
$obj->viewDb($sql);

//echo "Hello world!!!";


//$link = mysqli_connect("mysql", "root", "root", "article");
//
//if ($link == false){
//    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
//}
//else {
//    print("Соединение с bd установлено успешно");
//}
//
//$sql = 'SELECT author FROM authors';
//
//$result = mysqli_query($link, $sql);
//
//$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
//
//foreach ($rows as $row) {
//    print("Автор: " . $row['author']  . "<br>");
//}