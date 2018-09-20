@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Add Books')
 
 @section('content')

 @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

 @if($message = Session::get('success1'))
    <div class="alert alert-danger">
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
 {!! Form::open(['id' => 'dataForm', 'url' => '/books', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    
    <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                     <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                      {!!Form::label('Book Name', 'Book Name', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-book"></i></span>
                      {!!Form::text('bookname',null, ['placeholder' => 'Book name', 'class' => 'form-control', 'required' => ''])!!}
                     
                    </div>
                    <span class="text-danger">{{ $errors->first('bookname') }}</span>
                </div>
             </div>
             <a title="QR Code Generator" href="{{ url('qrcodegenerator') }}"><span class="fa fa-qrcode pull-right"></span> </a>

                   <div class="form-group">
                      {!!Form::label('Book ISBN No', 'Book ISBN No', array('class' => 'form-control-label' ))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-undo"></i></span>
                    {!!Form::text('ISBN',null, ['placeholder' => 'ISBN', 'class' => 'form-control', 'required' => ''])!!}
                    </div>
                    <span class="text-danger">{{ $errors->first('ISBN') }}</span>
                </div>
             </div>

                    <div class="form-group">
                      {!!Form::label('Available book number', 'Available book number', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-book"></i></span>
                    {!!Form::number('booknumber',null, ['placeholder' => 'Book number', 'class' => 'form-control', 'required' => ''])!!}
                    </div>
                    <span class="text-danger">{{ $errors->first('booknumber') }}</span>
                </div>
             </div>

             <div class="form-group">
                      {!!Form::label('Book Price', 'Book Price', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-money"></i></span>
                    {!!Form::number('bookprice',null, ['placeholder' => 'Book price', 'class' => 'form-control', 'required' => ''])!!}
                    </div>
                    <span class="text-danger">{{ $errors->first('bookprice') }}</span>
                </div>
             </div>

                <div class="form-group">
                      {!!Form::label('Writer Name', 'Writer Name', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-user"></i></span>
                    {!!Form::text('writername',null, ['placeholder' => 'Writer name', 'class' => 'form-control', 'required' => ''])!!}
                    </div>
                    <span class="text-danger">{{ $errors->first('writername') }}</span>
                </div>
             </div>
    
             <div class="form-group">
							<label style="width:100%;">Category </label>
              @foreach($categories as $category)
								<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#d9edf7;margin:0.5%;border-radius:20px;">
                                
								<input class="categoryname" type="checkbox" name="categoryname[]" value="{{$category->categoryname}}" {{ old('categoryname', $category->categoryname) == 'value' ? 'checked="checked"' : '' }}> {{$category->categoryname}}</label>
                @endforeach
							</div>

                     <br><br> <span class="text-danger">{{ $errors->first('categoryname') }}</span>
                   
                    </div>             
            </div>
    </div>
            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                         
                      <div class="form-group">
                         <label class="form-control-label">Status</label>
                         <select class="form-control status" id="status" name="status" required="">
                         <option value="" selected=""> Choose status </option>
                         <option value="available"> Available</option>
                         <option value="unavailable"> Unavailable</option>
                         </select>
                          </div>
                          <span class="text-danger">{{ $errors->first('status') }}</span>
                                
                          <div class="form-group">
                          <label class="form-control-label">Book Type</label>
               
                        <select class="form-control booktype" id="booktype" name="booktype" required="">
                            <option value="" selected=""> Choose book type </option>
                            <option value="physical"> Physical</option>
                            <option value="digital"> Digital</option>
                        </select>
                            </div>
            
      
                          <span class="text-danger">{{ $errors->first('booktype') }}</span>

                     <div class="form-group book_digital" style='display:none;'>                  
                            <div class="row">
                                <label>Choose photo (<small>optional</small>) <br>
									<label for="phto" class="custom-file-upload" style="display: inline-block;">
										<i class="fa fa-cloud-upload"></i> Upload Photo
									</label>
									<input id="phto" name="digitalphoto" hidden="true" class="digitalphoto" type="file" accept="image/x-png,image/gif,image/jpeg">
                        </label>
                    </div>
                    </div>
               

                          <span class="text-danger">{{ $errors->first('booktype') }}</span>

                          <div class="form-group"><label class="form-control-label">Book Condition</label>
                         {!! Form::select('bookcondition', array('good' => 'Good', 'bad' => 'Bad', 'normal' => 'Normal'), null,array('class' => 'form-control', 'required' => '')) !!}
                          <!-- {!!Form::text('status',null, ['placeholder' => 'status', 'class' => 'form-control'])!!} -->
                          </div>
                          <span class="text-danger">{{ $errors->first('bookcondition') }}</span>

                           <div class="form-group"><label class="form-control-label">Details</label>
                          {!!Form::textarea('details',null, ['placeholder' => 'Details', 'class' => 'form-control', 'required' => ''])!!}
                          </div>
                          <span class="text-danger">{{ $errors->first('details') }}</span>
  

                     <div class="card-footer">
                     {!!Form::submit('Create Books', ['class' => 'btn btn-primary']) !!}

                      </div>
                </div>
        </div>
</div>
{!! Form::close() !!}    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
     $("#data").submit(function (event) {
                 var x = confirm("Are you sure you want to delete?");
                    if (x) {
                        return true;
                    }
                    else {

                        event.preventDefault();
                        return false;
                    }

                });
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#booktype').on('change', function() {
      if ( this.value == 'digital' )
      //.....................^.......
      {
        $(".book_digital").show();
      }
      else
      {
        $(".book_digital").hide();
      }

    });

  });
</script>

    
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