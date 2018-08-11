@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Add Book list')
 
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


    {!! Form::open(['id' => 'dataForm', 'url' => '/books']) !!}
    
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
                      {!!Form::text('bookname',null, ['placeholder' => 'Book name', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>

                   <div class="form-group">
                      {!!Form::label('Book ISBN No', 'Book ISBN No', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-undo"></i></span>
                    {!!Form::text('ISBN',null, ['placeholder' => 'ISBN', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>

                    <div class="form-group">
                      {!!Form::label('Available book number', 'Available book number', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-book"></i></span>
                    {!!Form::text('booknumber',null, ['placeholder' => 'Book number', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>

             <div class="form-group">
                      {!!Form::label('Book Price', 'Book Price', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-money"></i></span>
                    {!!Form::text('bookprice',null, ['placeholder' => 'Book price', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>

                <div class="form-group">
                      {!!Form::label('Writer Name', 'Writer Name', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-user"></i></span>
                    {!!Form::text('writername',null, ['placeholder' => 'Writer name', 'class' => 'form-control'])!!}
                    </div>
                </div>
             </div>
    
                      <div class="form-group">
                            <i class="material-icons prefix"></i>
                            <label>Category :</label>
                                <select name="category">
                                    <option value="" disabled {{ old('category') ? '' : 'selected' }}>Choose a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->categoryname}}" {{ old('category') ? 'selected' : '' }}>{{$category->categoryname}}</option>
                                    @endforeach
                                </select>
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
                         {!! Form::select('status', array('available' => 'Available', 'unavailable' => 'Unavailable'),null,array('class' => 'form-control')) !!}
                          </div>
                              
                          <div class="form-group"><label class="">Book Type</label>
                         {!! Form::select('booktype', array('physical' => 'Physical', 'digital' => 'Digital'), null,array('class' => 'form-control')) !!}
                          <!-- {!!Form::text('status',null, ['placeholder' => 'status', 'class' => 'form-control'])!!} -->
                          </div>

                          <div class="form-group"><label class="">Book Condition</label>
                         {!! Form::select('bookcondition', array('good' => 'Good', 'bad' => 'Bad', 'normal' => 'Normal'), null,array('class' => 'form-control')) !!}
                          <!-- {!!Form::text('status',null, ['placeholder' => 'status', 'class' => 'form-control'])!!} -->
                          </div>

                           <div class="form-group"><label class="form-control-label">Details</label>
                          {!!Form::textarea('details',null, ['placeholder' => 'details', 'class' => 'form-control'])!!}
                          </div>
  

                     <div class="card-footer">
                     {!!Form::submit('Create Books', ['class' => 'btn btn-primary']) !!}

                      </div>
                    </div>
</div>

    {!! Form::close() !!}
@endsection()