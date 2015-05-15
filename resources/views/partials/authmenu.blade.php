@if (!Auth::check())
    <a class="login" href="{{ url('auth/login') }}">
        <div class="table">
            <div class="table-cell">
                <i class="fa fa-user"></i> &nbsp;Logga in
            </div>
        </div>
    </a>
@else
    <a class="logout" href="{{ url('auth/logout') }}">
        <div class="table">
            <div class="table-cell">
                <i class="fa fa-user"></i> &nbsp;Logga ut
            </div>
        </div>
    </a>
@endif