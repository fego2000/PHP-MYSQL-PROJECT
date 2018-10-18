<?php
require('himu.php');

$sql = "select * from slider";
$slid = $conn->query($sql);

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
	<title>slider</title>
</head>
<body>
		<?php require "header.php" ;?>+
	<!-- start table slider -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 marg">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addslider" data-whatever="@mdo">
			Add To slider</button>
			<div class="modal fade" id="addslider" tabindex="-1" role="dialog" aria-labelledby="addsliderLabel"
			 aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="addsliderLabel">New Slider</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="add_form" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			          	<img width="550" height="150" src="" id="img1">
			            <input type="file" class="form-control  btn-warning"  name="img_add" id="pic_slider" onchange="changeimga()">
			          </div>
			          <div class="form-group">
					    <input id="title_add" type="text" class="form-control" placeholder="heading"  name="title_add" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
					    <input id="desc_slider" type="text" class="form-control" placeholder="pragraph"  name="pragraph_add" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div id="res"></div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="insert_slider" type="submit" class="btn btn-primary"> Add Slider </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- model Edit  -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">Edit Slider</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="edite_form" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			          	<img width="550" height="150" src="" id="img">
			            <input type="file" class="form-control  btn-info" id="img_slider" name="img_edit" onchange="changeimg()">
			          </div>
			          <div class="form-group">
					    <input id="title" type="text" class="form-control" placeholder="heading"  name="title_slider" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
					    <input id="desc" type="text" class="form-control" placeholder="pragraph"  name="pragraph_slider" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
					    <input id="slider_id" type="hidden" class="form-control" name="slider_id" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div id="re"></div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="update_slider" type="submit" class="btn btn-primary"> submit </button>
			      </div>
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
			      <th>pragrph</th>
			      <th>Img</th>
			      <th>Edit</th>
			      <th>Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			
            <?php foreach ($slid as $key => $value) { ?>
			    <tr>
			      <th scope="row"><?php echo $value['id']; ?></th>
			      <td><?php echo $value['title']; ?></td>
			      <td><?php echo $value['description']; ?></td>
			      <td><img src="../course_site/images/slider/<?php echo $value['img']; ?>" width="80" height="80" ></td>
				  <td><button id="edit_slider"
				  data-id="<?php echo $value['id']; ?>"
				  data-title="<?php echo $value['title']; ?>"
				  data-desc="<?php echo $value['description']; ?>"
				  data-img="<?php echo $value['img']; ?>"
				   type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				  <td><button data-id="<?php echo $value['id']; ?>"  id="delete" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
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

 // var sure =document.getElementById('delete');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }


$(document).on('click', '#delete', function(a){
	test = confirm('are you suer delete');
	if (test === true) {
 		    var slid_id = $(this).data("id");
 	        
                   $.ajax({
                            type: 'POST', 
                            url: "delete_slider.php",
                            data: {slide :slid_id}
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



$(document).on('click', '#edit_slider', function(v){
 		    var edite_id = $(this).data("id");
 		    var title = $(this).data("title");
 		    var desc = $(this).data("desc");
 		    var img = $(this).data("img");

            $('#slider_id').val(edite_id);
 		    $('#title').val(title);
 		    $('#desc').val(desc);
 		    $('#img').attr('src',"../course_site/images/slider/"+img);

                  
            });


$(document).on('click', '#update_slider', function(b){

	var data = new FormData (document.getElementById('edite_form'));

	        $.ajax({ type: 'POST', 
	                 url: "edite_slider.php",
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
b.preventDefault();

});


 $(document).on("click","#insert_slider", function (c) {
     var data = new FormData (document.getElementById('add_form')); 
		

			    $.ajax({ type: 'POST', 
	                     url: "add_slider.php",                       
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
		oFReader.readAsDataURL(document.getElementById("pic_slider").files[0]);
		oFReader.onload = function(oFREvent){
			document.getElementById("img1").src =oFREvent.target.result;
		}
	}




 </script>


 <script type="text/javascript">
	function changeimg() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("img_slider").files[0]);
		oFReader.onload = function(oFREvent){
			document.getElementById("img").src =oFREvent.target.result;
		}
	}
</script>
</body>
</html>