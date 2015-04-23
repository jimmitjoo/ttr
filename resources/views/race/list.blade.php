@if ($races->count() > 0)

    @foreach($races as $race)
    <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
        <div class="col-lg-2">{{ $race->town }}</div>
        <div class="col-lg-2">{{ $race->date }}</div>
        <div class="col-lg-3">{{ $race->name }}</div>
        <div class="col-lg-3">{{ $race->distance }}</div>
        <div class="col-lg-2 text-right"><a class="btn"
                                            href="{{ $race->signup_link }}">Anmäl</a></div>
    </div>
    @endforeach

@endif