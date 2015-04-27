@include('errors.list')

{!! Form::open(['method' => 'post', 'route' => 'saveRace', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    <label for="name">{{ Lang::get('race.name') }}</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.name') ]) !!}
</div>
<div class="form-group">
    <label for="logo" Lang::get('race.logo') }}</label>
    {!! Form::file('logo_src') !!}
</div>
<div class="form-group">
    <label for="cover">{{ Lang::get('race.cover') }}</label>
    {!! Form::file('cover_src') !!}
</div>
<div class="form-group">
    <label for="date">{{ Lang::get('race.date') }}</label>
    {!! Form::input('date', 'date', date('Y-m-d', strtotime('+2 months')), ['class' => 'form-control', 'placeholder' =>
    Lang::get('race.date') ]) !!}
</div>
<div class="form-group">
    <label for="town">{{ Lang::get('race.town') }}</label>
    {!! Form::text('town', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.town') ]) !!}
</div>
<div class="form-group">
    <label for="description">{{ Lang::get('race.description') }}</label>
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' =>
    Lang::get('race.description') ]) !!}
</div>
<div class="form-group">
    <label for="external_link">{{ Lang::get('race.external_link') }}</label>
    {!! Form::text('external_link', null, ['class' => 'form-control', 'placeholder' =>
    Lang::get('race.external_link') ]) !!}
</div>
<div class="form-group">
    <label for="signup_link">{{ Lang::get('race.signup_link') }}</label>
    {!! Form::text('signup_link', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.signup_link')
    ]) !!}
</div>
<div class="form-group">
    <label for="run_name">{{ Lang::get('race.run_name') }}</label>
    {!! Form::text('run_name', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.run_name')
    ]) !!}
</div>
<div class="form-group">
    <label for="run_distance">{{ Lang::get('race.run_distance') }}</label>
    {!! Form::text('run_distance', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.run_distance')
    ]) !!}
</div>
<div class="form-group">
    <label for="run_entry_fee">{{ Lang::get('race.run_entry_fee') }}</label>
    {!! Form::text('run_entry_fee', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.run_entry_fee')
    ]) !!}
</div>
<div class="form-group">
    <label for="run_late_entry_fee">{{ Lang::get('race.run_late_entry_fee') }}</label>
    {!! Form::text('run_late_entry_fee', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.run_late_entry_fee')
    ]) !!}
</div>
<div class="form-group">
    <label for="run_first_entry_datetime">{{ Lang::get('race.run_first_entry_datetime') }}</label>
    {!! Form::text('run_first_entry_datetime', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.run_first_entry_datetime')
    ]) !!}
</div>
<div class="form-group">
    <label for="run_first_late_entry_datetime">{{ Lang::get('race.run_first_late_entry_datetime') }}</label>
    {!! Form::text('run_first_late_entry_datetime', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.run_first_late_entry_datetime')
    ]) !!}
</div>
<div class="form-group">
    <label for="run_last_late_entry_datetime">{{ Lang::get('race.run_last_late_entry_datetime') }}</label>
    {!! Form::text('run_last_late_entry_datetime', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.run_last_late_entry_datetime')
    ]) !!}
</div>
<div class="form-group">
    <label for="run_start_datetime">{{ Lang::get('race.run_start_datetime') }}</label>
    {!! Form::text('run_start_datetime', null, ['class' => 'form-control', 'placeholder' => Lang::get('race.run_start_datetime')
    ]) !!}
</div>
{!! Form::submit( Lang::get('race.save') ) !!}
{!! Form::close() !!}

