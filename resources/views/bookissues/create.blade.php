@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Issue a book to a member')
 
 @section('content')
 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                        <div class="form-group"><label class="form-control-label">Book Name</label><div class="iconic-input">
                        
                        <select class="form-control select select2-hidden-accessible" name="book" id="book" required="" tabindex="-1" aria-hidden="true">
                          <option selected="" value="">Choose Book</option>
                          <option value="1"></option></select>
                                    <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 501px;">
                                    <span class="selection">
                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-book-container">
                                    <span class="select2-selection__rendered" id="select2-book-container" title="Choose Book"></span>
                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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