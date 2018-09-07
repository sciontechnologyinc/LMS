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
									<td class="numeric" data-title="Book holder">sathia sultana</td>									</td>
									<td data-title="Issue type">issued for days</td>
									<td class="numeric" data-title="Issue date">today									</td>
									<td class="numeric" data-title="Return date">today</td>
									<td class="numeric" data-title="Remains">
									<span class="label label-success"><strong> {{ $bookissue->date_to }}</strong> days</span>								</td>
									<td class="numeric text-center" data-title="Status">
									<span class="fa fa-times text-danger"> Pending</span></td>
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
														
														<input type="hidden" name="isseu_id" value="21">
															<div class="form-group">
																<div class="iconic-input">
																
																	{{ Form::button('<i class="fa fa-arrow-right"> Submit Return</i>', ['type' => 'submit', 'class' => 'btn btn-primary  col-lg-6'] )  }}

																</div>
															</div>
													
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		alert({{ $bookissue->date_from }});
	});
</script>
 @endsection