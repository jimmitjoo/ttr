@extends('app')

@section('title', 'Dashboard')

@section('content')
	
	@include('partials.nav')

    <div class="max-width container-fluid block bg-white">
        <div class="row">
            <div class="col-lg-12">
            	<h1 class="big blue">{{ Lang::get('default.welcome') }} {{ $user->name }}!</h1>
            	<p>Här kan du ändra dina uppgifter och lägga till information.</p>
                <div>{{ Lang::get('default.you_are_signed_in') }}. <a href="/lopp/skapa">{{ Lang::get('race.create') }}</a>.</div>
            </div>
        </div>
    </div>
   

@endsection
