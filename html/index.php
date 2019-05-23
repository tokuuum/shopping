<?php
include ('./lib/common.php');

$pdo = get_conn();
$stmt = $pdo->prepare('select id, name, price, pict from items');
$stmt->execute();
$list = array();
while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $list[] = $result;
}
include ('./lib/index.php');
?>