
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="lnr lnr-plus-circle"></i>  Update Stock_category</h1>
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
               
             <?php  echo form_open('stock_category/update_stock_category/'.$stock_category[0]->scat_id,array('id'=>'')) ?>
                
                 <div class="col-md-8">

                    <div class="form-group">
                        <label for="department">Stock_category Name</label>
                        <input name="scat_name" class="form-control" type="text" placeholder="Stock_category name here " value="<?php echo $stock_category[0]->scat_name; ?>">
                    </div>

                </div> 
                 
               
                <div class="col-md-8">   
             

                  <div class="submit-button">
                      <input type="submit" value="Update" name="addepartment" class="btn btn-success">
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