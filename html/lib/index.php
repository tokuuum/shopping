<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>商品一覧</title>
<link href="./css/common.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
	<h1>商品一覧</h1>
	<table>
	<tr>
	<th>画像</th>
	<th>商品名</th>
	<th>価格</th>
	</tr>
	<?php foreach ($list as $row){ ?>
	<?php echo '<tr>'; ?>
	<?php echo '<td><img src="images/'.$row['pict'].'" width="300"></td>'; ?>
	<?php echo '<td><a href="detail.php?id='.$row['id'].'">'.$row['name'].'</a></td>'; ?>
	<?php echo '<td>'.$row['price'].'</td>'; ?>
	<?php echo '</tr>'; ?>
	<?php } ?>
	</table>
</body>
</html>