@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Add Member')
 
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



    {!! Form::open(['id' => 'dataForm', 'url' => '/terms']) !!}

 <div class="wrapper" style="min-height: 450px;">
            <br> <br>
            <div class="mail-box">
              <aside class="mail-nav mail-nav-bg-color">
                <header class="headers"> <h4>Add new term </h4> </header>
                <div class="mail-nav-body">
                  <ul class="nav nav-pills nav-stacked mail-navigation">
                    <li class="active text-center">
                     
                    </li>
                  </ul>
            
                </div>
              </aside>
                
              <section class="mail-box-info">
                <section class="mail-list">
                  <div class="compose-mail">
                      <div class="text-center">
                                  </div>
                      <div class="form-group">
                        <label for="subject" class="control-label">Headline:</label>
                        
                        {!!Form::text('headline',null, ['placeholder' => 'Head Line', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                      </div>
            
                      <div class="compose-editor">
                      {!!Form::textarea('condition',null, ['placeholder' => 'Write Terms', 'class' => 'form-control', 'required' => ''])!!}

                      </div>
                      <hr>
                      <div class="compose-btn">
                        
                  
                        {{ Form::button('<i class="fa fa-check">Save</i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm'] )  }}
                      </div>
                    
                  </div>
                </section>
            
            
              </section></form>
            
            </div>
            
                        </div>
{!! Form::close() !!}

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
     $("#dataForm").submit(function (event) {
                 var x = confirm("Are you sure you want to add?");
                    if (x) {
                        return true;
                    }
                    else {

                        event.preventDefault();
                        return false;
                    }

                });
</script>
 @endsection