<?php
if(isset($_POST))
{
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	// use hashing in the entered password by the user
	// $myPassword = hash('sha512', $Password);
	//more secured hashing of password
	
	$myPassword = password_hash($Password, PASSWORD_DEFAULT);
	$bool = password_verify('umesh2018@', $myPassword);
	echo $myPassword."<br>";
	if($bool){
		echo "password matched";
	}
	else{
		echo "password not matched";
	}

	// echo "Your first name is:".$firstName;
}
?>