<div id="preloder">
    <div class="loader">
        <img src="img/logo.png" alt="">
        <h2>Loading.....</h2>
    </div>
</div>

<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{Request::is('/home-site') ? 'active' : ''}}"><a href="/home-site">Home</a></li>
            <li class="{{Request::is('/services') ? 'active' : ''}}"><a href="/services">Services</a></li>
            <li class="{{Request::is('/blog') ? 'active' : ''}}"><a href="/blog">Blog</a></li>
            <li class="{{Request::is('/con tact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
            
            @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->role_id != 1)
                            <li><a href="{{ url('/home') }}">Backoffice</a></li>
                        @endif
                       <li><a href="{{ url('/logout') }}" class="btn btn-light">Logout</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif
        </ul>
    </nav>
</header>