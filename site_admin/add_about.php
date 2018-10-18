<?php
if(isset($_POST['ti_add'], $_POST['text_add'], $_FILES['photo_add'])){
require('himu.php');

$titl = $_POST['ti_add'];
$descr = $_POST['text_add'];

if (!empty($_FILES['photo_add']['name'])){

        $errors = array();

        $file_name = $_FILES['photo_add']['name'];
        $file_size = $_FILES['photo_add']['size'];
        $file_type = $_FILES['photo_add']['type'];
        $file_tmp = $_FILES['photo_add']['tmp_name'];

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

          move_uploaded_file($file_tmp,"../course_site/images/about-us/". $file_name);
        }else{
          print_r($errors);
        }
      }
	

$sql = "INSERT INTO with_us (title, description, img)
VALUES ('$titl', '$descr','$file_name')";
$result = $conn->query($sql);

if ($result === true) {
	
	echo "sucsses";
	}else {
	echo "can not add";
	}
}




?>