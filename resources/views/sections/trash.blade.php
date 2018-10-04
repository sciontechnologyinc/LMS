@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Trash list')
 
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
 
 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Trash Sections List</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                        <tr>
                            <th style="padding-left: 15px;">#</th>
                            <th>Section Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                    @foreach($sections as $index => $section)

                      <tr>

                        <td>{{ $index +1 }}</td>
                        <td>{{ $section->sectionname }}</td>
                        <td><center>
                        {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/sectionTrash/' . $section->id]) !!}
                        {{ Form::button('<i class="fa fa-window-restore"></i>', ['type' => 'submit', 'class' => 'btn btn-success btn-sm', 'rel' => 'tooltip', 'title' => 'Restore'] )  }}
                        {!! Form::close() !!}
                        </center></td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                        </div>
                    </div>
                </div>

 

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">
     $("#deleteForm").submit(function (event) {
                 var x = confirm("Are you sure you want to restore?");
                    if (x) {
                        return true;
                    }
                    else {

                        event.preventDefault();
                        return false;
                    }

                });
</script>
 @endsection