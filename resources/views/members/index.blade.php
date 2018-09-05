@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Member list')
 
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
 <a class="btns btn-primaries col-lg-2 offsets-9" href="{{ url('members/create') }}" style="margin-bottom: 10px;">Create New</a>
        
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
                              <div class="col-sm-4 photo"> 
                                @if($member->photo)
                                <img src="{{asset('storage/uploads/'.$member->photo)}}" />&nbsp;
                                @else
                                <img src="{{asset('storage/uploads/user_icon.png')}}" />
                                @endif
                                </div>
                                <div class="col-sm-6 membername">{{ $member->membername  }}<br>{{ $member->contactnumber  }}</div>
                                <div class="col-sm-2"></div>
                              </div>
                              <div class="row-2">
                              <center>
                                <div class="form-group" style="display:inline-flex">
                                 <a rel="tooltip" title="Edit" class="btn btn-sm mr-1" href="members/{!! $member->id !!}/edit"><span class="fa fa-edit">&nbsp;Edit</span></a>
                                  {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/members/' . $member->id]) !!}
                                  {{ Form::button('<span class="fa fa-trash">&nbsp;Delete</span>', ['type' => 'submit', 'class' => 'col-sm-4 delete-btn', 'rel' => 'tooltip', 'title' => 'Delete'] )  }}
                                  {!! Form::close() !!}
                              
                                  </div>
                                  </center>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
     $("#deleteForm").submit(function (event) {
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

<script type="text/javascript">
	$(document).ready(function(){
	    $("[rel=tooltip]").tooltip({ placement: 'top'});
	    
	});
</script>
        
 @endsection

 