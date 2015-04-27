@extends('app')

@section('content')
    <div class="block-top">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-4 col-md-6 center login">
                    <div class="login-title text-center">
                        <h1>Älska att springa</h1>
                    </div>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>{{ Lang::get('errors.whoops') }}</strong> {{ Lang::get('errors.some_problems') }}<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-lg-12 col-md-12 col-xs-12 login-submit" style="margin-bottom: 10px;">
                        <input type="submit" name="login" class="fb" value="{{ Lang::get('auth.login_with_facebook') }}"/>
                    </div>

                    <div class="text-center" style="margin-bottom: 10px;">
                        {{ Lang::get('default.or') }}
                    </div>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="text" name="email" value="{{ old('email') }}"
                               placeholder="{{ Lang::get('auth.email') }}">

                        <input type="password" placeholder="{{ Lang::get('auth.password') }}" name="password"
                               style="margin-bottom: 30px;">


                        <div class="col-lg-6 col-md-6 col-xs-12 login-remember">
                            <input type="checkbox" name="remember"> {{ Lang::get('auth.remember_me') }}
                        </div>

                        <div class="col-lg-12 col-md-12 col-xs-12 login-submit">
                            <input type="submit" value="{{ Lang::get('auth.login') }}">
                        </div>

                        <div class="col-lg-12 col-md-12 col-xs-12 login-forgot text-center small">
                            <a href="{{ url('/password/email') }}">{{ Lang::get('auth.forgot_your_password') }}</a>
                        </div>

                        <div class="col-lg-12 col-md-12 col-xs-12 login-register text-center small">
                            {{ Lang::get('auth.do_you_have_an_account') }} <a
                                    href="{{ url('/auth/register') }}">{{ Lang::get('auth.register_here') }}</a>
                        </div>

                        <div class="col-lg-12 col-md-12 col-xs-12 login-information gray small">
                            <p class="small">Lorem ipsum dolor sit amet dores</p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
