@extends('app')

@section('title', Lang::get('race.create_training') )

@section('content')

    @include('partials.nav')

    <div class="max-width container-fluid block bg-white">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2">
                <h1 class="big blue title">{{ Lang::get('race.create_training') }}</h1>

                <p>{{ Lang::get('race.create_training_textdescription') }}</p>

                {!! Form::open(['route' => 'saveTraining']) !!}

                {!! Form::text('name', null, ['placeholder' => Lang::get('race.name')]) !!}

                {!! Form::textarea('description', null, ['placeholder' =>
                Lang::get('race.description') ]) !!}

                {!! Form::text('town', null, ['placeholder' => Lang::get('race.town')]) !!}

                {!! Form::text('distance', null, ['placeholder' => Lang::get('race.distance')]) !!}


                <div class="row">
                    <div class="col-md-4">
                        <label for="start_datetime">{{ Lang::get('race.start_datetime') }}</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="input-group date">
                                <input id="datetimepicker" value="{{ date('Y-m-d H:i:s') }}" name="start_datetime" type="text" class="form-control"/>
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="tempo">{{ Lang::get('race.tempo_per_kilometer') }}</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="input-group date">
                                <input id="tempopicker" name="tempo" type="text" class="form-control" value="05:00"/>
                                <span class="input-group-addon">
                                    <span class="fa fa-forward">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="fortime">{{ Lang::get('race.exercise-timespan') }}</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="input-group date">
                                <input id="timespanpicker" name="fortime" type="text" class="form-control" value="00:30:00"/>
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                {!! Form::hidden('type', 'training') !!}

                {!! Form::submit( Lang::get('race.save_workout') ) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection