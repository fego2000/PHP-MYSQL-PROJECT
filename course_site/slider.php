<?php 
// $sql= "select * from slider";
// $all_sliders = $conn->query($sql);
$data1=file_get_contents("http://localhost/lect1/webservice/webservice.php");
// print_r($data1)
$data2=json_decode($data1,true);

if($data2['status']==true)
{
	$all_sliders=$data2['data'];
}
?>	

<section id="home">
	<div class="home-pattern"></div>
	<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
		<ol class="carousel-indicators">
		    <?php foreach ($all_sliders as $key => $value) { ?>
			<li data-target="#main-carousel" data-slide-to="<?php echo $key ?>"  class="<?php if($key==0) echo 'active' ?>"></li>
			<?php } ?>
		</ol><!--/.carousel-indicators--> 
		<div class="carousel-inner">
		  <?php foreach ($all_sliders as $key => $value) { ?>
			<div class="item <?php if($key==0) echo 'active' ?> " style="background-image: url(<?php echo $value['img'] ?>)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInDown"><?php echo $value['title'] ?></h2> 
						<p class="animated bounceInUp"><?php echo $value['desc'] ?></p> 
						<a class="btn btn-default slider-btn animated fadeIn" href="#">Get Started</a> 
					</div> 
				</div> 
			</div>
			<?php } ?>

	</div><!--/.carousel-inner-->

	<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
	<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
</div> 

</section><!--/#home-->
