<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>商品詳細</title>
<link href="./css/common.css" rel="stylesheet">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
	<h1>商品詳細</h1>
	<table>
		<tr>
			<th>写真</th>
			<td><img alt="" src="<?php echo 'images/'.$pict ?>"></td>
		</tr>
		<tr>
			<th>商品名</th>
			<td><?php echo $name ?></td>
		</tr>
		<tr>
			<th>商品説明</th>
			<td><?php echo $detail ?></td>
		</tr>
		<tr>
    		<th>価格</th>
    		<td><?php echo $price.'円' ?></td>
		</tr>
	</table>
	<button type="button" id="btn_order" onclick="location.href='order/?id=<?php echo $id ?>&amp;name=<?php echo $name ?>'">注文する</button>
</body>
</html>