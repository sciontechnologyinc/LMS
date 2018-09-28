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

<form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}
<div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Edit</strong><small> Profile</small></div>
                      <div class="card-body card-block">
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
    {!! Form::close() !!}

 @endsection