<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','General Info'); ?>
 
 <?php $__env->startSection('content'); ?>

 <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>

 <?php if(count($errors) > 0 ): ?>
    <div class="alert alert-danger">
        <strong>Whoooppss !!</strong> There were some problem with your input. <br>
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li> <?php echo e($error); ?> </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
 <?php endif; ?>
 

  <?php echo Form::open(['id' => 'dataForm', 'method' => 'POST', 'url' => '/generalsettings' ]); ?>


<?php echo e(csrf_field()); ?>

 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>General Information</strong></div>
                      
                      <div class="card-body card-block">
                      
                      <div class="form-group">
                            <?php echo Form::label('systemname', 'System Name', array('class' => 'form-control-label')); ?>

                            <?php echo Form::text('systemname',null, ['placeholder' => 'System  Name', 'class' => 'form-control', 'value' => 'Culiat Library']); ?>

                      </div>

                      <div class="form-group">
                            <?php echo Form::label('systememail', 'System E-mail', array('class' => 'form-control-label')); ?>

                            <?php echo Form::text('systememail',null, ['placeholder' => 'System  E-mail', 'class' => 'form-control', 'value' => 'culiathighschool@gmail.com']); ?>

                      </div>

                      <div class="form-group">
                            <?php echo Form::label('systemcontactno', 'System Contact No', array('class' => 'form-control-label')); ?>

                            <?php echo Form::text('systemcontactno',null, ['placeholder' => 'System Contact No', 'class' => 'form-control', 'value' => '0122333444455555']); ?>

                      </div>

                      


                    <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                                      <label>Opening time</label>
                                      <div class="iconic-input">
                                        <i class="fa fa-clock-o"></i>
                                        <input type="text" name="open_time" class="form-control" placeholder="start point" value="5">
                                      </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                                      <label>Closing time</label>
                                      <div class="iconic-input">
                                        <i class="fa fa-clock-o"></i>
                                        <input type="text" name="close_time" class="form-control" placeholder="End point" value="12">
                                      </div>
                                  </div>
                              </div>
                         </div>
               
             </div>
       </div>     
       
</div>


            <div class="col-lg-6">
                    <div class="card">
                    <div class="panel-body">
								<div class="form-group">  
									<div class="col-md-6">
										<small>(Logo should be 144 x 40px)</small>
										<label for="file-upload" class="custom-file-upload">
											<i class="fa fa-cloud-upload"></i> Upload System Logo
										</label>
										<input id="uploadsystemlogo" name="file" type="file" accept="image/x-png,image/gif,image/jpeg" value="image.png">

                    
									</div>
								
									<div class="col-md-6">
									<br><br><img src="https://yourprogramming.com/library/images/localhost.jpg"  style="max-width: 100%;">									</div>
								</div>
							</div>

              <div class="panel-body">
								<div class="form-group">
									<div class="col-md-6">
										<small>(Favicon should be 16 x 16px)</small>
										<label for="file-upload" class="custom-file-upload">
											<i class="fa fa-cloud-upload"></i> Upload Favicon
										</label>
										<input id="favicon" name="favicon" type="file" accept="image/x-png,image/gif,image/jpeg">
									</div>
								
									<div class="col-md-6">
									<br><br><img src="https://yourprogramming.com/library/images/localhost_favicon.png" style="max-width: 50px;"></div>
								</div>
							</div>


     </div>

</div>

 <div class="col-lg-12">
      <div class="card">
             <div class="card-header"><small>Culiat High School</small></div>
               <div class="card-body card-block">
		
                       <div class="form-group">
                            <?php echo Form::label('address', 'Organization address', array('class' => 'form-control-label')); ?>

                            <?php echo Form::text('address',null, ['placeholder' => 'Location', 'class' => 'form-control', 'value' => 'Quezon City, Philippines']); ?>

                      </div>

                      <div class="form-group">
                            <?php echo Form::label('address', 'About Organization', array('class' => 'form-control-label')); ?>

                            <?php echo Form::textarea('about',null, ['placeholder' => 'About Organization', 'class' => 'form-control', 'value' => 'Culiat High School aims to provide quality basic education to all learners and equip them with the necessary knowledge, skill, values and attitudes for them to cope with the demands of times and become responsible and productive citizens of the country.']); ?>

                      </div>

                      <div class="form-group">
                            <?php echo Form::label('mission', 'Mission', array('class' => 'form-control-label')); ?>

                            <?php echo Form::textarea('mission',null, ['placeholder' => 'Mission', 'class' => 'form-control', 'value' => 'To Follow.']); ?>

                      </div>

                      <div class="form-group">
                            <?php echo Form::label('vision', 'Vision', array('class' => 'form-control-label')); ?>

                            <?php echo Form::textarea('vision',null, ['placeholder' => 'Vision', 'class' => 'form-control', 'value' => 'To Follow.']); ?>

                      </div>
     
    
     <?php echo Form::submit('Submit General information', ['id' => 'addForm','class' => 'btn btn-success  col-lg-3 offset-8']); ?>




     
							</div>
          </div>    
    </div>
 </div>
 <?php echo Form::close(); ?>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>