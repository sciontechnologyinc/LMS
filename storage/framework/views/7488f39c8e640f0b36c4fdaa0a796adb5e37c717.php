

<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Add New Account'); ?>
 
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


    <?php echo Form::open(['id' => 'dataForm', 'url' => '/administrators']); ?>

    <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Create</strong><small> Account</small></div>
                      <div class="card-body card-block">


                          <div class="form-group col-lg-7">
								<?php echo Form::label('name', 'Account Name', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-user"></i></span>
									<?php echo Form::text('name',null, ['placeholder' => 'Account Name', 'class' => 'form-control col-lg-12', 'required' => '' ]); ?>


                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>

								</div>
							</div>
						</div>

                            <div class="form-group col-lg-7">
								<?php echo Form::label('email', 'E-Mail Address', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-user"></i></span>
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email Address" required>


                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

								</div>
							</div>
						</div>



                        <div class="form-group col-lg-7">
								<?php echo Form::label('password', 'Password', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-lock"></i></span>
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="********" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>

								</div>
							</div>
						</div>

                        <div class="form-group col-lg-7">
								<?php echo Form::label('confirmpassword', 'Confirm Password', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-lock"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="********" required>

								</div>
							</div>
						</div>

                        <div class="form-group col-lg-7">
								<?php echo Form::label('role', 'Role', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-tasks"></i></span>
								<?php echo Form::number('admin',null, ['placeholder' => 'Permission', 'class' => 'form-control col-lg-12', 'required' => '' ]); ?>



								</div>
                                <input type="hidden" name="permission" id="permission" class="permission" value="Admin">

							</div>
						</div>
                                <br>
                                <?php echo Form::submit('Create Account', ['class' => 'btn btn-primary  col-lg-2 offset-7']); ?>


                              </div>
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