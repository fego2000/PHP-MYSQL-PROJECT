<?php

if(isset($_POST['slider_id'], $_POST['title_slider'], $_POST['pragraph_slider'], $_FILES['img_edit'])){
require('himu.php');

$id = $_POST['slider_id'];
$title = $_POST['title_slider'];
$desc = $_POST['pragraph_slider'];
$sql1 = "";

if (!empty($_FILES['img_edit']['name'])){

        $errors = array();

        $file_name = $_FILES['img_edit']['name'];
        $file_size = $_FILES['img_edit']['size'];
        $file_type = $_FILES['img_edit']['type'];
        $file_tmp = $_FILES['img_edit']['tmp_name'];

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
          $sql1 = ",`img`='$file_name'";
        }else{
          print_r($errors);
        }
      }

$sql = "UPDATE `slider` SET `title`='$title',`description`='$desc' $sql1  WHERE  `id`=$id";
if($conn->query($sql)=== true ){
	echo "sucess";
}else{

	echo "can not update";
}


}


?>