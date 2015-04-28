<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/lopp/skapa">{{ Lang::get('race.create') }}</a></li>
                <li><a href="/profil/{{ Auth::getUser()->id }}">{{ Lang::get('auth.profile') }}</a></li>
                <li><a href="{{ url('/auth/logout') }}">{{ Lang::get('auth.logout') }}</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>