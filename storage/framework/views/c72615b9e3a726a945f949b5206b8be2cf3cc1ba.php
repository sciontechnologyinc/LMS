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

<form class="form-horizontal" method="POST" action="<?php echo e(route('changePassword')); ?>">
                        <?php echo e(csrf_field()); ?>

<div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Edit</strong><small> Profile</small></div>
                      <div class="card-body card-block">
				<div class="panel">
					<p class="text-center text-danger">Update Your Password </p>
					<div class="panel-body changepassword">
						<div class="form-group<?php echo e($errors->has('current-password') ? ' has-error' : ''); ?>">
							<label>Current password</label>
                            <div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-lock text-success"></i></span>
                                    <input id="current-password" type="password" placeholder="Current Password" class="form-control" name="current-password" required>
                                    <?php if($errors->has('current-password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('current-password')); ?></strong>
                                    </span>
                                <?php endif; ?>
							</div>
						</div>
                    </div>
						<div class="form-group">
							<label>Set new password</label>
                            <div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-lock text-success"></i></span>
                                    <input id="new-password" type="password" placeholder="New Password" class="form-control" name="new-password" required>
 
                                    <?php if($errors->has('new-password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('new-password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
							</div>
						</div>
                    </div>
						<div class="form-group">
							<label>Confirm new password</label>
                            <div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-lock text-success"></i></span>
                                    <input id="new-password-confirm" type="password" placeholder="Confirm new password" class="form-control" name="new-password_confirmation" required>
							</div>
						</div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
			</div>
		</div>
	</div>
    <?php echo Form::close(); ?>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>