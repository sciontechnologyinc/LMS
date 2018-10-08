@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Add New Account')
 
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


    {!! Form::open(['id' => 'dataForm', 'url' => '/administrators']) !!}
    <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Create</strong><small> Account</small></div>
                      <div class="card-body card-block">


                          <div class="form-group col-lg-7">
								{!!Form::label('name', 'Account Name', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-user"></i></span>
									{!!Form::text('name',null, ['placeholder' => 'Account Name', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

								</div>
							</div>
						</div>

                            <div class="form-group col-lg-7">
								{!!Form::label('email', 'E-Mail Address', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-user"></i></span>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" required>


                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

								</div>
							</div>
						</div>



                        <div class="form-group col-lg-7">
								{!!Form::label('password', 'Password', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-lock"></i></span>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="********" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

								</div>
							</div>
						</div>

                        <div class="form-group col-lg-7">
								{!!Form::label('confirmpassword', 'Confirm Password', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-lock"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="********" required>

								</div>
							</div>
						</div>

                        <div class="form-group col-lg-7">
								{!!Form::label('role', 'Role', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-tasks"></i></span>
								{!!Form::number('admin',null, ['placeholder' => 'Permission', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}


								</div>
                                <input type="hidden" name="permission" id="permission" class="permission" value="Admin">

							</div>
						</div>
                                <br>
                                {!!Form::submit('Create Account', ['class' => 'btn btn-primary  col-lg-2 offset-7']) !!}

                              </div>
                            </div>
                          </div>

            </div>
</div>

    {!! Form::close() !!}
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

    
@endsection()