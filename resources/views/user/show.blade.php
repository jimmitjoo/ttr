@extends('app')

@section('title', $user->name)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $user->name }}</h1>
            </div>
        </div>
    </div>

@endsection