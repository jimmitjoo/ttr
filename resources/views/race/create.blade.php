@extends('master.master')

@section('content')

    {!! Form::open(['route' => 'saveRace']) !!}
    <div class="form-group">
        <label for="name">{{ Lang::get('race.name') }}</label>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.name') ]) !!}
    </div>
    <div class="form-group">
        <label for="name">{{ Lang::get('race.logo') }}</label>
        {!! Form::file('logo_src') !!}
    </div>
    <div class="form-group">
        <label for="name">{{ Lang::get('race.cover') }}</label>
        {!! Form::file('cover_src') !!}
    </div>
    <div class="form-group">
        <label for="name">{{ Lang::get('race.date') }}</label>
        {!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.date') ]) !!}
    </div>
    <div class="form-group">
        <label for="name">{{ Lang::get('race.country') }}</label>
        {!! Form::text('country', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.country') ]) !!}
    </div>
    <div class="form-group">
        <label for="name">{{ Lang::get('race.county') }}</label>
        {!! Form::text('county', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.county') ]) !!}
    </div>
    <div class="form-group">
        <label for="name">{{ Lang::get('race.town') }}</label>
        {!! Form::text('town', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.town') ]) !!}
    </div>
    <div class="form-group">
        <label for="name">{{ Lang::get('race.description') }}</label>
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' =>
        Lang::get('race.description') ]) !!}
    </div>
    <div class="form-group">
        <label for="name">{{ Lang::get('race.external_link') }}</label>
        {!! Form::text('external_link', null, ['class' => 'form-control', 'placeholder' =>
        Lang::get('race.external_link') ]) !!}
    </div>
    <div class="form-group">
        <label for="name">{{ Lang::get('race.signup_link') }}</label>
        {!! Form::text('signup_link', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.signup_link')
        ]) !!}
    </div>
    {!! Form::submit( Lang::get('race.save') ) !!}
    {!! Form::close() !!}

@stop