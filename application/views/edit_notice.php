
 <?php

       //date formattting
         function format_date($data)
         {
           $date = DateTime::createFromFormat('Y-m-d H:i:s',$data);
           return $formattedweddingdate = $date->format('Y-m-d');
         }
        ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="lnr lnr-plus-circle"></i>  Update Notice</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-sm-12">
        <div class="box">
          <div class="box-body">
            <div class="row">
          <div class="col-md-12"> 

        <?php if($this->session->success): ?>
            <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
         <?php endif; ?>

         <?php if($this->session->error): ?>
            <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
         <?php endif; ?>
               
             <?php  echo form_open_multipart('notice/update_notice/'.$notice[0]->noti_id,array('id'=>'')) ?>
                
                 <div class="col-md-4">

                    <div class="form-group">
                        <label for="department">Notice title</label>
                        <input name="noti_title" class="form-control" type="text" placeholder="Notice title" value="<?php echo $notice[0]->noti_title; ?>">
                    </div>

                </div> 
                
                

                <div class="col-md-4">   

                    <div class="form-group">
                        <label for="department">Notice Image</label>
                        <input name="noti_image" class="form-control" type="file" placeholder="Notice Image" value="<?php echo $notice[0]->noti_image; ?>" >
                    </div>
                </div>

                 <div class="col-md-4">   


                    <div class="form-group">
                        <label for="department">Notice attachment 1</label>
                        <input name="noti_attach1" class="form-control" type="file" placeholder="Notice attachment 1" value="<?php echo $notice[0]->noti_attach1; ?>">
                    </div>
               </div>

                <div class="col-md-4">   


                     <div class="form-group">
                        <label for="department">Notice attachment 2</label>
                        <input name="noti_attach2" class="form-control" type="file" placeholder="Notice attachment 2"  value="<?php echo $notice[0]->noti_attach2; ?>">
                    </div>

                 </div>    

                 <div class="col-md-4">   
                     <div class="form-group">
                        <label for="department">Notice attachment 3</label>
                        <input name="noti_attach3" class="form-control" type="file" placeholder="Notice attachment 3"  value="<?php echo $notice[0]->noti_attach3; ?>" >
                    </div>

                </div>

                 <div class="col-md-4">   
                     <div class="form-group">
                        <label for="department">Notice Date</label>
                        <input name="noti_date" class="form-control" type="date" placeholder="Notice attachment 3" value="<?php echo format_date($notice[0]->noti_date); ?>" >
                    </div>

                </div>


                <div class="col-md-12">   

                    <div class="form-group">
                        <label for="department">Notice Description</label>
                        <textarea name="noti_description" id="editor" cols="30" rows="10" class="form-control">  <?php echo $notice[0]->noti_description; ?></textarea>
                        <!-- <input  class="form-control" type="text" placeholder="Notice Description" > -->
                    </div>
               </div>
                <div class="col-md-8">   
             

                  <div class="submit-button">
                      <input type="submit" value="Update Notice" name="addepartment" class="btn btn-success">
                      <input type="reset" value="Reset" class="btn btn-warning">

                  </div>
                </div>


               </form> 
        </div>
      </div>
        </div>
      </div>
      
    </section>
    <!-- /.content -->
  </div>