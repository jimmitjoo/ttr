@if (!Auth::check())
    <a class="login auth" href="{{ url('/login/facebook') }}">
        <div class="table">
            <div class="table-cell">
                Logga in med Facebook
            </div>
        </div>
    </a>
@else
    <a class="logout auth" href="#">
        <div class="table">
            <div class="table-cell">
                @if (!empty(Auth::user()->avatar))
                    <img src="{{ Auth::user()->avatar }}" height="50">
                @endif
                {{ Auth::user()->name }}
            </div>
        </div>
    </a>
    <a class="logout auth" href="{{ url('/auth/logout') }}">
        <div class="table">
            <div class="table-cell">
                Logga ut
            </div>
        </div>
    </a>
@endif