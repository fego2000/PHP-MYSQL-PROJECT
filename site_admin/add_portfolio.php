<?php

if(isset($_POST['port_head'], $_POST['port_text'], $_POST['port_option'], $_FILES['port_photo'])){
require('himu.php');

$title = $_POST['port_head'];
$desc = $_POST['port_text'];
$catg = $_POST['port_option'];

if (!empty($_FILES['port_photo']['name'])){

        $errors = array();

        $file_name = $_FILES['port_photo']['name'];
        $file_size = $_FILES['port_photo']['size'];
        $file_type = $_FILES['port_photo']['type'];
        $file_tmp = $_FILES['port_photo']['tmp_name'];

        $x = explode('.', $file_name);
        $y = strtolower(end($x));
        $z = array("jpg","jpeg","png");

        if (in_array($y, $z) === false){

          $errors[] = "this is not allow";
        }

        if ($file_size > 2097152){

          $errors[] = "this is file is too big";
        }

        if (empty($errors) === true){

          move_uploaded_file($file_tmp,"../course_site/images/portfolio/". $file_name);
        }else{
          print_r($errors);
        }
      }
	

$sql = "INSERT INTO portofilo_projects (title, description, img, catg_id)
VALUES ('$title', '$desc','$file_name', '$catg')";
$result = $conn->query($sql);

if ($result === true) {
	
	echo "sucsses";
	}else {
	echo "can not add";
	}
}




?>