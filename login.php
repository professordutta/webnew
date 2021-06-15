<?php
session_start(); // this is to start the session
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	// store the email id in session variable
	$_SESSION['Email'] = $email; // email id entered by user is stored in session variable
	$password = $_POST['password'];
	echo $email. "<br>";
	echo $password;

	// make connection with database

	$conn = mysqli_connect("localhost","root","","school");

	if(mysqli_connect_errno())
	{
		echo "<br>"."connection failed";
	}

	else{
		echo "<br>"."connection established";
	}

	//write a query to check the user authenticity

	// inspect in database whether email id is present or not and password is correct or not

	$temp = "SELECT * FROM `students` WHERE `Email` LIKE '$email' AND `Password` LIKE '$password'"; 
	$x = mysqli_query($conn,$temp) or die("query failed");

	if(mysqli_num_rows($x)>0)
	{
		echo "<br>"."user exists in database";
		header('Location:home.php');
	}
	else{
		echo "<br>"."wrong id/password combination";
		header('Location:index3.html');
	}

	mysqli_close($conn); // close the connection


}
?>