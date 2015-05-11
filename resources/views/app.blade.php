@include('master.header')

<div style="position: absolute; z-index: 3; top: 0; right: 0; left: 0; height: 80px; background: rgba(0,0,0,.3);">
    <div style="position: absolute; color: white; text-align: center; left: 50%; top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);"><a href="/"><img src="/images/timetorun-white.png"></a></div>
</div>

<!--
<nav class="navbar navbar-default topnav-subpage">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Time To Run</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">{{ Lang::get('default.home') }}</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">{{ Lang::get('auth.login') }}</a></li>
                    <li><a href="{{ url('/auth/register') }}">{{ Lang::get('auth.register') }}</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">{{ Lang::get('auth.logout') }}</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
-->
@yield('content')



@include('master.footer')
