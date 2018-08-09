@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Edit Member')
 
 @section('content')
 
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

 @if(count($errors) > 0 )
    <div class="alert alert-danger">
        <strong>Whoooppss !!</strong> There were some problem with your input. <br>
        <ul>
          @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
 @endif
 <link rel="stylesheet" href="{!! ('/css/memberlistcss.css') !!}">

 {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/members/' . $member->id ]) !!}

 <div class="wrapper" style="min-height: 450px;">
            
<div class="row"> 
	<div class="col-md-4">
		<div class="row">
      
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body">
												<div class="profile-pic text-center">
							<img alt="Logger" src="https://yourprogramming.com/library/images/members/1533129047.png"><br>
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
								<div class="title">Gender</div>
								<div class="desk">male</div>
							</li>
							<li>
								<div class="title">Profession</div>
								<div class="desk">student</div>
							</li>
							<li>
								<div class="title">Department</div>
								<div class="desk">Political Science</div>
							</li>
							<li>
								<div class="title">Position</div>
								<div class="desk">member</div>
							</li>
							<li>
								<div class="title">Joined</div>
								<div class="desk">August 01, 2018</div>
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

		</div>
	</div>
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body pbody-media">
						<div class="profile-desk">
							<h3>pravanjan nayak <small>[ student ] [ Political Science ]</small></h3>
              <span class="designation">Chosen subjects are: Technology <b class="text-danger">|</b> </span><br>
              <br><br>
							<p>Set your social media link <span class="fa fa-arrow-down"></span></p><br>

							<button class="btn p-follow-btn pull-left edit_social"> <i class="fa fa-edit"></i> Update social link <i class="fa fa-angle-down"></i></button>
							
							<ul class="p-social-link pull-right">
															</ul>
							
						</div>
					</div>
					
					<div class="panel-body bg-warning" id="social_edit" style="display:none">
						<div class="col-lg-12">Set Social links <hr></div>						<div class="col-lg-12">
							<div class="form-group">
								<label>Facebook ID URL</label>
								<div class="iconic-input">
									<i class="fa fa-facebook"></i>
									<input type="text" class="form-control" placeholder="fb link" value="" id="fb">
								</div>
							</div>
							
							<div class="form-group">
								<label>Twitter ID URL</label>
								<div class="iconic-input">
									<i class="fa fa-twitter"></i>
									<input type="text" class="form-control" placeholder="twitter link" value="" id="twitter">
								</div>
							</div>
							
							<div class="form-group">
								<label>Google+ ID URL</label>
								<div class="iconic-input">
									<i class="fa fa-google-plus"></i>
									<input type="text" class="form-control" placeholder="g+ link" value="" id="google">
								</div>
							</div>
							<div class="form-group">
								<input type="hidden" value="47" id="member_id">
								<button type="submit" class="btn btn-info update_social">Upload links</button> &nbsp; 
								<span class="result"></span>
							</div>
						</div>
					</div>	<br id="user_edit_panel">
					
					
					<!-- user update information -->	
<div class="panel-body bg-info" style="border:1px solid #353f4f">
						<div class="col-lg-12">
							<p>Update personal information <span class="fa fa-angle-double-down"></span></p>
							<hr><div class="form-group">
								<label>Name</label>
								<div class="iconic-input">
									<i class="fa fa-user"></i>
									<input type="text" class="form-control" placeholder="Name" value="pravanjan nayak" id="name">
								</div>
							</div>
							
							<div class="form-group">
								<label>E-mail</label>
								<div class="iconic-input">
									<i class="fa fa-envelope"></i>
									<input type="text" class="form-control" placeholder="Email" value="pravanjannayak986@gmail.com" disabled="">
								</div>
							</div>
							<div class="form-group">
								<label>Gender</label>
								<div class="iconic-input">
									<select class="form-control" id="sex">
										<option value="male" selected="">male</option>										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">Other</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>Role in system</label>
								<div class="iconic-input">
									<select class="form-control" id="role">
										<option value="member" selected="">member</option>										<option value="admin">Admin</option>
										<option value="manager">Manager</option>
										<option value="member">Member</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label>Phone No</label>
								<div class="iconic-input">
									<i class="fa fa-phone-square"></i>
									<input type="text" class="form-control" placeholder="contact" value="9438335070" id="contact">
								</div>
							</div>
							<div class="form-group">
								<label>Profession</label>
								<div class="iconic-input">
									<i class="fa fa-user"></i>
									<input type="text" class="form-control" placeholder="profession" value="student" id="profession">
								</div>
							</div>
							<div class="form-group">
                <label style="width:100%;">Chosen Subjects</label>
                
																<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects[]" value="1">Bangla								</label>
																<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects[]" value="2">English								</label>
																<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects[]" value="3">History								</label>
																<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects[]" value="4">Politics								</label>
																<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects[]" checked="" value="5">Technology								</label>
																<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects[]" value="6">World humanity								</label>
																<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects[]" value="7">bb								</label>
															</div>
							
							<div class="form-group">
								<label>Living address</label>
								<div class="iconic-input">
									<i class="fa fa-map-marker"></i>
									<input type="text" class="form-control" placeholder="Address" value="bbsr" id="address">
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

<!-- modal for photo upload -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h5 class="modal-title" id="myModalLabel">Choose Logo</h5>
            </div>
            <!--Body-->
            <div class="modal-body photos">
			
			<form enctype="multipart/form-data" action="https://yourprogramming.com/library/admin/Members/update_user_photo/47" method="post" accept-charset="utf-8">
               <center>
				<label for="file-upload" class="custom-file-upload">
					<i class="fa fa-cloud-upload"></i> Upload Photo
				</label>
						
				<input id="file-upload" name="memberPhoto" class="userPhoto " type="file" accept="image/x-png,image/gif,image/jpeg">
				<p class="image_view"></p>	</center>
            </form></div>
            <!--Footer-->
            <div class="modal-footer flex-column text-center">
                <button type="button" id="remove_photo" class="btn btn-danger pull-right form-control" style="display:none"><span class="ladda-label">Remove?</span></button><br>
				<button type="submit" class="btn btn-info upload_photo form-control" style="display:none">Upload Photo</button>	
			
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>



<!-- <style>
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
		
		var subjects  = $("input[name='subjects[]']:checked").map(function(){return $(this).val();}).get();
		$.ajax({
			type: "POST",
			url: url+"admin/Members/update_user",
			data:{ member_id: $('#member_id').val(), name:$('#name').val(),sex:$('#sex').val(), role:$('#role').val(),
			profession:$('#profession').val(),subjects:subjects,contact:$('#contact').val(), address:$('#address').val()},
			success: function(result){
				$(".result_user").html(result);
			},
			error: function (request, status, error) {
				$(".result_user").html(request.responseText);
			}
		});
	});
})
</script> -->
<!-- this portion of jquery will load if is 'update' variable set at url-->
<!-- <script>
$(function () {
	$('html, body').animate({
        scrollTop: $('#user_edit_panel').offset().top
    }, 'slow');
});
</script> -->
            
{!! Form::close() !!}
 @endsection