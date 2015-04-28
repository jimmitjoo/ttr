@extends('app')

@section('content')

    <div class="block-top">

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

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ Lang::get('default.welcome') }} {{ $user->name }}</div>

                        <div class="panel-body">
                            {{ Lang::get('default.you_are_signed_in') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
