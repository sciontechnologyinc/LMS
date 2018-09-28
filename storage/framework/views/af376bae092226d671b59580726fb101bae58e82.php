<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Edit Profile'); ?>
 
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


 <div class="wrapper" style="min-height: 450px;">
            
<div class="row"> 
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body">

							<div class="profile-pic text-center">
							 <br>
							<label class="pointer text-primary"> 
									<label for="phto" class="custom-file-uploads" style="display: inline-block;">
										<i class="fa fa-camera pointer text-primary"></i> <small>Choose Photo</small>
									</label>
									<input id="phto" name="photo" hidden="true" class="photo" type="file" accept="image/x-png,image/gif,image/jpeg" value="asd">
									
									</label>
						

						</div>
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
							<h3>asdasd<small>[ asd ] [ asdasd  ]</small></h3>
              <span class="designation">Chosen Subjects are: asd <b class="text-danger">|</b> </span><br>
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
									<?php echo Form::text('membername',null, ['placeholder' => 'Name', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('email', 'Email-Address', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i></span>
									<?php echo Form::email('email',null, ['placeholder' => 'Email-Address', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('gender', 'Gender', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-intersex custom"></i></span>
									<?php echo Form::select('gender', array('male' => 'Male', 'female' => 'Female'), null,array('class' => 'form-control')); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('contactnumber', 'Contact Number', array('class' => 'form-control-label')); ?>	
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-phone-square"></i></span>
									<?php echo Form::number('contactnumber',null, ['placeholder' => 'Contact Number', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>


						     
						
						<div class="form-group">
									<?php echo Form::label('Library Card Number', 'Library Card Number', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-id-card"></i></span>
									<?php echo Form::number('LRN',null, ['placeholder' => 'Card Number', 'class' => 'form-control' ]); ?>

								</div>
							</div>
						</div>
						
	

				
                       			 <div class="form-group">
								
									<?php echo Form::label('profession', 'Profession', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									
									<?php echo Form::select('profession', array('student' => 'Student', 'professor' => 'Professor', 'visitor' => 'Visitor'),null,array('class' => 'form-control', 'id' => 'profession')); ?>

									
								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('livingaddress', 'Living Address', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-map-marker"></i></span>
									<?php echo Form::text('livingaddress',null, ['placeholder' => 'Living Address', 'class' => 'form-control' ]); ?>

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
 



 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>