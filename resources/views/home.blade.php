@extends('app')

@section('title', 'Dashboard')

@section('content')
	
	@include('partials.nav')

    <div class="max-width container-fluid block">
        <div class="row">
            <div class="col-lg-12">
            	<h1>Hej!</h1>
            	<p>Här kan du ändra dina uppgifter och lägga till information om dig själv.</p>
                <div>{{ Lang::get('default.welcome') }} {{ $user->name }}</div>
                <div>{{ Lang::get('default.you_are_signed_in') }}. <a href="/lopp/skapa">{{ Lang::get('race.create') }}</a>.</div>
            </div>
        </div>
    </div>
   

@endsection
