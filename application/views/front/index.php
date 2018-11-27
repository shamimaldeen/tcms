<div class="clearfix"></div>

<!--slider start-->


<div id="amplebiz-slider" data-ride="carousel" class="carousel slide carousel-fade">
	<!-- Wrapper for slides-->
	<div class="carousel-inner">
<?php $i = 1;  foreach($sliders as $slider) { ?>
		<div style="background-image: url(<?php echo base_url(); ?>uploads/front/<?php echo $slider->page_image;?>);background-position: center right;" class="item <?php if($i==1 ): ?> active <?php endif; ?>  slide-1">
			<div class="slider-overlay"></div>
			<div class="container">
				<div class="carousel-caption">
					<div class="content text-center">
						<h2><?php echo $slider->page_title;?></h2>
						<p><?php echo $slider->page_description;?>
						<br>
						<!-- <a href="#" class="btn btn-primary inverse">View services</a> -->
					</div>
				</div>
			</div>
		</div>

<?php $i++;  } ?>
		
	</div>
	<!-- Controls-->
	<a href="#amplebiz-slider" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a>
	<a href="#amplebiz-slider" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
</div>
<!--slider end-->





<!-- about start -->
<div class="amplebiz-about-area pdb0" id="about1">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="amplebiz-about-us">
					<div class="sec-title text-center">
						<h2>About us</h2>
						<span class="colorborder"></span>
					</div>
					<p class="about-us-text"><?php echo substr($abouts[0]->page_description, 0,50) ;?></p>
					
					<a class="btn btn-primary" href="<?php echo base_url();?>front/about">read more</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="amplebiz-about-banner">
					<img src="<?php echo base_url();?>uploads/front/<?php echo $abouts[0]->page_image ;?>" alt="">
				</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-12">
				<div class="amplebiz-about-div">
					<div class="amplebiz-about-box">
						<div class="clearfix">
							<div class="amplebiz-about-icon">
								<i class="fa fa-check"></i>
							</div>
							<div class="amplebiz-about-content">
								<h4><a href="#">Mission</a> </h4>
								<p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
							</div>
						</div>
					</div>
					<div class="amplebiz-about-box">
						<div class="clearfix">
							<div class="amplebiz-about-icon">
								<i class="fa fa-check"></i>
							</div>
							<div class="amplebiz-about-content">
								<h4><a href="#">Vession</a></h4>
								<p>Donec vitae sapien ut libero venenatis faucibu. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt</p>
							</div>
						</div>
					</div>
					<div class="amplebiz-about-box">
						<div class="clearfix">
							<div class="amplebiz-about-icon">
								<i class="fa fa-check"></i>
							</div>
							<div class="amplebiz-about-content">
								<h4><a href="#">Future Plan</a></h4>
								<p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- about end -->
<!-- service start -->
<div class="amplebiz-service" style="background-image: url(<?php echo base_url();?>asset/front/images/background/service-bg.jpg);">
	<div class="amplebiz-overlay"></div>
	<div class="container">
		<div class="sec-title text-center">
			<h2>Our Course</h2>
			
			
			<span class="colorborder"></span>
		</div>
		<div class="row">
			 <?php $i = 1;  foreach($courses as $course) {?>
			<div class="col-sm-6 col-md-4">
				<div class="amplebiz-service-inner">
					<div class="amplebiz-service-icon">
						<i class="fa fa-retweet"></i>
					</div>
					<h4><a href="#"><?php echo $course->course_title ;?></a></h4>
					<p><?php echo $course->course_details ;?></p>
				</div>
			</div> 
			<?php $i++;  } ?>
		</div>
	</div>
</div>
<!-- service end -->


<!--News Section-->
<section class="news-section section ">
	<div class="container ">
		<div class="sec-title text-center">
			<h2>News update</h2>
			<span class="colorborder"></span>
		</div>
		<div class="row clearfix blog">
			<?php $i = 1;  foreach($News as $New) {?>
			<div class="col-sm-4 col-xs-12">
				<div class="blog-img">
					<img style="height: 170px;height: 250px" src="<?php echo base_url();?>uploads/front/<?php echo $New->page_image ;?>" alt="image">
					<div class="blog-caption">
						<span><i class="fa fa-user" aria-hidden="true"></i>user</span>
						
					</div>
				</div>
				<div class="blog-text">
					<h4><a href="blog-detail.html"><?php echo substr($New->page_description, 0,100) ;?></a></h4>
					<a class="btn btn-primary" href="<?php echo base_url();?>front/news_details/<?php echo $New->page_id; ?> ">read more</a>
				</div>
			</div> 
			<?php $i++;  } ?>
		</div>
	</div>
</section>
<!-- testimonial -->
 
<section class="testimonials section" style="background: url(<?php //echo base_url();?>uploads/front/images/background/breadcrumb.jpg) no-repeat;">
	<div class="amplebiz-overlay"></div>
	<div class="container">
		<div class="sec-title text-center">
			<h2>Testimonials</h2>
			<span class="colorborder"></span>
		</div>

		<?php 

	  	 //echo "<pre>";
	   	 //print_r($testimonials); die;
		?>
	 
		<div class="testimonial-inner">
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				 <?php $i = 0;  foreach($testimonials as $testimonial) {?>
				<div class="single-testimonials">

					<div class="testi-img">
						<img src="<?php echo base_url();?>uploads/front/<?php echo $testimonial->page_image ;?>" alt="Awesome Image" />
					</div>
					<p><?php echo $testimonial->page_description ;?></p>
					<div class="author-content">
						<h3><?php echo $testimonial->page_title ;?></h3>
						<p>Libnan Agency Ltd.</p>
					</div>
				</div>
				<?php $i++;  } ?>

				<?PHP //ECHO 	$i; die; ?>
				 
			</div>
			 
		</div>
		
	</div>
</section>
 
<!-- testimonial end -->



<!-- Start Team -->
<section class="amplebiz-team section">
	<div class="container">
		<div class="row">
			<div class="sec-title text-center">
				<h2>Our Teams</h2>
				 <span class="colorborder"></span>
			</div>
			
			<div class="amplebiz-team-inner">
				<div class="amplebiz-team-carousel owl-carousel owl-theme">
					<?php $i = 1;  foreach($teams as $team) {?>
					<div class="team-details">
						<div class="team-head">
							<img src="<?php echo base_url();?>uploads/front/<?php echo $team->page_image ;?>" alt="#">
							 
						</div>
						<div class="team-bottom">
							<h2 class="team-name"><?php echo $team->page_title ;?></h2>
							<p class="team-what"><?php echo $team->page_description ;?></p>
						</div>
					</div>

					 <?php $i++;  } ?>
					 
				</div>
			</div>
			 
		</div>
	</div>
</section>
<!--/ End Team -->
