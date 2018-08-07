@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Book list')
 
 @section('content')


    <a class="btn btn-primary col-lg-2 offset-9" href="{{ url('addbooks') }}" style="margin-bottom: 10px;">Create New</a>

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
                        <td> {{ $book->category }}</td>
                        <td> {{ $book->writername }}</td>
                        <td><a class="btn btn-xs btn-success col-lg-8 offset-2">{{ $book->booknumber }}</a></td>
                        
                        <td><center>
                        <a class="btn btn-success btn-sm" href="books/{!! $book->id !!}/edit">Edit</a>


                    {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/books/' . $book->id]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                        </center></td>
                      </tr>
                    </tbody>
                     @endforeach
                  </table>
                        </div>
                    </div>
                </div>
 @endsection