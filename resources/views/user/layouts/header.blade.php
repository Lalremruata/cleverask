<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" style="background-color: #313C53!important">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">CleverAsk</a>
        </div>

        <div class="collapse navbar-collapse" id="main-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="{{ Route('forum') }}">Forum</a></li>
                <li class=""><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chat <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Cleverchat</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href=""><i class="fa fa-github"></i> Github</a></li>
                        <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li role="separator" class="divider"></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li class=""><a href="{{ route('login')}}">Login</a></li>
                    <li class=""><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img class="img-circle" src="{{ asset('img/blank-avatar.png') }}" width="30" style="cursor: pointer;">
                             <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <span>
                                    <strong>{{ Auth::user()->name }}</strong><br>
                                </span>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class=""><a href="{{ route('dashboard') }}"><i class="fa fa-home dropdown-icon" aria-hidden="true"></i>Dashboard</a></li>
                            <li class=""><a href="{{ route('settings') }}"> <i class="fa fa-cog dropdown-icon" aria-hidden="true"></i>Settings</a></li>
                            <li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href=""
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out dropdown-icon"></i>Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<!--
{{--<header class="intro-header" style="background-image: url(@yield('bg-img'))">--}}
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    {{--<h1>@yield('title')</h1>--}}
                    <hr class="small">
                    {{--<span class="subheading">@yield('sub-heading')</span>--}}
                </div>
            </div>
        </div>
    </div>
</header>
-->