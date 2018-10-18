<?php


$email = "";
$emailErr = "";
if($_SERVER["REQUEST_METHOD"] = "POST"){
   require('himu.php');
	$name = $_POST['name'];
	$msg = $_POST['msg'];

	if(!empty($_POST['email'])){
		$email = $_POST['email'];
	  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $emailErr = "invalid email format";
	 }			
        
	}


$sql = "INSERT INTO contact_us (name, email, msg)
			VALUES ('$name', '$email', '$msg' )";

	if ($conn->query($sql) === TRUE) {

	echo "sucsses";
	} else {
	echo "invalid";
	}
}

?>