<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Member list'); ?>
 
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
 <a class="btns btn-primaries col-lg-2 offsets-9" href="<?php echo e(url('members/create')); ?>" style="margin-bottom: 10px;">Create New</a>
        
        <link rel="stylesheet" href="<?php echo ('/css/memberlistcss.css'); ?>">
       

 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Member list</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                    
                      <tr>
                        <th><input type="text" placeholder="Search Member" class="search-memberlist"></th>
                      </tr> 
                      <tr>
                        <td>
                        <div class="member-listcontainer">
                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="per-member">
                              <div class="row">
                              <div class="col-sm-4 photo"> 
                                <?php if($member->photo): ?>
                                <img src="<?php echo e(asset('storage/uploads/'.$member->photo)); ?>" />&nbsp;
                                <?php else: ?>
                                <img src="<?php echo e(asset('storage/uploads/user_icon.png')); ?>" />
                                <?php endif; ?>
                                </div>
                                <div class="col-sm-6 membername"><?php echo e($member->membername); ?><br><?php echo e($member->contactnumber); ?></div>
                                <div class="col-sm-2"></div>
                              </div>
                              <div class="row-2">
                              <center>
                                <div class="form-group" style="display:inline-flex">
                                 <a rel="tooltip" title="Edit" class="btn btn-sm mr-1" href="members/<?php echo $member->id; ?>/edit"><span class="fa fa-edit">&nbsp;Edit</span></a>
                                  <?php echo Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/members/' . $member->id]); ?>

                                  <?php echo e(Form::button('<span class="fa fa-trash">&nbsp;Delete</span>', ['type' => 'submit', 'class' => 'col-sm-4 delete-btn', 'rel' => 'tooltip', 'title' => 'Delete'] )); ?>

                                  <?php echo Form::close(); ?>

                              
                                  </div>
                                  </center>
                              </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </div>  
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                  
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
     $("#deleteForm").submit(function (event) {
                 var x = confirm("Are you sure you want to delete?");
                    if (x) {
                        return true;
                    }
                    else {

                        event.preventDefault();
                        return false;
                    }

                });
</script>

<script type="text/javascript">
	$(document).ready(function(){
	    $("[rel=tooltip]").tooltip({ placement: 'top'});
	    
	});
</script>
        
 <?php $__env->stopSection(); ?>

 
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>