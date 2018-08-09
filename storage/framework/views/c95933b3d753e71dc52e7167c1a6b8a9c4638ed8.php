<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Dashboard'); ?>
 
 <?php $__env->startSection('content'); ?>
 <div class="content mt-3">

<div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-1">
         <div class="card-body pb-0">
             
             <h4 class="mb-0">
                 <span class="count">10468</span>
             </h4>
             <p class="text-light">Users</p>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 
             </div>

         </div>

     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-2">
         <div class="card-body pb-0">

             <h4 class="mb-0">
                 
     
             <span class="no-padding center mt txt-sm">Total(<?php echo e($t_books); ?>)</span>
             </h4>
             <p class="text-light">Books</p>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                
             </div>
             
         </div>
     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-3">
         <div class="card-body pb-0">

             <h4 class="mb-0">
                 <span class="count">10468</span>
             </h4>
             <p class="text-light">Book Issued</p>

         </div>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 
             </div>
     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-4">
         <div class="card-body pb-0">

             <h4 class="mb-0">
                 <span class="count">10468</span>
             </h4>
             <p class="text-light">Members online</p>

             <div class="chart-wrapper px-3" style="height:70px;" height="70">
                
             </div>

         </div>
     </div>
 </div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>