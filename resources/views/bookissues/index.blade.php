@extends('admin.master.template')
@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection
@section('header')
    @include('admin.layouts.header')
@endsection
@section('title','Issued book`s records')
 
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
        
        <link rel="stylesheet" href="{!! ('/css/bookissue.css') !!}">
 <div class="wrapper" style="min-height: 450px;">
            
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
            
            </header>
            <div class="panel-body">
                <section id="no-more-tables">
                    <table class="table table-bordered table-striped table-condensed cf table-hover">
                        <thead class="cf">
                            <tr>
                                <th>#</th>
                                <th>StudentName</th>
                                <th>BookName</th>
                                <th class="numeric">Bookholder</th>
                                <th class="numeric issuefor">Issue for</th>
                                <th class="numeric">Issuedate</th>
                                <th class="numeric">Returndate</th>
                                <th class="numeric">Remains</th>
                                <th class="numeric text-center">Status</th>
                                <th class="numeric text-right">Action</th>
                            </tr>
                        </thead>
                    
                        <tbody class="search_result">
                        @foreach($bookissues as $bookissue)
                        <tr>
                                    <td data-title="SL">{{ $bookissue->id }}</td>
                                    <td data-title="Student Name">{{ $bookissue->name }}</td>
                                    <td data-title="Book Name">{{ $bookissue->bookname }}</td>
                                    <td class="numeric" data-title="Book holder">{{ $bookissue->bookholder }}</td>                                   
                                    <td class="issuedtype"data-title="Issue type">
                                    @if($bookissue->status == 'Pending')
                                    @if(  $bookissue->difference ) 
                                    issued for days @else issued for hours @endif
                                    @else($bookissue->status == 'Returned')
                                    @if(  $bookissue->difference ) 
                                    issued for days @else issued for hours @endif
                                    @endif
                                    </td>
                                    <td class="numeric" data-title="Issue date">today                                 </td>
                                    <td class="numeric" data-title="Return date">today</td>
                                    <td class="numeric" data-title="Remains">
                                    @if($bookissue->status == 'Pending')
                                    @if(  $bookissue->difference ) 
                                    <span class="label label-success"><strong>{{ $bookissue->difference }}</strong> days</span> @else <span class="label label-success"> {{ $bookissue->hours }} </strong> hours</span> &nbsp;@endif
                                    @else($bookissue->status == 'Returned')
                                    @if(  $bookissue->difference ) 
                                    <span class="label label-inactive"><strong>{{ $bookissue->difference }}</strong> days</span> @else <span class="label label-inactive"> {{ $bookissue->hours }} </strong> hours</span>   &nbsp;@endif
                                    @endif
                                                            
                                    </td>
                                    {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/bookissues/' . $bookissue->id ]) !!}
                                    <td class="numeric text-center" id="status" data-title="Status">
                                    @if($bookissue->status == 'Pending')
                                    <span class="fa fa-times text-danger">&nbsp;<strong>{{ $bookissue->status }}</strong></span>   &nbsp;
                                    @elseif($bookissue->status == 'Returned')
                                    <span class="fa fa-check text-success">&nbsp;<strong>{{ $bookissue->status }}</strong></span>  &nbsp;
                                    @else   
                                    <span class="fa fa-check text-success">&nbsp;<strong>{{ $bookissue->status }}</strong> </span>
                                    @endif
                                    <!-- <span class="fa fa-times text-danger bookissue_result"> {{ $bookissue->status}}</span>  -->
                                    </td>
                                    <td class="numeric text-right" data-title="Action">
                                    @if($bookissue->status == 'Pending')
                                    <a data-toggle="modal"  data-target="#{{$bookissue->id}}" class="btn btn-xs btn-info btn-returned"><span class="text-success fa fa-check" title="Make action"></span></a>
                                    @elseif($bookissue->status == 'Returned')
                                    <a data-toggle="modal"  data-target="#{{$bookissue->id}}" class="btn btn-xs btn-info btn-returned"><span class="text-danger fa fa-times" title="Make action"></span></a>&nbsp;
                                    @else   
                                    <a data-toggle="modal"  data-target="#{{$bookissue->id}}" class="btn btn-xs btn-info btn-returned"><span class="text-success fa fa-check" title="Make action"></span></a>&nbsp;
                                    @endif
                                    <!-- <span class="fa fa-times text-danger bookissue_result"> {{ $bookissue->status}}</span>  -->
                                    </td>
                                                                                    
                                        <!-- Small modal -->
                                                @if($bookissue->status == 'Pending')
                                                <div class="modal fade" id="{{$bookissue->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Click below button if only the book is returned! Not otherwise!!</center>
                                                </h2>
                                                {!!Form::submit('Submit Return', ['class' => 'btn btn-primary btn-return  col-lg-14']) !!}
                                                @elseif($bookissue->status == 'Returned')
                                                <div class="modal fade" id="{{$bookissue->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Click below button if you want to change the book to pending! Not otherwise!!</center>
                                                </h2>
                                                {!!Form::submit('Change to Pending', ['class' => 'btn btn-primary btn-return  col-lg-14']) !!}
                                                @else
                                                <div class="modal fade" id="{{$bookissue->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Click below button if only the book is returned! Not otherwise!!</center>
                                                </h2>
                                                {!!Form::submit('Submit Return', ['class' => 'btn btn-primary btn-return  col-lg-14']) !!}
                                                @endif
                                                        <div class="panel-body">
                                                        @if($bookissue->status == 'Pending')
                                                        <input type="hidden" name="status" id="status" class="status" value="Returned">
                                                        @elseif($bookissue->status == 'Returned')
                                                        <input type="hidden" name="status" id="status" class="status" value="Pending">
                                                        @else
                                                        <input type="hidden" name="status" id="status" class="status" value="Returned">
                                                        @endif
                                                        <!-- {!!Form::text('status',null, ['placeholder' => 'Status', 'class' => 'form-control col-lg-12', 'value' => 'Returned' ])!!} -->
    
                                                         {!! Form::close() !!}                                                  
                                                        </div>
                                                    </section>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                    </td>
                                </tr>                                
                       </tbody>
                       @endforeach
                    </table>
                </section>
                <div>
                    <ul class="pagination pagination-lg">
                        <li></li>
                    </ul>
                </div>
                
            </div>
        </section>
    </div>
</div>
 @endsection