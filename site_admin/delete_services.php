<?php
require('himu.php');

if(isset($_POST['services'])){

$id = $_POST['services'];
	

$sql = "delete  from service where id = '$id'";
$result = $conn->query($sql);

if ($result === true) {
	
	echo "sucsses";
	}else {
	echo "can not delete";
	}
}

?>