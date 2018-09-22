@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','QR Code Generator')
 
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
                    <div class="card col-lg-12">
                        <div class="card-header">
                             <iframe width="100%" height="700px" src="https://www.qr-code-generator.com/a1/?PID=1628&gclid=CjwKCAjw54fdBRBbEiwAW28S9qFeuGSlCN13W5ePWXpIPu8Rqf-yr3uBIvDi4Qpyv6rpl58sARVWkBoCH_8QAvD_BwE"></iframe>
                        </div>
                        <div class="card-body">
                 
                        </div>
                    </div>
                </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   
 @endsection

 