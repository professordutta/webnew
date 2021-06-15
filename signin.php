<?php
// make a connection with database
$conn = mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
	echo "Connection Failed";
}
else
{
	echo "Connection Established";
}

// read the email id and password fields from form

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	// now check in the database whether entry of user is present or not

	$temp = "SELECT * FROM `students` WHERE `Email` LIKE '$email' AND `Password` LIKE '$password'";
	$x = mysqli_query($conn,$temp);
	if($x==true)
	{
		echo "id password matched and user exists in database";
	}
	else
	{
		echo "wrong id/password, please try again";
	}
}

?>