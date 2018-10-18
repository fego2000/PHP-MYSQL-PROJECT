<?php

  require 'himu.php'; 

  $sql = "select * from sections where section_name = 'Portfolio'";
  $Portfolio = $conn->query($sql);

  $sql1 = "select * from portofilo_catg";
  $all_catg = $conn->query($sql1);

  $sql2 = "select * from portofilo_projects";
  $all_projects = $conn->query($sql2);


?>

<section id="portfolio">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
					<?php foreach ($Portfolio as $key => $value) { ?>	
						<h2 class="title-one"><?php echo $value['title']; ?></h2>
						<p><?php echo $value['description']; ?></p>
					<?php } ?>	
					</div>
				</div>
           
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
				<?php foreach ($all_catg as $key => $value) { ?>			      			
					<li><a class="btn btn-default" href="#" data-filter=".<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a>
				<?php } ?>		
				</ul><!--/#portfolio-filter-->

				<div class="portfolio-items">
				<?php foreach ($all_projects as $key => $value) { ?>
					<div class="col-sm-3 col-xs-12 portfolio-item <?php echo $value['catg_id']; ?>">	
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="images/portfolio/<?php echo $value['img']; ?>" alt="">
							</div>	
							<div class="mask text-center">	
									<h3><?php echo $value['title']; ?></h3>
									<h4><?php echo $value['description']; ?></h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>		
							</div>	
						</div>
					</div>
				<?php } ?>			
						
				</div>	
			</div> 
		</section> <!--/#portfolio-->