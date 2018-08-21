<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Add Books'); ?>
 
 <?php $__env->startSection('content'); ?>

 <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>

 <?php if($message = Session::get('success1')): ?>
    <div class="alert alert-danger">
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


    <?php echo Form::open(['id' => 'dataForm', 'url' => '/books']); ?>

    
    <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                     <div class="form-group <?php echo e($errors->has('firstname') ? 'has-error' : ''); ?>">
                      <?php echo Form::label('Book Name', 'Book Name', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-book"></i></span>
                      <?php echo Form::text('bookname',null, ['placeholder' => 'Book name', 'class' => 'form-control', 'required' => '']); ?>

                     
                    </div>
                    <span class="text-danger"><?php echo e($errors->first('bookname')); ?></span>
                </div>
             </div>

                   <div class="form-group">
                      <?php echo Form::label('Book ISBN No', 'Book ISBN No', array('class' => 'form-control-label' )); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-undo"></i></span>
                    <?php echo Form::number('ISBN',null, ['placeholder' => 'ISBN', 'class' => 'form-control', 'required' => '']); ?>

                    </div>
                    <span class="text-danger"><?php echo e($errors->first('ISBN')); ?></span>
                </div>
             </div>

                    <div class="form-group">
                      <?php echo Form::label('Available book number', 'Available book number', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-book"></i></span>
                    <?php echo Form::number('booknumber',null, ['placeholder' => 'Book number', 'class' => 'form-control', 'required' => '']); ?>

                    </div>
                    <span class="text-danger"><?php echo e($errors->first('booknumber')); ?></span>
                </div>
             </div>

             <div class="form-group">
                      <?php echo Form::label('Book Price', 'Book Price', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-money"></i></span>
                    <?php echo Form::number('bookprice',null, ['placeholder' => 'Book price', 'class' => 'form-control', 'required' => '']); ?>

                    </div>
                    <span class="text-danger"><?php echo e($errors->first('bookprice')); ?></span>
                </div>
             </div>

                <div class="form-group">
                      <?php echo Form::label('Writer Name', 'Writer Name', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-user"></i></span>
                    <?php echo Form::text('writername',null, ['placeholder' => 'Writer name', 'class' => 'form-control', 'required' => '']); ?>

                    </div>
                    <span class="text-danger"><?php echo e($errors->first('writername')); ?></span>
                </div>
             </div>
    
             <div class="form-group">
							<label style="width:100%;">Category </label>
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#d9edf7;margin:0.5%;border-radius:20px;">
								<input class="categoryname" type="checkbox" name="categoryname" value="<?php echo e($category->categoryname); ?>"><?php echo e($category->categoryname); ?></label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>

                     <br><br> <span class="text-danger"><?php echo e($errors->first('categoryname')); ?></span>
                   
</div>
                     
</div>
</div>
            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                         <div class="form-group">
                         <label class="form-control-label">Status</label>
                         <?php echo Form::select('status', array('available' => 'Available', 'unavailable' => 'Unavailable'),null,array('class' => 'form-control', 'required' => '')); ?>

                          </div>
                          <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
                              
                          <div class="form-group"><label class="">Book Type</label>
                         <?php echo Form::select('booktype', array('physical' => 'Physical', 'digital' => 'Digital'), null,array('class' => 'form-control', 'required' => '')); ?>

                          <!-- <?php echo Form::text('status',null, ['placeholder' => 'status', 'class' => 'form-control']); ?> -->
                          </div>
                          <span class="text-danger"><?php echo e($errors->first('booktype')); ?></span>

                          <div class="form-group"><label class="">Book Condition</label>
                         <?php echo Form::select('bookcondition', array('good' => 'Good', 'bad' => 'Bad', 'normal' => 'Normal'), null,array('class' => 'form-control', 'required' => '')); ?>

                          <!-- <?php echo Form::text('status',null, ['placeholder' => 'status', 'class' => 'form-control']); ?> -->
                          </div>
                          <span class="text-danger"><?php echo e($errors->first('bookcondition')); ?></span>

                           <div class="form-group"><label class="form-control-label">Details</label>
                          <?php echo Form::textarea('details',null, ['placeholder' => 'Details', 'class' => 'form-control', 'required' => '']); ?>

                          </div>
                          <span class="text-danger"><?php echo e($errors->first('details')); ?></span>
  

                     <div class="card-footer">
                     <?php echo Form::submit('Create Books', ['class' => 'btn btn-primary']); ?>


                      </div>
                    </div>
</div>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>