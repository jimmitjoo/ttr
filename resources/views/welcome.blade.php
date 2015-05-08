@extends('master.master')

@section('content')

    <!--
  -- Release in next version
  --

<div class="topnav">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="logo-animated">
					<a href="http://www.timetorun.se"><img src="images/runner.gif"></a>
				</div>
			</div>
		</div>
	</div>
</div>
-->

    <div class="splash">

        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="logo"><a href="http://www.timetorun.se"><img src="images/timetorun.png"></a></div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid height-full">
            <div class="row height-full">
                <div class="col-lg-12 col-md-12 height-full">
                    <div class="table">
                        <div class="table-cell text-center">
                            <h1>Älska att springa</h1>
                            <h2>Hitta lopp och löparkläder </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-border-bottom">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center text-title">
                    <h2 class="big">Upptäck nya lopp</h2>
                    <p>Hitta lopp nära dig eller på annan plats och läs mer eller anmäl dig direkt</p>
                </div>

                <div class="col-lg-12 text-center search-container">
                    <form>
                        <div class="search-box">
                            <div class="search-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="search-clear">
                                <i class="fa fa-times"></i>
                            </div>
                            <input class="search-field" type="text" name="search" placeholder="Sök"/>
                        </div>
                    </form>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile"><h3>Plats</h3></div>
                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile"><h3>Datum</h3></div>
                <div class="col-lg-4 col-md-4 col-xs-7"><h3>Lopp</h3></div>
                <div class="col-lg-2 col-md-2 col-xs-3 hide-mobile"><h3>Distans</h3></div>
                <div class="col-lg-2 col-md-2 col-xs-5 text-right"><h3></h3></div>

            </div>

            @include('race.list')

        </div>
    </div>



    <!--
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6" style="color: white; background: #00baff;">
                <div class="col-lg-12">
                    <h2 style="font-size: 450%; font-weight: 700;">Ditt näst lopp</h2>
                    Sugen på att springa? Här hittar du lopp och tävlingar från världens alla hörn. Kanske är det dags att springa Lidingöloppet för första gången?
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-12">
                        På Time to run hittar du lopp och tävlingar för alla som gillar att springa.
                    <p><a href="#">Om Timetorun</a>
                </div>
            </div>
        </div>
    </div>
    -->


    <div class="container-fluid" style="padding-bottom: 60px;">

        <div class="row">

            <div class="col-lg-12 text-center text-title">
                <h2 class="big">Boosta din löpning</h2>
                <p>Ge dig själva bästa förutsättningarna med löparskor och bra löparkläder</p>
            </div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/81122-nike-free-50-m-gulgron" target="_blank"><img src="images/products/sportamore-nike-free-5.jpg" style="width: 100%; bo"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/77322-asics-m-gel-kayano-21-m-svartgron" target="_blank"><img src="images/products/sportamore-asics-m-gel-kayano-21.jpg" style="width: 100%"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/76889-adidas-adizero-adios-boost-2-m-m-lilagra" target="_blank"><img src="images/products/sportamore-adidas-adizero-adios-boost-2.jpg" style="width: 100%"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/77915-nike-wmns-lunarglide-6-f-lilarosa" target="_blank"><img src="images/products/sportamore-nike-lunarglide-6-dam.jpg" style="width: 100%"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/77404-asics-w-gt-1000-3-f-orange" target="_blank"><img src="images/products/sportamore-asics-w-gt-1000-3-dam.jpg" style="width: 100%"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/81183-nike-w-free-50-f-bla" target="_blank"><img src="images/products/sportamore-nike-free-5-dam.jpg" style="width: 100%"/></a></div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div style="position: relative">
                    <a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/2xu/men-s-compression-tight" target="_blank"><img src="images/products/outnorth-2xu-compression-tights.jpg" style="width: 100%; outline: 0;"/>
                        <div class="" style="position: absolute; bottom: 30px; overflow: hidden;">
                            <div><span class="product-label hide-mobile">2XU Compression Tight</span></div>
                            <div><span class="product-pricetag">Nu 995;-</span></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-6">
                <div style="position: relative">
                    <a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/garmin/vivoactive" target="_blank"><img src="images/products/outnorth-garmin-vivoactive.jpg" style="width: 100%; outline: 0;"/>
                        <div class="" style="position: absolute; bottom: 30px; overflow: hidden;">
                            <div><span class="product-label hide-mobile">Ny! Garmin - Vivoactive</span></div>
                            <div><span class="product-pricetag">2.395;-</span></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-6">
                <div style="position: relative">
                    <a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/oakley/repl-lens-radarlock-path-prizm-road" target="_blank"><img src="images/products/outnorth-oakley-repl-ens-radarlock-path-prizm-road.jpg" style="width: 100%; outline: 0;"/>
                        <div class="" style="position: absolute; bottom: 30px; overflow: hidden;">
                            <div><span class="product-label hide-mobile">Oakley - Radarlock Path Prizm</span></div>
                            <div><span class="product-pricetag">795;-</span></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-6">
                <div style="position: relative">
                    <a href="http://track.adtraction.com/t/t?a=80752600&as=1087597488&t=2&tk=1&url=http://www.rohnisch.se/sv/artiklar/shape-brett-7-8-tights.html" target="_blank"><img src="images/products/rohnisch-shape-brett-tights.jpg" style="width: 100%; outline: 0;"/>
                        <div class="" style="position: absolute; bottom: 30px; overflow: hidden;">
                            <div><span class="product-label hide-mobile">Shape Brett 7/8 Tights</span></div>
                            <div><span class="product-pricetag">799;-</span></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

@stop