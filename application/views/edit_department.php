 
<?php 

  //echo "<pre>";
  //print_r($all_edit_department); die;
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="lnr lnr-plus-circle"></i>  Update Department</h1>
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
           
               <?php echo form_open('department/update_department/'.$all_edit_department[0]->dept_id,array('id'=>'')) ?>
                <div class="col-md-4">
                  <div class="form-group">
                      <input name="dept_name" class="form-control" type="text" value="<?php echo $all_edit_department[0]->dept_name;?> " >
                  </div>

                </div>

                <div class="col-md-offset-4 col-md-6 submit-button">
                    <input type="submit" value="Update Departmnet" name="addepartment" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-warning">

                </div>
               </form> 
        </div>
      </div>
        </div>
      </div>
      
    </section>
    <!-- /.content -->
  </div>