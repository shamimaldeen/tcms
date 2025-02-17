<!--Footer-->
<footer>
	<div class="container">
		<div class="row">
			<div class="footer-column col-md-4 col-sm-6 col-xs-12">
				<div class="footer-widget subscribe-widget">
					<h2>About</h2>
					<div class="widget-content">
						<div class="text">
							<?php echo substr($abouts[0]->page_description, 0,170) ;?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="footer-widget links-widget">
					<h2>Quick links</h2>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-sm-12">
							<ul>
								<li><a href="#">home</a></li>
								<li><a href="#">home</a></li>
								<li><a href="#">home</a></li>
								<li><a href="#">home</a></li>
								<li><a href="#">home</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<ul>
								<li><a href="#">home</a></li>
								<li><a href="#">home</a></li>
								<li><a href="#">home</a></li>
								<li><a href="#">home</a></li>
								<li><a href="#">home</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-column col-md-2 col-sm-6 col-xs-12">
				<div class="footer-widget subscribe-widget">
					<h2>Contact</h2>
					<div class="widget-content">
						<div class="text"> 	<ul >
							<li><a href="#"><span class="icon fa fa-phone"></span> <?php echo $sites[0]->mobile ; ?></a></li>
							<li><a href="#"><span class="icon fa fa-phone"></span><?php echo $sites[0]->phone ; ?></a></li>
							<li><a href="#"><span class="icon fa fa-envelope"></span><?php echo $sites[0]->email ; ?></a></li>
							<li><a href="#"><span class="icon fa fa-map"></span><?php echo $sites[0]->site_address ; ?></a></li>
						</ul></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--Footer Bottom-->
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="text text-left">Copyrights &copy; <?php echo date('Y') ;?> <a href="<?php echo base_url();?>">Matrisaya</a>. All Rights Reserved</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<ul class="social-links text-right">
					<li><a href="https://<?php echo $sites[0]->facebook ; ?>"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://<?php echo $sites[0]->twitter ; ?>"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://<?php echo $sites[0]->youtube ; ?>"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- scroll top -->
<a class="scroll-top fa fa-angle-up" href="javascript:void(0)"></a>
<!-- srolltop end -->
<!-- js library start -->
<script src="<?php echo base_url();?>asset/front/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>asset/front/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/front/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>asset/front/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>asset/front/js/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url();?>asset/front/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>asset/front/js/waypoints.min.js"></script>
<script src="<?php echo base_url();?>asset/front/js/magnific.popup.js"></script>
<script src="<?php echo base_url();?>asset/front/js/wow.js"></script>
<script src="<?php echo base_url();?>asset/front/js/script.js"></script>

<!-- js library end -->
</body>
</html>