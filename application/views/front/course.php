

<!-- service start -->
<div class="amplebiz-service" style="background-image: url(<?php echo base_url();?>asset/front/images/background/service-bg.jpg);">
	<div class="amplebiz-overlay"></div>
	<div class="container">
		<div class="sec-title text-center">
			<h2>Our Services</h2>
			<p>Vision 2021 was the political manifesto of the Bangladesh Awami League party before winning the National Elections of 2008</p>
			<span class="colorborder"></span>
		</div>


		<div class="row">




     <?php $i = 1;  foreach($courses as $course) {?>
			<div class="col-sm-6 col-md-4">
				<div class="amplebiz-service-inner">
					<div class="amplebiz-service-icon">
						<i class="fa fa-briefcase"></i>
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

<!-- happyclient start -->
<div class="clients section">
	
	<!-- happyclient end -->
</div>
