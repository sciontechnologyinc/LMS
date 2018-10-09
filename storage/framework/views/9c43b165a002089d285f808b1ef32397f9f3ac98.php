

<?php $__env->startSection('content'); ?>
<div class="about-container">
    <div class="about-title-container">
        <div class="about-title">About</div>
    </div>
    <?php $__currentLoopData = $generalsettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $generalsetting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="about-content">
    <div class="about-contentdesc">
    <?php echo e($generalsetting->about); ?>

    </div>
    <div class="about-mission">Mission</div>
    <div class="about-missiondesc"><?php echo e($generalsetting->mission); ?>.</div>
    <div class="about-vision">Vision</div>
    <div class="about-visiondesc"><?php echo e($generalsetting->vision); ?>

                                    
 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
 </div>
 </div>

 <?php $__env->stopSection(); ?>

 <style>

.menu-list2 a {
    color:#2e77d1 !important;
}
        
</style>
<?php echo $__env->make('lms.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>