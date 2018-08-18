@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Issue a book to a member')
 
 @section('content')

   {!! Form::open(['id' => 'dataForm', 'url' => '/books']) !!}
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
                                <select name="bookname" class="form-control">
                                    <option value="" disabled {{ old('bookname') ? '' : 'selected' }}>Choose a bookname</option>
                                    @foreach($books as $book)
                                        <option value="{{$book->bookname}}" {{ old('bookname') ? 'selected' : '' }}>{{$book->bookname}}</option>
                                    @endforeach
                                </select>
                      </div>
                      <span class="text-danger">{{ $errors->first('bookname') }}</span>
                      </div>
                    </div>

                       
                        <div class="form-group"><div class="form-group">
                          <label><button class="btn btn-info pointer check_book" type="button"><i class="fa fa-retweet"></i></button> Check Availability &nbsp; 
                          <span class="book_result"></span>
                        </label></div></div>
                        <div class="form-group"><label class="form-control-label">Member ID</label><input type="text" class="form-control" id="member_id" name="member" placeholder="Member ID" autocomplete="off"></div>
                       <div class="form-group">
                      <label style="width:100%">
                        <button class="btn btn-info pointer check_member" type="button"><i class="fa fa-retweet"></i></button> Check Member &nbsp; 
                        <span class="member_result"></span>
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


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
  $(document).ready(function(){
    $('#date_hour').on('change', function() {
      if ( this.value == 'date' )
      //.....................^.......
      {
        $(".date_area").show();
        $(".hour_area").hide();
      }
      else if( this.value == 'hour' ){
        $(".date_area").hide();
        $(".hour_area").show();
      }
      else
      {
        $(".date_area").hide();
        $(".hour_area").hide();
      }
    });
});
</script>
 @endsection