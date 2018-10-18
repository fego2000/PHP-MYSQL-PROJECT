<?php

if(isset($_POST['id_blog'], $_POST['title_blog'], $_POST['desc_blog'], $_POST['select_blog'], $_FILES['img_blog'], $_POST['date_blog'])){
require('himu.php');

$id = $_POST['id_blog'];
$title = $_POST['title_blog'];
$desc = $_POST['desc_blog'];
$team = $_POST['select_blog'];
$date = $_POST['date_blog'];
$sql1 = "";

if (!empty($_FILES['img_blog']['name'])){

        $errors = array();

        $file_name = $_FILES['img_blog']['name'];
        $file_size = $_FILES['img_blog']['size'];
        $file_type = $_FILES['img_blog']['type'];
        $file_tmp = $_FILES['img_blog']['tmp_name'];

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

          move_uploaded_file($file_tmp,"../course_site/images/blog/". $file_name);
          $sql1 = ",`img`='$file_name'";
        }else{
          print_r($errors);
        }
      }

$sql = "UPDATE `blog` SET `title`='$title',`description`='$desc',`team_id`='$team',`blog_data`='$date'$sql1 WHERE `id`= $id";

if($conn->query($sql)=== true ){
	echo "sucess";

}else{

	echo "can not update";
}

}

?>