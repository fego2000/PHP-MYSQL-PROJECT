<?php
require('himu.php');

$sql = "select blog.*, team.name as blog_team from blog,team where blog.team_id = team.id";

$all_blog = $conn->query($sql);

$sql1 = "select * from team";
$all_team = $conn->query($sql1);


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
            <div class="form col-lg-10 col-md-offset-2 marg">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Blog</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="select" class="form-control-label">select img</label>
                        <input type="file" class="form-control  btn-warning" id="select">
                      </div>
                      <div class="form-group">
                        <label for="heading-text" class="form-control-label">heading</label>
                        <input type="text" class="form-control" placeholder="heading" id="heading-text" aria-describedby="basic-addon1">
                      </div>
                      <div class="form-group">
                        <label for="content-text" class="form-control-label">content</label>
                        <input type="text" class="form-control" placeholder="content" id="content-text" aria-describedby="basic-addon1">
                      </div>
                      <div class="form-group">
                        <label for="content-text" class="form-control-label">date</label>
                        <input type="text" class="form-control" placeholder="date" id="content-text" aria-describedby="basic-addon1">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Blog </button>
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
                    <h5 class="modal-title" id="EditLabel">Edit Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <div class="modal-body">
                    <form id="edite_form">
                      <img width="550" height="150" src="" id="img">    
                      <div class="form-group">
                        <label for="select" class="form-control-label">select img</label>
                        <input type="file" class="form-control  btn-warning" id="blog_img" name="img_blog" onchange="changeimg()">
                      </div>
                      <div class="form-group">
                        <label for="heading-text" class="form-control-label">heading</label>
                        <input type="text" class="form-control" placeholder="heading" id="blog_title" name="title_blog" aria-describedby="basic-addon1">
                      </div>
                      <div class="form-group">
                        <label for="content-text" class="form-control-label">content</label>
                        <input type="text" class="form-control" placeholder="content" id="blog_desc" name="desc_blog" aria-describedby="basic-addon1">
                      </div>
                      <div class="form-group">
                        <label for="content-text" class="form-control-label">team</label>
                        <select id="blog_select" name="select_blog" class="form-control">
                      <?php foreach ($all_team as $key => $value) { ?>      
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>   
                      <?php } ?>    
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="content-text" class="form-control-label">date</label>
                        <input type="text" class="form-control" placeholder="content" id="blog_date" name="date_blog" aria-describedby="basic-addon1">
                      </div>
                      <div class="form-group">
                        <input id="blog_id" name="id_blog" type="hidden" class="form-control" placeholder="desc"  aria-describedby="basic-addon1">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="update_blog" type="submit" class="btn btn-primary"> Edit Blog </button>
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
                      <th>date</th>
                      <th>content</th>
                      <th>img</th>
                      <th>team</th>
                      <th> Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
        <?php foreach ($all_blog as $key => $value) { ?>            
                    <tr>
                      <th scope="row"><?php echo $value['id']; ?></th>
                      <td><?php echo $value['title']; ?></td>
                      <td><?php echo $value['blog_data']; ?></td>
                      <td><?php echo $value['description']; ?></td>
                      <td><img src="../course_site/images/blog/<?php echo $value['img']; ?>" width="80" height="80" ></td>
                      <td><?php echo $value['blog_team']; ?></td>
                      <td><button id="edit_blog"
                       data-id = "<?php echo $value['id']; ?>"
                       data-title = "<?php echo $value['title']; ?>"
                       data-desc = "<?php echo $value['description']; ?>"
                       data-team = "<?php echo $value['team_id']; ?>"
                       data-date = "<?php echo $value['blog_data']; ?>" 
                       data-img = "<?php echo $value['img']; ?>"    
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
 //     test = confirm('are you suer delete');
 //     if (test === true) {
 //         alert('deleted succssfuly');
 //     } 
 // }
$(document).on('click','#edit_blog', function (a) { 

    var edit_id = $(this).data("id");
    var tit = $(this).data("title");
    var desc = $(this).data("desc");
    var img = $(this).data("img");
    var team = $(this).data("team");
    var date = $(this).data("date");

    $('#blog_id').val(edit_id);
    $('#blog_title').val(tit);
    $('#blog_desc').val(desc);
    $('#img').attr('src',"../course_site/images/blog/"+img);
    $('#blog_select').val(team);
    $('#blog_date').val(date);
    

})

$(document).on('click','#update_blog', function(b){

    var data = new FormData (document.getElementById('edite_form'));

            $.ajax({ type: 'POST', 
                     url: "edite_blog.php",
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
                        $('#re').html("can not update");
                    
                     }
            
 });
b.preventDefault();

});


function changeimg() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("blog_img").files[0]);
        oFReader.onload = function(oFREvent){
            document.getElementById("img").src =oFREvent.target.result;
        }
    }   
 </script>
</body>
</html>
