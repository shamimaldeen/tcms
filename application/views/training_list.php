<?php 
  //echo "<pre>";
  //print_r($trainings); die;
?>
<?php

       //date formattting
         function format_date($data)
         {
           $date = DateTime::createFromFormat('Y-m-d H:i:s',$data);
           return $formattedweddingdate = $date->format('d-m-Y');
         }
        ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Training</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="index.php">Dashboard</a></li>
       
        <li class="active"><a href="<?php echo base_url();?>add_training">Add New training</a></li>
    
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php if($this->session->success): ?>
          <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
       <?php endif; ?>

       <?php if($this->session->error): ?>
          <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
       <?php endif; ?>
     <div class="row">
       <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                 
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="10%"> Training ID</th>

                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="10%">Training Name</th>

                   <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="10%">Employee</th>
                   <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="10%">Training Date</th>




                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"  width="10%">Action</th>

                </tr>
                </thead>
                <tbody style="text-align: center;">

                  <?php foreach($trainings as $training){ ?>
                           
                      <tr>
                          
                          <td style="text-align: left;"><?php echo $training->tra_id; ?></td>
                          <td style="text-align: left;"><?php echo $training->tra_name; ?></td>
                          <td style="text-align: left;"><?php echo $training->emp_name; ?></td>
                          <td style="text-align: left;"><?php echo format_date( $training->tra_date); ?></td>

                         
                          <td>
                             
                              <a href="<?php echo base_url();?>edit_training/<?php echo $training->tra_id; ?>"><i class="fa fa-pencil-square-o btn" title="click to edit"></i></a>

                              <a href="<?php echo base_url();?>training/delete_training/<?php echo $training->tra_id; ?>"><i id="deleterow"   class="fa fa-trash" style="color:red;" title="click to delete" onclick="return confirm('are you sure to delete?')" ></i></a>
    
                          </td>
                          
                       </tr>
                     <?php } ?>
                   
                     </tbody>
              
              </table>
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      
    </section>
    <!-- /.content -->
  </div>


