<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>注文情報入力</title>
<link href="./../css/common.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
	<h1>注文情報入力</h1>
	<form method="post" action="confirm.php">
	<input type="hidden" name="mode" value="send">
	<input type="hidden" name="name" value="$name">
	<table>
		<tr>
			<th>商品名</th>
			<td><?php echo $name ?></td>
		</tr>
		<tr>
			<th>数量</th>
			<td><input type="text" size="4">個</td>
		</tr>
		<tr>
			<th>氏名</th>
			<td><input type="text" size="20"></td>
		</tr>
		<tr>
    		<th>郵便番号</th>
    		<td><input type="text" size="20"></td>
		</tr>
		<tr>
    		<th>住所</th>
    		<td><input type="text" size="60"></td>
		</tr>
	</table>
	<input type="submit" value="確認">
	</form>
</body>
</html>