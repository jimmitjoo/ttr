@extends('app')

@section('content')

    <div class="block-top">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 center login">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>{{ Lang::get('errors.whoops') }}</strong> {{ Lang::get('errors.some_problems') }}
                            .<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-lg-12 col-md-12 col-xs-12 login-submit" style="margin-bottom: 10px;">
                        <input type="submit" name="login" class="fb"
                               value="{{ Lang::get('auth.signup_with_facebook') }}"/>
                    </div>

                    <div class="text-center" style="margin-bottom: 10px;">
                    {{ Lang::get('default.or') }}
                </div>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" name="email" placeholder="{{ Lang::get('auth.email') }}"
                               value="{{ old('email') }}"/>

                        <!--
                        --
                        -- Disabled untill user click the email input or verify available email
                        --
                        <input type="password" placeholder="Lösenord"/>
                        <input type="password" placeholder="Bekräfta lösenord"/>
                        -->

                        <div class="col-lg-12 col-md-12 col-xs-12 small gray" style="margin-bottom: 20px;">
                            {{ Lang::get('auth.by_register_accepting_terms') }} <a
                                    href="#">{{ Lang::get('auth.ttr_terms') }}</a> {{ Lang::get('default.and') }} <a
                                    href="#">{{ Lang::get('auth.policy') }}</a>.
                        </div>

                        <div class="col-lg-12 col-md-12 col-xs-12 login-submit">
                            <input type="submit" name="register" value="{{ Lang::get('default.start_now') }}"/>
                        </div>

                        <div class="col-lg-12 col-md-12 col-xs-12 login-register text-center small">
                            {{ Lang::get('auth.do_you_have_an_account') }} <a
                                    href="{{ url('/auth/login') }}">{{ Lang::get('auth.sign_in_here') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
