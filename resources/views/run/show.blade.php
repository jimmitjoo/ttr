@extends('app')

@section('title', $run->name . ' i ' . $run->town . ' - Timetorun.se' )
@section('description', 'Spring ' . $run->name . '! Anmäl dig via Timetorun.se, fixa bättre utrustning och hitta fler lopp att springa.' )
@section('current_url', 'http://'.getenv('APP_URL').$run->slug )
@section('share_image', 'http://'.getenv('APP_URL').'/images/cover.png')


@section('description', 'Hitta lopp och tävlingar att springa - i Sverige och världen. Löpkläder och skor för effektivare träning och tävling - Timetorun.se' )

@section('share_image', 'http://'.$_SERVER['HTTP_HOST'].'/images/fb_cover.png')


@section('content')
	<!--
	-- New
	--
	-->
	<div class="topnav" style="background: black; padding: 10px 0;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 text-center">
					<a href="/"><img src="/images/timetorun-white.png" style="margin-top: -2px; border: 0;"></a>
				</div>
			</div>
		</div>
	</div>
	

    <div style="background: url('/images/cover.png'); background-position: center center; background-size: cover; height: 460px;">
        <div class="table">
            <div class="table-cell text-center">
                <div class=" text-center text-title">
                    <h1 class="big" style="color: white; font-size: 600%;">{{ $run->title }}</h1>
                </div>
                <form action="{{ $run->external_link }}">
                    <input class="green" type="submit" name="register" value="Anmäl dig här"
                           style="max-width: 300px; margin: auto; margin-top: 20px;">
                </form>
            </div>
        </div>
    </div>


    <div>
        <div class="block" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li>Arrangör: {{ $run->organizer->name }}</li>
                            <li>Stad: {{ $run->town }}</li>
                            <!--
                              -- Hide distanse
                              --
                            <li>Distans: {{ $run->distance / 1000 }}km</li>
                            <li>Datum: {{ $run->start_datetime }}</li>
                            <li>Länk: {{ $run->external_link }}</li>
                            -->
                            <li>Datum: {{ $run->start_datetime }}</li>
                            <li>Länk: <a target="_blank" href="{{ $run->external_link }}">{{ $run->external_link }}</a></li>
                        </ul>
                        <p style="font-size: 130%;">{{ $run->description }}</p></div>
                </div>

            </div>
        </div>

        <div class="block" style="padding-top: 80px; padding-bottom: 80px; background: #eef362;">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="big" style="font-size: 600%; color: #4f287a;">{{ $run->distance / 1000 }} km</h2>
                        
                        <!--
                        <p style="font-size: 130%;">Nattloppet i Kalmar är ett av sydöstra Sveriges häftigaste lopp.
                            Längs hela banan finns belysning i rött och gult som är Nattloppets färger och du möts
                            av musik och andra överraskningar längs vägen. Starten går vid Larmtorget och längs
                            sträckan passerar löparna flera vackra Kalmarmiljöer.</p>
                         -->
                    </div>
                    <div class="col-lg-6 col-md-6">

                    </div>
                </div>

            </div>
        </div>

        @include('ads.personal-ad-line')

        <div class="block block-border-bottom">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 text-center">
                        <h2 class="text-title">Fler lopp i {{ $run->town }}</h2>
                    </div>

                </div>


                @include('race.list')


            </div>
        </div>

    </div>

    <script src="/js/angular/angular.js"></script>
    <script src="/js/angular/ui-bootstrap-0.11.1.js"></script>
    <script src="/js/angular/application.js"></script>

@endsection