<?php

if(isset($_POST['title_add'], $_POST['pragraph_add'], $_FILES['img_add'])){
require('himu.php');

$title = $_POST['title_add'];
$desc = $_POST['pragraph_add'];

if (!empty($_FILES['img_add']['name'])){

        $errors = array();

        $file_name = $_FILES['img_add']['name'];
        $file_size = $_FILES['img_add']['size'];
        $file_type = $_FILES['img_add']['type'];
        $file_tmp = $_FILES['img_add']['tmp_name'];

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

          move_uploaded_file($file_tmp,"../course_site/images/slider/". $file_name);
        }else{
          print_r($errors);
        }
      }
	

$sql = "INSERT INTO slider (title, description, img)
VALUES ('$title', '$desc','$file_name')";
$result = $conn->query($sql);

if ($result === true) {
	
	echo "sucsses";
	}else {
	echo "can not add";
	}
}




?>