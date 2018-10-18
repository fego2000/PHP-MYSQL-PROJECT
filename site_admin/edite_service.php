<?php
if(isset($_POST['service_id'], $_POST['service_title'], $_POST['service_desc'])){
	require('himu.php');

	$id = $_POST['service_id'];
	$title = $_POST['service_title'];
	$desc = $_POST['service_desc'];


$sql = "UPDATE `service` SET `title` = '$title', `description` = '$desc' WHERE `service`.`id` = $id";
if($conn->query($sql)=== true){

	echo "sucsses";
}else{
	echo "can not edite";
}

}	

?>