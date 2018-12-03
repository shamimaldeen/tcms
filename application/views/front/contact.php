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
                            <p><i class="fa fa-phone"></i><?php echo $sites[0]->phone ; ?></p>
                            <p><i class="fa fa-envelope"></i><?php echo $sites[0]->email ; ?></p>
                            <p><i class="fa fa-map-marker"> </i><?php echo $sites[0]->site_address ; ?></p>
 
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
           <?php echo htmlspecialchars_decode ($sites[0]->map_code) ; ?>
        </div>
    </div>
   
