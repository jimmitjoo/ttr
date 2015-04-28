@if (Auth::check())
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">{{ Lang::get('default.start') }}</a></li>
                    <li><a href="/hem">{{ Lang::get('default.dashboard') }}</a></li>
                    <li><a href="/lopp/skapa">{{ Lang::get('race.create') }}</a></li>
                    @if (Auth::getUser()->id)
                    <li><a href="/profil/{{ Auth::getUser()->id }}">{{ Lang::get('auth.profile') }}</a></li>
                    @endif
                    <li><a href="{{ url('/auth/logout') }}">{{ Lang::get('auth.logout') }}</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
@endif