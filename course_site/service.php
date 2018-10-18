<?php
  $sql = "select * from sections where section_name = 'service'";
  $service = $conn->query($sql);

  $sql1 = "select * from service";
  $all_services = $conn->query($sql1);
?>

<section id="services" class="parallax-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
				<?php foreach ($service as $key => $value) { ?>
					<h2 class="title-one"><?php echo $value['title']; ?></h2>
					<p> <?php echo $value['description']; ?> </p>
				<?php } ?>	
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
						<?php foreach ($all_services as $key => $value) { ?>	
							<div class="col-sm-4">
								<div class="single-service">	
									<i class="fa <?php echo $value['icon']; ?>"></i>
									<h2><?php echo $value['title']; ?></h2>
									<p><?php echo $value['description']; ?></p>
										
								</div>
							</div>
						<?php } ?>	
							<!-- <div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-html5"></i>
									<h2>Web Development</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-users"></i>
									<h2>Online Marketing</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#service-->