@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Book reservation list')
 
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
                            <strong class="card-title">Book Reservation</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                        <tr>
                            <th>Card Number</th>
                            <th>Student Name</th>
                            <th>Book Name</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                    @foreach($reservations as $reservation)

                      <tr>

                        <td>{{$reservation->LRN}}</td>
                        <td>{{$reservation->membername}}</td>
                        <td>{{$reservation->bookname}}</td>
                        <td>{{$reservation->message}}</td>
                        <td></td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                        </div>
                    </div>
                </div>

 @endsection