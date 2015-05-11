@if ($races->count() > 0)

    @foreach($races as $race)
        <div class="row list-item">
            <a href="/lopp/{{ strtolower(urlencode($race->name)) }}/{{ $race->id }}">
                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">{{ $race->town }}</div>
                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">{{ $race->start_datetime }}</div>
                <div class="col-lg-4 col-md-4 col-xs-9">{{ $race->name }}</div>
                <div class="col-lg-2 col-md-2 col-xs-3 hide-mobile">{{ round($race->distance / 1000, 1) }} km</div>
                <div class="col-lg-2 col-md-2 col-xs-3 text-right">
                	<a class="list-btn" href="/lopp/@{{ race.name.toLowerCase() }}/@{{ race.id }}"> &nbsp; <i class="fa fa-long-arrow-right"></i> &nbsp; </a>
                </div>
            </a>
        </div>
    @endforeach

    @if ($races->render())
    <div class="row">
        <div class="col-lg-12 text-center"><?php echo $races->render(); ?></div>
    </div>
    @endif

@endif