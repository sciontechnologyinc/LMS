<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Issue a book to a member'); ?>
 
 <?php $__env->startSection('content'); ?>

   <?php echo Form::open(['id' => 'dataForm', 'url' => '/bookissues', 'method' => 'POST']); ?>

 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                          
                                         <div class="form-group">
                                     <label>Book Name</label>
                                            <div class="iconic-input">
                                      <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon">
                                      <i class="fa fa-list-alt"></i></span>
                                      <select class="form-control select select2-hidden-accessible" name="bookname" id="bookname" required="" tabindex="-1" aria-hidden="true">
                                    <option value="" disabled <?php echo e(old('bookname') ? '' : 'selected'); ?>>Choose a bookname</option>
                                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($book->bookname); ?>" <?php echo e(old('bookname') ? 'selected' : ''); ?>><?php echo e($book->bookname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                      </div>
                      
                      </div>
                    </div>

                         
                        <div class="form-group"><div class="form-group">
                        <label><button  class="btn btn-info pointer check_book" type="button"><i class="fa fa-retweet"></i></button> Check Availability &nbsp; <br>
						           <br> <span class="book_result" ></span>
                        </label></div></div>
               


					
                  
 
                      </div>
                    </div>
            </div>

            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                <div class="form-group"><label class="form-control-label">Date / Hour</label><div class="form-group">
                <div class="iconic-input">
                  <select class="form-control" id="date_hour" name="date_hour" required="">
                    <option value="" selected=""> Choose date/hour </option>
                    <option value="date"> Date wise issue</option>
                    <option value="hour"> Hour wise issue</option>
                  </select>
					</div>
        </div>
    </div>
    
    <div class="date_area" style='display:none;'>
					<div class="form-group">
          <?php echo Form::label('datefrom', 'Date from', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-calendar"></i></span>
              <?php echo Form::text('date_from',null, ['placeholder' => 'Date from', 'class' => 'form-control date', 'required' => '']); ?>

						</div>
					</div>
			</div>

					<div class="form-group">
          <?php echo Form::label('dateto', 'Date to', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-calendar"></i></span>
              <?php echo Form::text('date_to',null, ['placeholder' => 'Date To', 'class' => 'form-control date', 'required' => '']); ?>

						</div>
          </div>
        </div> 
 </div>
        <div class="hour_area" style="display:none">
					<div class="form-group">
          <?php echo Form::label('hourfrom', 'Hour From', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-clock-o"></i></span>
              <?php echo Form::text('hour_from',null, ['placeholder' => 'Hour from', 'class' => 'form-control', 'required' => '']); ?>

						</div>
					</div>
          </div>
					
					<div class="form-group">
          <?php echo Form::label('hourto', 'Hour To', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-clock-o"></i></span>
              <?php echo Form::text('hour_to',null, ['placeholder' => 'Hour to', 'class' => 'form-control', 'required' => '']); ?>

						</div>
					</div>
    </div>
</div>
    
    
    <div class="form-group"><label class="form-control-label"></label>
    <?php echo Form::submit('Make this issue', ['id' => 'addForm','class' => 'btn btn-primary  col-lg-4']); ?>

                </div>
                
                <br>
      
                      </div>
                    </div>
</div>
<?php echo Form::close(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(function(){
      $(".check_book").click(function () {

    if($('#bookname').val() == null){
      var selectedValue = $("#bookname").val();
      $(".book_result").html("<b class='text-danger'>Select book from <b class='text-success'>Book Name</b> field</b>");
    }else{
      var selectedValue = $("#bookname").val();
    $(".book_result").html("<span class='fa fa-check-circle text-success'> <b class='text-warning'>" + <?php echo e($book->booknumber); ?> + selectedValue + " Books </b>   available</span></span>");
    }
 });
	//check is book issued by date or hour 
	$('[name=hour_from]').prop('required',false);
	$('[name=hour_to]').prop('required',false);
	$('[name=date_from]').prop('required',false);
	$('[name=date_to]').prop('required',false);
	
	$('[name=date_hour]').change(function(){
		if($(this).val() =='hour'){
			$('.hour_area').show();$('.date_area').hide();
			$('[name=date_from]').prop('required',false);
			$('[name=date_to]').prop('required',false);
			$('[name=hour_from]').prop('required',true);
			$('[name=hour_to]').prop('required',true);
		}else{
			$('.hour_area').hide();$('.date_area').show();
			$('[name=hour_from]').prop('required',false);
			$('[name=hour_to]').prop('required',false);
			$('[name=date_from]').prop('required',true);
			$('[name=date_to]').prop('required',true);
		}
	});
})
</script> 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
      $('.date').datepicker({
      format: 'mm/dd/yy'
});
})
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>