@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Update Category list')
 
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
{!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/books/' . $book->id, 'enctype' => 'multipart/form-data']) !!}
    <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                         <div class="form-group">
                      {!!Form::label('Book Name', 'Book Name', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-book"></i></span>
                      {!!Form::text('bookname',$book->bookname, ['placeholder' => 'Book name', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>

                   <div class="form-group">
                      {!!Form::label('Book ISBN No', 'Book ISBN No', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-undo"></i></span>
                    {!!Form::text('ISBN',$book->ISBN, ['placeholder' => 'ISBN', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>

                    <div class="form-group">
                      {!!Form::label('Available book number', 'Available book number', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-book"></i></span>
                    {!!Form::text('booknumber',$book->booknumber, ['placeholder' => 'Book number', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>

             <div class="form-group">
                      {!!Form::label('Book Price', 'Book Price', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-money"></i></span>
                    {!!Form::text('bookprice',$book->bookprice, ['placeholder' => 'Book price', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>

                <div class="form-group">
                      {!!Form::label('Writer Name', 'Writer Name', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-user"></i></span>
                    {!!Form::text('writername',$book->writername, ['placeholder' => 'Writer name', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>

             <div class="form-group">
							<label style="width:100%;">Category </label>
              @foreach($categories as $category)
								<label class="checkbox-inline pull-left" style="width:30%; margin-left:0px;background:#d9edf7;margin:0.5%;border-radius:20px;">
                               
                <input class="categoryname" type="checkbox" name="categoryname[]" value="{{$category->id}}" {{ (! empty(old('categoryname')) ? 'checked' : '') }}>{{$category->categoryname}}</label>
                @endforeach
							</div>

                      </div>
                    </div>
</div>
            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                         <div class="form-group">
                         <label class="form-control-label">Status</label>
                         {!! Form::select('status', array('available' => 'Available', 'unavailable' => 'Unavailable'),$book->status,array('class' => 'form-control')) !!}
                         </div>
                              
                         <div class="form-group">
                         <label class="form-control-label">Book Type</label>
                         {!! Form::select('booktype', array('physical' => 'Physical', 'digital' => 'Digital'),$book->booktype,array('class' => 'form-control', 'id' => 'booktype')) !!}
                         </div>

                              

                         

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
               

                         

                          <div class="form-group"><label class="form-control-label">Book Condition</label>
                         {!! Form::select('bookcondition', array('good' => 'Good', 'bad' => 'Bad', 'normal' => 'Normal'), $book->bookcondition,array('class' => 'form-control')) !!}
                          </div>

                           <div class="form-group"><label class="form-control-label">Details</label>
                          {!!Form::textarea('details',$book->details, ['placeholder' => 'details', 'class' => 'form-control'])!!}
                          </div>
  

                     <div class="card-footer">
                     {!!Form::submit('Update Book', ['class' => 'btn btn-primary  col-lg-4 offset-8']) !!}

                      </div>
                    </div>
</div>
    {!! Form::close() !!}
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
@endsection()