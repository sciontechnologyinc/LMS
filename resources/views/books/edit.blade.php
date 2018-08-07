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


    {!! Form::open(['id' => 'dataForm', 'url' => '/books']) !!}
    <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                      <div class="form-group">
                      {!!Form::label('Book Name', 'Book Name', array('class' => 'form-control-label'))!!}
                      {!!Form::text('bookname',$book->bookname, ['placeholder' => 'bookname', 'class' => 'form-control'])!!}
                      </div>
                      <div class="form-group"><label class="form-control-label">Book ISBN No</label>
                      {!!Form::text('ISBN',$book->ISBN, ['placeholder' => 'ISBN', 'class' => 'form-control'])!!}
                      </div>
                      <div class="form-group"><label class="form-control-label">Available book number</label>
                      {!!Form::text('booknumber',$book->booknumber, ['placeholder' => 'book number', 'class' => 'form-control'])!!}
                      </div>
                      <div class="form-group"><label class="form-control-label">Book Price</label>
                      {!!Form::text('bookprice',$book->bookprice, ['placeholder' => 'P 00.00', 'class' => 'form-control'])!!}
                      </div>
                      <div class="form-group"><label class="form-control-label">Writer Name</label>
                      {!!Form::text('writername',$book->writername, ['placeholder' => 'writername', 'class' => 'form-control'])!!}
                      </div>
                      <div class="form-group"><label class="form-control-label">Category</label>
                      {!!Form::text('category',$book->category, ['placeholder' => 'category', 'class' => 'form-control'])!!}
                      </div>
                         <div class="row form-group">
                            <div class="col col-md-3"><label class="form-control-label">Category</label></div>
                            <div class="col col-md-9">
                              <div class="form-check-inline form-check">
                                <label for="inline-checkbox1" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox1" name="category" value="option1" class="form-check-input">Programming 
                                </label>&nbsp
                                <label for="inline-checkbox2" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Math
                                </label>&nbsp
                                <label for="inline-checkbox3" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Science
                                </label>
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
                          {!!Form::textarea('details',$book->details, ['placeholder' => 'details', 'class' => 'form-control'])!!}
                          </div>
                              <label for="inline-checkbox3" class="form-check-label ">Status</label>
                                <select class="standardSelect form-control" tabindex="1" name="status">
                                    <option value="" selected disabled hidden>Availability</option>
                                    <option value="available">Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                      </div>

                     <div class="card-footer">
                     {!!Form::submit('Update Book', ['class' => 'btn btn-primary  col-lg-4 offset-8']) !!}

                      </div>
                    </div>
</div>
    {!! Form::close() !!}
@endsection()