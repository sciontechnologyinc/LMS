@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Add Category list')
 
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


    {!! Form::open(['id' => 'dataForm', 'url' => '/categories']) !!}
    <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Create</strong><small> Category</small></div>
                      <div class="card-body card-block">


                          <div class="form-group">
							<div class="form-group col-md-6 offset-2">
								{!!Form::label('categoryname', 'Category Name', array('class' => 'form-control-label'))!!}
								<div class="iconic-input">
								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon">
                                <i class="fa fa-list-alt"></i></span>
									{!!Form::text('categoryname',null, ['placeholder' => 'Category Name', 'class' => 'form-control col-lg-12' ])!!}
								</div>
							</div>
						</div>
                                <br>
                                {!!Form::submit('Create Category', ['class' => 'btn btn-primary  col-lg-2 offset-7']) !!}

                              </div>
                            </div>
                          </div>

            </div>
</div>

    {!! Form::close() !!}
@endsection()