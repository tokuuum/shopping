<?php

// DB接続
function get_conn() {
    try{
    $pdo = new PDO("mysql:host=localhost;dbname=shopping;port=3306;charset=utf8;", "root", "");
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $pdo;
    }
    catch(PDOException $e){
        echo $e->getMessage();
        exit;
    }
}

?>