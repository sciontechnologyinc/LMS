        <!-- Header-->
    
        <link rel="stylesheet" href="{!! ('/css/headercss.css') !!}">


        <header id="header" class="header">
            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
             


                    </div>
                </div>

    <div class="col-sm-5">
    <div class="user-area dropdown float-right">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <img src="{!! asset('storage/uploads/admin.png') !!}" class="admin"> {{ Auth::user()->email }} <i class="fa fa-caret-down"></i>
                                </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                               

                                <a class="nav-link" href="{{ url('changepassword') }}"><i class="fa fa-cog"></i> Settings</a>

                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </div>

        <div class="notification-menu float-right">
		    <div class="open">
			<a href="#" class="btn btn-default info-number" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-bell"></i>



 <?php
 

 //Best practice is to create a separate file for handling connection to database
 try{
     
     $link = new \PDO(   'mysql:host=127.0.0.1;dbname=lms;charset=utf8mb4', 
                        'root', 
                        '', 
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
     
     $handle = $link->prepare('SELECT COUNT(*) as TOTAL FROM reservations where notification = 1'); 
     $handle->execute(); 
     $result = $handle->fetchAll(\PDO::FETCH_OBJ);
                    
     foreach($result as $row){
         array($row->TOTAL);
     }
     $link = null;
 }
 catch(\PDOException $ex){
     print($ex->getMessage());
 }

 ?>

                <span class="badge badge-danger total" id="total-notif">{{ $row->TOTAL}}</span>
               
			</a>
			<div class="dropdown-menu dropdown-menu-head notifdropdown pull-right">
				<h5 class="title total" id="total-notif">You have {{ $row->TOTAL}} Notification </h5>
				<div class="dropdown-list normal-list">
					<div class="new text-center"><a href="{{url('reservations') }}" class="total"> View new reservation request</a></div>
                </div>
		        	</div>
                  </div>
             </div>

    </div>  


        </header>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script type="text/javascript" src="http://www.datejs.com/build/date.js"></script>
<script>
$(document).ready(function(){
    $('.total').click(function() {
      var notifyId = $('TOTAL').val();
      $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: '/getnotify/' + notifyId,
          dataType : 'json',
          type: 'POST',
          data: {},
          contentType: false,
          processData: false,
          success:function(response) {
                      $('TOTAL').val();
                      console.log(response);
                      $.ajax({
                      headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                      url:'/updatenotify',
                      method:"POST",  
                      data:{},                              
                      success: function( data ) {
                          if($('.total').text() != 0){
                              $('.badge-danger').css( 'color', 'red' );
                          }else{
                              $('.badge-danger').css( 'color', 'white' );
                              
                          }
                        
                      }
                  }); 
          }
     });
  });
  

});

</script>
