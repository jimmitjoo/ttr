@extends('master.master')

@section('content')

    <!--
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{ Lang::get('auth.register') }}</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>{{ Lang::get('errors.whoops') }}</strong> {{ Lang::get('errors.some_problems') }}.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{ Lang::get('auth.name') }}</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ Lang::get('auth.email') }}</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ Lang::get('auth.password') }}</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ Lang::get('auth.confirm_password') }}</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									{{ Lang::get('auth.register') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
-->

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 center login">
            <div class="col-lg-12 col-md-12 col-xs-12 login-submit" style="margin-bottom: 10px;">
                <input type="submit" name="login" class="fb" value="{{ Lang::get('auth.signup_with_facebook') }}"/>
            </div>

            <div class="text-center" style="margin-bottom: 10px;">
                {{ Lang::get('default.or') }}
            </div>

            <form method="post">
                <input type="text" placeholder="{{ Lang::get('auth.email') }}" value="{{ old('email') }}"/>

                <!--
                --
                -- Disabled untill user click the email input or verify available email
                --
                <input type="password" placeholder="{{ Lang::get('auth.password') }}"/>
                <input type="password" placeholder="{{ Lang::get('auth.confirm_password') }}"/>
                -->

                <div class="col-lg-12 col-md-12 col-xs-12 small gray" style="margin-bottom: 20px;">
                    {{ Lang::get('auth.by_register_accepting_terms') }} <a href="#">{{ Lang::get('auth.ttr_terms') }}</a> {{ Lang::get('default.and') }} <a href="#">{{ Lang::get('auth.policy') }}</a>.
                </div>

                <div class="col-lg-12 col-md-12 col-xs-12 login-submit">
                    <input type="submit" name="register" value="{{ Lang::get('default.start_now') }}"/>
                </div>

                <div class="col-lg-12 col-md-12 col-xs-12 login-register text-center small">
                    {{ Lang::get('auth.do_you_have_an_account') }} <a href="index.php">{{ Lang::get('auth.sign_in_here') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
