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
<!-- start  about -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#about" data-whatever="@mdo">Add To Section</button>
			<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="aboutLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="aboutLabel">New Section</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="add_form">
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <img src="" id="img1" width="550" height="150">
			            <input type="file" class="form-control  btn-info" id="img_add" name="photo_add" onchange="changeimga()">
			          </div>
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="title_add" name="ti_add" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">text</label>
					    <input type="text" class="form-control" placeholder="text" id="text" name="text_add" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="insert_about" type="submit" class="btn btn-primary">Add Section </button>
			      </div>
			      <div id="resu"></div>
			    </div>
			  </div>
			</div>
		</div>	

		<!-- model Edit about -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="editAbout" tabindex="-1" role="dialog"  aria-labelledby="Editabout" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="Editabout">Edit about</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="form_about">
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <img src="" id="img" width="550" height="150">
			            <input type="file" class="form-control  btn-info" id="img_about" name="edit_img" onchange="changeimg()">
			          </div>
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="title" name="title_about"  aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">text</label>
					    <input type="text" class="form-control" placeholder="text" id="desc" name="desc_about" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="text" id="edit_id" name="id_about" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="updat_about" type="submit" class="btn btn-primary"> submit </button>
			      </div>
			      <div id="res"></div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- end  edit modal -->

<?php
require('himu.php');

$sql = "select * from with_us";
$with = $conn->query($sql);
?>
		<!-- show table about -->
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      <th>text</th>
				      <th>Img</th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				<?php foreach ($with as $key => $value) { ?>				 	
				    <tr>
				      <th scope="row"><?php echo $value['id']; ?></th>
				      <td><?php echo $value['title']; ?></td>
				      <td><?php echo $value['description']; ?></td>
				      <td><img src="../course_site/images/about-us/<?php echo $value['img']; ?>" width="80" height="80"></td>
					   <td><button id="edite_about" 
					   	data-id="<?php echo $value['id']; ?>"
					   	data-title="<?php echo $value['title']; ?>"
					   	data-desc="<?php echo $value['description']; ?>"
					   	data-img="<?php echo $value['img']; ?>" 
					   	type="button" class="btn btn-info" data-toggle="modal" data-target="#editAbout" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
					  <td><button data-id="<?php echo $value['id']; ?>" id="delete_about" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
				    </tr>
				<?php } ?>
				</table>
				<div id="result"></div>
			</div>
		</div>
	</div>	
<!-- end show table about -->

<!--  -->

<!-- start  skllis -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 ">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#skils" data-whatever="@mdo">Add To Sklis</button>
			<div class="modal fade" id="skils" tabindex="-1" role="dialog" aria-labelledby="Edieskiles" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="Edieskiles">New Sklis</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="skills_form">
			          <!-- <div class="form-group">
			            <label for="select" class="form-control-label">select img:</label>
			            <input type="file" class="form-control  btn-warning " id="select">
			          </div> -->
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title:</label>
					    <input type="text" class="form-control" placeholder="title" id="heading-text" name="name_add" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="pragraph-text" class="form-control-label">rate:</label>
					    <input type="text" class="form-control" placeholder="rate" id="pragraph-text" name="rate_add" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="insert_skills" type="submit" class="btn btn-primary">Add Sklis </button>
			      </div>
			      <div id="return2"></div>
			    </div>
			  </div>
			</div>
		</div>

		<!-- model Edit skils -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="editSkils" tabindex="-1"  role="dialog" aria-labelledby="#skils" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="skils">Edit skiles</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="form_skills">
			          <!-- <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="img_skills" name="pic_skills">
			          </div> -->
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">name</label>
					    <input type="text" class="form-control" placeholder="name" id="name_skills" name="name_edite" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">rate</label>
					    <input type="text" class="form-control" placeholder="rate" id="rate_skills" name="rate_edite" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
					    <input type="hidden" class="form-control" id="id_skills" name="id_ski" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="update_skills" type="submit" class="btn btn-primary"> Edit skiles </button>
			      </div>
			    <div id="return1"></div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- end  edit modal -->
<?php
require('himu.php');

$sql1 = "select * from skills";
$skills = $conn->query($sql1);
?>
		<!--  show table skils -->
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>name</th>
				      <th>rate </th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
			<?php foreach ($skills as $key => $value) { ?>	  	
				    <tr>
				      <th scope="row"><?php echo $value['id']; ?></th>
				      <td><?php echo $value['name']; ?></td>
				      <td><?php echo $value['skills_value']; ?>%</td>
					   <td><button 
					   	data-id="<?php echo $value['id']; ?>"
                        data-name="<?php echo $value['name']; ?>" 
                        data-value="<?php echo $value['skills_value']; ?>%" id="edite_skills"  
					    type="button" class="btn btn-info" data-toggle="modal" data-target="#editSkils" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				      <td><button data-id="<?php echo $value['id']; ?>" id="delete_skils" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
			        </tr>
			<?php } ?>	      
				</table>
				<div id="return"></div>
			</div>
		</div>
	</div>	
