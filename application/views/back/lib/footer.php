			<div class="footer">
				<div class="container">
					<b class="copyright">&copy; </b> 2018 Training Center Management System
                   all right reserved.
				</div>
			</div>
			<script src="<?php echo base_url(); ?>asset/back/scripts/jquery-1.9.1.min.js"></script>
			<script src="<?php echo base_url(); ?>asset/back/scripts/jquery-ui-1.10.1.custom.min.js"></script>
			<script src="<?php echo base_url(); ?>asset/back/bootstrap/js/bootstrap.min.js"></script>
			<script src="<?php echo base_url(); ?>asset/back/scripts/datatables/jquery.dataTables.js"></script>
			<script>
				$(document).ready(function() {
					$('.datatable-1').dataTable();
					$('.dataTables_paginate').addClass("btn-group datatable-pagination");
					$('.dataTables_paginate > a').wrapInner('<span />');
					$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
					$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
				} );
			</script>
			<script>
			    $(document).ready(function() {
			    setTimeout(function(){
			      $('#message').slideUp(500);
			    },3000);

			    /*ckeditor enable*/
			    //CKEDITOR.replace('editor');


			     });
            </script>
		</body>						