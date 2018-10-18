<?php
if(isset($_POST['name_add'], $_POST['rate_add'])){

require('himu.php');

	$name = $_POST['name_add'];
	$rate = $_POST['rate_add'];

	$sql = "INSERT INTO skills (name, skills_value)
	VALUES ('$name', '$rate')";

	$result = $conn->query($sql);	

	if($result === true){
		echo "sucsses";
	}else{
		echo "can not add";
	}
}


?>