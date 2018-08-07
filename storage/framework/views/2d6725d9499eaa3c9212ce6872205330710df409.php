<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Add Book list'); ?>
 
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


    <?php echo Form::open(['id' => 'dataForm', 'url' => '/books']); ?>

    
    <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                      <div class="form-group">
                      <?php echo Form::label('Book Name', 'Book Name', array('class' => 'form-control-label')); ?>

                      <?php echo Form::text('bookname',null, ['placeholder' => 'bookname', 'class' => 'form-control']); ?>

                      </div>
                      <div class="form-group"><label class="form-control-label">Book ISBN No</label>
                      <?php echo Form::text('ISBN',null, ['placeholder' => 'ISBN', 'class' => 'form-control']); ?>

                      </div>
                      <div class="form-group"><label class="form-control-label">Available book number</label>
                      <?php echo Form::text('booknumber',null, ['placeholder' => 'book number', 'class' => 'form-control']); ?>

                      </div>
                      <div class="form-group"><label class="form-control-label">Book Price</label>
                      <?php echo Form::text('bookprice',null, ['placeholder' => 'P 00.00', 'class' => 'form-control']); ?>

                      </div>
                      <div class="form-group"><label class="form-control-label">Writer Name</label>
                      <?php echo Form::text('writername',null, ['placeholder' => 'writername', 'class' => 'form-control']); ?>

                      </div>
                      
                      <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                            <i class="material-icons prefix">business</i>
                                <select name="category">
                                    <option value="" disabled <?php echo e(old('category') ? '' : 'selected'); ?>>Choose a category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php echo e(old('category') ? 'selected' : ''); ?>><?php echo e($category->categoryname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label>Category</label>
                            </div>

                      </div>
                    </div>
</div>
            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                         <div class="form-group">
                         <label class="form-control-label">Status</label>
                         <?php echo Form::select('status', array('available' => 'Available', 'unavailable' => 'Unavailable'),null,array('class' => 'form-control')); ?>

                          </div>
                              
                          <div class="form-group"><label class="">Book Type</label>
                         <?php echo Form::select('booktype', array('physical' => 'Physical', 'digital' => 'Digital'), null,array('class' => 'form-control')); ?>

                          <!-- <?php echo Form::text('status',null, ['placeholder' => 'status', 'class' => 'form-control']); ?> -->
                          </div>

                          <div class="form-group"><label class="">Book Condition</label>
                         <?php echo Form::select('bookcondition', array('good' => 'Good', 'bad' => 'Bad', 'normal' => 'Normal'), null,array('class' => 'form-control')); ?>

                          <!-- <?php echo Form::text('status',null, ['placeholder' => 'status', 'class' => 'form-control']); ?> -->
                          </div>

                           <div class="form-group"><label class="form-control-label">Details</label>
                          <?php echo Form::textarea('details',null, ['placeholder' => 'details', 'class' => 'form-control']); ?>

                          </div>
                              <label for="inline-checkbox3" class="form-check-label ">Status</label>
                                <select class="standardSelect form-control" tabindex="1" name="status">
                                    <option value="" selected disabled hidden>Availability</option>
                                    <option value="available">Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                      </div>

                     <div class="card-footer">
                     <?php echo Form::submit('Create Books', ['class' => 'btn btn-primary']); ?>


                      </div>
                    </div>
</div>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>