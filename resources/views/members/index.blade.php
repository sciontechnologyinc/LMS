@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Member list')
 
 @section('content')
        
        <link rel="stylesheet" href="{!! ('/css/memberlistcss.css') !!}">

 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Member list</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                    
                      <tr>
                        <th><input type="text" placeholder="Search Member" class="search-memberlist"></th>
                      </tr> 
                      <tr>
                        <td>
                        <div class="member-listcontainer">
                        @foreach($members as $member)
                            <div class="per-member">
                              <div class="row">
                                <div class="col-sm-4 photo"><img src= "/storage/uploads/{{$member->photo}}" >&nbsp;</div>
                                <div class="col-sm-6 membername">{{ $member->membername  }}<br>{{ $member->contactnumber  }}</div>
                                <div class="col-sm-2"></div>
                              </div>
                              <div class="row-2">
                                  <div class="col-sm-4 edit-btn"><i class="fa fa-edit"></i> Edit</div>
                                  {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/members/' . $member->id]) !!}
                                  {{ Form::button('<i class="fa fa-trash">Delete</i>', ['type' => 'submit', 'class' => 'col-sm-4 delete-btn'] )  }}
                                  {!! Form::close() !!}
                                  <div class="col-sm-4 details-btn"><i class="fa fa-eye"></i> Details</div>
                              </div>
                            </div>
                            @endforeach 
                        </div>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                  
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
 @endsection