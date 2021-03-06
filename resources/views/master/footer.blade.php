<footer>
    <div class="max-width container-fluid block footer bg-purple">
        <div class="row">
            <div class="col-lg-12">
            	<strong>Timetorun.se</strong> – Älska att springa
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-6 small">
                <ul>
                    <li><a href="/">Start</a></li>
                    <li><a href="/omoss">Om oss</a></li>
                </ul>
            </div>
            @if (!Auth::check())
            <div class="col-lg-6 col-md-6 text-right">
                <a class="hide-mobile btn-facebook" target="_blank" style="margin-top: 0;" href="https://www.facebook.com/pages/Timetorun/700137680097229">Följ oss på Facebook</a>
            </div>
            @endif
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6 small">
            	<span class="small">© 2015 Timetorun.se</span>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 small text-right" style="opacity: .3;">
            	<span class="small">Beta
                @if (Auth::check())
                        :: {{ Auth::user()->location }}
                @endif</span>
            </div>
        </div>
    </div>
</footer>

<script src="{{ elixir('js/build.js') }}"></script>
@include('partials.analytics')
</body>
</html>