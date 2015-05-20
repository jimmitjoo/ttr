@if (!Auth::check())
	
	<a class="register auth hide-mobile" href="{{ url('/login/facebook') }}">
        <div class="table">
            <div class="table-cell">
                Registrerar dig &nbsp;<i class="fa fa-facebook-official"></i>
            </div>
        </div>
    </a>
    
    <a class="login auth" href="{{ url('/login/facebook') }}">
        <div class="table">
            <div class="table-cell">
                <i class="fa fa-user"></i><span class="hide-mobile"> &nbsp; Logga in</span>
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
                    @else
                        <img class="stay" src="http://www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?d=identicon&s=50" height="50">
                    @endif
	                <span style="padding-left: 10px" class="hide-mobile stay">{{ Auth::user()->name }} &nbsp;<i class="fa fa-caret-down"></i></span>
	            </div>
	        </div>
	    </span>
	</div>
	
    <div class="user-menu">
    	<span class="user-menu-container">
    		<div>
    			<a href="{{ url('/hem') }}">Konto</a>
    		</div>
    		<div>
    			<a href="{{ url('/auth/logout') }}">Logga ut</a>
    		</div>
    	</span>
    </div>
    
@endif