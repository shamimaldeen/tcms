
	<div class="wrapper">
		<div class="container">  
			<div class="row">
		 		<div class="span2">
				</div><!--/.span3-->
				<div class="module span8">
					<div class="module-head">
						<h3>Course Title <i class="menu-icon icon-chevron-right"></i> OFFICE Office <i class="menu-icon icon-chevron-right"></i>   06 Month </h3>
					</div>
					<div class="module-body">
						<?php  echo form_open('studentcourse/applycourse',array('id'=>'')) ?>
							
							<?php echo $courses[0]->course_details ;?>
							<center>
								<hr>
								<input type="hidden" name="course_id" value="<?php echo $courses[0]->course_id ;?>">
							 
								<button type="submit" class="btn-large btn-warning">   <i class="menu-icon icon-share-alt"></i>  Apply</button>
							</center>
						</div>
						<div class="span2">
						</div><!--/.span3-->
					</div><!--/.span3-->
				</div>
			</form>
		</div>
	</div>
																																																																																													