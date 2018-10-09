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
        <strong>Whoooppss !!</strong> There were some problem with your Input. <br>
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li> <?php echo e($error); ?> </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
 <?php endif; ?>
 <link rel="stylesheet" href="<?php echo ('/css/memberlistcss.css'); ?>">


 <?php echo Form::open(['id' => 'dataForm', 'url' => '/members', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                        <div class="form-group">
                              <?php echo Form::label('membername', 'Name', array('class' => 'form-control-label')); ?>

                          <div class="iconic-input">
                          <div class="input-group margin-bottom-sm">
                          <span class="input-group-addon">
                            <i class="fa fa-user"></i></span>
                            <?php echo Form::text('membername',null, ['placeholder' => 'Name', 'class' => 'form-control', 'required' => '']); ?>

                          </div>
                        </div>
                      </div>


                    <div class="form-group">
                         <?php echo Form::label('gender', 'Gender', array('class' => 'form-control-label')); ?>

                         <div class="iconic-input">
                      <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon">
                      <i class="fa fa-intersex custom"></i></span>
                         <?php echo Form::select('gender', array('male' => 'Male', 'female' => 'Female'), null,array('class' => 'form-control', 'required' => '')); ?>

                         </div>
							      </div>
						    </div>
						

                       

						<div class="form-group">
									<?php echo Form::label('contactnumber', 'Contact Number', array('class' => 'form-control-label')); ?>	
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-phone-square"></i></span>
									<?php echo Form::number('contactnumber',null, ['placeholder' => 'Contact Number', 'class' => 'form-control', 'required' => '']); ?>

								</div>
							</div>
						</div>

							<div class="form-group">
									<?php echo Form::label('email', 'Email-Address', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i></span>
									<?php echo Form::email('email',null, ['placeholder' => 'Email-Address', 'class' => 'form-control', 'required' => '']); ?>

								</div>
							</div>
						</div>

                        <div class="form-group">
									<?php echo Form::label('profession', 'Profession', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
                                    <select class="form-control" id="profession" name="profession" required="">
                                        <option value="" selected=""> Choose Profession  </option>
                                        <option value="student"> Student</option>
                                        <option value="professor"> Professor</option>
                                        <option value="visitor"> Visitor</option>
                                    </select>
								</div>
							</div>
						</div>

						<div class="form-group student_area" style="display:none;">
									<?php echo Form::label('LRN', 'Library Card Number', array('class' => 'form-control-label')); ?>

								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-id-card"></i></span>
									<?php echo Form::number('LRN',null, ['placeholder' => 'Card Number', 'class' => 'form-control', 'required' => '']); ?>

								</div>
							</div>
						</div>



                      </div>
                    </div>
              </div>

              <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                    <div class="form-group student_area" style="display:none;">
                       <?php echo Form::label('deparment', 'Grade', array('class' => 'form-control-label')); ?>

                       <div class="iconic-input">
                            <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon">
                            <i class="fa fa-bank"></i></span>
                            <select name="department" class="form-control">
                                    <option value="" disabled <?php echo e(old('department') ? '' : 'selected'); ?>>Choose a grade</option>
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($department->departmentname); ?>" <?php if(old('department')&&old('department')== $department->departmentname): ?> selected='selected' <?php endif; ?> ><?php echo e($department->departmentname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                      </div>
                </div>

                    <!-- <div class="form-group student_area" style="display:none;">
                       <?php echo Form::label('section', 'Section', array('class' => 'form-control-label')); ?>

                       <div class="iconic-input">
                            <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon">
                            <i class="fa fa-bank"></i></span>
                            <select name="section" class="form-control">
                                    <option value="" disabled <?php echo e(old('section') ? '' : 'selected'); ?>>Choose a section</option>
                                    <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($section->sectionname); ?>" <?php if(old('section')&&old('section')== $section->sectionname): ?> selected='selected' <?php endif; ?> ><?php echo e($section->sectionname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                      </div>
                </div> -->
                     

            <!-- <div class="form-group student_area" style="display:none;">
				<label style="width:100%;">Check Subjects </label>                    
                 <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#d9edf7;margin:0.5%;border-radius:20px;">
								<input class="subject" type="checkbox" name="subject[]" value="<?php echo e($subject->subjectname); ?>"><?php echo e($subject->subjectname); ?></label>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <br>
                 <br>
							</div> -->
                            




                  <div class="form-group">
                      <?php echo Form::label('livingaddress', 'Living Address', array('class' => 'form-control-label')); ?>

                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                      <i class="fa fa-map-marker"></i></span>
                      <?php echo Form::text('livingaddress',null, ['placeholder' => 'Living Address', 'class' => 'form-control', 'required' => '']); ?>

                    </div>
                  </div>
                </div>
                          
                            

<br>
                        <div class="form-group photos">
                        
							<div class="col-lg-7 ">
								<div class="row">
									<label>Choose photo (<small>optional</small>)
									<label for="file-upload" class="custom-file-upload" style="">
										<i class="fa fa-cloud-upload"></i> Upload Photo
									</label>
									<input id="file-upload" name="photo" class="photo" type="file" accept="image/x-png,image/gif,image/jpeg">
									<button type="button" id="remove_photo" class="btn btn-danger" style="width: 94%; display: none;"><span class="ladda-label">Remove?</span></button>
								    </label>
                                </div>
							</div>
					   

							<div class="col-lg-5">
								<div class="row">
									<img class="pre_img" src="https://www.freeiconspng.com/uploads/camera-icon-clip-art--royalty--1.png">
									<p class="image_view"></p><img src="">
                                    </div>
                                </div>

							</div>

                                <br>
                                <br>
                     <?php echo Form::submit('Add Member', ['class' => 'btn btn-primary col-lg-4 offset-8']); ?>


                            </div>




            </div>
      </div>
</div>
<?php echo Form::close(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
     $("#dataForm").submit(function (event) {
                 var x = confirm("Are you sure you want to add?");
                    if (x) {
                        return true;
                    }
                    else {

                        event.preventDefault();
                        return false;
                    }

                });
</script>

<style>
input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 14px 12px;
    cursor: pointer;
    width:94%;
    font-size: 18px;
    text-align: center;
}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$(function () {
	//logo image preview 
	function filePreview(input){
		if(input.files && input.files[0]){
			var reader = new FileReader();
			reader.onload = function(e){
				$('.pre_img').hide();
				$('.image_view').after('<img src="'+e.target.result+'" />');
				$('.photos img').css('max-width','100%');
				$("#remove_photo").show(200);
				$(".custom-file-upload").slideUp(0);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$('.photo').change(function(){
		filePreview(this);	
		$('.upload_photo').show();
	});

	//remove logo img 
	$("#remove_photo").click(function(){
		$('.photos img').hide();
		$('.pre_img').show();
		$('.photo').val('');
		$("#remove_photo").slideUp(300);
		$('.upload_photo').slideUp();
		$('.custom-file-upload').slideDown(0);
	});
	
	$(".upload_photo").click(function(){
		var new_img = $('.new_img').attr('src');
		$('.pre_img_main').attr('src',new_img);
		var mainPhto = $('.photo').val();
		alert(mainPhto);
	});
	//check is one of the check-box chosen or not
	$('.checkbox-inline').click(function(){
		$('.sub').prop('required',false);
	});


    //onchange
    $('#profession').on('change', function() {
      if ( this.value == 'student' )
      //.....................^.......
      {
        $(".student_area").show();
        $(".professor_area").hide();
        $(".visitor_area").hide();
      }
      else if( this.value == 'professor' ){
        $(".student_area").hide();
        $(".professor_area").show();
        $(".visitor_area").hide();
      }
      else if( this.value == 'visitor' ){
        $(".student_area").hide();
        $(".professor_area").hide();
        $(".visitor_area").show();
      }
      else
      {
        $(".student_area").hide();
        $(".professor_area").hide();
        $(".visitor_area").hide();
      }
    });
})
</script>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>