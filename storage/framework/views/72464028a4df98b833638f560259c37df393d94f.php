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
									<td class="numeric" data-title="Book holder"><?php echo e($bookissue->bookholder); ?></td>									</td>
									<td data-title="Issue type">issued for days</td>
									<td class="numeric" data-title="Issue date">today									</td>
									<td class="numeric" data-title="Return date">today</td>
									<td class="numeric" data-title="Remains">
									<?php if($bookissue->difference): ?>
									<span class="label label-success"><strong><?php echo e($bookissue->difference); ?></strong> days</span>	&nbsp;
									<?php else: ?>
									<span class="label label-success"><strong><?php echo e($bookissue->hours); ?></strong> hours</span>	
									<?php endif; ?>
															
									</td>
									<td class="numeric text-center" id="status" data-title="Status">
									<span class="fa fa-times text-danger bookissue_result"> <?php echo e($bookissue->status); ?></span></td>
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
  														  <!-- <?php echo Form::open(['id' => 'dataForm', 'url' => '/bookissues']); ?>		 -->
														<input type="hidden" name="isseu_id" value="21">
															<div class="form-group">
																<div class="iconic-input">
																	<?php echo Form::submit('Submit Return', ['id' => 'addForm','class' => 'btn btn-primary submit_return  col-lg-10']); ?>

																	

																</div>
															</div>
   																	 <!-- <?php echo Form::close(); ?>													 -->
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(function(){
      $(".submit_return").click(function () {

      if($('#status').val() == null){

      var selectedValue = $("#status").val();
      $(".bookissue_result").html("<span class='fa fa-times text-danger'> Pending</span>");
    }else{
      var selectedValue = $("#status").val();
    $(".bookissue_result").html(" <span class='fa fa-check text-success'> Returned</span>");
    }
 });
})
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>