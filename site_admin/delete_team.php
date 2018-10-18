<?php
require('himu.php');

if(isset($_POST['team'])){

	$id = $_POST['team'];


	$sql="delete from team where id = $id";

	if($conn->query($sql)=== true){
		echo "sucsses";
	}else{
		echo "can not delete";
	}
}

?>