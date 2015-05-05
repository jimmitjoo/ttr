@if ($races->count() > 0)

    @foreach($races as $race)
        <div class="row list-item">
            <a href="/race/{{ $race->id }}">
                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">{{ $race->race->town }}</div>
                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">{{ date('Y-m-d', strtotime($race->start_datetime)) }}</div>
                <div class="col-lg-4 col-md-4 col-xs-9">{{ $race->name }}</div>
                <div class="col-lg-2 col-md-2 col-xs-3 hide-mobile">{{ round($race->distance / 1000, 1) }} km</div>
                <div class="col-lg-2 col-md-2 col-xs-3 text-right"><a class="list-btn" href="/race/{{ $race->id }}"><span class="hide-mobile">Läs mer</span> &nbsp; <i class="fa fa-long-arrow-right"></i></a></div>
            </a>
        </div>
    @endforeach

@endif