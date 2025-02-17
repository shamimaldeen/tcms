	

    <!-- breadcrumb start -->
    <section class="amplebiz-breadcrumb" style="background: url(<?php echo base_url();?>uploads/front/<?php echo $abouts[0]->page_image ;?>) no-repeat center;">
        <div class="amplebiz-breadcrumb-overlay"></div>
        <div class="amplebiz-breadcrumb-title">
            <h1>about page</h1>
            <p><a href="<?php echo base_url();?>front/index">Home</a><a href="<?php echo base_url();?>front/about">About us</a></p>
        </div>
    </section>
    <!-- breadcrumb end -->
    <div class="clearfix"></div>

    <!-- aboutpage start -->
    <div class="about-page">
        <div class="amplebiz-about-area pdb0" id="about1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="amplebiz-about-us">
                            <div class="sec-title text-center">
                                <h2>About us</h2>
                                <span class="colorborder"></span>
                            </div>
                          
                            <p class="about-us-text"><?php echo $abouts[0]->page_description ;?></p>
                            <a class="btn btn-primary" href="#">read more</a>
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
                                        <i class="fa fa-heartbeat"></i>
                                    </div>
                                    <div class="amplebiz-about-content">
                                        <h4><a href="#">Work with heart </a> </h4>
                                        <p><?php echo $about_helpers[0]->page_description ;?>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="amplebiz-about-box">
                                <div class="clearfix">
                                    <div class="amplebiz-about-icon">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="amplebiz-about-content">
                                        <h4><a href="#">Reliable services</a></h4>
                                        <p><?php echo $about_helpers[1]->page_description ;?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="amplebiz-about-box">
                                <div class="clearfix">
                                    <div class="amplebiz-about-icon">
                                        <i class="fa fa-history"></i>
                                    </div>
                                    <div class="amplebiz-about-content">
                                        <h4><a href="#">Great support</a></h4>
                                        <p><?php echo $about_helpers[2]->page_description ;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about end -->
       
        
        <!-- Start Team -->
        <section class="amplebiz-team section">
            <div class="container">
                <div class="row">
                    <div class="sec-title text-center">
                        <h2>Our Teams</h2>
                        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <span class="colorborder"></span>
                    </div>
                    <div class="amplebiz-team-inner">

              
                        <div class="amplebiz-team-carousel owl-carousel owl-theme">

                             <?php $i = 1;  foreach($staffs as $staff) {?>
                            <div class="team-details">
                                <div class="team-head">
                                    <img src="<?php echo base_url();?>uploads/front/<?php echo $staff->staff_image ;?>" alt="#">
                                    <div class="team-hover">
                                        <ul class="team-social">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-bottom">
                                    <h2 class="team-name"><?php echo $staff->staff_fullname ;?></h2>
                                    <p class="team-what"><?php echo $staff->staff_designation ;?></p>
                                </div>
                            </div>
                             <?php $i++;  } ?>
                        </div> 

                       
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Team -->

        
    </div>
 