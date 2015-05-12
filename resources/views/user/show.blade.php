@extends('app')

@section('title', $user->name)
@section('current_url', 'http://'.getenv('APP_URL').$_REQUEST['QUERY_STRING'] )
@section('description', 'Spring ' . $run->name . '! Anmäl dig via Timetorun.se, fixa bättre utrustning och hitta fler lopp att springa.' )


    @if (!empty($user->avatar))
        @section('share_image', $user->avatar)
    @else
        @section('share_image', "http://www.gravatar.com/{{ md5($user->email) }} )
    @endif


@section('content')

<div class="block-top">

@include('auth.menu')

<div class="container">
    <div class="row">
        <div class="col-md-2">
            @if (!empty($user->avatar))
                <img src="{{ $user->avatar }}" alt="{{ $user->name }}">
            @else
                <img src="http://www.gravatar.com/{{ md5($user->email) }}">
            @endif
        </div>
        <div class="col-md-10">
            <h1>{{ $user->name }}</h1>
        </div>
    </div>
</div>
</div>

@endsection