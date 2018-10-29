<?php
   //date formattting
     function format_date($data)
     {
       $date = DateTime::createFromFormat('Y-m-d H:i:s',$data);
       return $formattedweddingdate = $date->format('d-m-Y');
     }
    ?>
<div class="wrapper">
   
   <div class="container">
      <?php if($this->session->success): ?>
   <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
   <?php endif; ?>
   <?php if($this->session->error): ?>
   <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
   <?php endif; ?>
      <div class="row">
         <div class="span12">
            <div class="content">
               <div class="module">
                  <div class="module-head">
                     <div class="module-option clearfix">
                        <div class="pull-left">
                           <h3>Staffs List</h3>
                        </div>
                        <div class="pull-right">
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="menu-icon icon-plus"></i> Add New </button>
                        </div>
                     </div>
                  </div>
                  <div class="module-body table">
                     <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                        <thead>
                           <tr>
                              <th nowrap  >Staff ID</th>
                              <th  nowrap> Full Name</th>
                              <th  nowrap> Designation</th>
                              <th  nowrap> Contact Number</th>
                              <th  nowrap> Joning</th>
                              <th  nowrap> Photo</th>
                              <th nowrap width="1%"> - </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i=1; foreach($staffs as $staff) {?>
                           <tr class="odd gradeX">
                              <td nowrap><?php echo $staff->staff_id; ?></td>
                              <td nowrap><?php echo $staff->staff_fullname; ?></td>
                              <td nowrap><?php echo $staff->staff_designation; ?></td>
                              <td nowrap><?php echo $staff->staff_cnumber; ?></td>
                              <td nowrap><?php echo format_date($staff->staff_joining_date,'Y-m-d'); ?></td>
                              <td nowrap> <a href="<?php base_url ();?>uploads/staff/image/<?php echo $staff->staff_image; ?>" ><i class="menu-icon icon-link"></i>  Photo Link</a></td>
                              <td nowrap>
                                 <a href="#.php" class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $i;?>"><i class="menu-icon icon-edit"></i> </a> 
                                 <a href="<?php echo base_url();?>delete_staff/<?php echo $staff->staff_id; ?>" class="btn btn-danger"><i class="menu-icon icon-trash" onclick="return (confirm('are you sure to delete?'))"></i> </a>
                              </td>
                           </tr>
                           <!-- edit modal start-->
                           <div id="myModal<?php echo $i;?>" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                 <!-- Modal content-->
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       <h4 class="modal-title">Update Staff </h4>
                                    </div>
                                    <div class="modal-body">
                                       <?php  echo form_open_multipart('staff/update_staff/'.$staff->staff_id,array('id'=>'')) ?>
                                       <div class="row-fluid">
                                          <div class="span8">
                                             <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" value="<?php echo $staff->staff_fullname; ?>" name="staff_fullname" placeholder="" class="span12">
                                             </div>
                                          </div>
                                          <div class="span4">
                                             <div class="form-group">
                                                <label>Designation</label>
                                                <input type="text" value="<?php echo $staff->staff_designation; ?>" name="staff_designation" placeholder="" class="span12">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row-fluid">
                                          <div class="span8">
                                             <div class="form-group">
                                                <label>Contact Name</label>
                                                <input type="text" value="<?php echo $staff->staff_cnumber; ?>" name="staff_cnumber" placeholder="" class="span12">
                                             </div>
                                          </div>
                                          <div class="span4">
                                             <div class="form-group">
                                                <label>Joning</label>
                                                <input type="date" value="<?php echo format_date($staff->staff_joining_date,"Y-m-d"); ?>" name="staff_joining_date" placeholder="" class="span12">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row-fluid">
                                          <label>Photo</label>
                                          <input type="file" value="<?php echo $staff->staff_image; ?>" name="staff_image" placeholder="" class="span12">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <center>
                                    <button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i> Update</button>
                                 </center>
                              </div>
                              </form>
                           </div>
                  </div>
               </div>
                  <!-- edit modal end-->
               <?php } ?>
               </tbody>
               <tfoot>
               </tfoot>
               </table>
            </div>
         </div>
         <!--/.module-->
      </div>
      <!--/.content-->
   </div>
   <!--/.span9-->
</div>
</div>
<!--/.container-->
</div>
<!--/.wrapper-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add New Staff </h4>
         </div>
         <div class="modal-body">
            <?php  echo form_open_multipart('staff/save_staff',array('id'=>'')) ?>
            <div class="row-fluid">
               <div class="span8">
                  <div class="form-group">
                     <label>Full Name</label>
                     <input type="text" name="staff_fullname" placeholder="" class="span12">
                  </div>
               </div>
               <div class="span4">
                  <div class="form-group">
                     <label>Designation</label>
                     <input type="text" name="staff_designation" placeholder="" class="span12">
                  </div>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span8">
                  <div class="form-group">
                     <label>Contact Name</label>
                     <input type="text" name="staff_cnumber" placeholder="" class="span12">
                  </div>
               </div>
               <div class="span4">
                  <div class="form-group">
                     <label>Joning</label>
                     <input type="date" name="staff_joining_date" placeholder="" class="span12">
                  </div>
               </div>
            </div>
            <div class="row-fluid">
               <label>Photo</label>
               <input type="file" name="staff_image" placeholder="" class="span12">
            </div>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <center>
         <button type="submit" class="btn-large btn-success"><i class="menu-icon icon-save"></i> Save</button>
      </center>
   </div>
   </form>
</div>
</div>
</div>