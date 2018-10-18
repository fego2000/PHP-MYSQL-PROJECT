<?php
if(isset($_POST['id_ski'], $_POST['name_edite'], $_POST['rate_edite'])){
	require('himu.php');

	$id = $_POST['id_ski'];
	$name = $_POST['name_edite'];
	$value = $_POST['rate_edite'];


$sql = "UPDATE `skills` SET `name` = '$name', `skills_value` = '$value' WHERE `skills`.`id` = $id";
if($conn->query($sql)=== true){

	echo "sucsses";
}else{
	echo "can not edite";
}

}	

?>