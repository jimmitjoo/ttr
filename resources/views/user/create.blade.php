{!! Form::open(['url' => '/api/user']) !!}

{!! Form::text('name', null, ['placeholder' => Lang::get('user.username')]) !!}

{!! Form::text('email', null, ['placeholder' =>
Lang::get('user.email') ]) !!}

{!! Form::text('town', null, ['placeholder' => Lang::get('user.town')]) !!}

{!! Form::password('password', null, ['placeholder' => Lang::get('user.password')]) !!}

{!! Form::submit('Save') !!}

{!! Form::close() !!}