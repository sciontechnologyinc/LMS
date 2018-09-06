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
        
        <link rel="stylesheet" href="<?php echo ('/css/termscss.css'); ?>">



 <div class="wrapper" style="min-height: 450px;">
            
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
            
            </header>
            <div class="panel-body">
                <section id="no-more-tables">
                    <table class="table table-bordered table-striped table-condensed cf table-hover">
                        <thead class="cf">
							<tr>
								<th>#</th>
								<th>Book Name</th>
								<th class="numeric">Book holder</th>
								<th class="numeric">Issue for</th>
								<th class="numeric">Issue date</th>
								<th class="numeric">Return date</th>
								<th class="numeric">Remains</th>
								<th class="numeric text-center">Status</th>
								<th class="numeric text-right">Action</th>
							</tr>
                        </thead>
					
						<tbody class="search_result">
						<?php $__currentLoopData = $bookissues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookissue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    	<tr>
									<td data-title="SL"><?php echo e($bookissue->id); ?></td>
									<td data-title="Book Name"><?php echo e($bookissue->bookname); ?></td>
									<td class="numeric" data-title="Book holder">sathia sultana</td>									</td>
									<td data-title="Issue type">issued for days</td>
									<td class="numeric" data-title="Issue date">today									</td>
									<td class="numeric" data-title="Return date">today</td>
									<td class="numeric" data-title="Remains">
									<span class="label label-success"><strong> <?php echo e($bookissue->date_to); ?></strong> days</span>								</td>
									<td class="numeric text-center" data-title="Status">
									<span class="fa fa-times text-danger"> Pending</span></td>
									<td class="numeric text-right" data-title="Action">
										<a data-toggle="modal" data-target=".bs21" class="btn btn-xs btn-info"><span class="fa fa-fire" title="Make action"></span></a>
											
											
																					
										<!-- Small modal -->
										<div class="modal fade bs21" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
										  <div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
											   <div class="row">
												<div class="col-sm-12 text-center">
													<section class="panel">
														<h2 class="panel-heading">
															<center class="text-danger">Click below button if only the book is returned! Not otherwise!!</center>
														</h2>
														<div class="panel-body">
														
														<input type="hidden" name="isseu_id" value="21">
															<div class="form-group">
																<div class="iconic-input">
																
																	<?php echo e(Form::button('<i class="fa fa-arrow-right"> Submit Return</i>', ['type' => 'submit', 'class' => 'btn btn-primary  col-lg-6'] )); ?>


																</div>
															</div>
													
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		alert(<?php echo e($bookissue->date_from); ?>);
	});
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>