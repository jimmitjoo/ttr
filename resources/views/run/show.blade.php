@extends('app')

@section('title', $run->name . ' i ' . $run->town . ' - Timetorun.se' )
@section('description', 'Spring ' . $run->name . '! Anmäl dig via Timetorun.se, fixa bättre utrustning och hitta fler lopp att springa.' )
@section('current_url', 'http://'.getenv('APP_URL').$run->slug )
@section('share_image', 'http://'.getenv('APP_URL').'/images/fb_cover.png')


@section('content')	
	
	<header>
    
    	<div class="topnav">
	    	<div class="max-width container-fluid header-scroll-bg">
	            <div class="row">
	                <div class="col-lg-6 col-md-6 col-xs-8 header-scroll">
	                    <div class="table">
	                        <div class="table-cell">
	                            <a href="/"><img class="logo" src="/images/timetorun.png"></a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-6 col-md-6 col-xs-4 header-scroll text-right">
	                    @include('partials.authmenu')
	                </div>
	            </div>
	        </div>
    	</div>
    
        <div class="max-width container-fluid header-default-bg">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-8 header-default">
                    <div class="table">
                        <div class="table-cell">
                            <a href="/"><img class="logo" src="/images/timetorun.png"></a>
                            <a class="link-topnav" href="#"></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-xs-4 header-default text-right">

                    <!--
                    <form>
                        <input type="text" class="search-topnav" placeholder="sök">
                    </form>
                    -->

                    @include('partials.authmenu')
                    
                </div>
                
            </div>
        </div>
        
    </header>
	
    <div class="max-width block canvas" style="background: url('/images/cover.png'); background-position: center center; background-size: cover; height: 70%; color: white;">
        <div class="table">
            <div class="table-cell">
                <h1 class="title">{{ $run->purename }}</h1>
                <div>
                	<span>{{ $run->start_datetime }}</span>
                </div>
                <div>
                	<a class="click click-green" target="_blank" href="{{ $run->external_link }}">Anmäl dig här &nbsp; <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div style="margin-top: 30px;">
                	eller <a target="_blank" href="{{ $run->external_link }}">Läs mer här</a>
                </div>
            </div>
        </div>
    </div>

    <!--
    <div class="bg-white">
    	<div class="container-fluid max-width block">
	        <div class="row">
	            <div class="col-lg-12">
	                <ul>
	                	<li>{{ $run->title }}</li>
	                    <li>Arrangör: {{ $run->organizer->name }}</li>
	                    <li>Stad: {{ $run->town }}</li>
	                    
	                      -- Hide distanse
	                      --
	                    <li>Distans: {{ $run->distance / 1000 }}km</li>
	                    <li>Datum: {{ $run->start_datetime }}</li>
	                    <li>Länk: {{ $run->external_link }}</li>
	                    
	                    <li>Datum: {{ $run->start_datetime }}</li>
	                    
	                    
	                </ul>
	                <p>{{ $run->description }}</p>
	            </div>
	        </div>
    	</div>
    </div>
    -->

        <div class="container-fluid max-width">
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