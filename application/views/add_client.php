
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="lnr lnr-plus-circle"></i>  ADD Client</h1>
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
               
             <?php  echo form_open_multipart('client/save_client',array('id'=>'')) ?>
                
                 <div class="col-md-4">

                    <div class="form-group">
                        <label for="department">Client Name</label>
                        <input name="cli_name" class="form-control" type="text" placeholder="Client name here " required="">
                    </div>

                </div> 
                 <div class="col-md-4">

                    <div class="form-group">
                        <label for="department">Client Address</label>
                        <input name="cli_address" class="form-control" type="text" placeholder="Client Address here" required="">
                    </div>

                </div> 
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="department">Client contact</label>
                        <input name="cli_contact" class="form-control" type="number" placeholder="Client contact here" required="">
                    </div>

                </div> 
                
                

                <div class="col-md-4">   

                    <div class="form-group">
                        <label for="department">Notice Image</label>
                        <input name="cli_image" class="form-control" type="file" placeholder="Client  Image here" >
                    </div>
                </div>

               
                <div class="col-md-8">   
             

                  <div class="submit-button">
                      <input type="submit" value="Save Client" name="addepartment" class="btn btn-success">
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