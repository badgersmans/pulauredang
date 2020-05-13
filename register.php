<?php

$connectionString = mysqli_connect('pulauredang.com', 'root', '', 'formtest') or die('Connection failed :(');


//echo 'Database connected!';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "insert into formtest(username, password) values('$username','$password')";

if(!mysqli_query($connectionString, $query)) {
	echo "Username already exists <br> <br>";
} else {
	echo "Register successful <br> <br>"; 
}

// header("Location: http://pulauredang.com");

?>