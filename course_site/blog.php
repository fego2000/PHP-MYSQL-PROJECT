<?php 
  require('himu.php');
  $sql = "select * from sections where section_name = 'blog'";
  $blog = $conn->query($sql);

  $sql1 = "select blog.*,team.name from blog ,team WHERE blog.team_id = team.id ";
  $all_blogs = $conn->query($sql1);

?>



<section id="blog"> 
<div class="container">
	<div class="row text-center clearfix">
		<div class="col-sm-8 col-sm-offset-2">
		<?php foreach ($blog as $key => $value) { ?>	
			<h2 class="title-one"><?php echo $value['title']; ?></h2>
			<p class="blog-heading"><?php echo $value['description']; ?></p>
		<?php } ?>	
		</div>
	</div>

	<div class="row">
	<?php foreach ($all_blogs as $key => $value) { ?>	
		<div class="col-sm-4">
			<div class="single-blog">
				<img src="images/blog/<?php echo $value['img']; ?>" alt="" />
				<h2><?php echo $value['title']; ?></h2>
				<ul class="post-meta">
					<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong><?php echo $value['name']; ?></li>
					<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong><?php echo $value['blog_data']; ?></li>
				</ul>
				<div class="blog-content">
					<p><?php echo substr($value['description'],0,200); ?></p>
				</div>
				<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-<?php echo $value['id'];?>">Read More</a>
			</div>
			<div class="modal fade" id="blog-<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<img src="images/blog/<?php echo $value['img']; ?>" alt="" />
							<h2><?php echo $value['title']; ?></h2>
							<p><?php echo $value['description']; ?></p>
						</div> 
					</div>
				</div>
			</div>
		</div>
	<?php } ?>	

<!-- 		<div class="col-sm-4">
			<div class="single-blog">
				<img src="images/blog/2.jpg" alt="" />
				<h2>Lorem ipsum dolor sit amet</h2>
				<ul class="post-meta">
					<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
					<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
				</ul>
				<div class="blog-content">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				</div>
				<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-two">Read More</a>
			</div>
			<div class="modal fade" id="blog-two" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<img src="images/blog/2.jpg" alt="" />
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="single-blog">
				<img src="images/blog/3.jpg" alt="" />
				<h2>Lorem ipsum dolor sit amet</h2>
				<ul class="post-meta">
					<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
					<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
				</ul>
				<div class="blog-content">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				</div>
				<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-three">Read More</a>
			</div>
			<div class="modal fade" id="blog-three" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<img src="images/blog/3.jpg" alt="" />
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="single-blog">
				<img src="images/blog/3.jpg" alt="" />
				<h2>Lorem ipsum dolor sit amet</h2>
				<ul class="post-meta">
					<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
					<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
				</ul>
				<div class="blog-content">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				</div>
				<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-four">Read More</a></div>
				<div class="modal fade" id="blog-four" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<img src="images/blog/3.jpg" alt="" />
								<h2>Lorem ipsum dolor sit amet</h2>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							</div> 
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="single-blog">
					<img src="images/blog/2.jpg" alt="" />
					<h2>Lorem ipsum dolor sit amet</h2>
					<ul class="post-meta">
						<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
						<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
					</ul>
					<div class="blog-content">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-six">Read More</a>
				</div>
				<div class="modal fade" id="blog-six" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<img src="images/blog/2.jpg" alt="" />
								<h2>Lorem ipsum dolor sit amet</h2>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							</div> 
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="single-blog">
					<img src="images/blog/1.jpg" alt="" />
					<h2>Lorem ipsum dolor sit amet</h2>
					<ul class="post-meta">
						<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
						<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
					</ul>
					<div class="blog-content">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-seven">Read More</a>
				</div>
				<div class="modal fade" id="blog-seven" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<img src="images/blog/1.jpg" alt="" />
								<h2>Lorem ipsum dolor sit amet</h2>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							</div> 
						</div>
					</div>
				</div>
			</div> --> 
		</div> 
	</div> 
</section> <!--/#blog-->