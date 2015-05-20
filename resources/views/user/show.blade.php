@extends('app')

@section('title', $user->name)
@section('current_url', 'http://'.getenv('APP_URL').$_REQUEST['QUERY_STRING'] )
@section('description', 'Besök ' . $user->name . ' på Timetorun.se.' )


    @if (!empty($user->avatar))
        @section('share_image', $user->avatar)
    @else
        @section('share_image', "http://www.gravatar.com/{{ md5($user->email) }} )
    @endif


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @if (!empty($user->avatar))
                    <img src="{{ $user->avatar }}" alt="{{ $user->name }}">
                @else
                    <img src="http://www.gravatar.com/avatar/{{ md5($user->email) }}?d=identicon&s=50">
                @endif
            </div>
            <div class="col-md-10">
                <h1>{{ $user->name }}</h1>
            </div>
        </div>
    </div>

@endsection