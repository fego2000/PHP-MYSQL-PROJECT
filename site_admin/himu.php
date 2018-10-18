<?php 
$username = 'root';
$servername = 'localhost';
$password = '';
$dbname = 'project';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

	die ("connection faild: " . $conn->connect_error);
}

?>
