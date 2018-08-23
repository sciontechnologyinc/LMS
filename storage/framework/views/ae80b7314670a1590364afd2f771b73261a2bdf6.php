<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Add Member'); ?>
 
 <?php $__env->startSection('content'); ?>
 
<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>

 <?php if(count($errors) > 0 ): ?>
    <div class="alert alert-danger">
        <strong>Whoooppss !!</strong> There were some problem with your Input. <br>
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li> <?php echo e($error); ?> </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
 <?php endif; ?>
 <link rel="stylesheet" href="<?php echo ('/css/memberlistcss.css'); ?>">


 <?php echo Form::open(['id' => 'dataForm', 'url' => '/members', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                        <div class="form-group">
                              <?php echo Form::label('membername', 'Name', array('class' => 'form-control-label')); ?>

                          <div class="iconic-input">
                          <div class="input-group margin-bottom-sm">
                          <span class="input-group-addon">
                            <i class="fa fa-user"></i></span>
                            <?php echo Form::text('membername',null, ['placeholder' => 'Name', 'class' => 'form-control', 'required' => '']); ?>

                          </div>
                        </div>
                      </div>


                    <div class="form-group">
                         <?php echo Form::label('gender', 'Gender', array('class' => 'form-control-label')); ?>

                         <div class="iconic-input">
                      <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon">
                      <i class="fa fa-intersex custom"></i></span>
                         <?php echo Form::select('gender', array('male' => 'Male', 'female' => 'Female'), null,array('class' => 'form-control', 'required' => '')); ?>

                         </div>
							      </div>
						    </div>
						

                       

						<div class="form-group">
									<?php echo Form::label('contactnumber', 'Contact Number', array('class' => 'form-control-label')); ?>	
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-phone-square"></i></span>
									<?php echo Form::number('contactnumber',null, ['placeholder' => 'Contact Number', 'class' => 'form-control', 'required' => '']); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('email', 'Email-Address', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i></span>
									<?php echo Form::email('email',null, ['placeholder' => 'Email-Address', 'class' => 'form-control', 'required' => '']); ?>

								</div>
							</div>
						</div>

						<div class="form-group">
									<?php echo Form::label('LRN', 'LRN(student number)', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-id-card"></i></span>
									<?php echo Form::number('LRN',null, ['placeholder' => 'LRN', 'class' => 'form-control', 'required' => '']); ?>

								</div>
							</div>
						</div>

						<div class="form-group">
									<?php echo Form::label('profession', 'Profession', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<?php echo Form::text('profession',null, ['placeholder' => 'Profession', 'class' => 'form-control', 'required' => '']); ?>

								</div>
							</div>
						</div>
                      
                        

                      </div>
                    </div>
              </div>
              <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                    <div class="form-group">
                       <?php echo Form::label('deparment', 'Deparment', array('class' => 'form-control-label')); ?>

                       <div class="iconic-input">
                            <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon">
                            <i class="fa fa-bank"></i></span>
                            <select name="department" class="form-control">
                                    <option value="" disabled <?php echo e(old('department') ? '' : 'selected'); ?>>Choose a deparment</option>
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->id); ?>" <?php echo e(old('department') ? 'selected' : ''); ?>><?php echo e($department->departmentname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
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




                  <br><br><br> 
                  <div class="form-group">
                      <?php echo Form::label('livingaddress', 'Living Address', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                      <i class="fa fa-map-marker"></i></span>
                      <?php echo Form::text('livingaddress',null, ['placeholder' => 'Living Address', 'class' => 'form-control', 'required' => '']); ?>

                    </div>
                  </div>
                </div>
                          
                            
                            <div class="form-group">                  
                            <div class="row">
                                <label>Choose photo (<small>optional</small>) <br>
									<label for="phto" class="custom-file-upload" style="display: inline-block;">
										<i class="fa fa-cloud-upload"></i> Upload Photo
									</label>
									<input id="phto" name="photo" hidden="true" class="photo" type="file" accept="image/x-png,image/gif,image/jpeg">
                        </label>
                    </div>
                    </div>
					<br>
	
                      </div>

                     <div class="card-footer">
                     <?php echo Form::submit('Add Member', ['class' => 'btn btn-primary']); ?>

                    </div>
            </div>
      </div>
</div>
<?php echo Form::close(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
     $("#dataForm").submit(function (event) {
                 var x = confirm("Are you sure you want to add?");
                    if (x) {
                        return true;
                    }
                    else {

                        event.preventDefault();
                        return false;
                    }

                });
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>