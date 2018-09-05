<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Edit Member'); ?>
 
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
 <link rel="stylesheet" href="<?php echo ('/css/memberlistcss.css'); ?>">

 <div class="wrapper" style="min-height: 450px;">
            <div class="row">
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body">
						<div class="profile-pic text-center">
							<img alt="Logger" src="https://yourprogramming.com/library/images/members/23_.jpg"><br>
							<p class="fa fa-camera pointer text-primary" data-toggle="modal" data-target=".bd-example-modal-sm"> Choose photo</p>
						</div>
					</div>
				</div>
			</div>
						<!-- user analytical info-->
						<div class="col-md-12">
				<div class="panel">
					<div class="panel-body pbody-info">
						<ul class="p-info">
							<li>
								<div class="title">Name</div>
								<div class="desk">asdasdsadasdasd</div>
							</li>
							<li>
								<div class="title">Gender</div>
								<div class="desk">asdsadasd</div>
							</li>
							<li>
								<div class="title">Profession</div>
								<div class="desk">asdasdas</div>
							</li>
							<li>
								<div class="title">Department</div>
								<div class="desk">asdasd</div>
							</li>
							<li>
								<div class="title">Book issued</div>
								<div class="desk">0</div>
							</li>
							<li>
								<div class="title">Book Return</div>
								<div class="desk">
								0 | <span class="text-danger">Return 0% successfully!</span> </div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="panel">
					<p class="text-center text-danger">Update Your Password </p>
					<div class="panel-body">

						<div class="form-group">
							<label>Running password</label>
							<div class="iconic-input">
							<div class="input-group margin-bottom-sm">
                   				 <span class="input-group-addon">
								<i class="fa fa-lock text-success"></i></span>
								<input type="password" class="form-control" placeholder="Old password" id="running_pass">
							</div>
						</div>
					</div>

						<div class="form-group">
							<label>Set new password</label>
							<div class="iconic-input">
								<i class="fa fa-lock text-success"></i>
								<input type="password" class="form-control" placeholder="New password" id="new_pass">
							</div>
						</div>
						<div class="form-group">
							<label>Confirm new password</label>
							<div class="iconic-input">
								<i class="fa fa-lock text-success"></i>
								<input type="password" class="form-control" placeholder="Confirm new password" id="new_pass2">
							</div>
						</div>
						<div class="form-group">	
							<div class="iconic-input text-center"><b class="result_pass text-danger"></b></div>
							<div class="iconic-input text-center">
								<input type="button" class="btn btn-info" value="Update Password" id="update_pass">
							</div>
							
						</div>
					</div>
				</div>
			</div>
		   
		</div>
	</div>
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body">
						<div class="profile-desk">
							<h1>Kubra</h1>
							<span class="designation">admin@email.com</span>

							
			
							
						</div>
					</div>
					
					<br id="user_edit_panel">
					
					
					<!-- user update information -->	
					<div class="panel-body bg-info">
						<div class="col-lg-12">
							<p>Update personal information <span class="fa fa-angle-double-down"></span></p>
							<hr><div class="form-group">
								<label>Name</label>
								<div class="iconic-input">
									<i class="fa fa-user"></i>
									<input type="text" class="form-control" placeholder="Name" value="Kubra" id="name">
								</div>
							</div>
							
							<div class="form-group">
								<label>E-mail</label>
								<div class="iconic-input">
									<i class="fa fa-envelope"></i>
									<input type="text" class="form-control" placeholder="Email" value="admin@email.com" disabled="">
								</div>
							</div>
							
							<div class="form-group">
								<label>Role in system</label>
								<div class="iconic-input">
									<select class="form-control" id="role">
										<option value="admin" selected="">admin</option>										<option value="admin">Admin</option>
										<option value="manager">Manager</option>
										<option value="member">Member</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label>Phone No</label>
								<div class="iconic-input">
									<i class="fa fa-phone-square"></i>
									<input type="text" class="form-control" placeholder="contact" value="01478578" id="contact">
								</div>
							</div>
							
							<div class="form-group">
								<label>Living address</label>
								<div class="iconic-input">
									<i class="fa fa-map-marker"></i>
									<input type="text" class="form-control" placeholder="Address" value="uttra 12" id="address">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-info update_user">Upload User info</button> &nbsp; 
								<span class="result_user"></span>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>  
		
	</div>
</div>





<style>
input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 14px 12px;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    text-align: center;
}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$(function () {
	var url = $("#url").val();
	//logo image preview 
	function filePreview(input){
		if(input.files && input.files[0]){
			var reader = new FileReader();
			reader.onload = function(e){
				$('.pre_img').hide();
				$('.image_view').after('<img src="'+e.target.result+'" />');
				$('.photos img').css('max-width','100%');
				$('.photos img').css('border-radius','50%');
				$("#remove_photo").show(200);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$('.userPhoto').change(function(){
		filePreview(this);	
		$('.upload_photo').show();
	});
	//remove logo img 
	$("#remove_photo").click(function(){
		$('.photos img').hide();
		$('.pre_img').show();
		$('.userPhoto').val('');
		$("#remove_photo").slideUp(300);
		$('.upload_photo').slideUp();
	});
	//show edit panel 
	$(".edit_social").click(function(){
		var x = document.getElementById('social_edit');
		if (x.style.display === 'block') {
			x.style.display = 'none';
		} else {x.style.display = 'block';}
	}); 
	
	//update social links 
	$(".update_social").click(function(){
		$.ajax({
			type: "POST",
			url: url+"admin/Members/update_social",
			data:{ member_id: $('#member_id').val(), fb:$('#fb').val(),twitter:$('#twitter').val(),google:$('#google').val()},
			success: function(result){
				$(".result").html(result);
			},
			error: function (request, status, error) {
				$(".result").html(request.responseText);
			}
		});
	});
	
	//update user info
	$(".update_user").click(function(){
		$.ajax({
			type: "POST",
			url: url+"admin/Members/update_user",
			data:{ member_id: $('#member_id').val(), name:$('#name').val(),role:$('#role').val(),contact:$('#contact').val(), address:$('#address').val()},
			success: function(result){
				$(".result_user").html(result);
			},
			error: function (request, status, error) {
				$(".result_user").html(request.responseText);
			}
		});
	});
	
	//update login user password
	$("#update_pass").click(function(){
		$.ajax({
			type: "POST",
			url: url+"Login/update_pass",
			data:{member_id: $('#member_id').val(), oldPass: $('#running_pass').val(), newPass:$('#new_pass').val(), newPass2:$('#new_pass2').val()},
			success: function(result){
				$(".result_pass").html(result);
			},
			error: function (request, status, error) {
				$(".result_pass").html(request.responseText);
			}
		});
	});

})
</script>
<!-- this portion of jquery will load if is 'update' variable set at url-->
            </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>