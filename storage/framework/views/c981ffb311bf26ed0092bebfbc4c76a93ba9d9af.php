<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Edit Member'); ?>
 
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
 <link rel="stylesheet" href="<?php echo ('/css/memberlistcss.css'); ?>">

 <?php echo Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/members/' . $member->id, 'enctype' => 'multipart/form-data']); ?>


 <div class="wrapper" style="min-height: 450px;">
            
<div class="row"> 
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body">

							<div class="profile-pic text-center">
							<?php if($member->photo): ?>
                                <img value="<?php echo e(asset('storage/uploads/'.$member->id.$member->photo)); ?>" type="file" class="photo" src="<?php echo e(asset('storage/uploads/'.$member->photo)); ?>" />&nbsp;
                                <?php else: ?>
                                <img value="<?php echo e(asset('storage/uploads/'.$member->id.$member->photo)); ?>" type="file" class="photo" src="storage/uploads/user_icon.png" />
                                <?php endif; ?>
							 <br>
							<label class="pointer text-primary"> 
									<label for="phto" class="custom-file-uploads" style="display: inline-block;">
										<i class="fa fa-camera pointer text-primary"></i> <small>Choose Photo</small>
									</label>
									<input id="phto" name="photo" hidden="true" class="photo" type="file" accept="image/x-png,image/gif,image/jpeg" value="<?php echo e($member->photo); ?>">
									
									</label>
						

						</div>
					</div>
				</div>
			</div>
			
						<!-- user analytical info-->
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body pbody-info">
						<ul class="p-info">
							<li>
								<div class="title">Name</div>
								<div class="desk"><?php echo e($member->membername); ?></div>
							</li>
							<li>
								<div class="title">Gender</div>
								<div class="desk"><?php echo e($member->gender); ?></div>
							</li>
							<li>
								<div class="title">Profession</div>
								<div class="desk"><?php echo e($member->profession); ?></div>
							</li>
							<li>
								<div class="title">Department</div>
								<div class="desk"><?php echo e($member->department); ?></div>
							</li>
							<li>
								<div class="title">Book issued</div>
								<div class="desk">0</div>
							</li>
							<li>
								<div class="title">Book Return</div>
								<div class="desk">
								0 | <span class="text-danger">Return 0% successfully!</span> </div>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body pbody-media">
						<div class="profile-desk">
							<h3><?php echo e($member->membername); ?> <small>[ <?php echo e($member->profession); ?> ] [ <?php echo e($member->department); ?>  ]</small></h3>
              <span class="designation">Chosen Subjects are: <?php echo e($member->subject); ?> <b class="text-danger">|</b> </span><br>
              <br>
							<p>Update your info <span class="fa fa-arrow-down"></span></p>

							
							
							<ul class="p-social-link pull-right">
															</ul>
							
						</div>
					</div>
					
	
					<!-- user update information -->	
					<div class="panel-body bg-info" style="border:1px solid #353f4f">
						<div class="col-lg-12">
							<p>Update personal information <span class="fa fa-angle-double-down"></span></p>
							<hr><div class="form-group">
							     	<?php echo Form::label('membername', 'Name', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<?php echo Form::text('membername',$member->membername, ['placeholder' => 'Name', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('email', 'Email-Address', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i></span>
									<?php echo Form::email('email',$member->email, ['placeholder' => 'Email-Address', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('gender', 'Gender', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-intersex custom"></i></span>
									<?php echo Form::select('gender', array('male' => 'Male', 'female' => 'Female'), $member->gender,array('class' => 'form-control')); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('contactnumber', 'Contact Number', array('class' => 'form-control-label')); ?>	
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-phone-square"></i></span>
									<?php echo Form::number('contactnumber',$member->contactnumber, ['placeholder' => 'Contact Number', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('profession', 'Profession', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<?php echo Form::text('profession',$member->profession, ['placeholder' => 'Profession', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>

                             <div class="form-group">
                                            <label>Department</label>
                                            <div class="iconic-input">
                                      <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon">
                                      <i class="fa fa-list-alt"></i></span>
                                      <select name="department" class="form-control">
									     <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									     <option value="<?php echo e($department->departmentname); ?>"  <?php if($department->departmentname==$member->department): ?> selected='selected' <?php endif; ?> ><?php echo e($department->departmentname); ?></option>
										 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                          </select>
                                          
                                           
                                        </div>
                                    </div>
                                 </div>

						<div class="form-group">
									<?php echo Form::label('LRN', 'LRN(student number)', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-id-card"></i></span>
									<?php echo Form::number('LRN',$member->LRN, ['placeholder' => 'LRN', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>

						

             				<div class="form-group">
							<label style="width:100%;">Check Subjects </label>
             				 <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#d9edf7;margin:0.5%;border-radius:20px;">
								<input class="subject" type="checkbox" name="subject[]" value="<?php echo e($subject->subjectname); ?>"><?php echo e($subject->subjectname); ?></label>
               				 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
				
						

							<div class="form-group">
									<?php echo Form::label('livingaddress', 'Living Address', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-map-marker"></i></span>
									<?php echo Form::text('livingaddress',$member->livingaddress, ['placeholder' => 'Living Address', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
								<br>
							   <?php echo Form::submit('Update User info', ['class' => 'btn btn-info  col-lg-3']); ?>


			
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>  
		
	</div>
</div>


    </div>
</div>




            
<?php echo Form::close(); ?>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>