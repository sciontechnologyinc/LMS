<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Dashboard'); ?>
 
 <?php $__env->startSection('content'); ?>
 <div class="content mt-3">
 <link rel="stylesheet" href="<?php echo ('/css/headercss.css'); ?>">


 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-5">
         <div class="card-body pb-0">

             <h4 class="mb-0">
                 
     
              <span class="no-padding center mt txt-sm count"><?php echo e($t_books); ?></span> 
             </h4>
             <a href="<?php echo e(url('books')); ?>"><p class="text-light">Books</p></a>
             

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                
             </div>
             
         </div>
     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-4">
         <div class="card-body pb-0">
             
             <h4 class="mb-0">
             <span class="no-padding center mt txt-sm count"><?php echo e($t_members); ?></span> 
             </h4>
             <a href="<?php echo e(url('members')); ?>"><p class="text-light">Members</p></a>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 
             </div>

         </div>

     </div>
 </div>


 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-3">
         <div class="card-body pb-0">

             <h4 class="mb-0">
                 <span class="count"><?php echo e($t_bookissues); ?></span>
             </h4>
             <a href="<?php echo e(url('bookissues')); ?>"><p class="text-light">Book Issued</p></a>

         </div>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 
             </div>
     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-2">
         <div class="card-body pb-0">

             <h4 class="mb-0">
             <span class="no-padding center mt txt-sm count"><?php echo e($t_categories); ?></span> 
             </h4>
             <a href="<?php echo e(url('categories')); ?>"><p class="text-light">Categories</p></a>

             <div class="chart-wrapper px-3" style="height:70px;" height="70">
                
             </div>

         </div>
     </div>
 </div>

  <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-1">
         <div class="card-body pb-0">

             <h4 class="mb-0">
             <span class="no-padding center mt txt-sm count"><?php echo e($t_subjects); ?></span> 
             </h4>
             <a href="<?php echo e(url('subjects')); ?>"><p class="text-light">Subjects</p></a>

             <div class="chart-wrapper px-3" style="height:70px;" height="70">
                
             </div>

         </div>
     </div>
 </div>

  <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-5">
         <div class="card-body pb-0">

             <h4 class="mb-0">
             <span class="no-padding center mt txt-sm count"><?php echo e($t_departments); ?></span> 
             </h4>
             <a href="<?php echo e(url('departments')); ?>"><p class="text-light">Departments</p></a>

             <div class="chart-wrapper px-3" style="height:70px;" height="70">
                
             </div>

         </div>
     </div>
 </div>

  

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>