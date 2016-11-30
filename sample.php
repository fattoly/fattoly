<!DOCTIPE html>
<html lang="ja">
<head>
<meta charset="UFT-8">
	<title>sample.php</title>
</head>
<body>
<FORM ACTION="sample.php" method="get">
	<input type="text" name="x" >
	+
	<input type="text" name="y">
	=?
	<input type="submit" value="送信">
</FORM>
<?php
if(isset($_GET["x"])){
     $x = $_GET["x"];
     $y = $_GET["y"];
     $answer = $x + $y;
     print "計算結果：";
     echo $x."+".$y."=".$answer."\n";
}
?>
</body>
</html>
