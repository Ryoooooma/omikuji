<?php

$omikuji = array('小吉', '中吉', '大吉', '末吉', 'びよよよーん', 'えっ...！？');

$result = $omikuji[mt_rand(0, count($omikuji) - 1)];

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>おみくじ</title>
	</head>
	<body>
		<h1>おみくじ</h1>
		<P>今日の運勢は「<?php echo $result; ?>」です</P>
		<p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一度！</a></p>
	</body>
</html>