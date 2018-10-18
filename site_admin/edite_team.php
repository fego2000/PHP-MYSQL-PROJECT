<?php

if(isset($_POST['id_team'], $_POST['name_edit'],$_POST['position_edit'], $_POST['desc_edit'], $_FILES['img_edit'])){
require('himu.php');

$id = $_POST['id_team'];
$name = $_POST['name_edit'];
$desc = $_POST['desc_edit'];
$job = $_POST['position_edit'];
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

          move_uploaded_file($file_tmp,"../course_site/images/our-team/". $file_name);
          $sql1 = ",`img`='$file_name'";
        }else{
          print_r($errors);
        }
      }

$sql = "UPDATE `team` SET `name`='$name',`description`='$desc',`position`='$job' $sql1  WHERE  `id`=$id";
if($conn->query($sql)=== true ){
	echo "sucess";
}else{

	echo "can not update";
}


}


?>