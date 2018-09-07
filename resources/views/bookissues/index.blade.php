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
        
        <link rel="stylesheet" href="{!! ('/css/termscss.css') !!}">



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
								<th>Book Name</th>
								<th class="numeric">Book holder</th>
								<th class="numeric">Issue for</th>
								<th class="numeric">Issue date</th>
								<th class="numeric">Return date</th>
								<th class="numeric">Remains</th>
								<th class="numeric text-center">Status</th>
								<th class="numeric text-right">Action</th>
							</tr>
                        </thead>
					
						<tbody class="search_result">
						@foreach($bookissues as $bookissue)
                    	<tr>
									<td data-title="SL">{{ $bookissue->id }}</td>
									<td data-title="Book Name">{{ $bookissue->bookname }}</td>
									<td class="numeric" data-title="Book holder">{{ $bookissue->bookholder }}</td>									</td>
									<td data-title="Issue type">issued for days</td>
									<td class="numeric" data-title="Issue date">today									</td>
									<td class="numeric" data-title="Return date">today</td>
									<td class="numeric" data-title="Remains">
									@if($bookissue->difference)
									<span class="label label-success"><strong>{{ $bookissue->difference }}</strong> days</span>	&nbsp;
									@else
									<span class="label label-success"><strong>{{ $bookissue->hours }}</strong> hours</span>	
									@endif
															
									</td>
									<td class="numeric text-center" id="status" data-title="Status">
									<span class="fa fa-times text-danger bookissue_result"> Pending</span></td>
									<td class="numeric text-right" data-title="Action">
										<a data-toggle="modal" data-target=".bs21" class="btn btn-xs btn-info"><span class="fa fa-fire" title="Make action"></span></a>
											
											
																					
										<!-- Small modal -->
										<div class="modal fade bs21" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
										  <div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
											   <div class="row">
												<div class="col-sm-12 text-center">
													<section class="panel">
														<h2 class="panel-heading">
															<center class="text-danger">Click below button if only the book is returned! Not otherwise!!</center>
														</h2>
														<div class="panel-body">
  														  <!-- {!! Form::open(['id' => 'dataForm', 'url' => '/bookissues']) !!}		 -->
														<input type="hidden" name="isseu_id" value="21">
															<div class="form-group">
																<div class="iconic-input">
																	{!!Form::submit('Submit Return', ['id' => 'addForm','class' => 'btn btn-primary submit_return  col-lg-10']) !!}
																	

																</div>
															</div>
   																	 <!-- {!! Form::close() !!}													 -->
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(function(){
      $(".submit_return").click(function () {

      if($('#status').val() == null){

      var selectedValue = $("#status").val();
      $(".bookissue_result").html("<span class='fa fa-times text-danger'> Pending</span>");
    }else{
      var selectedValue = $("#status").val();
    $(".bookissue_result").html(" <span class='fa fa-check text-success'> Returned</span>");
    }
 });
})
</script>
 @endsection