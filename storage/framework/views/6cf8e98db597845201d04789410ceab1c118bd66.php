<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Member list'); ?>
 
 <?php $__env->startSection('content'); ?>
        
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
                      <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td>
                        <div class="member-listcontainer">
                            <div class="per-member">
                              <div class="row">
                                <div class="col-sm-4"><img src= "/storage/uploads/<?php echo e($member->photo); ?>" >&nbsp;</div>
                                <div class="col-sm-6 membername"><?php echo e($member->membername); ?><br><?php echo e($member->contactnumber); ?></div>
                                <div class="col-sm-2"></div>
                              </div>
                              <div class="row-2">
                                  <div class="col-sm-4 edit-btn"><i class="fa fa-edit"></i> Edit</div>
                                  <div class="col-sm-4 delete-btn"><i class="fa fa-trash"></i> Delete</div>
                                  <div class="col-sm-4 details-btn"><i class="fa fa-eye"></i> Details</div>
                              </div>
                            </div>
                            
                            
                        </div>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>