@extends('app')

@section('content')

    <div class="block-top">

        <nav>
            <ul class="nav">
                <li><a href="{{ url('/auth/logout') }}">{{ Lang::get('auth.logout') }}</a></li>
            </ul>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ Lang::get('default.welcome') }}</div>

                        <div class="panel-body">
                            {{ Lang::get('default.you_are_signed_in') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
