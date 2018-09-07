
@extends('lms.master.template2')
@section('content')
<link href="css/monitoring.css" rel="stylesheet"> 
<link href="css/lms2.css" rel="stylesheet"> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<div class="img-logo"><img src="{{asset('img/half.jpg')}}"></div>
<div class="container">
<div class="filter-bar">
    <div class="filter-section" ><input type="text" placeholder="Section" list="section-list">
    <datalist id="section-list">
        <option value="IV-001"/>
        <option value="III-002"/>
        <option value="IV-008"/>
    </datalist></div>
    <div class="filter-section" ><input type="text" placeholder="Fetcher" list="fetcher-list">
    <datalist id="fetcher-list">
        <option value="Mr. John"/>
        <option value="Mr. Eric"/>
        <option value="Mr. Tony"/>
    </datalist></div>
    <div class="filter-section" ><input type="text" placeholder="Student" list="student-list">
    <datalist id="student-list">
        <option value="Juan Dela Cruz"/>
        <option value="Maria Reyes"/>
        <option value="Chris Port"/>
    </datalist></div>
    <div class="filter-section" ><input type="text" placeholder="Status" list="status-list">
    <datalist id="status-list">
        <option value="Waiting"/>
        <option value="Arrived"/>
        <option value="Departed"/>
    </datalist></div>
    <input type="text" class="RFIDSAVEEEE" autofocus>
</div>
  <h2 class="menu-list1">Monitoring</h2>   

<<<<<<< HEAD
  
=======
  {!!Form::text('RFIDSAVEEEE',null, ['placeholder' => 'test No', 'class' => 'form-control col-lg-4', 'required' => '' ])!!}
>>>>>>> 5dbf4f3631642ec015017300d25e89ffc2c49343
  
  <table class="table  offset-1">
    <thead>
      <tr>
        <th>#</th>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Time In</th>
        <th>Time Out</th>
        <th>Status</th>
      </tr>
    </thead>
  @foreach($members as $member)
    <tbody>
       

    </tbody>
    @endforeach
  </table>
</div>
{!! Form::close() !!}  

<script>

  $(document).ready(function(){
    var now = new Date();
    $('.RFIDSAVEEEE').focus();

      $('.RFIDSAVEEEE').change(function(){
          $('tbody').append('<tr>'+
        '<td>1</td>'+
        '<td>{{ $member->LRN }}</td>'+
        '<td>{{ $member->membername}}</td>'+
        '<td>'+now+'</td>'+
        '<td>'+now+'</td>'+
        '<td>OUT</td>'+
        '</tr>');

        $('.RFIDSAVEEEE').val('');
        $('.RFIDSAVEEEE').focus();
      })

  });
</script>
@endsection