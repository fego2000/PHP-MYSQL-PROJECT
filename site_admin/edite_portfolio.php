<?php

if(isset($_POST['id_port'], $_POST['port_title'], $_POST['port_desc'], $_POST['port_select'], $_FILES['port_img'])){
require('himu.php');

$id = $_POST['id_port'];
$title = $_POST['port_title'];
$desc = $_POST['port_desc'];
$catg = $_POST['port_select'];
$sql1 = "";

if (!empty($_FILES['port_img']['name'])){

        $errors = array();

        $file_name = $_FILES['port_img']['name'];
        $file_size = $_FILES['port_img']['size'];
        $file_type = $_FILES['port_img']['type'];
        $file_tmp = $_FILES['port_img']['tmp_name'];

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
          $sql1 = ",`img`='$file_name'";
        }else{
          print_r($errors);
        }
      }

$sql = "UPDATE `portofilo_projects` SET `title`='$title',`description`='$desc',`catg_id`='$catg' $sql1 WHERE `id`= $id";
if($conn->query($sql)=== true ){
	echo "sucess";
}else{

	echo "can not update";
}

}

?>