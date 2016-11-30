<!DOCTIPE html>
<html lang="ja">
<head>
<meta charset="UFT-8">
	<title>sample.php</title>
</head>
<body>
<FORM ACTION="sample.php" method="post">
	<input type="text" name="x">
	+
	<input type="text" name="y">
	=?
	<input type="submit" value="送信">
</FORM>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$answer = $x + $y;
print "計算結果：";
echo $x."+".$y."=".$answer."\n";
?>

</body>
</html>
