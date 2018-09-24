<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Add New Section'); ?>
 
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


    <?php echo Form::open(['id' => 'dataForm', 'url' => '/sections']); ?>

    <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Create</strong><small> Section</small></div>
                      <div class="card-body card-block">


                          <div class="form-group">
							<div class="form-group col-md-6 offset-2">
								<?php echo Form::label('sectionname', 'Section Name', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-building"></i></span>
									<?php echo Form::text('sectionname',null, ['placeholder' => 'Section Name', 'class' => 'form-control col-lg-12', 'required' => '' ]); ?>

								</div>
							</div>
						</div>
                                <br>
                                <?php echo Form::submit('Create Section', ['class' => 'btn btn-primary  col-lg-2 offset-7']); ?>


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