<?php

if(isset($_POST))
{
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	echo $firstName."<br>";
	echo $lastName."<br>";
	echo $email."<br>";
	echo $password."<br>";

	//make a connection with database
	//server name, user name, password, db name
	$conn = mysqli_connect('localhost','root','','school');
	if(mysqli_connect_errno())
	{
		echo "Connection Failed";
	}
	else
	{
		echo "Connection Established";
	}

	// update the database with new entry by making use of INSERT Query 
	$temp = 
	"INSERT INTO `students` (`Firstname`, `Lastname`, `Email`, `Password`) VALUES ('$firstName', '$lastName', '$email', '$password')";

	mysqli_query($conn,$temp) or die("query failed");

}

?>