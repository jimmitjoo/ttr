@extends('app')

@section('title', 'Dashboard')

@section('content')
	
	@include('partials.nav')

    <div class="max-width container-fluid block bg-white">
        <div class="row">
            <div class="col-lg-8">
            	<h1 class="big blue title">{{ Lang::get('default.welcome') }}<!--{{ $user->name }}-->!</h1>
            	<p>Detta är din dashboard på Timetorun. Härifrån kan du ändra dina uppgifter, lägga till information skapa lopp och träningspass som andra kan registrerar sig till.</p>
                <div>{{ Lang::get('default.you_are_signed_in') }}. <a href="/lopp/skapa">{{ Lang::get('race.create') }}</a>.</div>
            </div>
        </div>
    </div>
   

@endsection
