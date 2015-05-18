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
	    <span class="auth">
	        <div class="table">
	            <div class="table-cell">
	                @if (!empty(Auth::user()->avatar))
	                    <img class="stay" src="{{ Auth::user()->avatar }}" height="50">
	                @endif
	                <span style="padding-left: 10px" class="hide-mobile stay">{{ Auth::user()->name }} &nbsp;<i class="fa fa-caret-down"></i></span>
	            </div>
	        </div>
	    </span>
	</div>
	
    <div class="user-menu">
    	<span class="user-menu-container">
    		<div>
    			<a href="/">Konto</a>
    		</div>
    		<div>
    			<a href="{{ url('/auth/logout') }}">Logga ut</a>
    		</div>
    	</span>
    </div>
    
@endif