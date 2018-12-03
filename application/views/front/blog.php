<?php 

//echo "<pre>";
//print_r($this->uri); die;
?>


<!-- breadcrumb start -->
<section class="amplebiz-breadcrumb" style="background: url(images/background/breadcrumb.jpg) no-repeat center;">
	<div class="amplebiz-breadcrumb-overlay"></div>
	<div class="amplebiz-breadcrumb-title">
		<h1>Blog grid</h1>
		<p><a href="<?php echo base_url();?>front/index">Home</a><a href="<?php echo base_url();?>front/blog">Blog grid</a></p>
	</div>
</section>
<!-- breadcrumb end -->
<div class="clearfix"></div>

<!--blogpage-left-start-->


<section class="page blogpage-grid blog">
	<div class="container">
		<div class="row">
			<div class="blogpage-inner">
				<?php $i = 1;  foreach($blogs as $blog) {?>
				<div class="col-sm-4 col-xs-12">
					<div class="blog-img" >
						<img style="height: 250px;height: 350px"src="<?php echo base_url();?>uploads/front/<?php echo $blog->page_image ;?>" alt="image"  width="400px" height="400px">
						<div class="blog-caption">
							<span><i class="fa fa-user" aria-hidden="true"></i>User</span>
							
						</div>
					</div>
					<div class="blog-text">
						<h4><a href="<?php echo base_url();?>front/blog_details/<?php echo $blog->page_id; ?> "><?php echo substr($blog->page_description, 0,50) ;?></a></h4>
						<a class="btn btn-primary" href="<?php echo base_url();?>front/blog_details/<?php echo $blog->page_id; ?> ">read more</a>
					</div>
				</div>

			<?php $i++;  } ?>
				
				
			</div>

		</div>
		<div class="page-pagination">
					<ul class="pagination">
						<li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
						<!-- <li class="active"><a href="#">1</a></li> -->
						
						<?php for($i=1; $i<=$totalpage; $i++){ ?>


						<li class="<?php if($this->uri->segments[3] == $i): ?> active <?php endif; ?>" ><a href="<?php echo base_url();?>front/blog/<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php }?>
						
						<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
	</div>
</section>


