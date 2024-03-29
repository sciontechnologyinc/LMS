@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Issue a book to a member')
 
 @section('content')

  @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

 @if($message = Session::get('success1'))
    <div class="alert alert-danger">
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
 <link rel="stylesheet" href="{!! ('/css/bookissues.css') !!}">
 

   {!! Form::open(['id' => 'dataForm', 'url' => '/bookissues', 'method' => 'POST']) !!}

 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

<!--                           
                                         <div class="form-group">
                                     <label>Book Name</label>
                                            <div class="iconic-input">
                                      <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon">
                                      <i class="fa fa-list-alt"></i></span>
                                      <select class="form-control select select2-hidden-accessible" name="bookname" id="bookname" required="" tabindex="-1" aria-hidden="true">
                                    <option value="" disabled {{ old('bookname') ? '' : 'selected' }}>Choose a bookname</option>
                                    @foreach($books as $book)
                                        <option value="{{$book->bookname}}" {{ old('bookname') ? 'selected' : '' }}>{{$book->bookname}}</option>
                                    @endforeach
                                </select>
                      </div>
                      
                      </div>
                    </div>

                         
                        <div class="form-group"><div class="form-group">
                        <label><button  class="btn btn-info pointer check_book" type="button"><i class="fa fa-retweet"></i></button> Check Availability &nbsp; <br>
						           <br> <span class="book_result" ></span>
                        </label></div></div> -->
                        <div class="form-group">
                      {!!Form::label('Book ISBN No', 'Book ISBN No', array('class' => 'form-control-label' ))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-undo"></i></span>
                    {!!Form::text('ISBN',null, ['placeholder' => 'ISBN', 'class' => 'form-control ISBN', 'required' => '','autofocus'])!!}
                    </div>
                    <span class="text-danger">{{ $errors->first('ISBN') }}</span>
                </div>
             </div>


                         <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                      {!!Form::label('Book Name', 'Book Name', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-book"></i></span>
                      {!!Form::text('bookname',null, ['placeholder' => 'Book name', 'class' => 'form-control bookname', 'required' => '','readonly'])!!}
                     
                    </div>
                    <span class="text-danger">{{ $errors->first('bookname') }}</span>
                </div>
             </div>



                    <div class="form-group">
                      {!!Form::label('Available book number', 'Available book number', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-book"></i></span>
                    {!!Form::number('booknumber',null, ['placeholder' => 'Book number', 'class' => 'form-control booknumber', 'required' => '', 'readonly'])!!}
                    </div>
                    <span class="text-danger">{{ $errors->first('booknumber') }}</span>
                </div>
             </div>
               

            <div class="form-group">
                      {!!Form::label('Book Price', 'Book Price', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-money"></i></span>
                    {!!Form::number('bookprice',null, ['placeholder' => 'Book price', 'class' => 'form-control bookprice', 'required' => '', 'readonly'])!!}
                    </div>
                    <span class="text-danger">{{ $errors->first('bookprice') }}</span>
                </div>
             </div>

                <div class="form-group">
                      {!!Form::label('Writer Name', 'Writer Name', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-user"></i></span>
                    {!!Form::text('writername',null, ['placeholder' => 'Writer name', 'class' => 'form-control writername', 'required' => '', 'readonly'])!!}
                    </div>
                    <span class="text-danger">{{ $errors->first('writername') }}</span>
                </div>
             </div>

                        <div class="form-group"><label class="form-control-label">Status</label>
                          {!!Form::textarea('comments',null, ['placeholder' => 'Status', 'class' => 'form-control comments', 'required' => '', 'readonly'])!!}
                          </div>

                      </div>
                    </div>
            </div>

            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                    <div class="card-body card-block">
         

                      <div class="form-group"><label class="form-control-label">Name</label>
                          {!!Form::text('name',null, ['placeholder' => 'Name of Student', 'class' => 'form-control name', 'required' => ''])!!}
                          </div>

         <div class="form-group">
            <label class="form-control-label">Book Holder</label><div class="form-group">
                <div class="iconic-input">
                  <select class="form-control" id="bookholder" name="bookholder" required="">
                    <option value="" selected=""> Choose book holder </option>
                    <option value="admin"> Admin  </option>
                    <!-- <option value="manager"> Manager </option> -->
                  </select>
					</div>
                  </div>
					</div>

              <div class="form-group">
              <label class="form-control-label">Date / Hour</label><div class="form-group">
                <div class="iconic-input">
                  <select class="form-control" id="date_hour" name="date_hour" required="">
                    <option value="" selected=""> Choose date/hour </option>
                    <option value="date"> Date wise issue</option>
                    <option value="hour"> Hour wise issue</option>
                  </select>
					</div>
        </div>
    </div>
    
    <div class="date_area" style='display:none;'>
					<div class="form-group">
          {!!Form::label('datefrom', 'Date from', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-calendar"></i></span>
              {!!Form::text('date_from',null, ['placeholder' => 'Date from', 'class' => 'form-control date_from', 'required' => ''])!!}
						</div>
					</div>
			</div>

					<div class="form-group">
          {!!Form::label('dateto', 'Date to', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-calendar"></i></span>
              {!!Form::text('date_to',null, ['placeholder' => 'Date To', 'class' => 'form-control date_to', 'required' => ''])!!}
						</div>
          </div>
        </div> 

        <div class="form-group">
              {!!Form::hidden('difference',null, ['placeholder' => 'Difference', 'class' => 'form-control difference', 'required' => ''])!!}
                </div>
 </div>
        <div class="hour_area" style="display:none">
					<div class="form-group">
          {!!Form::label('hourfrom', 'Hour From', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-clock-o"></i></span>
              {!!Form::text('hour_from',null, ['placeholder' => 'Hour from', 'class' => 'form-control hour_from', 'required' => ''])!!}
						</div>
					</div>
          </div>
					
					<div class="form-group">
          {!!Form::label('hourto', 'Hour To', array('class' => 'form-control-label'))!!}
                    <div class="iconic-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                    <i class="fa fa-clock-o"></i></span>
              {!!Form::text('hour_to',null, ['placeholder' => 'Hour to', 'class' => 'form-control hour_to', 'required' => ''])!!}
						</div>
					</div>
    </div>

              <div class="form-group">
              {!!Form::hidden('hours',null, ['placeholder' => 'Hours', 'class' => 'form-control hours', 'required' => ''])!!}
                </div>
</div>
    
    
    <div class="form-group"><label class="form-control-label"></label>
    {!!Form::submit('Make this issue', ['id' => 'addForm','class' => 'btn btn-primary  col-lg-4']) !!}
                </div>

                <br>
      
                      </div>
                    </div>
</div>
{!! Form::close() !!}
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script type="text/javascript" src="http://www.datejs.com/build/date.js"></script>
<script>
  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

 function savedata(bookname,ISBN,booknumber,bookprice,writername,comments){
                
                var dataString = "bookname="+bookname+"&ISBN="+ISBN+"&booknumber="+booknumber+"&bookprice="+bookprice+"&writername="+writername+"&comments="+comments;
                var updatedbooknumber = booknumber - 1;
                console.log(updatedbooknumber);
                $.ajax({
                    url: '/saveisbn',
                    type: 'POST',
                    data: dataString,
                    dataType: 'JSON',
                    success: function (data) {
 
                                      
                                    
                    }
                    
                }); 
 }
  $(document).ready(function(){
   
    $('.ISBN').change(function() {
      var isbnId = $('.ISBN').val();
      $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: '/getisbn/' + isbnId,
          dataType : 'json',
          type: 'POST',
          data: {},
          contentType: false,
          processData: false,
          success:function(response) {
               var data = response.books[0];
               var updatedbooknumber = data.booknumber - 1;
               $('.bookname').val(data.bookname);
               $('.booknumber').val(data.booknumber);
               $('.bookprice').val(data.bookprice);
               $('.writername').val(data.writername);
               $('.comments').val(data.comments);
               console.log(updatedbooknumber);
               $.ajax({
                      headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                      url:'/updateisbn/'+$('.ISBN').val(),
                      method:"POST",  
                      data:{
                          booknumber: updatedbooknumber
                      },                              
                      success: function( data ) {
                           console.log(updatedbooknumber);
                      }
                  }); 
          }
     });
  });
  

    $('.name').change(function() {
      var nameId = $('.name').val();
      $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: '/getname/' + nameId,
          dataType : 'json',
          type: 'POST',
          data: {},
          contentType: false,
          processData: false,
          success:function(response) {
                console.log(response); 
               var data = response.members[0];
               $('.name').val(data.membername);

          }
     });
  });



    $(".date_from").datepicker({
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var min = $(this).datepicker('getDate'); 
        $(".date_to").datepicker('option', 'minDate', min || '0'); 
              }
          });

    $(".date_to").datepicker({
    minDate: '0',
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var max = $(this).datepicker('getDate'); 
        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); 
        var start = $(".date_from").datepicker("getDate");
        var end = $(".date_to").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24);
        $(".difference").val(days);
    }
  });

 function calculate() {
         var time1 = $(".hour_from").val().split(':'), time2 = $(".hour_to").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins / 60; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $(".hours").val(hours);
     }
     $(".hour_from,.hour_to").change(calculate);
     calculate();

      $(".check_book").click(function () {

if($('#bookname').val() == null){
  var selectedValue = $("#bookname").val();
  $(".book_result").html("<b class='text-danger'>Select book from <b class='text-success'>Book Name</b> field</b>");
}else{
  var selectedValue = $("#bookname").val();
$(".book_result").html(" &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span class='fa fa-check-circle text-success'> <b class='text-warning'>" + '{{$book->booknumber}} &nbsp;' + selectedValue + " Books </b>   available</span></span>");
}
});
//check is book issued by date or hour 
$('[name=hour_from]').prop('required',false);
$('[name=hour_to]').prop('required',false);
$('[name=date_from]').prop('required',false);
$('[name=date_to]').prop('required',false);

$('[name=date_hour]').change(function(){
if($(this).val() =='hour'){
  $('.hour_area').show();$('.date_area').hide();
  $('[name=date_from]').prop('required',false);
  $('[name=date_to]').prop('required',false);
  $('[name=hour_from]').prop('required',true);
  $('[name=hour_to]').prop('required',true);
}else{
  $('.hour_area').hide();$('.date_area').show();
  $('[name=hour_from]').prop('required',false);
  $('[name=hour_to]').prop('required',false);
  $('[name=date_from]').prop('required',true);
  $('[name=date_to]').prop('required',true);
}
});
  });
</script>
 @endsection