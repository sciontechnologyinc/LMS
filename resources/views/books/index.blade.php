@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Book list')
 
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
 
    <a class="btn btn-primary col-lg-2 offset-9" href="{{ url('books/create') }}" style="margin-bottom: 10px;">Create New</a>

   <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Book list</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                        <tr>
                            <th style="padding-left: 15px;">#</th>
                            <th>Book Name</th>
                            <th>Type</th>
                            <th>ISBN</th>
                            <th>Category</th>
                            <th>Writer</th>
                            <th>Available</th>
                            <th width="110px;">Action</th>
                        </tr>
                        </thead>
                    <tbody>
                         @foreach($books as $book)
                      <tr>

                        <td>{{ $book->id  }}</td>
                        <td> {{ $book->bookname }}</td>
                        <td> {{ $book->booktype }}</td>
                        <td> {{ $book->ISBN }}</td>
                        <td> {{ $book->categoryname }}</td>
                        <td> {{ $book->writername }}</td>
                        
                        <td class="numeric" data-title="Avail">
						<span class="label label-success btn-success"><span class="fa fa-check"></span> ({{ $book->booknumber }})</span></td>
                        
                        <td><center>
                        <div class="form-group" style="display:inline-flex">
                        <a class="btn btn-success btn-sm mr-1" href="books/{!! $book->id !!}/edit"><i class="fa fa-edit"></i></a>
                        {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/books/' . $book->id]) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                        {!! Form::close() !!}
                        </div>    
                    </center></td>

                      </tr>
                    </tbody>
                     @endforeach
                  </table>
                        </div>
                    </div>
                </div>
 @endsection