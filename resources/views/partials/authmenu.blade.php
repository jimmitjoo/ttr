@if (!Auth::check())
    <a class="login auth" href="{{ url('/login/facebook') }}">
        <div class="table">
            <div class="table-cell">
                <i class="fa fa-user"></i> &nbsp;Logga in
            </div>
        </div>
    </a>
@else
    <a class="auth" href="#">
        <div class="table">
            <div class="table-cell">
                @if (!empty(Auth::user()->avatar))
                    <img src="{{ Auth::user()->avatar }}" height="50" style="margin-right: 20px">
                @endif
                {{ Auth::user()->name }} &nbsp;<i class="fa fa-caret-down"></i>
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