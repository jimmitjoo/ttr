@if (!Auth::check())

    <a class="login auth" href="{{ url('/login/facebook') }}">
        <div class="table">
            <div class="table-cell">
                <i class="fa fa-user"></i> &nbsp;Logga in
            </div>
        </div>
    </a>
@else

	<div class="user stay">
	    <a class="auth" href="#">
	        <div class="table">
	            <div class="table-cell">
	                @if (!empty(Auth::user()->avatar))
	                    <img class="stay" src="{{ Auth::user()->avatar }}" height="50">
	                @endif
	                <span style="padding-left: 20px" class="hide-mobile stay">{{ Auth::user()->name }} &nbsp;<i class="fa fa-caret-down"></i></span>
	            </div>
	        </div>
	    </a>
	</div>
	
    <div class="user-menu">
    	<a class="" href="/">Konto</a>
    	<a class="" href="{{ url('/auth/logout') }}">Logga ut</a>
    </div>
    
@endif