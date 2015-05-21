@extends('app')

@section('title', Lang::get('race.create') )

@section('content')
    <div class="block-top">

        @include('auth.menu')

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-4 col-md-6 center login">
                    <div class="login-title text-center">
                        <h1>{{ Lang::get('race.create') }}</h1>
                    </div>

                    @include('errors.list')

                    {!! Form::open(['method' => 'post', 'route' => 'saveRace', 'enctype' => 'multipart/form-data']) !!}

                    {!! Form::text('name', null, ['placeholder' => Lang::get('race.name')])
                    !!}
                    {!! Form::file('logo_src') !!}
                    {!! Form::file('cover_src') !!}
                    {!! Form::input('date', 'date', date('Y-m-d', strtotime('+2 months')), ['placeholder' =>
                    Lang::get('race.date') ]) !!}
                    {!! Form::textarea('run_description', null, ['placeholder' =>
                    Lang::get('race.description') ]) !!}
                    {!! Form::text('external_link', null, ['placeholder' =>
                    Lang::get('race.external_link') ]) !!}
                    {!! Form::text('signup_link', null, ['placeholder' =>
                    Lang::get('race.signup_link')
                    ]) !!}
                    {!! Form::text('run_name', null, ['placeholder' =>
                    Lang::get('race.run_name')
                    ]) !!}
                    {!! Form::text('run_town', null, ['placeholder' =>
                    Lang::get('race.town')
                    ]) !!}
                    {!! Form::text('run_distance', null, ['placeholder' =>
                    Lang::get('race.run_distance')
                    ]) !!}
                    {!! Form::text('run_entry_fee', null, ['placeholder' =>
                    Lang::get('race.run_entry_fee')
                    ]) !!}
                    {!! Form::text('run_late_entry_fee', null, ['placeholder' =>
                    Lang::get('race.run_late_entry_fee')
                    ]) !!}
                    {!! Form::text('run_first_entry_datetime', null, ['placeholder' =>
                    Lang::get('race.run_first_entry_datetime')
                    ]) !!}
                    {!! Form::text('run_first_late_entry_datetime', null, ['placeholder'
                    => Lang::get('race.run_first_late_entry_datetime')
                    ]) !!}
                    {!! Form::text('run_last_late_entry_datetime', null, ['placeholder'
                    => Lang::get('race.run_last_late_entry_datetime')
                    ]) !!}
                    {!! Form::text('run_start_datetime', null, ['placeholder' =>
                    Lang::get('race.run_start_datetime')
                    ]) !!}
                    {!! Form::submit( Lang::get('race.save') ) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
