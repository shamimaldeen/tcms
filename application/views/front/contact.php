    <?php if($this->session->success): ?>
    <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
    <?php endif; ?>

  <?php if($this->session->error): ?>
     <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
  <?php endif; ?>

    <!-- breadcrumb start -->
    <section class="amplebiz-breadcrumb" style="background: url(<?php echo base_url();?>asset/front/images/background/breadcrumb.jpg) no-repeat center;">
        <div class="amplebiz-breadcrumb-overlay"></div>
        <div class="amplebiz-breadcrumb-title">
            <h1>contact page</h1>
            <p><a href="<?php echo base_url();?>front/index">Home</a><a href="<?php echo base_url();?>front/contact">contact</a></p>
        </div>
    </section>
    <!-- breadcrumb end -->
    <div class="clearfix"></div>

    <!-- contact start -->
    <div class="contact-page page">
        <div class="container">
            <div class="row">
                <div class="contact-page-inner">
                    <div class="col-md-6">
                        <div class="contact-page-title">
                            <h4>Contact info</h4>
                        </div>
                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i>9856055360</p>
                            <p><i class="fa fa-envelope"></i>khnl.prem@gmail.com</p>
                            <p><i class="fa fa-map-marker"> </i>Kathmandu , Nepal</p>
 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-page-title">
                            <h4>Get in touch</h4>
                        </div>
                        <?php  echo form_open('front/save_contact',array('id'=>'')) ?>

                            <div class="row">
                                <div class="col-sm-6 ">
                                    <div class="form-group">
                                        <label>Name :</label>
                                        <input type="text" name="contact_name" class="form-control" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input type="text" name="contact_email" class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message :</label>
                                        <textarea rows="6" name="contact_meassage" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-primary" href="#">Send Now</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7063.70063639701!2d85.28798092330244!3d27.72190742850419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1893566e1b19%3A0xd2babe6b7135d434!2sBanasthali%2C+Kathmandu+44600!5e0!3m2!1sen!2snp!4v1508933854516" width="100%" height="350" frameborder="0" style="border:2px solid #bcbcbc" allowfullscreen></iframe>
        </div>
    </div>
   
