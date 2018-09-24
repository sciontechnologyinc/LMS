
@extends('lms.master.template2')
@section('content')
<link href="css/monitoring.css" rel="stylesheet"> 
<link href="css/lms2.css" rel="stylesheet"> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<div class="img-logo"><img src="{{asset('img/half.jpg')}}"></div>
<meta name="csrf-token" content="{{csrf_token() }}"/>
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

    <input type="text" class="LRN" name="LRN" autofocus>
    

</div>
</div>

  <h2 class="menu-list1">Monitoring</h2>  
    <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Student ID</th>
              <th>Student Name</th>
              <th>Time</th>
              <th>Status</th>
            </tr>
          </thead>
        @foreach($rfids as $rfid)
          <tbody class="body">
              <tr>
                  <td></td>
                  <td>{{ $rfid->studentid }}</td>
                  <td>{{ $rfid->studentname }}</td>
                  <td>{{ $rfid->timestatus}}</td>
                  <td>{{ $rfid->status}}</td>
               </tr>
          </tbody>
          @endforeach
     </table>
  </div>
  <input type="hidden" name="_token" value="{{csrf_token() }}"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script type="text/javascript" src="http://www.datejs.com/build/date.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

 function savedata(studentid,studentname,timestatuss){
                console.log(timestatuss);
                var timestat = new Date().toString("hh:mm:tt");
                if(timestatuss == '' || timestatuss == 'IN'){
                    var status = "OUT";
                }else{
                    var status = "IN";
                }
                var dataString = "studentid="+studentid+"&studentname="+studentname+"&timestatus="+timestat+"&status="+status;
                
                console.log(dataString);

                $.ajax({
                    url: '/postajax',
                    type: 'POST',
                    data: dataString,
                    dataType: 'JSON',
                    success: function (data) { 
                                    $.ajax({
                                    url:'/updateajax/'+$('.LRN').val(),
                                    method:"POST",  
                                    data:{
                                        timestatus: status
                                    },                              
                                    success: function( data ) {
                                    console.log('YEHEY !!!');
                                    }
                                });
                    }
                    
                }); 
 }
  $(document).ready(function(){
            $('.LRN').change(function(){
                $.post('/getajax/'+$('.LRN').val(), function(response)
                    {
                                var data = response.members[0];
                                console.log(data.LRN);
                                $('#studentid').val(data.LRN);
                                $('#studentname').val(data.membername);
                            setTimeout(function(){
                                        savedata(data.LRN,data.membername,data.timestatus);
                            }, 50);
                       
                    }, 'json');
            });
  });
</script>
@endsection