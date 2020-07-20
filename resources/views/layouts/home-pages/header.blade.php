<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{url('/')}}">BIZHUB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item"><a class="nav-link" href="{{route('dashboard-peserta')}}">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('register-peserta')}}">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('edit-peserta')}}">Profile</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="{{route('login-peserta')}}" class="primary_btn text-uppercase">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
</header>
<br> <br> <br>
@yield('content')