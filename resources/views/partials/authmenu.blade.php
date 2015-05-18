@if (!Auth::check())

    <a class="login auth" href="{{ url('/login/facebook') }}">
        <div class="table">
            <div class="table-cell">
                <i class="fa fa-user"></i> &nbsp;Logga in
            </div>
        </div>
    </a>
@else

	<div class="user">
	    <a class="auth" href="#">
	        <div class="table">
	            <div class="table-cell">
	                @if (!empty(Auth::user()->avatar))
	                    <img src="{{ Auth::user()->avatar }}" height="50" style="margin-right: 20px">
	                @endif
	                <span class="hide-mobile">{{ Auth::user()->name }} &nbsp;<i class="fa fa-caret-down"></i></span>
	            </div>
	        </div>
	    </a>
	</div>
	
    <div class="user-menu">
    	<a class="logout auth" href="{{ url('/auth/logout') }}">Logga ut</a>
    </div>
    
@endif