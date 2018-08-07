@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Book list')
 
 @section('content')
 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">All Members</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      <th>#</th>
                        <th>Book Name</th>
                        <th>Type</th>
                        <th>ISBN</th>
                        <th>Category</th>
                        <th>Writer</th>
                        <th>Available</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      @foreach($addbooks as $addbook)
                        <td>{{ $addbook->id  }}</td>
                        <td> {{ $addbook->bookname }}</td>
                        <td> {{ $addbook->booktype }}</td>
                        <td> {{ $addbook->ISBN }}</td>
                        <td> {{ $addbook->category }}</td>
                        <td> {{ $addbook->writername }}</td>
                        <td><a class="btn btn-xs btn-success col-lg-8 offset-2">{{ $addbook->booknumber }}</a></td>
                        <td>
                        <a class="btn btn-xs btn-info" href="{{ route('addbook.show', $addbook->id) }}" data-toggle="modal" data-target="#showbook" >Show</a>
                        <a class="btn btn-xs btn-primary" href="{{ route('addbook.edit', $addbook->id) }}">Edit</a>

                        {!! Form::open(['method' => 'DELETE', 'route'=>['addbook.destroy',$addbook->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
                        {!! Form::close() !!}
                        </td>
                      </tr>
                    </tbody>
                     @endforeach
                  </table>
                  {!! $addbooks->render() !!}
                        </div>
                    </div>
                </div>


 @endsection