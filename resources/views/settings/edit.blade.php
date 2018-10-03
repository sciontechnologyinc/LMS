@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Edit Profile')
 
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

<form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}
 <div class="wrapper" style="min-height: 450px;">
            
<div class="row"> 
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body">

							<div class="profile-pic text-center">
							 <br>
							<label class="pointer text-primary"> 
									<label for="phto" class="custom-file-uploads" style="display: inline-block;">
										<!-- <i class="fa fa-camera pointer text-primary"></i> <small>Choose Photo</small> -->
									</label>
									<input id="phto" name="photo" hidden="true" class="photo" type="file" accept="image/x-png,image/gif,image/jpeg" value="asd">
									
									</label>
						

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="panel">
					<p class="text-center text-danger">Update Your Password </p>
					<div class="panel-body changepassword">
						<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
							<label>Current password</label>
                            <div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-lock text-success"></i></span>
                                    <input id="current-password" type="password" placeholder="Current Password" class="form-control" name="current-password" required>
                                    @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
                    </div>
						<div class="form-group">
							<label>Set new password</label>
                            <div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-lock text-success"></i></span>
                                    <input id="new-password" type="password" placeholder="New Password" class="form-control" name="new-password" required>
 
                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                    @endif
							</div>
						</div>
                    </div>
						<div class="form-group">
							<label>Confirm new password</label>
                            <div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-lock text-success"></i></span>
                                    <input id="new-password-confirm" type="password" placeholder="Confirm new password" class="form-control" name="new-password_confirmation" required>
							</div>
						</div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
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
							<h3>{{ Auth::user()->name }}</h3>
              <span class="designation"><b class="text-danger"></b> </span>
							<p>Update your info <span class="fa fa-arrow-down"></span></p>

							
							<ul class="p-social-link pull-right">
															</ul>
							
						</div>
					</div>
					
	
					<!-- user update information -->	
					<div class="panel-body bg-info" style="border:1px solid #353f4f">
						<div class="col-lg-12">
							<p>Update personal information <span class="fa fa-angle-double-down"></span></p>
							<hr><div class="form-group">
							     	{!!Form::label('membername', 'Name', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									{!!Form::text('name',Auth::user()->name, ['placeholder' => 'Name', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

							<div class="form-group">
									{!!Form::label('contactnumber', 'Contact Number', array('class' => 'form-control-label'))!!}	
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-phone-square"></i></span>
									{!!Form::number('contactno',Auth::user()->contactno, ['placeholder' => 'Contact Number', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>


							<div class="form-group">
									{!!Form::label('email', 'Email-Address', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i></span>
									{!!Form::email('email',Auth::user()->email, ['placeholder' => 'Email-Address', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

							<div class="form-group">
									{!!Form::label('livingaddress', 'Living Address', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-map-marker"></i></span>
									{!!Form::text('address',Auth::user()->address, ['placeholder' => 'Living Address', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

							<div class="form-group">
								<br>
							   {!!Form::submit('Update User info', ['class' => 'btn btn-info  col-lg-3']) !!}

			
							</div>
							</form>
						</div>
					</div>	
				</div>
			</div>
		</div>  
		
	</div>
</div>


    </div>
</div>
 



 @endsection