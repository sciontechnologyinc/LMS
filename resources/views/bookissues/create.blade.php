@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Issue a book to a member')
 
 @section('content')

   {!! Form::open(['id' => 'dataForm', 'url' => '/bookissues', 'method' => 'POST']) !!}
 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">

                          
                                         <div class="form-group">
                                     <label>Book Name</label>
                                            <div class="iconic-input">
                                      <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon">
                                      <i class="fa fa-list-alt"></i></span>
                                      <select class="form-control select select2-hidden-accessible" name="book" id="book" required="" tabindex="-1" aria-hidden="true">
                                    <option value="" disabled {{ old('bookname') ? '' : 'selected' }}>Choose a bookname</option>
                                    @foreach($books as $book)
                                        <option value="{{$book->booknumber}}" {{ old('bookname') ? 'selected' : '' }}>{{$book->bookname}}</option>
                                    @endforeach
                                </select>
                      </div>
                      
                      <span class="text-danger">{{ $errors->first('bookname') }}</span>
                      </div>
                    </div>

                       
                        <div class="form-group"><div class="form-group">
                        <label><button  class="btn btn-info pointer check_book" type="button"><i class="fa fa-retweet"></i></button> Check Availability &nbsp; 
						            <span class="book_result" ></span>
                        </label></div></div>



                      <div class="form-group">
                      <label>Member ID</label>
                      <div class="iconic-input">
                      <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon">
                      <i class="fa fa-list-alt"></i></span>
                        <input type="text" class="form-control" id="member_id" name="member" placeholder="Member ID" autocomplete="off">
                      </div>
                    </div>
                   </div>
                    <div class="form-group">
                      <label style="width:100%">
                        <button class="btn btn-info pointer check_member" type="button"><i class="fa fa-retweet"></i></button> Check Member &nbsp; 
                        <span class="member_result"><span class="fa fa-check-circle text-success"> Valid member</span>
                  <div class="row"><br>
                    <div class="col-md-6">Name: Kubra (male)</div>
                    <div class="col-md-6">Email: admin@email.com</div>
                    <div class="col-md-6">Phone: 01478578</div>
                    <div class="col-md-6">Join date: 2017-05-11</div>
                    <div class="col-md-6">Address:<br> uttra 12</div><div class="col-md-6"><img src="https://yourprogramming.com/library/images/members/23_.jpg" style="max-width:100%"></div></div></span>
                      </label> 
                    </div>
					
                  
 
                      </div>
                    </div>
            </div>

            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                <div class="form-group"><label class="form-control-label">Date / Hour</label><div class="form-group">
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
						<label>Date From</label>
						<div class="iconic-input">
							<i class="fa fa-calendar"></i>
							<input type="date" class="form-control" name="date_from" placeholder="Date from" value="2018-08-15" required="">
						</div>
					</div>
					
					<div class="form-group">
						<label>Date To</label>
						<div class="iconic-input">
							<i class="fa fa-calendar"></i>
							<input type="date" class="form-control" name="date_to" placeholder="Date To" required="">
						</div>
          </div>
        </div>
        
 
        <div class="hour_area" style="display:none">
					<div class="form-group">
						<label>Hour From</label>
						<div class="iconic-input">
							<i class="fa fa-clock-o"></i>
							<input type="text" class="form-control" name="hour_from" placeholder="Hour from">
						</div>
					</div>
					
					<div class="form-group">
						<label>Hour To</label>
						<div class="iconic-input">
							<i class="fa fa-clock-o"></i>
							<input type="text" class="form-control" name="hour_to" placeholder="Hour To">
						</div>
					</div>
				</div>
    
    
    <div class="form-group"><label class="form-control-label"></label>
                <input type="submit" class="btn btn-success" value="Make this issue"></div>
      
                      </div>
                    </div>
</div>
{!! Form::close() !!}
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(function(){
      $(".check_book").click(function () {

    if($('#book').val() == null){
      var selectedValue = $("#book").val();
      $(".book_result").html("<b class='text-danger'>Select book from <b class='text-success'>Book Name</b> field</b>");
    }else{
      var selectedValue = $("#book").val();
    $(".book_result").html("<span class='fa fa-check-circle text-success'> <b class='text-warning'>" + selectedValue + " Books </b>   available</span></span>");
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
})
</script> 
 @endsection