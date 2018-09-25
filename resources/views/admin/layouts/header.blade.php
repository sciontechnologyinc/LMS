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
				<span class="badge badge-danger">0</span>
			</a>
			<div class="dropdown-menu dropdown-menu-head notifdropdown pull-right">
				<h5 class="title">You have 0 Notification </h5>
				<div class="dropdown-list normal-list">
					<div class="new text-center"><a href="#"> View new reservation request</a></div>
                </div>
		        	</div>
                  </div>
             </div>

    </div>


        </header><!-- /header -->
        <!-- Header-->