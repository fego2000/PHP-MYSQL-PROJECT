<?php 
require('connect_database.php');

    $team=array();
    $social=array();
    $sql = "SELECT * FROM team";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // // output data of each row
	    while($row = $result->fetch_assoc()) 
	    {
	           $id=$row['team_id'];
	           $sql_soocial="SELECT * FROM `team_soical` t , socialmedia s where t.`social_id` =s.`socialmedia_id` and t.`team_id`='$id'";
	           $result_social = $conn->query($sql_soocial);
		       if ($result_social->num_rows > 0) 
		       {
		         while($row_social = $result_social->fetch_assoc()) 
		         {
		         	$social[]=array('icon'=>$row_social['soicals_class'],'link'=>$row_social['link']);
		         }
		       }  

	       $team[]= array('id'=>$row['team_id'],'name' => $row["team_name"],'position'=> $row["team_position"] ,
	      	'desc'=>$row['team_desc'],'img'=> $row["team_img"],'social'=>$social);
	      $social=array();
	    }
	}
	 else {
	echo "0 results";
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>


	<?php require "header.php" ;?>

<!-- start table slider -->
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Employee</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-primary" id="select">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">Name</label>
					    <input type="text" class="form-control" placeholder="heading" id="heading-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">Jop</label>
					    <input type="text" class="form-control" placeholder="content" id="content-text" aria-describedby="basic-addon1">
			          </div>
			           <div class="form-group">
			            <label for="content-text" class="form-control-label">desc</label>
					    <input type="text" class="form-control  " placeholder="content" id="content-text" aria-describedby="basic-addon1">
			          </div>
			         
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add Employee </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
<!-- delete modal
 -->
 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">delete Employee</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		        <form action="">
		          <div class="form-group">
				     <input type="hidden" class="form-control" id="delete_id">
		          </div>
                <center>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-info">delete Employee </button>
		        </center>
		        <br>
		        <hr>
		        </form>
		      
		    </div>
    </div>
</div>
		<!-- model Edit  -->
		<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="Employee" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">edit Employee</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form>
		        <div class="form-group">
		        	<img id="team_img" style="height: 200px;width: 100%;" src="img/index.png" class="img-responsive center-block" >
		        </div>
		          <div class="form-group">
		            <label for="select" class="form-control-label">select img</label>
		            <input type="file" class="form-control  btn-info" id="edit_img" 
		            onchange="previewImage();">
		          </div>
		          <div class="form-group">
		            <label for="heading-text" class="form-control-label">Name</label>
				    <input type="text" class="form-control" placeholder="heading" id="edit_name" aria-describedby="basic-addon1">
				     <input type="hidden" class="form-control" id="edit_id">
		          </div>
		          <div class="form-group">
		            <label for="content-text" class="form-control-label">Jop</label>
				    <input type="text" class="form-control" placeholder="content" id="edit_position" aria-describedby="basic-addon1">
		          </div>
		           <div class="form-group">
		            <label for="content-text" class="form-control-label">desc</label>
				    <input type="text" class="form-control  " placeholder="content" id="edit_desc" aria-describedby="basic-addon1">
		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-info">edit Employee </button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- end modal edit -->		

		<div class="col-lg-10 col-md-offset-2">	
			<table class="table ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>name</th>
			      <th>jop</th>
			      <th>description</th>
			      <th>img</th>
			      <th> Edit</th>
			      <th>Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php foreach ($team as $key => $value) {?>
				   <tr>
				      <td scope="row"> <?php echo 5; ?></td>
				      <td> <?php echo $value['name']; ?></td>
				      <td><?php echo $value['position']; ?></td>
				      <td><?php echo $value['desc']; ?></td>
				      <td><img height="42" width="42" src="../company_site/images/our-team/<?php echo $value['img']; ?>" alt="team member" /></td>
					  <td>
					  <button id="edit_team" type="button" class="btn btn-info" 
					  data-id="<?php echo $value['id']; ?>" 
					  data-img="<?php echo $value['img']; ?>"  
					  data-name="<?php  echo $value['name']; ?>"
					  data-position="<?php echo $value['position']; ?>"
					  data-description="<?php echo $value['desc']; ?>"
					  data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  </td>
					  <td><button data-toggle="modal" data-target="#delete" data-id="<?php echo $value['id']; ?>"  id="delete_team" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
				    </tr> 
			    <?php } ?>
			</table>
		</div>
	</div>
</div>	
<!-- end table slider -->

 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script> -->
  <script type="text/javascript">

 // var sure =document.getElementById('delete_team');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }

 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript">
 /// delete
	$(document).on('click', '#delete_team', function(e) {
       var id=$(this).data('id');
       $('#delete_id').val(id);
	});



 /// end delete
	$(document).on('click', '#edit_team', function(e) {
     var id=$(this).data('id');
     var name=$(this).data('name');
     var img=$(this).data('img');
     var desc=$(this).data('description');
     var position=$(this).data('position');
     
     $('#edit_name').val(name);
     $('#edit_position').val(position);
     $('#edit_desc').val(desc);
     $('#team_img').attr('src', "../company_site/images/our-team/"+img);
     $('#edit_id').val(id);
	});
</script>
<script type="text/javascript">
	function previewImage() {
    // document.getElementById("team_img").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("edit_img").files[0]);
 
    oFReader.onload = function(oFREvent) {
    	console.log(oFREvent);
    document.getElementById("team_img").src = oFREvent.target.result;
    }
  }
</script>

</body>
</html>
