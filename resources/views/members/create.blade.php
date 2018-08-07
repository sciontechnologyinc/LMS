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
        <strong>Whoooppss !!</strong> There were some problem with your input. <br>
        <ul>
          @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
 @endif
 
 {!! Form::open(['id' => 'dataForm', 'url' => '/members', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                      <div class="form-group">
                            {!!Form::label('membername', 'Member Name', array('class' => 'form-control-label'))!!}
                            {!!Form::text('membername',null, ['placeholder' => 'Member  Name', 'class' => 'form-control' ])!!}
                      </div>

                          <div class="form-group"><label class="">Gender</label>
                         {!! Form::select('gender', array('male' => 'Male', 'female' => 'Female'), null,array('class' => 'form-control')) !!}
                         
                          </div>

                      <div class="form-group">
                            {!!Form::label('contactnumber', 'Contact Number', array('class' => 'form-control-label'))!!}
                            {!!Form::text('contactnumber',null, ['placeholder' => 'Contact Number', 'class' => 'form-control' ])!!}
                      </div>

                      <div class="form-group">
                            {!!Form::label('email', 'Email-Address', array('class' => 'form-control-label'))!!}
                            {!!Form::text('email',null, ['placeholder' => 'Email-Address', 'class' => 'form-control' ])!!}
                      </div>

                      <div class="form-group">
                            {!!Form::label('profession', 'Profession', array('class' => 'form-control-label'))!!}
                            {!!Form::text('profession',null, ['placeholder' => 'Profession', 'class' => 'form-control' ])!!}
                      </div>
                      
                        

                      </div>
                    </div>
</div>
            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                      <div class="card-body card-block">



                          <div class="form-group"><label class="">Department</label>
                         {!! Form::select('department', array('sociology' => 'Sociology', 'politicalscience' => 'Political Science'), null,array('class' => 'form-control')) !!}
                         
                          </div>

                         <div class="row form-group">
                            <div class="col col-md-3"><label class="form-control-label">Check Subjects</label></div>
                            <div class="col col-md-9">
                              <div class="form-check-inline form-check">
                                <label for="inline-checkbox1" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox1" name="subjects[]" value="bangla" class="form-check-input">Bangla 
                                </label>
                                <label for="inline-checkbox2" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox2" name="subjects[]" value="english" class="form-check-input">English 
                                </label>
                                <label for="inline-checkbox3" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox3" name="subjects[]" value="history" class="form-check-input">History
                                </label>
                              </div>
                              <div class="form-check-inline form-check">
                                <label for="inline-checkbox1" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox1" name="subjects[]" value="politics" class="form-check-input">Politics 
                                </label>
                                <label for="inline-checkbox2" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox2" name="subjects[]" value="technology" class="form-check-input">Technology 
                                </label>
                                <label for="inline-checkbox3" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox3" name="subjects[]" value="worldhumanity" class="form-check-input">World Humanity
                                </label>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            {!!Form::label('livingaddress', 'Living Address', array('class' => 'form-control-label'))!!}
                            {!!Form::text('livingaddress',null, ['placeholder' => 'Living Address', 'class' => 'form-control' ])!!}
                      </div>
                          
                          
								<div class="form-group">  
                                
									<div>
                                    <label class="form-control-label">Upload Photo</label> <br>
										
									        	{{Form::file('photo')}}

									</div>
								
									<div>
                                        <br>
								<img src="https://yourprogramming.com/library/images/localhost.jpg"  style="max-width: 100%;"></div>
								</div>
                      </div>

                     <div class="card-footer">
                     {!!Form::submit('Add Member', ['class' => 'btn btn-primary']) !!}
                    </div>
</div>
{!! Form::close() !!}
 @endsection