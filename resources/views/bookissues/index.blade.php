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
									<td data-title="SL">1</td>
									<td data-title="Book Name">sadfasdf</td>
									
									<td class="numeric" data-title="Book holder">Kubra</td>
									<td data-title="Issue type">Hours: 12 to 12</td>
									
									<td class="numeric" data-title="Issue date">today</td>
									<td class="numeric" data-title="Return date">today</td>
									<td class="numeric" data-title="Remains">
									<span class="label label-danger">Expired</span>	</td>
									<td class="numeric text-center" data-title="Status">
									<span class="fa fa-check text-success"> Returned</span></td>
									<td class="numeric text-right" data-title="Action">
										<span class="text-success"> applied</span>										
										<!-- Small modal -->
										<div class="modal fade bs13" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
										  <div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
											   <div class="row">
												<div class="col-sm-12 text-center">
													<section class="panel">
														<h2 class="panel-heading">
															<center class="text-danger">Click below button if only the book is returned! Not otherwise!!</center>
														</h2>
														<div class="panel-body">
														<form action="https://yourprogramming.com/library/admin/BookIssue/return_book" method="post">	
														<input type="hidden" name="isseu_id" value="13">
															<div class="form-group">
																<div class="iconic-input">
																	<i class="fa fa-arrow-right"></i>
																	<input type="submit" class="form-control btn btn-success" value="Submit Return">
																</div>
															</div>
														</form>
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
                    </table>
					@endforeach
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


            </div>
 @endsection