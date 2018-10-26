<?php

//echo"hi";
//die;


?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="lnr lnr-plus-circle"></i>  ADD traing</h1>
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
               
             <?php  echo form_open('training/save_training',array('id'=>'')) ?>
                
                 <div class="col-md-4">

                    <div class="form-group">
                        <label for="department">Training Name</label>
                        <input name="tra_name" class="form-control" type="text" placeholder="training name" required="">
                    </div>

                </div> 


                <div class="col-md-4">
                 <div class="form-group">
                      <label for="department">Employee</label>
                        <select name="emp_id" id="" class="form-control" required="">
                          
                          <option value="" disabled="" selected="">Select Employee</option>
                          <?php  foreach($employees as $employee): ?>
                          <option value="<?php echo $employee->emp_id; ?>"><?php echo $employee->emp_name; ?></option>

                        <?php endforeach; ?>

                        </select>
                    </div>
                  </div>

                    <div class="col-md-4">   
                     <div class="form-group">
                        <label for="department">Training Date</label>
                        <input name="tra_date" class="form-control" type="date" placeholder=" training date" >
                    </div>

                </div>


                <div class="col-md-8">   
             

                  <div class="submit-button">
                      <input type="submit" value="Save" name="addepartment" class="btn btn-success">
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