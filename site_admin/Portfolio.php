<?php
	require('himu.php');

	$sql = "select portofilo_projects.*, portofilo_catg.name as porto_name from portofilo_projects,portofilo_catg where portofilo_projects.catg_id = portofilo_catg.id";

	$all_projects = $conn->query($sql);

	$sql1 = "select * from portofilo_catg";
	$all_catg = $conn->query($sql1);


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
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To project</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New project</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="add_form">
			          <img width="550" height="150" src="" id="img1">	
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="photo_port" name="port_photo" onchange="changeimg()">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="head_port"
					    name="port_head" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">desc</label>
					    <input type="text" class="form-control" placeholder="desc" id="text_port"
					    name="port_text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">catg</label>
					    <select id="option_port" name="port_option" class="form-control">
					  <?php foreach ($all_catg as $key => $value) { ?>  	
					    	<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>   
					  <?php } ?>  	
					    </select>
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="insert_port" type="submit" class="btn btn-primary">Add project </button>
			      </div>
			      <div id="res"></div>
			    </div>
			  </div>
			</div>
		</div>	

		<!-- model Edit  -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="project" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="project">Edit project</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			        <div class="modal-body">
			        <form id="edite_form">
			          <img width="550" height="150" src="" id="img">	
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="img_port" name="port_img" onchange="changeimga()">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="title_port"
					    name="port_title" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">desc</label>
					    <input type="text" class="form-control" placeholder="desc" id="desc_port" name="port_desc" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">catg</label>
					    <select id="select_port" name="port_select" class="form-control">
					  <?php foreach ($all_catg as $key => $value) { ?>  	
					    	<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>   
					  <?php } ?>  	
					    </select>
			          </div>
			          <div class="form-group">
					    <input id="port_id" name="id_port" type="hidden" class="form-control" placeholder="desc"  aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="update_portfolio" type="submit" class="btn btn-primary"> Edit project </button>
			      </div>
			      <div id="re"></div>
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
				      <th>heading</th>
				      <th>icon</th>
				      <th>content</th>
				      <th>catag</th>
				      <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
		<?php foreach ($all_projects as $key => $value) { ?>	  	
				    <tr>
				      <th scope="row"><?php echo $value['id']; ?></th>
				      <td><?php echo $value['title']; ?></td>
				      <td><img src="../course_site/images/portfolio/<?php echo $value['img']; ?>" width="80" height="80" ></td>
				      <td><?php echo $value['description']; ?></td>
				      <td><?php echo $value['porto_name']; ?></td>
					   <td><button id="edite_port"
					   	           data-id="<?php echo $value['id']; ?>"
				                   data-title="<?php echo $value['title']; ?>"
				                   data-desc="<?php echo $value['description']; ?>"
				                   data-img="<?php echo $value['img']; ?>"
				                   data-catg="<?php echo $value['catg_id']; ?>" 
					    type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				 	 <td><button id="delete" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
				    </tr>
		<?php } ?>		    
				</table>
			</div>
		</div>
	</div>	
<!-- end table slider -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

 // var sure =document.getElementById('delete');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }

 $(document).on('click', '#edite_port', function(v){
 		    var edite_id = $(this).data("id");
 		    var title = $(this).data("title");
 		    var desc = $(this).data("desc");
 		    var img = $(this).data("img");
 		    var catg = $(this).data("catg");

            $('#port_id').val(edite_id);
 		    $('#title_port').val(title);
 		    $('#desc_port').val(desc);
 		    $('#img').attr('src',"../course_site/images/portfolio/"+img);
 		    $('#select_port').val(catg);
                 
            });

$(document).on('click', '#update_portfolio', function(b){

	var data1 = new FormData (document.getElementById('edite_form'));

	        $.ajax({ type: 'POST', 
	                 url: "edite_portfolio.php",
	                 data: data1,
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
b.preventDefault();

});

$(document).on("click","#insert_port", function (c) {
     var data = new FormData (document.getElementById('add_form')); 
		

			    $.ajax({ type: 'POST', 
	                     url: "add_portfolio.php",                       
	                     data: data,
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
                   c.preventDefault();
              });


 function changeimga() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("img_port").files[0]);
		oFReader.onload = function(oFREvent){
			document.getElementById("img").src =oFREvent.target.result;
		}
	} 

function changeimg() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("photo_port").files[0]);
		oFReader.onload = function(oFREvent){
			document.getElementById("img1").src =oFREvent.target.result;
		}
	} 	


 </script>

</body>
</html>








