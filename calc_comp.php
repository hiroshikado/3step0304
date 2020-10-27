<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>四則演算を行おう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>四則演算を行おう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<ul>
			<li><?php echo 1 + 2; ?></li>
			<li><?php echo 10 - 5; ?></li>
			<li><?php echo 2 * 2; ?></li>
			<li><?php echo 3 / 2; ?></li>
			<?php $result = 3 % 2; ?>
			<li><?php echo $result; ?></li>
		</ul>
	</div>
</body>
</html>
