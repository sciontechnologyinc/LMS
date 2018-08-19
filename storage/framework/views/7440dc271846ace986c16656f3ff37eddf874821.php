<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Issue a book to a member'); ?>
 
 <?php $__env->startSection('content'); ?>

   <?php echo Form::open(['id' => 'dataForm', 'url' => 'bookissues/create', 'method' => 'POST']); ?>

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
                                      <select class="form-control select select2-hidden-accessible" name="book" id="book" required="" tabindex="-1" aria-hidden="true">
                                    <option value="" disabled <?php echo e(old('bookname') ? '' : 'selected'); ?>>Choose a bookname</option>
                                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($book->bookname); ?>" <?php echo e(old('bookname') ? 'selected' : ''); ?>><?php echo e($book->bookname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                      </div>
                      <span class="text-danger"><?php echo e($errors->first('bookname')); ?></span>
                      </div>
                    </div>

                       
                        <div class="form-group"><div class="form-group">
                        <label><button class="btn btn-info pointer check_book" type="button"><i class="fa fa-retweet"></i></button> Check Availability &nbsp; 
						            <span class="book_result fa fa-check-circle text-success" style='display:none;' ><b class="text-warning"><?php echo e($book->booknumber); ?> Books </b>   available</span>
                        </label></div></div>
                        <div class="form-group"><label class="form-control-label">Member ID</label><input type="text" class="form-control" id="member_id" name="member" placeholder="Member ID" autocomplete="off"></div>
                       <div class="form-group">
                      <label style="width:100%">
                        <button class="btn btn-info pointer check_member" type="button"><i class="fa fa-retweet"></i></button> Check Member &nbsp; 
                        <span class="member_result"></span>
                      </label> 
                    </div>
                  
 
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
						<label>Date From</label>
						<div class="iconic-input">
							<i class="fa fa-calendar"></i>
							<input type="date" class="form-control" name="date_from" placeholder="Date from" value="2018-08-15" required="">
						</div>
					</div>
					
					<div class="form-group">
						<label>Date To</label>
						<div class="iconic-input">
							<i class="fa fa-calendar"></i>
							<input type="date" class="form-control" name="date_to" placeholder="Date To" required="">
						</div>
          </div>
        </div>
        
 
        <div class="hour_area" style="display:none">
					<div class="form-group">
						<label>Hour From</label>
						<div class="iconic-input">
							<i class="fa fa-clock-o"></i>
							<input type="text" class="form-control" name="hour_from" placeholder="Hour from">
						</div>
					</div>
					
					<div class="form-group">
						<label>Hour To</label>
						<div class="iconic-input">
							<i class="fa fa-clock-o"></i>
							<input type="text" class="form-control" name="hour_to" placeholder="Hour To">
						</div>
					</div>
				</div>
    
    
    <div class="form-group"><label class="form-control-label"></label>
                <input type="submit" class="btn btn-success" value="Make this issue"></div>
      
                      </div>
                    </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#date_hour').on('change', function() {
      if ( this.value == 'date' )
      //.....................^.......
      {
        $(".date_area").show();
        $(".hour_area").hide();
      }
      else if( this.value == 'hour' ){
        $(".date_area").hide();
        $(".hour_area").show();
      }
      else
      {
        $(".date_area").hide();
        $(".hour_area").hide();
      }
    });

  //     $('#book').on('change', function() {
  //       if ( this.value == "<?php echo e($book->bookname); ?>" )
  //       //.....................^.......
  //       {
  //         $(".book_result").show();
  //       }

  // });


$(".check_book").click(function(){
		if( $('#book').val().length>0){
			$.ajax({
				type: "POST",
        url: "bookissues/create",
				data:{ book: $('#book').val()},
				success: function(result){
					$(".book_result").html(result);
				},error: function (request, status, error) {
					$(".book_result").html(request.responseText);
				}
			});
		}else{
			$(".book_result").html("<b class='text-danger'>Select book from <b class='text-success'>Book Name</b> field</b>");
		}
	});

  });
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>