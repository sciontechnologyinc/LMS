<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Trash list'); ?>
 
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
 
 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Trash Sections List</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                        <tr>
                            <th style="padding-left: 15px;">#</th>
                            <th>Section Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                    <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>

                        <td><?php echo e($index +1); ?></td>
                        <td><?php echo e($section->sectionname); ?></td>
                        <td><center>
                        <?php echo Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/sectionTrash/' . $section->id]); ?>

                        <?php echo e(Form::button('<i class="fa fa-window-restore"></i>', ['type' => 'submit', 'class' => 'btn btn-success btn-sm', 'rel' => 'tooltip', 'title' => 'Restore'] )); ?>

                        <?php echo Form::close(); ?>

                        </center></td>
                      </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                        </div>
                    </div>
                </div>

 

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">
     $("#deleteForm").submit(function (event) {
                 var x = confirm("Are you sure you want to restore?");
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