<!-- end table skllis -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

 // var sure =document.getElementById('delete_about');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete about');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }

 //  var sure =document.getElementById('delete_skils');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete skils');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }

 //start delete skills
$(document).on('click', '#delete_skils', function(e){
	test = confirm('are you suer delete');
	if (test === true) {
 		    var skills_id = $(this).data("id");
 	        
                   $.ajax({
                            type: 'POST', 
                            url: "delete_skills.php",
                            data: {skills :skills_id}
                            }).done(function (data) {
                         data=data.replace(/\s/g,'');
                        // alert(data);
                  	      if(data === 'sucsses'){
                           window.location.reload();
                          }else{
                             $('#return').html(data);
                         }
		               });
                 }            
                   e.preventDefault();
              });

//end delete skills

//start edite skills
$(document).on('click', '#edite_skills', function(f) { 

	var skill_id = $(this).data('id');
	var name = $(this).data('name');
	var value = $(this).data('value'); 

	$('#id_skills').val(skill_id);
	$('#name_skills').val(name);
	$('#rate_skills').val(value);

})

$(document).on('click', '#update_skills', function(g) { 

    var data2 = new FormData (document.getElementById('form_skills'));

               $.ajax({ type: 'POST',
               	        url: "edite_skills.php",
               	        data: data2,
               	        async: false,
               	        processData: false,
               	        contentType: false,                	       
                     })
                         .done (function(data){
                         	data=data.replace(/\s/g,'');
                         	if(data=== "sucsses"){
                         		window.location.reload();
                         	}else{
                                $('#return1').html(data);
                         	}

                         });
                    g.preventDefault();     

});


//end edite skills


//stary add skills

$(document).on('click', '#insert_skills', function(m) { 

    var data3 = new FormData (document.getElementById('skills_form'));

               $.ajax({ type: 'POST',
               	        url: "add_skills.php",
               	        data: data3,
               	        async: false,
               	        processData: false,
               	        contentType: false,                	       
                     })
                         .done (function(data){
                         	data=data.replace(/\s/g,'');
                         	if(data=== "sucsses"){
                         		window.location.reload();
                         	}else{
                                $('#return2').html(data);
                         	}

                         });
                    m.preventDefault();     

});


//end add skills


//start delete about
$(document).on('click', '#delete_about', function(a){
	test = confirm('are you suer delete');
	if (test === true) {
 		    var about_id = $(this).data("id");
 	        
                   $.ajax({
                            type: 'POST', 
                            url: "delete_about.php",
                            data: {about :about_id}
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

//end delete about


//start edite about
$(document).on('click', '#edite_about', function(b){

            var with_id = $(this).data('id');
            var title = $(this).data('title');
            var desc = $(this).data('desc');
            var pic = $(this).data('img') ;


            $('#edit_id').val(with_id);
            $('#title').val(title);
            $('#desc').val(desc);
            $('#img').attr('src',"../course_site/images/about-us/"+pic);

});



$(document).on('click', '#updat_about', function(c) { 

    var data = new FormData (document.getElementById('form_about'));

               $.ajax({ type: 'POST',
               	        url: "edite_about.php",
               	        data: data,
               	        async: false,
               	        processData: false,
               	        contentType: false,                	       
                     })
                         .done (function(data){
                         	data=data.replace(/\s/g,'');
                         	if(data=== "success"){
                         		window.location.reload();
                         	}else{
                                $('#res').html(data);
                         	}

                         });
                    c.preventDefault();     

});

//end edite about


//start add about
$(document).on('click', '#insert_about', function(d) {

	var data1 = new FormData (document.getElementById('add_form'));

	          $.ajax({ type: 'POST',
	          	       url: "add_about.php",
	          	       data: data1,
	          	       async: false,
	          	       processData: false,
	          	       contentType: false, 

	          })
	              .done(function(data){
	              	data=data.replace(/\s/g,'');
	              	if(data === "sucsses"){
	              		window.location.reload();
	              	}else{
                        $('#resu').html(data);
	              	}

	          });
	              d.preventDefault();

})
//end add about



function changeimg() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("img_about").files[0]);
		oFReader.onload = function(oFREvent){
			document.getElementById("img").src =oFREvent.target.result;
		}
	}

function changeimga() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("img_add").files[0]);
		oFReader.onload = function(oFREvent){
			document.getElementById("img1").src =oFREvent.target.result;
		}
	}



 </script>
</body>
</html>