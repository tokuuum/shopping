<?php
include ('./lib/common.php');

$id = $_GET['id'];

$pdo = get_conn();
$stmt = $pdo->prepare('select name, detail, price, pict from items where id=:id');
$stmt->bindValue(':id', $id);
$stmt->execute();
$item = $stmt->fetch(PDO::FETCH_ASSOC);

$name = $item['name'];
$detail = $item['detail'];
$price = $item['price'];
$pict = $item['pict'];

include ('./lib/detail.php');
?>