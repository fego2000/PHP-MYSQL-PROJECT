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
			        <form id="add_form">
			          <div class="form-group">
		        	    <img id="team_pic" style="height: 200px;width: 100%;" src="img/index.png" class="img-responsive center-block">
		              </div>	 
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-primary" id="add_pic" name="pic_add" onchange="changeimg();">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">Name</label>
					    <input type="text" class="form-control" placeholder="heading" id="add_name" name="name_add" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">Jop</label>
					    <input type="text" class="form-control" placeholder="content" id="add_pos" name="pos_add" aria-describedby="basic-addon1">
			          </div>
			           <div class="form-group">
			            <label for="content-text" class="form-control-label">desc</label>
					    <input type="text" class="form-control  " placeholder="content" id="add_text" name="text_add" aria-describedby="basic-addon1">
			          </div>
			         
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="insert_team" type="submit" class="btn btn-primary">Add Employee </button>
			      </div>
			      <div id="res"></div>
			    </div>
			  </div>
			</div>
		</div>	
<!-- delete modal
 -->
 <!-- <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
</div> -->
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
		        <form id="edite_form">
		        <div class="form-group">
		        	<img id="team_img" style="height: 200px;width: 100%;" src="img/index.png" class="img-responsive center-block">
		        </div>
		          <div class="form-group">
		            <label for="select" class="form-control-label">select img</label>
		            <input type="file" class="form-control  btn-info" id="edit_img" name="img_edit" 
		            onchange="previewImage();">
		          </div>
		          <div class="form-group">
		            <label for="heading-text" class="form-control-label">Name</label>
				    <input type="text" class="form-control" placeholder="heading" id="edit_name" name="name_edit" aria-describedby="basic-addon1">
				     <input type="hidden" class="form-control" id="team_id" name="id_team">
		          </div>
		          <div class="form-group">
		            <label for="content-text" class="form-control-label">Jop</label>
				    <input type="text" class="form-control" placeholder="content" id="edit_position" name="position_edit" aria-describedby="basic-addon1">
		          </div>
		           <div class="form-group">
		            <label for="content-text" class="form-control-label">desc</label>
				    <input type="text" class="form-control  " placeholder="content" id="edit_desc" name="desc_edit" aria-describedby="basic-addon1">
		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button id="update_team" type="submit" class="btn btn-info">edit Employee </button>
		      </div>
		      <div id="re"></div>
		    </div>
		  </div>
		</div>
		<!-- end modal edit -->		
<?php
require('himu.php');

$sql = "select * from team";
$team = $conn->query($sql);

?>


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
			      <th>details</th>
			    </tr>
			  </thead>
			  <tbody>
		<?php foreach ($team as $key => $value) { ?>			  	
				   <tr>
				      <td scope="row"><?php echo $value['id']; ?></td>
				      <td><?php echo $value['name']; ?></td>
				      <td><?php echo $value['position']; ?></td>
				      <td><?php echo $value['description']; ?></td>
				      <td><img height="42" width="42" src="../course_site/images/our-team/<?php echo $value['img']; ?>" alt="team member" /></td>
					  <td>
					  <button 
					  data-id="<?php echo $value['id']; ?>"
					  data-name="<?php echo $value['name']; ?>"
				      data-desc="<?php echo $value['description']; ?>"
				      data-job="<?php echo $value['position']; ?>"
				      data-img="<?php echo $value['img']; ?>"
					  id="edit_team" type="button" class="btn btn-info" 
					  data-toggle="modal" data-target="#Edit" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  </td>
					  <td><button data-id="<?php echo $value['id']; ?>" data-toggle="modal" data-target="#delete" id="delete_team" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
					  <td><a href="team_details.php" class="btn btn-info"><i class="fa fa-times-circle" aria-hidden="true"></i>details</a></td>
				    </tr>
		<?php } ?>		     
			</table>
			<div id="result"></div>
		</div>
	</div>
</div>	
<!-- end table slider -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

 // var sure =document.getElementById('delete_team');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }

 $(document).on('click', '#delete_team', function(a){
	test = confirm('are you suer delete');
	if (test === true) {
 		    var team_id = $(this).data("id");
 	        
                   $.ajax({
                            type: 'POST', 
                            url: "delete_team.php",
                            data: {team :team_id},
                            }).done(function (data) {
                         data=data.replace(/\s/g,'');
                        // alert(data);
                  	      if(data === 'sucsses'){
                           window.location.reload();
                          }else{
                             $('#result').html(data);
                         }
		               });
                 }            
                   a.preventDefault();
              });


 $(document).on('click', '#edit_team', function(b){
 		    var edite_id = $(this).data("id");
 		    var name = $(this).data("name");
 		    var desc = $(this).data("desc");
 		    var job = $(this).data("job");
 		    var img = $(this).data("img");

            $('#team_id').val(edite_id);
 		    $('#edit_name').val(name);
 		    $('#edit_desc').val(desc);
 		    $('#edit_position').val(job);
 		    $('#team_img').attr('src',"../course_site/images/our-team/"+img);

                  
            });

 $(document).on('click', '#update_team', function(c){

	var data = new FormData (document.getElementById('edite_form'));

	        $.ajax({ type: 'POST', 
	                 url: "edite_team.php",
	                 data: data,
	                 async: false,
	                 processData: false,
	                 contentType: false,
	              })
                        .done(function (data) {
                        	data=data.replace(/\s/g,''); 
 
						if (data=="sucess") {
						
							window.location.reload();
						}
						else{
							$('#re').html("can not edit");
				 		
						 }
		 	
				 });
				c.preventDefault();				
				});

$(document).on("click","#insert_team", function (d) {
     var data1 = new FormData (document.getElementById('add_form')); 
		

			    $.ajax({ type: 'POST', 
	                     url: "add_team.php",                       
	                     data: data1,
	                     async: false,
		                 processData: false,
		                 contentType: false,
	                  }).done(function (data) {
                  	data=data.replace(/\s/g,'');

                  	  if(data=="sucsses"){

                  	  	window.location.reload();
                  	  }else{

                  	  	$('#res').html('can not add');
                  	  }
		                
		             });
                   d.preventDefault();
              }); 


function changeimg() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("add_pic").files[0]);
		oFReader.onload = function(oFREvent){
			document.getElementById("team_pic").src =oFREvent.target.result;
		}
	}


 </script>
 
<script type="text/javascript">
	function previewImage() {
    // document.getElementById("team_img").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("edit_img").files[0]);
 
    oFReader.onload = function(oFREvent) {
    	//console.log(oFREvent);
    document.getElementById("team_img").src = oFREvent.target.result;
    }
  }
</script>

</body>
</html>
