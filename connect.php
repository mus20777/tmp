<?php
$host='localhost';
$user='root';
$pass="";
$dbname="abc";

	$conn = mysqli_connect($host, $user, $pass, $dbname);
	if(!$conn){
		die('Coiuld not connect:' .mysqli_connect_error());

	}
	echo 'Connected sucessfully<br/>';
	$firstname=$_POST['firstname'];
	$lasttname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="INSERT INTO abc(firstname, lastname, email, password) values('$firstname', '$lastname', '$email', '$password')";	
	if(mysqli_query($conn,$sql)){
		echo"Could not inserted record:" .mysqli_error($conn);

	}
	mysqli_close($conn);

?>