<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Update Department'); ?>
 
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


  <?php echo Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/departments/' . $department->id ]); ?>

    <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Update</strong><small> Department</small></div><br>
                      <div class="row form-group">
                            <div class="col col-md-12">

                          <div class="form-group">
							<div class="form-group col-md-6 offset-2">
								<?php echo Form::label('departmentname', 'Department Name', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-list-alt"></i></span>
									<?php echo Form::text('departmentname',$department->departmentname, ['placeholder' => 'Department Name', 'class' => 'form-control col-lg-12' ]); ?>

								</div>
							</div>
						</div>

                                <br>
                                <?php echo Form::submit('Update Category', ['class' => 'btn btn-primary  col-lg-2 offset-8']); ?>


                              </div>
                            </div>
                          </div>

                    </div>
</div>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>