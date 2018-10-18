<?php

session_start();

if(isset($_POST['name'], $_POST['password'])) {

   require('himu.php');

	$name = $_POST['name'];
	$pass = $_POST['password'];

$sql = "select * from admin where name = '$name' && password = '$pass'";
$result = $conn->query($sql);

	if($result->num_rows > 0) {

	$_SESSION['name'] = '$name';	

	echo "sucsses";
	} else {
	echo "invalid name or password";
	}
}

?>