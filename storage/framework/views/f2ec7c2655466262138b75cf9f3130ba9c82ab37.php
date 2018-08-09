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
             
         <div class="col-md-3">
        <div class="panel white-bg">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-users text-warning"></i>
                    </div>
                    <div class="col-xs-8">
                        <span class="state-title text-warning"> <b>Logged in user</b> </span>
                        <h4 class="text-center text-primary"> <b>2</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

         </div>

     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-2">
         <div class="card-body pb-0">
             <div class="dropdown float-right">
                 <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                     <i class="fa fa-cog"></i>
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <div class="dropdown-menu-content">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </div>
             </div>
             <h4 class="mb-0">
                 <span class="count">10468</span>
             </h4>
             <p class="text-light">Members online</p>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 <canvas id="widgetChart2"></canvas>
             </div>

         </div>
     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-3">
         <div class="card-body pb-0">
             <div class="dropdown float-right">
                 <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                     <i class="fa fa-cog"></i>
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <div class="dropdown-menu-content">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </div>
             </div>
             <h4 class="mb-0">
                 <span class="count">10468</span>
             </h4>
             <p class="text-light">Members online</p>

         </div>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 <canvas id="widgetChart3"></canvas>
             </div>
     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-4">
         <div class="card-body pb-0">
             <div class="dropdown float-right">
                 <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                     <i class="fa fa-cog"></i>
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <div class="dropdown-menu-content">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </div>
             </div>
             <h4 class="mb-0">
                 <span class="count">10468</span>
             </h4>
             <p class="text-light">Members online</p>

             <div class="chart-wrapper px-3" style="height:70px;" height="70">
                 <canvas id="widgetChart4"></canvas>
             </div>

         </div>
     </div>
 </div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>