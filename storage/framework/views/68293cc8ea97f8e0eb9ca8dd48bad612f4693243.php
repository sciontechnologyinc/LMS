<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Book list'); ?>
 
 <?php $__env->startSection('content'); ?>


    <a class="btn btn-primary col-lg-2 offset-9" href="<?php echo e(url('addbooks')); ?>" style="margin-bottom: 10px;">Create New</a>

   <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Book list</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                        <tr>
                            <th style="padding-left: 15px;">#</th>
                            <th>Book Name</th>
                            <th>Type</th>
                            <th>ISBN</th>
                            <th>Category</th>
                            <th>Writer</th>
                            <th>Available</th>
                            <th width="110px;">Action</th>
                        </tr>
                        </thead>
                    <tbody>
                         <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>

                        <td><?php echo e($book->id); ?></td>
                        <td> <?php echo e($book->bookname); ?></td>
                        <td> <?php echo e($book->booktype); ?></td>
                        <td> <?php echo e($book->ISBN); ?></td>
                        <td> <?php echo e($book->category); ?></td>
                        <td> <?php echo e($book->writername); ?></td>
                        <td><a class="btn btn-xs btn-success col-lg-8 offset-2"><?php echo e($book->booknumber); ?></a></td>
                        
                        <td><center>
                        <a class="btn btn-success btn-sm" href="books/<?php echo $book->id; ?>/edit">Edit</a>


                    <?php echo Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/books/' . $book->id]); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                    <?php echo Form::close(); ?>

                        </center></td>
                      </tr>
                    </tbody>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                        </div>
                    </div>
                </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>