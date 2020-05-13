<?php

$connectionString = mysqli_connect('pulauredang.com', 'root', '', 'formtest') or die('Connection failed :(');


//echo 'Database connected!';

$username = $_POST['username'];
$password = $_POST['password'];

$selectQuery = mysqli_query($connectionString ,"select * from formtest where username = '$username' and password = '$password'") or die("Query failed".mysql_error());

$row = mysqli_fetch_array($selectQuery);
if($row['username'] == $username && $row['password'] == $password) {
	echo "Login successful <br> <br>";
} else {
	echo "Login fail <br> <br>";
}

?>