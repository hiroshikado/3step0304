<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>四則演算を行おう（計算結果を表示しよう）</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>四則演算を行おう（計算結果を表示しよう）</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<h4>数値を2つ入力してください</h4>
		<form action="result.php" method="post">
			<label>数値1</label>
			<input type="text" class="form-control" name="num1">
			<label>数値2</label>
			<input type="text" class="form-control" name="num2">
			<input type="submit" class="btn" value="送信">
		</form>
	</div>
</body>
</html>
