@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Terms and Condition')
 
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
            <div class="col-md-12">
			
    <!--collapse start-->
    @foreach($terms as $term)
	
	<div class="panel-group " id="accordion">
    
				<div class="panel row_4">
			<div class="panel-heading dark">
				<h4 class="panel-title">
				
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne0" aria-expanded="false">
                    {{ $term->headline  }}				
                	</a>
					
					{!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/terms/' . $term->id, 'rel' => 'tooltip', 'title' => 'Delete']) !!}
					<button class="fa fa-trash text-danger pull-right pointer delete" data-record="4" type="submit"></button>
					<span rel="tooltip" title="Edit" class="fa fa-edit text-default pull-right pointer" data-toggle="modal" data-target=".sm0"></span>
					{!! Form::close() !!}
					
				</h4>
			</div>
			
			
			<div id="collapseOne0" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
				<div class="panel-body">
                {{ $term->condition  }}					
            </div>
            </div>
            
			<!-- Small modal -->
				<div class="modal fade sm0" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="row">
						<div class="col-md-12">
							<header class="panel-heading">Update term`s info</header>
							
							<div class="form-group">
								<div class="col-sm-12">
								{!!Form::text('headline',$term->headline, ['placeholder' => 'Head Line', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}

								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-12 text-center">
								{!!Form::textarea('condition',$term->condition, ['placeholder' => 'Write Terms', 'class' => 'form-control', 'required' => ''])!!}<br>
									<button class="btn btn-primary pull-right update_term" type="submit" data-record="4"><b class="fa fa-edit"></b> Update The term</button><br><br>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </div>
			</div>
		</div>
        @endforeach 
		          
</div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
     $("#deleteForm").submit(function (event) {
                 var x = confirm("Are you sure you want to delete?");
                    if (x) {
                        return true;
                    }
                    else {

                        event.preventDefault();
                        return false;
                    }

                });
</script>

<script type="text/javascript">
	$(document).ready(function(){
	    $("[rel=tooltip]").tooltip({ placement: 'top'});
	    
	});
</script>
        

 @endsection