<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Add Member'); ?>
 
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
 <link rel="stylesheet" href="<?php echo ('/css/termscss.css'); ?>">



    <?php echo Form::open(['id' => 'dataForm', 'url' => '/terms']); ?>


 <div class="wrapper" style="min-height: 450px;">
            <br> <br>
            <div class="mail-box">
              <aside class="mail-nav mail-nav-bg-color">
                <header class="headers"> <h4>Add new term </h4> </header>
                <div class="mail-nav-body">
                  <ul class="nav nav-pills nav-stacked mail-navigation">
                    <li class="active text-center">
                     
                    </li>
                  </ul>
            
                </div>
              </aside>
                
              <section class="mail-box-info">
                <section class="mail-list">
                  <div class="compose-mail">
                      <div class="text-center">
                                  </div>
                      <div class="form-group">
                        <label for="subject" class="control-label">Headline:</label>
                        
                        <?php echo Form::text('headline',null, ['placeholder' => 'Head Line', 'class' => 'form-control col-lg-12', 'required' => '' ]); ?>

                      </div>
            
                      <div class="compose-editor">
                      <?php echo Form::textarea('condition',null, ['placeholder' => 'Write Terms', 'class' => 'form-control', 'required' => '']); ?>


                      </div>
                      <hr>
                      <div class="compose-btn">
                        
                  
                        <?php echo e(Form::button('<i class="fa fa-check">Save</i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm'] )); ?>

                      </div>
                    
                  </div>
                </section>
            
            
              </section></form>
            
            </div>
            
                        </div>
<?php echo Form::close(); ?>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>