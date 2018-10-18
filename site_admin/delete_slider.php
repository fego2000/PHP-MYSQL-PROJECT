<?php
require('himu.php');

if(isset($_POST['slide'])){

$id = $_POST['slide'];
	

$sql = "delete  from slider where id = '$id'";
$result = $conn->query($sql);

if ($result === true) {
	
	echo "sucsses";
	}else {
	echo "can not delete";
	}
}




?>