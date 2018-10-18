<?php
  $sql = "select * from sections where section_name = 'about_us'";
  $section = $conn->query($sql);

  $sql2 = "select * from with_us";
  $with = $conn->query($sql2);

  $sql3 = "select * from skills";
  $skills = $conn->query($sql3);

?>	


<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
			<?php foreach ($section as $key => $value) { ?>
              <h2 class="title-one"> <?php echo $value['title']; ?></h2>
				<p><?php echo $value['description']; ?></p>
			  <?php } ?>
			</div>
		</div>

		<div class="about-us">
			<div class="row">
				<div class="col-sm-6">
					<h3>Why with us?</h3>
					<ul class="nav nav-tabs">
                      <?php foreach ($with as $key => $value) { ?>
						<li class="<?php if($key==0) echo 'active'; ?>"><a href="#<?php echo $value['id']; ?>" data-toggle="tab"><i class="fa <?php echo $value['icon']; ?>"></i> <?php echo $value['title']; ?></a></li>
                      <?php  } ?>
						 <!-- <li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> Mission</a></li>
						<li><a href="#community" data-toggle="tab"><i class="fa fa-users"></i> Community</a></li> -->
					</ul>
					<div class="tab-content">
					<?php foreach ($with as $key => $value) { ?>
						<div class="tab-pane fade in <?php if($key==0) echo 'active'; ?>" id="<?php echo $value['id']; ?>">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/<?php echo $value['img']; ?>" alt="about us"> 
								<div class="media-body">
									<p> <?php echo $value['description']; ?> </p>
								</div>
							</div>
						</div>
					<?php } ?>

						<!-- <div class="tab-pane fade" id="mission">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/mission.jpg" alt="Mission"> 
								<div class="media-body">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="community">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/community.jpg" alt="Community"> 
								<div class="media-body">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-sm-6">
					<h3>Our Skills</h3>
					<div class="skill-bar">
					<?php foreach ($skills as $key => $value) { ?>
						<div class="skillbar clearfix " data-percent="<?php echo $value['skills_value']; ?>%">
							<div class="skillbar-title"><span><?php echo $value['name']; ?></span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent"><?php echo $value['skills_value'];?> %</div>
						</div>
					<?php } ?>
	
						 <!-- End Skill Bar -->
						<!-- <div class="skillbar clearfix" data-percent="85%">
							<div class="skillbar-title"><span>UI Design</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">85%</div>
						</div> --> <!-- End Skill Bar -->
						<!-- <div class="skillbar clearfix " data-percent="70%">
							<div class="skillbar-title"><span>jQuery</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">70%</div>
						</div>  --><!-- End Skill Bar -->
<!-- 						<div class="skillbar clearfix " data-percent="60%">
							<div class="skillbar-title"><span>PHP</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">60%</div>
						</div> --> <!-- End Skill Bar -->
						<!-- <div class="skillbar clearfix " data-percent="75%">
							<div class="skillbar-title"><span>Wordpress</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">75%</div>
						</div> --> <!-- End Skill Bar -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#about-us-->