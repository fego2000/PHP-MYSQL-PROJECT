<?php

if(isset($_POST['name_add'], $_POST['text_add'], $_POST['pos_add'], $_FILES['pic_add'])){
require('himu.php');

$name = $_POST['name_add'];
$desc = $_POST['text_add'];
$job = $_POST['pos_add'];

if (!empty($_FILES['pic_add']['name'])){

        $errors = array();

        $file_name = $_FILES['pic_add']['name'];
        $file_size = $_FILES['pic_add']['size'];
        $file_type = $_FILES['pic_add']['type'];
        $file_tmp = $_FILES['pic_add']['tmp_name'];

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

          move_uploaded_file($file_tmp,"../course_site/images/our-team/". $file_name);
        }else{
          print_r($errors);
        }
      }
	

$sql = "INSERT INTO team (name, description, position, img)
VALUES ('$name', '$desc', '$job', '$file_name')";
$result = $conn->query($sql);

if ($result === true) {
	
	echo "sucsses";
	}else {
	echo "can not add";
	}
}


?>