<?php
if(isset($_POST['add_head'], $_POST['text_service'])){

require('himu.php');

	$title = $_POST['add_head'];
	$desc = $_POST['text_service'];

	$sql = "INSERT INTO service (title, description)
	VALUES ('$title', '$desc')";

	$result = $conn->query($sql);	

	if($result === true){
		echo "sucsses";
	}else{
		echo "can not add";
	}
}


?>