<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1><i class="lnr lnr-plus-circle"></i>  ADD Project</h1>
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
                     <?php  echo form_open_multipart('employee/save_employee',array('id'=>'')) ?>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Project Name</label>
                           <input name="pro_name" class="form-control" type="text" placeholder="Project Name" required="">
                        </div>
                     </div>
                         
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee"> Project Attachment 1</label>
                           <input name="pro_attach1" class="form-control" type="text" placeholder="Project Attachment 1" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee"> Project Attachment 2</label>
                           <input name="pro_attach2" class="form-control" type="text" placeholder="Project Attachment 2" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee"> Project Attachment 3</label>
                           <input name="pro_attach3" class="form-control" type="text" placeholder="Project Attachment 3" required="">
                        </div>
                     </div>

                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Project Start</label>
                           <input name="pro_start" class="form-control" type="date" placeholder="Date of birth Name" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Join of Date</label>
                           <input name="emp_joining_date" class="form-control" type="date" placeholder="Join of date" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="department">Department</label>
                           <select name="dept_id" id="" class="form-control" >
                              <option value="" disabled="" selected="">Select Department</option>
                              <?php  foreach($departments as $department): ?>
                              <option value="<?php echo $department->dept_id; ?>"><?php echo $department->dept_name; ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="designation">Designation</label>
                           <select name="desig_id" id="" class="form-control" required="">
                              <option value="" disabled="" selected="">Select Designation</option>
                              <?php  foreach($designations as $designation): ?>
                              <option value="<?php echo $designation->desig_id; ?>"><?php echo $designation->desig_name; ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-offset-4 col-md-6 submit-button">
                     <input type="submit" value="Save Employee" name="addepartment" class="btn btn-success">
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