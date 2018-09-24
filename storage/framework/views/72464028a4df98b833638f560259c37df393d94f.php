<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','Issued book`s records'); ?>
 
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
        
        <link rel="stylesheet" href="<?php echo ('/css/bookissue.css'); ?>">
 <div class="wrapper" style="min-height: 450px;">
            
 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
         <strong class="card-title">Book issue list</strong> &nbsp;&nbsp;&nbsp;  <input id="myInput" type="text" placeholder="Search Book Issue" class="search-memberlist">
                        </div>
        <section class="panel">
        
      
            <div class="panel-body">
            
                <section id="no-more-tables">
                
                    <table class="table table-bordered table-striped table-condensed cf table-hover">
                        <thead class="cf">
                            <tr>
                                <th>#</th>
                                <th>StudentName</th>
                                <th>BookName</th>
                                <th class="numeric">Bookholder</th>
                                <th class="numeric issuefor">Issue for</th>
                                <th class="numeric">Issuedate</th>
                                <th class="numeric">Returndate</th>
                                <th class="numeric">Remains</th>
                                <th class="numeric text-center">Status</th>
                                <th class="numeric text-right">Action</th>
                            </tr>
                        </thead>
                    
                        <tbody class="search_result">
                        <?php $__currentLoopData = $bookissues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookissue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                                    <td data-title="SL"><?php echo e($bookissue->id); ?></td>
                                    <td data-title="Student Name"><?php echo e($bookissue->name); ?></td>
                                    <td data-title="Book Name"><?php echo e($bookissue->bookname); ?></td>
                                    <td class="numeric" data-title="Book holder"><?php echo e($bookissue->bookholder); ?></td>                                   
                                    <td class="issuedtype"data-title="Issue type">
                                    <?php if($bookissue->status == 'Pending'): ?>
                                    <?php if(  $bookissue->difference ): ?> 
                                    issued for days <?php else: ?> issued for hours <?php endif; ?>
                                    <?php else: ?>
                                    <?php if(  $bookissue->difference ): ?> 
                                    issued for days <?php else: ?> issued for hours <?php endif; ?>
                                    <?php endif; ?>
                                    </td>
                                    <td class="numeric" data-title="Issue date">today                                 </td>
                                    <td class="numeric" data-title="Return date">today</td>
                                    <td class="numeric" data-title="Remains">
                                    <?php if($bookissue->status == 'Pending'): ?>
                                    <?php if(  $bookissue->difference ): ?> 
                                    <span class="label label-success"><strong><?php echo e($bookissue->difference); ?></strong> days</span> <?php else: ?> <span class="label label-success"> <?php echo e($bookissue->hours); ?> </strong> hours</span> &nbsp;<?php endif; ?>
                                    <?php else: ?>
                                    <?php if(  $bookissue->difference ): ?> 
                                    <span class="label label-inactive"><strong><?php echo e($bookissue->difference); ?></strong> days</span> <?php else: ?> <span class="label label-inactive"> <?php echo e($bookissue->hours); ?> </strong> hours</span>   &nbsp;<?php endif; ?>
                                    <?php endif; ?>
                                                            
                                    </td>
                                    <?php echo Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/bookissues/' . $bookissue->id ]); ?>

                                    <td class="numeric text-center" id="status" data-title="Status">
                                    <?php if($bookissue->status == 'Pending'): ?>
                                    <span class="fa fa-times text-danger">&nbsp;<strong><?php echo e($bookissue->status); ?></strong></span>   &nbsp;
                                    <?php elseif($bookissue->status == 'Returned'): ?>
                                    <span class="fa fa-check text-success">&nbsp;<strong><?php echo e($bookissue->status); ?></strong></span>  &nbsp;
                                    <?php else: ?>   
                                    <span class="fa fa-check text-success">&nbsp;<strong><?php echo e($bookissue->status); ?></strong> </span>
                                    <?php endif; ?>
                                    <!-- <span class="fa fa-times text-danger bookissue_result"> <?php echo e($bookissue->status); ?></span>  -->
                                    </td>
                                    <td class="numeric text-right" data-title="Action">
                                    <?php if($bookissue->status == 'Pending'): ?>
                                    <a data-toggle="modal"  data-target="#<?php echo e($bookissue->id); ?>" class="btn btn-xs btn-info btn-returned"><span class="text-success fa fa-check" title="Make action"></span></a>
                                    <?php elseif($bookissue->status == 'Returned'): ?>
                                    <a data-toggle="modal"  data-target="#<?php echo e($bookissue->id); ?>" class="btn btn-xs btn-info btn-returned"><span class="text-danger fa fa-times" title="Make action"></span></a>&nbsp;
                                    <?php else: ?>   
                                    <a data-toggle="modal"  data-target="#<?php echo e($bookissue->id); ?>" class="btn btn-xs btn-info btn-returned"><span class="text-success fa fa-check" title="Make action"></span></a>&nbsp;
                                    <?php endif; ?>
                                    <!-- <span class="fa fa-times text-danger bookissue_result"> <?php echo e($bookissue->status); ?></span>  -->
                                    </td>
                                                                                    
                                        <!-- Small modal -->
                                                <?php if($bookissue->status == 'Pending'): ?>
                                                <div class="modal fade" id="<?php echo e($bookissue->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Click below button if only the book is returned! Not otherwise!!</center>
                                                </h2>
                                                <?php echo Form::submit('Submit Return', ['class' => 'btn btn-primary btn-return  col-lg-14']); ?>

                                                <?php elseif($bookissue->status == 'Returned'): ?>
                                                <div class="modal fade" id="<?php echo e($bookissue->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Click below button if you want to change the book to pending! Not otherwise!!</center>
                                                </h2>
                                                <?php echo Form::submit('Change to Pending', ['class' => 'btn btn-primary btn-return  col-lg-14']); ?>

                                                <?php else: ?>
                                                <div class="modal fade" id="<?php echo e($bookissue->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Click below button if only the book is returned! Not otherwise!!</center>
                                                </h2>
                                                <?php echo Form::submit('Submit Return', ['class' => 'btn btn-primary btn-return  col-lg-14']); ?>

                                                <?php endif; ?>
                                                        <div class="panel-body">
                                                        <?php if($bookissue->status == 'Pending'): ?>
                                                        <input type="hidden" name="status" id="status" class="status" value="Returned">
                                                        <?php elseif($bookissue->status == 'Returned'): ?>
                                                        <input type="hidden" name="status" id="status" class="status" value="Pending">
                                                        <?php else: ?>
                                                        <input type="hidden" name="status" id="status" class="status" value="Returned">
                                                        <?php endif; ?>
                                                        <!-- <?php echo Form::text('status',null, ['placeholder' => 'Status', 'class' => 'form-control col-lg-12', 'value' => 'Returned' ]); ?> -->
    
                                                         <?php echo Form::close(); ?>                                                  
                                                        </div>
                                                    </section>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                    </td>
                                </tr>                                
                       </tbody>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </section>
                <div>
                    <ul class="pagination pagination-lg">
                        <li></li>
                    </ul>
                </div>
                
            </div>
        </section>
    </div>
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>