<?php 

$sql = "select * from sections where section_name = 'team'";
$team = $conn->query($sql);

$sql1 = "select * from team";
  $all_team = $conn->query($sql1);
  $all = array();

foreach ($all_team as $key => $value) {
	$id = $value['id'];
	$sql2 = "select team_social.link,social_media.icon from team_social,social_media where team_social.team_id = $id and team_social.social_id = social_media.id";
	$all_links = $conn->query($sql2);
$all[] = array('name' =>$value['name'], 'desc' =>$value['description'], 'position' =>$value['position'], 'img' =>$value['img'], 'links'=>$all_links);	  
}
 
$count=count($all);
?>

<section id="our-team">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-8 col-sm-offset-2">
			<?php foreach ($team as $key => $value) { ?>	
				<h2 class="title-one"><?php echo $value['title']; ?></h2>
				<p><?php echo $value['description']; ?></p>
			<?php } ?>		
			</div>
		</div>


		<div id="team-carousel" class="carousel slide" data-interval="false">
			<a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			<div class="carousel-inner team-members">

			<?php foreach ($all as $key => $value) { ?>

				<?php if(($key %4) ==0) { ?>
				<div class="row item <?php if($key==0) echo 'active' ?>">
                <?php } ?>

					<div class="col-sm-6 col-md-3">
						<div class="single-member">
							<img src="images/our-team/<?php echo $value['img']; ?>" alt="team member" />
							<h4><?php echo $value['name']; ?></h4>
							<h5><?php echo $value['position']; ?></h5>
							<p><?php echo $value['desc']; ?></p>						
							<div class="socials">
							<?php foreach ($value['links'] as $key1 => $value1) { ?>	
								<a href="<?php echo $value1['link']; ?>"><i class="fa <?php echo $value1['icon']; ?>"></i></a>
							<?php } ?>	
							</div>	
						</div>
					</div>
	        <?php if((( ($key+1) %4) ==0) || (($count-1)== $key))  { ?>    	
				</div>
			<?php } ?>	
			<?php } ?>	

			</div>
		</div>
	</div>
</section><!--/#Our-Team-->