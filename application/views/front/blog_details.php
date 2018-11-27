

    <!-- breadcrumb start -->
    <section class="amplebiz-breadcrumb" style="background: url(<?php echo base_url();?>asset/front/images/background/breadcrumb.jpg) no-repeat center;">
        <div class="amplebiz-breadcrumb-overlay"></div>
        <div class="amplebiz-breadcrumb-title">
            <h1>Blog details</h1>
            <p><a href="<?php echo base_url();?>front/index">Home</a><a href="<?php echo base_url();?>front/blog_details">Blog details</a></p>
        </div>
    </section>
    <!-- breadcrumb end -->
    <div class="clearfix"></div>
    <!--blogdetails start-->
    <section class="page blog blogpage-details">
        <div class="container">
            <div class="row">
                <div class="blogpage-inner">
                    <div class="col-sm-6 col-md-9 col-xs-12">
                        <div class="blog-details-content">
                            <div class="blog-img">
                                <img style="height: 400px;width: 900px" src="<?php echo base_url();?>uploads/front/<?php echo $blogs[0]->page_image ;?>" class="img-responsive" alt="image">
                                <div class="blog-caption">
                                    <span><i class="fa fa-user" aria-hidden="true"></i>khanalprem</span>
                                    <ul>
                                        <li><i class="fa fa-comment" aria-hidden="true"></i>3</li>
                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>380</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h2><?php echo $blogs[0]->page_title ;?></h2>
                                <p><?php echo $blogs[0]->page_description ;?></p>
                             
                            </div>
                        </div>
                        <div  class="comment">
                            <div class="comment-title">
                                <h3>2 comments Found</h3>
                            </div>

                            <!--Reviews Container-->
                            <div class="reviews-container">

                                <!--Reviews-->
                                <article class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="<?php echo base_url();?>asset/front/images/users/1.jpg" alt=""></figure>
                                    <div class="rev-content">
                                        <div class="rev-info">Admin – January 15, 2017: </div>
                                        <div class="rev-text">
                                            <p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="<?php echo base_url();?>asset/front/images/users/2.jpg" alt=""></figure>
                                    <div class="rev-content">
                                        <div class="rev-info">Prem – February 04, 2017: </div>
                                        <div class="rev-text">
                                            <p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!--Add Review-->
                            <div class="add-review">
                                <div class="comment-title">
                                    <h3>leave comment</h3>
                                </div>
                                
                                <form method="post">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                            <label>Name *</label>
                                            <input type="text" name="name" value="" placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                            <label>Email *</label>
                                            <input type="email" name="email" value="" placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label>Message *</label>
                                            <textarea name="review-message"></textarea>
                                        </div>
                                        <div class="form-group text-right col-md-12 col-sm-12 col-xs-12">
                                            <button type="button" class="btn btn-primary">leave comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="page-sidebar search-widget mrt0">
                            <div class="widget-title">
                                <h3>search</h3>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="search" name="search" class="form-control" placeholder="search ...." type="text" required="">
                                    <span class="input-group-addon"><i class="fa fa-search"></i> </span>
                                </div>
                            </div>
                        </div>
                        <div class="page-sidebar category-widget">
                            <div class="widget-title">
                                <h3>Popular category</h3>
                            </div>
                            <ul class="link-list">
                                <li>
                                    <a href="#">
                                        <span>Arts & humanities </span>
                                        <span class="category-count">(04)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Business & management </span>
                                        <span class="category-count">(08)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Health & Social </span>
                                        <span class="category-count">(07)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Medical science </span>
                                        <span class="category-count">(10)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Cumputing & IT </span>
                                        <span class="category-count">(12)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="page-sidebar latest-post-widget">
                            <div class="widget-title">
                                <h3>Latest news</h3>
                            </div>
                            <ul class="latest-post">
                                <li><a href="#">
                                    <div class="latest-post-img">
                                        <img src="<?php echo base_url();?>asset/front/images/gallery/flicker1.jpg" alt="">
                                    </div>
                                    <div class="latest-post-content">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p class="text-right">
                                            <i class="fa fa-calendar"></i>
                                            14th jan, 2016
                                        </p>
                                    </div>
                                </a></li>
                                <li><a href="#">
                                    <div class="latest-post-img">
                                        <img src="<?php echo base_url();?>asset/front/images/gallery/flicker2.jpg" alt="">
                                    </div>
                                    <div class="latest-post-content">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p class="text-right">
                                            <i class="fa fa-calendar"></i>
                                            14th jan, 2016
                                        </p>
                                    </div>
                                </a></li>
                                <li><a href="#">
                                    <div class="latest-post-img">
                                        <img src="<?php echo base_url();?>asset/front/images/gallery/flicker3.jpg" alt="">
                                    </div>
                                    <div class="latest-post-content">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p class="text-right">
                                            <i class="fa fa-calendar"></i>
                                            14th jan, 2016
                                        </p>
                                    </div>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class=" footer-column col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-widget timetable-widget">
                        <h2>About amplebiz</h2>
                        <div class="widget-content">
                            <div class="text">Lorem ipsum dolor sit amet, consects adipiscing elit enean commodo ligula.</div>
                            <ul class="timetable">
                                <li class="clearfix">
                                    <div class="pull-left">Monday - Friday</div>
                                    <div class="pull-right">7.00am to 2.00pm</div>
                                </li>
                                <li class="clearfix">
                                    <div class="pull-left">Saturday</div>
                                    <div class="pull-right">11.00am to 7.30pm</div>
                                </li>
                                <li class="clearfix">
                                    <div class="pull-left">Sunday</div>
                                    <div class="pull-right">11.00am to 6.00pm</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6 col-xs-12 footer-column">
                    <div class="footer-widget links-widget">
                        <h2>Quick links</h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-sm-12">
                                <ul>
                                    <li><a href="#">home</a></li>
                                    <li><a href="#">about</a></li>
                                    <li><a href="#">services</a></li>
                                    <li><a href="#">projects</a></li>
                                    <li><a href="#">contact</a></li>

                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-sm-12">
                                <ul>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Trade</a></li>
                                    <li><a href="#">Investment</a></li>
                                    <li><a href="#">projects</a></li>
                                    <li><a href="#">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget subscribe-widget">
                        <h2>Newsletter</h2>
                        <div class="widget-content">
                            <div class="text">Lorem ipsum dolor sit amet adipisg </div>
                            <div class="newsletter-form">
                                <form>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email Address..." required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">SUBSCRIBE NOW</button>
                                    </div>
                                </form>
                            </div>
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
                    <div class="text text-left">Copyrights &copy; 2017 <a href="#">AmpleBiz</a>. All Rights Reserved</div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ul class="social-links text-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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