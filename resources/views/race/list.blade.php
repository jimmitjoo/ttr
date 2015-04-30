@if ($races->count() > 0)

    @foreach($races as $race)
        <div class="row list-item">
            <a href="/race">
                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">{{ $race->town }}</div>
                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">{{ $race->start_datetime }}</div>
                <div class="col-lg-4 col-md-4 col-xs-9">{{ $race->name }}</div>
                <div class="col-lg-2 col-md-2 col-xs-3 hide-mobile">{{ round($race->distance / 1000, 1) }} km</div>
                <div class="col-lg-2 col-md-2 col-xs-3 text-right"><a class="list-btn" href="{{ $race->signup_link }}"><span class="hide-mobile">Läs mer</span> &nbsp; <i class="fa fa-long-arrow-right"></i></a></div>
            </a>
        </div>
    @endforeach

@endif