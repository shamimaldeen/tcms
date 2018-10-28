<div class="wrapper">
   <div class="container">
      <?php if($this->session->success): ?>
      <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
      <?php endif; ?>
      <?php if($this->session->error): ?>
      <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
      <?php endif; ?>
      <div class="row">
         <div class="span10">
            <div class="content">
               <div class="module">
                  <div class="module-head">
                     <div class="module-option clearfix">
                        <div class="pull-left">
                           <h3>Batch List</h3>
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
                              <th nowrap  >Batch ID</th>
                              <th  nowrap> Batch Title</th>
                              <th nowrap width="1%"> - </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i = 1; foreach($batchs as $batch) {?>
                           <tr class="odd gradeX">
                              <td nowrap><?php echo $batch->batch_id; ?></td>
                              <td nowrap><?php echo $batch->batch_title; ?></td>
                              <td nowrap> 
                                 <a href="#" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $i; ?>"><i class="menu-icon icon-edit"></i> </a>
                                 <a href="#.php" class="btn btn-danger"><i class="menu-icon icon-trash"></i> </a>
                              </td>
                           </tr>
                           <!--edit modal start-->
                           <div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                 <!-- Modal content-->
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       <h4 class="modal-title">Update Batch </h4>
                                    </div>
                                    <div class="modal-body">
                                       <?php  echo form_open('batch/update_batch/'.$batch->batch_id,array('id'=>'')) ?>
                                       <div class="row-fluid">
                                          <div class="span12">
                                             <div class="form-group">
                                                <label>Batch Title</label>
                                                <input type="text" name="batch_title" value="<?php echo $batch->batch_title; ?>" name="batch_title" placeholder="Batch title here" class="span12">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <center>
                                    <button type="submit" class="btn-large btn-success"><i class="menu-icon icon-Save"></i> Update</button>
                                 </center>
                              </div>
                              </form>
                           </div>
                           <!--edit modal end-->
                           <?php $i++; } ?>
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
         <div style="" class="span2">
            <div class="sidebar">
               <ul class="widget widget-menu unstyled">
                  <li>
                     <a href="dashboard.php">
                     <i class="menu-icon icon-dashboard"></i>
                     Dashbaord
                     </a>
                  </li>
                  <li>
                     <a href="students_archive.php">
                     <i class="menu-icon icon-user"></i>
                     Student List
                     </a>
                  </li>
                  <li>
                     <a href="courses_current.php">
                     <i class="menu-icon icon-folder-open"></i>
                     Active Course
                     </a>
                  </li>
                  <li>
                     <a href="result_archive.php">
                     <i class="menu-icon icon-list-alt"></i>
                     Result
                     </a>
                  </li>
                  <li>
                     <a href="attendance_record.php">
                     <i class="menu-icon icon-ok"></i>
                     Attendance
                     </a>
                  </li>
                  <li>
                     <a href="staff_list.php">
                     <i class="menu-icon icon-user"></i>
                     Staffs
                     </a>
                  </li>
                  <li>
                     <a href="reports.php">
                     <i class="menu-icon icon-print"></i>
                     Report
                     </a>
                  </li>
               </ul>
               <!--/.widget-nav-->
            </div>
            <!--/.sidebar-->
         </div>
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
            <h4 class="modal-title">Add New Batch </h4>
         </div>
         <div class="modal-body">
            <?php  echo form_open_multipart('batch/save_batch',array('id'=>'')) ?>
            <div class="row-fluid">
               <div class="span12">
                  <div class="form-group">
                     <label>Batch Title</label>
                     <input type="text" name="batch_title" placeholder="Batch title here" class="span12">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <center>
         <button type="submit" class="btn-large btn-success"><i class="menu-icon icon-Save"></i> Done</button>
      </center>
   </div>
   </form>
</div>
</div>
</div>