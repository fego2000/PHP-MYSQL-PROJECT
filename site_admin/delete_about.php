<?php
require('himu.php');

if(isset($_POST['about'])){

	$id = $_POST['about'];

	$sql = "delete from with_us where id = '$id'";
	$result = $conn->query($sql);

	if($result === true) {

		echo "sucsses";
	}else{
		echo "can not add";
	}	
}







?>