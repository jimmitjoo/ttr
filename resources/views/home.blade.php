@extends('app')

@section('content')

    <div class="block-top">

        @include('auth.menu')

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
