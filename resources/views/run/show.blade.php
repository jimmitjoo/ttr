@extends('app')

@section('title', $run->name . ' i ' . $run->town . ' - Timetorun.se' )
@section('description', 'Spring ' . $run->name . '! Anmäl dig via Timetorun.se, fixa bättre utrustning och hitta fler lopp att springa.' )
@section('current_url', 'http://'.getenv('APP_URL').$run->slug )
@section('share_image', 'http://'.getenv('APP_URL').'/images/fb_cover.png')


@section('content')	
	
	@include('partials.nav')
	
    <div class="max-width block canvas" style="background: url('/images/cover.png'); background-position: center center; background-size: cover; height: 70%; color: white;">
        <div class="table">
            <div class="table-cell">
                <h1 class="title">{{ $run->purename }}</h1>
                <div>
                	<span>{{ $run->start_datetime }}</span>
                </div>
                @if (!empty($run->external_link))
                <div>
                	<a class="click click-green" target="_blank" href="{{ $run->external_link }}">Anmäl dig här &nbsp; <i class="fa fa-long-arrow-right"></i></a>
                </div>
                @endif
                @if (!empty($run->external_link))
                <div style="margin-top: 30px;">
                	eller <a target="_blank" href="{{ $run->external_link }}">Läs mer här</a>
                </div>
                @endif
            </div>
        </div>
    </div>



        <div class="container-fluid max-width bg-white">
            <div class="row">
                <div class="col-lg-4 col-md-5 block bg-yellow purple">
                	<p>Distans</p>
                    <h2 class="big">{{ $run->distance / 1000 }} km</h2>
                    
                    <!--
                    <p style="font-size: 130%;">Nattloppet i Kalmar är ett av sydöstra Sveriges häftigaste lopp.
                        Längs hela banan finns belysning i rött och gult som är Nattloppets färger och du möts
                        av musik och andra överraskningar längs vägen. Starten går vid Larmtorget och längs
                        sträckan passerar löparna flera vackra Kalmarmiljöer.</p>
                     -->
                </div>
                <div class="col-lg-8 col-md-7 block bg-blue">
                	<p>Plats</p>
                    <h2 class="big">{{ $run->town }}</h2>
                    
                    <!--
                    <p style="font-size: 130%;">Nattloppet i Kalmar är ett av sydöstra Sveriges häftigaste lopp.
                        Längs hela banan finns belysning i rött och gult som är Nattloppets färger och du möts
                        av musik och andra överraskningar längs vägen. Starten går vid Larmtorget och längs
                        sträckan passerar löparna flera vackra Kalmarmiljöer.</p>
                     -->
                </div>
            </div>
            @if (!empty($run->description))
            <div class="row">
                <div class="col-xs-12">
                    <p style="font-size: 130%">{{ $run->description }}</p>
                </div>
            </div>
            @endif
        </div>

        @include('ads.personal-ad-line')

        <div class="max-width container-fluid block block-border-bottom bg-white">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-title">Fler lopp i {{ $run->town }}</h2>
                </div>
            </div>

            @include('race.list')

        </div>


    <script src="/js/angular/angular.js"></script>
    <script src="/js/angular/ui-bootstrap-0.11.1.js"></script>
    <script src="/js/angular/application.js"></script>

@endsection