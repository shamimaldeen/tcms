<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1><i class="lnr lnr-plus-circle"></i>  ADD Employee</h1>
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
                     <?php  echo form_open('employee/save_employee',array('id'=>'')) ?>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Employee Name</label>
                           <input name="emp_name" class="form-control" type="text" placeholder="Employee Name" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">User Name</label>
                           <input name="emp_username" class="form-control" type="text" placeholder="User Name" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Password</label>
                           <input name="emp_password" class="form-control" type="text" placeholder="Password" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="department">Email</label>
                           <input name="emp_email" class="form-control" type="text" placeholder="Email " required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Address</label>
                           <input name="emp_address" class="form-control" type="text" placeholder="Address" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Contact</label>
                           <input name="emp_contact" class="form-control" type="text" placeholder="Contact" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Age</label>
                           <input name="emp_age" class="form-control" type="number" placeholder="Age" required="">

                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Image</label>
                           <input name="emp_image" class="form-control" type="text" placeholder="Image" required="">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="employee">Date of Birth</label>
                           <input name="emp_dof" class="form-control" type="date" placeholder="Date of birth Name" required="">
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