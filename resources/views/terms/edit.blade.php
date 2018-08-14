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

 {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/members/' . $member->id, 'files' => true]) !!}

 <div class="wrapper" style="min-height: 450px;">
            
<div class="row"> 
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body">

							<div class="profile-pic text-center">
							<img alt="Logger" type="file" class="photo" src= "{{asset($member->photo)}}"><br>
							<label class="pointer text-primary"> 
									<label for="phto" class="custom-file-uploads" style="display: inline-block;">
										<i class="fa fa-camera pointer text-primary"></i> <small>Choose Photo</small>
									</label>
									<input id="phto" name="photo" hidden="true" class="photo" type="file" accept="image/x-png,image/gif,image/jpeg" value="{{$member->photo}}">
									</label>
						

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
								<div class="desk">{{ $member->membername  }}</div>
							</li>
							<li>
								<div class="title">Gender</div>
								<div class="desk">{{ $member->gender  }}</div>
							</li>
							<li>
								<div class="title">Profession</div>
								<div class="desk">{{ $member->profession  }}</div>
							</li>
							<li>
								<div class="title">Department</div>
								<div class="desk">{{ $member->department  }}</div>
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
							<h3>{{ $member->membername  }} <small>[ {{ $member->profession  }} ] [ {{ $member->department  }}  ]</small></h3>
              <span class="designation">Chosen subjects are: {{ $member->subjects  }} <b class="text-danger">|</b> </span><br>
              <br><br>
							<p>Update your info <span class="fa fa-arrow-down"></span></p><br>

							
							
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
									{!!Form::text('membername',$member->membername, ['placeholder' => 'Name', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

							<div class="form-group">
									{!!Form::label('email', 'Email-Address', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i></span>
									{!!Form::text('email',$member->email, ['placeholder' => 'Email-Address', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

							<div class="form-group">
									{!!Form::label('gender', 'Gender', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-intersex custom"></i></span>
									{!! Form::select('gender', array('male' => 'Male', 'female' => 'Female'), $member->gender,array('class' => 'form-control')) !!}
								</div>
							</div>
						</div>

							<div class="form-group">
									{!!Form::label('contactnumber', 'Contact Number', array('class' => 'form-control-label'))!!}	
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-phone-square"></i></span>
									{!!Form::text('contactnumber',$member->contactnumber, ['placeholder' => 'Contact Number', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

							<div class="form-group">
									{!!Form::label('profession', 'Profession', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									{!!Form::text('profession',$member->profession, ['placeholder' => 'Profession', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

							<div class="form-group">
									{!!Form::label('Department', 'Department', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-bank"></i></span>
									{!!Form::text('department',$member->department, ['placeholder' => 'LRN', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

						<div class="form-group">
									{!!Form::label('LRN', 'LRN(student number)', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-id-card"></i></span>
									{!!Form::text('LRN',$member->LRN, ['placeholder' => 'LRN', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

						<div class="form-group">
								<label style="width:100%;">Subjects</label>
									<label for="inline-checkbox1" class="form-check-label" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects" value="{{$member->id}}">Math</label>
									<label for="inline-checkbox1" class="form-check-label" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects" value="{{$member->id}}">English</label>
									<label for="inline-checkbox1" class="form-check-label" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects" value="{{$member->id}}">History</label>
									<label for="inline-checkbox1" class="form-check-label" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects" value="{{$member->id}}">Politics</label>
									<label for="inline-checkbox1" class="form-check-label" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects"  value="{{$member->id}}">Technology</label>
									<label for="inline-checkbox1" class="form-check-label" style="width:30%; margin-left:0px;background:#ececec;margin:0.5%;border-radius:20px;">
									<input type="checkbox" name="subjects"  value="{{$member->id}}">World Humanity</label>
						</div>
				
						

							<div class="form-group">
									{!!Form::label('livingaddress', 'Living Address', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-map-marker"></i></span>
									{!!Form::text('livingaddress',$member->livingaddress, ['placeholder' => 'Living Address', 'class' => 'form-control' ])!!}
								</div>
							</div>
						</div>

							<div class="form-group">
								<br>
							   {!!Form::submit('Update User info', ['class' => 'btn btn-info  col-lg-2']) !!}

			
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>  
		
	</div>
</div>


    </div>
</div>




            
{!! Form::close() !!}
 @endsection