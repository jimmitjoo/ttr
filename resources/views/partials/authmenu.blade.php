@if (!Auth::check())
    <a class="login auth" href="{{ url('/login/facebook') }}">
        <div class="table">
            <div class="table-cell">
                Logga in med Facebook
            </div>
        </div>
    </a>
@else
    <a class="logout auth" href="{{ url('/auth/logout') }}">
        <div class="table">
            <div class="table-cell">
                Logga ut
            </div>
        </div>
    </a>
@endif