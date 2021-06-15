<?php
session_start();
$myEmail = $_SESSION['Email'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>
<body>
	<!-- welcome user message should be printed -->
	<?php echo "Welcome ".$myEmail; ?>
	<div class="main-title">
		<h1>Welcome to Manav Rachna</h1>
	</div>
</body>
</html>