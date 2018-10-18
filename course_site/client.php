<?php 
  $sql = "select * from sections where section_name = 'clients'";
  $client = $conn->query($sql);

  $sql1 = "select * from clients";
  $all_clients = $conn->query($sql1);

?>

<section id="clients" class="parallax-section">
	<div class="container">
		<div class="clients-wrapper">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
				<?php foreach ($client as $key => $value) { ?>	
					<h2 class="title-one"><?php echo $value['title']; ?></h2>
					<p><?php echo $value['description']; ?></p>
				<?php } ?>	
				</div>
			</div>

			<div id="clients-carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
				<ol class="carousel-indicators">
                <?php foreach ($all_clients as $key => $value) { ?>
					<li data-target="#clients-carousel" data-slide-to="<?php echo $key ?>" class="<?php if($key==0) echo 'active' ?>"></li>
				<?php } ?>	
					<!-- <li data-target="#clients-carousel" data-slide-to="1"></li>
					<li data-target="#clients-carousel" data-slide-to="2"></li> -->
				</ol> <!-- Wrapper for slides -->

				<div class="carousel-inner">
				<?php foreach ($all_clients as $key => $value) { ?>	
					<div class="item <?php if($key==0) echo 'active' ?>">
						<div class="single-client">
							<div class="media">
								<img class="pull-left" src="images/clients/<?php echo $value['img']; ?>" alt="">
								<div class="media-body">
									<blockquote><p><?php echo $value['description']; ?></p><small><?php echo $value['name']; ?></small><a href=""><?php echo $value['link']; ?></a></blockquote>
								</div>
							</div>
						</div>
					</div>
                <?php } ?>
					<!-- <div class="item">
						<div class="single-client">
							<div class="media">
								<img class="pull-left" src="images/clients/client3.jpg" alt="">
								<div class="media-body">
									<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="single-client">
							<div class="media">
								<img class="pull-left" src="images/clients/client2.jpg" alt="">
								<div class="media-body">
									<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section><!--/#clients-->