@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Add Member')
 
 @section('content')
 
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

 @if(count($errors) > 0 )
    <div class="alert alert-danger">
        <strong>Whoooppss !!</strong> There were some problem with your Input. <br>
        <ul>
          @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
 @endif
 <link rel="stylesheet" href="{!! ('/css/memberlistcss.css') !!}">


 {!! Form::open(['id' => 'dataForm', 'url' => '/members', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                        <div class="form-group">
                              {!!Form::label('membername', 'Name', array('class' => 'form-control-label'))!!}
                          <div class="iconic-input">
                          <div class="input-group margin-bottom-sm">
                          <span class="input-group-addon">
                            <i class="fa fa-user"></i></span>
                            {!!Form::text('membername',null, ['placeholder' => 'Name', 'class' => 'form-control', 'required' => ''])!!}
                          </div>
                        </div>
                      </div>


                    <div class="form-group">
                         {!!Form::label('gender', 'Gender', array('class' => 'form-control-label'))!!}
                         <div class="iconic-input">
                      <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon">
                      <i class="fa fa-intersex custom"></i></span>
                         {!! Form::select('gender', array('male' => 'Male', 'female' => 'Female'), null,array('class' => 'form-control', 'required' => '')) !!}
                         </div>
							      </div>
						    </div>
						

                       

						<div class="form-group">
									{!!Form::label('contactnumber', 'Contact Number', array('class' => 'form-control-label'))!!}	
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-phone-square"></i></span>
									{!!Form::number('contactnumber',null, ['placeholder' => 'Contact Number', 'class' => 'form-control', 'required' => ''])!!}
								</div>
							</div>
						</div>

							<div class="form-group">
									{!!Form::label('email', 'Email-Address', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i></span>
									{!!Form::email('email',null, ['placeholder' => 'Email-Address', 'class' => 'form-control', 'required' => ''])!!}
								</div>
							</div>
						</div>

						<div class="form-group">
									{!!Form::label('LRN', 'LRN(student number)', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
								<i class="fa fa-id-card"></i></span>
									{!!Form::number('LRN',null, ['placeholder' => 'LRN', 'class' => 'form-control', 'required' => ''])!!}
								</div>
							</div>
						</div>

						<div class="form-group">
									{!!Form::label('profession', 'Profession', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									{!!Form::text('profession',null, ['placeholder' => 'Profession', 'class' => 'form-control', 'required' => ''])!!}
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




                    <div class="form-group">
							<label style="width:100%;">Check Subjects </label>
              @foreach($subjects as $subject)
								<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#d9edf7;margin:0.5%;border-radius:20px;">
								<input class="subjects" type="checkbox" name="subjects[]" value="{{$subject->subjectname}}" {{ old('subjects') ? 'selected' : '' }} >{{$subject->subjectname}}</label>
                @endforeach
							</div>




                  <br><br><br> 
                  <div class="form-group">
                      {!!Form::label('livingaddress', 'Living Address', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                      <i class="fa fa-map-marker"></i></span>
                      {!!Form::text('livingaddress',null, ['placeholder' => 'Living Address', 'class' => 'form-control', 'required' => ''])!!}
                    </div>
                  </div>
                </div>
                          
                          
								<div class="form-group">                  
                  <div class="row">
									<label>Choose photo (<small>optional</small>) <br>
									<label for="phto" class="custom-file-upload" style="display: inline-block;">
										<i class="fa fa-cloud-upload"></i> Upload Photo
									</label>
									<input id="phto" name="photo" hidden="true" class="photo" type="file" accept="image/x-png,image/gif,image/jpeg">
                </label>
              </div>
            </div>
								<br>
	
                      </div>

                     <div class="card-footer">
                     {!!Form::submit('Add Member', ['class' => 'btn btn-primary']) !!}
                    </div>
</div>
{!! Form::close() !!}
 @endsection