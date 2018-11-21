


<!-- breadcrumb start -->
<section class="amplebiz-breadcrumb" style="background: url(<?php echo base_url();?>uploads/front/<?php //echo $News[0]->page_image ;?>) no-repeat center;">
	<div class="amplebiz-breadcrumb-overlay"></div>
	<div class="amplebiz-breadcrumb-title">
		<h1>News</h1>
		<p><a href="<?php echo base_url();?>front/index">Home</a><a href="<?php echo base_url();?>front/news">News</a></p>
	</div>
</section>
<!-- breadcrumb end -->
<div class="clearfix"></div>

<!--blogpage-left-start-->
<?php $i = 1;  foreach($News as $New) {?>
<section class="page blogpage-grid blog">
	<div class="container">
		<div class="row">
			<div class="blogpage-inner">
				<div class="col-sm-4 col-xs-12">
					<div class="blog-img">
						<img src="<?php echo base_url();?>uploads/front/<?php echo $New->page_image ;?>" alt="image">
						<div class="blog-caption">
							<span><i class="fa fa-user" aria-hidden="true"></i>User</span>
							
						</div>
					</div>
					<div class="blog-text">
						<h4><a href="blog-detail.html"><?php echo $New->page_description ;?></a></h4>
						<a class="btn btn-primary" href="#">read more</a>
					</div>
				</div>
				
				<div class="page-pagination">
					<ul class="pagination">
						<li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
					</div>
					</div>
					</div>
					</div>
					</section>
					<?php $i++;  } ?>
					
										