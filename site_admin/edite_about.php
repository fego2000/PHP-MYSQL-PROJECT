<?php
if(isset($_POST['id_about'], $_POST['title_about'], $_POST['desc_about'], $_FILES['edit_img'])){
	require('himu.php');

	$id = $_POST['id_about'];
	$tit = $_POST['title_about'];
	$parag = $_POST['desc_about'];
	$sql1 = "";

if (!empty($_FILES['edit_img']['name'])){

        $errors = array();

        $file_name = $_FILES['edit_img']['name'];
        $file_size = $_FILES['edit_img']['size'];
        $file_type = $_FILES['edit_img']['type'];
        $file_tmp = $_FILES['edit_img']['tmp_name'];

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
          $sql1 = ",`img`='$file_name'";
        }else{
          print_r($errors);
        }
      }


$sql = "UPDATE `with_us` SET `title` = '$tit' , `description` = '$parag' $sql1 WHERE `id` = $id";

if($conn->query($sql)=== true){
	echo "success";
}else{
	echo "can not edite";
}      	


}


?>