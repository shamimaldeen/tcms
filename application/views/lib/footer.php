<!-- footer -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Executed in 0.1659 seconds    </div>
    <strong>Copyright &copy; 2017 - 2018 <a href="http://arif98741.github.io/profile" target="_blank">Ariful Islam</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script> -->

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/transactionandsuppliertransaction.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/select2.js"></script>
<script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script> 
 <script>


<!-- page script -->
  $(function () {
    $('#example1').DataTable();
    
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "order": [[ 1, "desc" ]]
    });
  });
</script>

<script>
  $(document).ready(function() {
    setTimeout(function(){
      $('#message').slideUp(400);
    },2000);

    /*ckeditor enable*/
    CKEDITOR.replace('editor');


  });
</script>


</body>
</html>
