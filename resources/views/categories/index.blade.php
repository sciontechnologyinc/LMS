@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Category list')
 
 @section('content')


    <a class="btn btn-primary col-lg-2 offset-9" href="{{ url('create') }}" style="margin-bottom: 10px;">Create New</a>

   <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Complete Category list</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                        <tr>
                            <th style="padding-left: 15px;">#</th>
                            <th>Category Name</th>
                            <th width="110px;">Action</th>
                        </tr>
                        </thead>
                    <tbody>
                    @foreach($categories as $category)
                      <tr>

                        <td>{{ $category->id }}</td>
                        <td> {{ $category->categoryname }}
                        </td>
                        
                        <td><center>
                        <div class="row-2">
                        <a class="btn btn-success btn-sm" href="categories/{!! $category->id !!}/edit">Edit</a>
                        {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/categories/' . $category->id]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
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