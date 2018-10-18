<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>HIMU - OnePage HTML Parallax template</title> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet"> 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
	<link rel="shortcut icon" href="images/ico/favicon.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="index.html"><h1><img src="images/logo.png" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="#navigation">Home</a></li> 
						<li class="scroll"><a href="#about-us">About Us</a></li> 
						<li class="scroll"><a href="#services">Services</a></li> 
						<li class="scroll"><a href="#our-team">Our Team</a></li> 
						<li class="scroll"><a href="#portfolio">Portfolio</a></li> 
						<li class="scroll"><a href="#clients">Clients</a></li> 
						<li class="scroll"><a href="#blog">Blog</a></li> 
						<li class="scroll"><a href="#contact">Contact</a></li> 
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

<?php require('himu.php'); ?>
<?php require('slider.php'); ?>
<?php require('about_us.php'); ?>
<?php require('service.php');  ?>
<?php require('ourteam.php');  ?>
<?php require('portfolio.php'); ?>
<?php require('client.php'); ?>
<?php require('blog.php'); ?>

					
<section id="contact">
<div class="container">
	<div class="row text-center clearfix">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="contact-heading">
				<h2 class="title-one">Contact With Us</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="contact-details">
		<div class="pattern"></div>
		<div class="row text-center clearfix">
			<div class="col-sm-6">
				<div class="contact-address"><address><p><span>Devs</span>Cluster</p><strong>36 North Kafrul<br>Dhaka Cantonment Area<br> Dhaka-1206, Bangladesh</strong><br><small>( Lorem ipsum dolor sit amet, consectetuer adipiscing elit )</small></address>
					<div class="social-icons">
						<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
			</div>			
			<div class="col-sm-6"> 
				<div id="contact-form-section">
					<div class="status alert alert-success" style="display: none"></div>
					<form id="contact-form" class="contact" name="contact-form" method="post" action="#">
						<div class="form-group">
							<input  id="name" type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
							<div class="form-group">
								<input id="email" type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
							</div> 
							<div class="form-group">
								<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
							</div> 
							<div class="form-group">
								<button id="send_message" type="submit" class="btn btn-primary">Send</button>
							</div>
							<div id="result"></div>
						</form> 
					</div>
				</div>
			</div>
		</div>
	</div> 
</section> <!--/#contact--> 

	<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2014 - <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p> 
			</div> 
		</div> 
	</footer> <!--/#footer--> 

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script> 
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="js/main.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		
		  $(document).on("click","#send_message", function (e) {
		    var name =$('#name').val();
		    var email =$('#email').val();
		    var message =$('#message').val();

		    $.ajax({ type: 'POST', 
                     url: "message.php",
                     data: {name :name ,email:email, msg:message}
                  }).done(function (data) {
		                $('#result').html(data);
		             });
                   e.preventDefault();
              });


// var data = {name:"name" ,email:"email", message:"message"};
//        $.post("message.php",data,function(response){   
// 		 	 // $('#result').html(data);
// 		       alert(response);
// 		 	});


//});
	</script>
<script type="text/javascript">
// $(document).on("click","#send_message",function () {
// var email=$('#email').val();
// var name=$('#name').val();
// // alert(password);

// var data = {email:email,name:name};
//        $.post("message.php",data,function(data){   
// 			if(data=="true")
// 			{ 
// 			//window.location.href="";
// 			alert("t");
//             }
//              else{
//                          	// $('.y').attr('style','display: block');
//                          	// $('.x').attr('style','display: none');
//                           	alert("f");
//                          }
// 		 	 // $('#result').html(data);
// 		      // alert(data);
// 		 	});


//  });


// $(document).ready(function() {
//             $("#contact-form").submit(function(e) {
//                 $.ajax({
//                     type : "POST",
//                     url : "message.php",
//                     data : $("#contact-form").serialize(),
//                     success : function(response) {
//                         alert(response);
//                     }
//                 });
//                 e.preventDefault();
//             });

//         });
</script>

</body>
</html>