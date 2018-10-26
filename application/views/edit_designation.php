
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="lnr lnr-plus-circle"></i>  Edit Designation</h1>
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
           
             <?php  echo form_open('designation/update_designation/'.$designation[0]->desig_id,array('id'=>'')) ?>
                
                 <div class="col-md-4">
                    <div class="form-group">
                      <label for="department">Department</label>
                        <select name="dept_id" id="" class="form-control" required="">
                          
                          <option value="" disabled="" selected="">Select Department</option>
                          <?php  foreach($departments as $department): ?>

                          <option value="<?php echo $department->dept_id; ?>" <?php if($department->dept_id == $designation[0]->dept_id): ?> selected=""<?php endif; ?>><?php echo $department->dept_name; ?></option>


                        <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="department">Designation Name</label>
                        <input name="desig_name" value="<?php echo $designation[0]->desig_name; ?>" class="form-control" type="text" placeholder="Designation Name" required="">
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