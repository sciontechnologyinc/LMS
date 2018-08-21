        <!-- Header-->
    


        <header id="header" class="header">
        <link rel="stylesheet" href="{!! ('/css/headercss.css') !!}">
            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>



                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <img src="storage/uploads/admin.png" class="admin"> {{ Auth::user()->email }} <i class="fa fa-caret-down"></i>
                                </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                               

                                <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

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



        </header><!-- /header -->
        <!-- Header-->