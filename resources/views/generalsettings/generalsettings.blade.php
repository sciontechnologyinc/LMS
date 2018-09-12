@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','General Info')
 
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
 

  {!! Form::open(['id' => 'dataForm', 'url' => '/generalsettings', 'method' => 'POST']) !!}

 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>General Information</strong></div>
                      <div class="card-body card-block">
                      @foreach($generalsettings as $generalsetting)
                      <div class="form-group">
                            {!!Form::label('systemname', 'System Name', array('class' => 'form-control-label'))!!}
                            {!!Form::text('systemname',$generalsetting->systemname, ['placeholder' => 'System  Name', 'class' => 'form-control', 'value' => 'Culiat Library'])!!}
                      </div>

                      <div class="form-group">
                            {!!Form::label('systememail', 'System E-mail', array('class' => 'form-control-label'))!!}
                            {!!Form::text('systememail',$generalsetting->systemname, ['placeholder' => 'System  E-mail', 'class' => 'form-control', 'value' => 'culiathighschool@gmail.com'])!!}
                      </div>

                      <div class="form-group">
                            {!!Form::label('systemcontactno', 'System Contact No', array('class' => 'form-control-label'))!!}
                            {!!Form::text('systemcontactno',$generalsetting->systemname, ['placeholder' => 'System Contact No', 'class' => 'form-control', 'value' => '0122333444455555'])!!}
                      </div>

                      


                    <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                                      <label>Opening time</label>
                                      <div class="iconic-input">
                                        <i class="fa fa-clock-o"></i>
                                        <input type="text" name="open_time" class="form-control" placeholder="start point" value="">
                                      </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                                      <label>Closing time</label>
                                      <div class="iconic-input">
                                        <i class="fa fa-clock-o"></i>
                                        <input type="text" name="close_time" class="form-control" placeholder="End point" value="">
                                      </div>
                                  </div>
                              </div>
                              
                             
                    </div>
             </div>
       </div>     
       
</div>


            <div class="col-lg-6">
                    <div class="card">
                    <div class="panel-body">
								<div class="form-group">  
									<div class="col-md-6">

										<label for="file-upload" class="custom-file-upload">
											<i class="fa fa-cloud-upload"></i> Upload System Logo
										</label>
										<input id="uploadsystemlogo" name="file" type="file" accept="image/x-png,image/gif,image/jpeg" value="image.png">

                    
									</div>
								
                                                
									<div class="col-md-6">
									<br><br><img src=""  style="max-width: 100%;">									</div>
								</div>
							</div>
<br>
                                    <div class="panel-body">
								<div class="form-group">
									<div class="col-md-6">
										
										<label for="file-upload" class="custom-file-upload">
											<i class="fa fa-cloud-upload"></i> Upload Favicon
										</label>
										<input id="favicon" name="favicon" type="file" accept="image/x-png,image/gif,image/jpeg">
									</div>
								
									<div class="col-md-6">
									<br><br><img src="" style="max-width: 50px;"></div>
								</div>
							</div>
<br>

     </div>

</div>

 <div class="col-lg-12">
      <div class="card">
             <div class="card-header"><small>Culiat High School</small></div>
               <div class="card-body card-block">
		
                       <div class="form-group">
                            {!!Form::label('address', 'Organization address', array('class' => 'form-control-label'))!!}
                            {!!Form::text('address',$generalsetting->address, ['placeholder' => 'Location', 'class' => 'form-control', 'value' => 'Quezon City, Philippines'])!!}
                      </div>

                      <div class="form-group">
                            {!!Form::label('address', 'About Organization', array('class' => 'form-control-label'))!!}
                            {!!Form::textarea('about',$generalsetting->about, ['placeholder' => 'About Organization', 'class' => 'form-control', 'value' => 'Culiat High School aims to provide quality basic education to all learners and equip them with the necessary knowledge, skill, values and attitudes for them to cope with the demands of times and become responsible and productive citizens of the country.'])!!}
                      </div>

                      <div class="form-group">
                            {!!Form::label('mission', 'Mission', array('class' => 'form-control-label'))!!}
                            {!!Form::textarea('mission',$generalsetting->mission, ['placeholder' => 'Mission', 'class' => 'form-control', 'value' => 'To Follow.'])!!}
                      </div>

                      <div class="form-group">
                            {!!Form::label('vision', 'Vision', array('class' => 'form-control-label'))!!}
                            {!!Form::textarea('vision',$generalsetting->vision, ['placeholder' => 'Vision', 'class' => 'form-control', 'value' => 'To Follow.'])!!}
                      </div>
     
    
     <div class="form-group"><label class="form-control-label">&nbsp&nbsp&nbsp&nbsp</label><input type="submit" class="btn btn-success" value="Upgrade General information"></div>


     
							</div>
                                          @endforeach
          </div>    
    </div>
 </div>
 {!! Form::close() !!}
 <style>
input[type="file"] {
      
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
 @endsection