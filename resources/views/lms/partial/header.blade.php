
<div class="lms-header">
        <link rel="stylesheet" href="{!! ('/css/frontheader.css') !!}">


    <div class="culiat-logo"><img src="/img/CuliatLogo1.png" alt=""></div>

<nav class="menu-container">


    <div class="lms-menu">
        <div class="menu-list1"><a href="{{ url('home') }}">HOME</a></div>
        <div class="menu-list2"><a href="{{ url('about') }}">ABOUT</a></div>
        <div class="menu-list3"><a href="{{ url('contact') }}">CONTACT</a></div>

      
               
</div>
<div class="form-group1">
                    <div class="user-area dropdown float-right">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="margin-top: -87px;">
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
</nav>
</div>

