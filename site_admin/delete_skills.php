<?php
require('himu.php');

if(isset($_POST['skills'])){

	$id = $_POST['skills'];


	$sql="delete from skills where id = $id";

	if($conn->query($sql)=== true){
		echo "sucsses";
	}else{
		echo "can not delete";
	}
}

?>