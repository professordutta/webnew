<?php
error_reporting(0);
if(isset($_POST))
{
	$x = $_POST['firstNumber'];
	$y = $_POST['secondNumber'];
	$z = $x+$y;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator App</title>
</head>
<body>

	<?php echo $z;?>

	<form action="calculator.php" method="POST">
		<input type="text" name="firstNumber"  placeholder="0"><br><br>
		<input type="text" name="secondNumber" placeholder="0"><br><br>
		<button name="submit" type="submit">Addition</button>
	</form>

</body>
</html>