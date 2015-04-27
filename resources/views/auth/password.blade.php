@extends('app')

@section('content')

    <div class="block-top">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 center login">
                    <div class="login-title text-center">
                        <h1>{{ Lang::get('passwords.reset_password') }}</h1>

                        <p class="small">{{ Lang::get('passwords.reset_password_explanation') }}</p>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>{{ Lang::get('errors.whoops') }}</strong> {{ Lang::get('errors.some_problem') }}
                            .<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="text" name="email" placeholder="{{ Lang::get('auth.email') }}"
                               value="{{ old('email') }}"/>

                        <div class="col-lg-12 col-md-12 col-xs-12 login-submit">
                            <input type="submit" name="register" value="{{ Lang::get('passwords.send_reset_link') }}"/>
                        </div>
                    </form>

                    <div class="col-lg-12 col-md-12 col-xs-12 login-register text-center small">
                        {{ Lang::get('default.or') }} <a href="{{ url('/auth/login') }}">{{ Lang::get('auth.sign_in_here') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
