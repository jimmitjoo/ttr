@extends('master.master')

@section('content')

    <div class="topnav animated">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span style="font-weight: 900; padding-right: 30px; font-size: 180%; letter-spacing: -1px"><a href="/"><img src="/images/test.gif"></a></a></span><span style="font-weight: 700;"><a href="/auth/register">Registrera</a></span>
                </div>
                <div class="col-lg-6 text-right">
                </div>
            </div>
        </div>
    </div>

    <div class="unsplash">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span style="font-weight: 700; padding-right: 30px; font-size: 180%;"><a href="/"><img src="/images/timetorun.png"></a></span><span style="font-weight: 700;"><!--<a href="#">REGISTRERA</a>--></span>
                    </div>
                    <div class="col-lg-6 text-right">
                    </div>
                </div>
            </div>
        </header>
        <div class="container height-full">
            <div class="row height-full">
                <div class="col-lg-12 height-full">
                    <div class="table">
                        <div class="table-cell text-center" style="position: relative;">
                            <h1 style="font-weight: 900; margin: 4px; letter-spacing: -3px; color: #fff716;">Gilla att springa</h1>
                            <div style="position: absolute; bottom: 0; left: 0;">Upptäck nya lopp</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">


            <div class="row">
                <nav>
                    <ul class="nav nav-pills">
                        @if (!Auth::check())
                        <li><a href="/auth/login">{{ Lang::get('auth.login') }}</a></li>
                        <li><a href="/auth/register">{{ Lang::get('auth.register') }}</a></li>
                        @else
                        <li><a href="/hem">{{ Lang::get('default.home') }}</a></li>
                        @endif
                    </ul>
                </nav>
            </div>

            <!--
            <div class="row">
                <div class="col-lg-12">vi rekommenderar
                genre
                topp
                nyheter
                </div>
            </div>
            -->
            <div class="row">

                <div class="col-lg-12 text-center" style="padding-top: 40px; padding-bottom: 40px; border-top: 1px solid #ededed;">
                    <h2 style="font-size: 400%; font-weight: 900; margin: 4px; letter-spacing: -1px;">Upptäck nya lopp</h2>
                    Läs mer eller anmäl dig direkt
                </div>

                <div class="col-lg-2"><h3>Stad</h3></div>
                <div class="col-lg-2"><h3>Datum</h3></div>
                <div class="col-lg-3"><h3>Namn</h3></div>
                <div class="col-lg-3"><h3>Distans</h3></div>
                <div class="col-lg-2 text-right"><h3>Anmälan</h3></div>
            </div>

            @include('race.list')

            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Sön 3 maj</div>
                <div class="col-lg-3">Wings For Life World Run</div>
                <div class="col-lg-3">Rörligt mål</div>
                <div class="col-lg-2 text-right"><a class="btn"
                                                    href="http://www.wingsforlifeworldrun.com/se/sv/">Anmäl</a></div>
            </div>
            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Lör 27 juni</div>
                <div class="col-lg-3">Kalmar Malkars 21</div>
                <div class="col-lg-3">21 km</div>
                <div class="col-lg-2 text-right"><a class="btn"
                                                    href="http://frida.friidrott.se/Public/PublicEntryRegister.aspx?ArrangementID=6008">Anmäl</a>
                </div>
            </div>
            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Mån 29 juni</div>
                <div class="col-lg-3">ATEA Kalmarmilen</div>
                <div class="col-lg-3">10 km</div>
                <div class="col-lg-2 text-right"><a class="btn"
                                                    href="http://frida.friidrott.se/Public/PublicEntryRegister.aspx?ArrangementID=6015">Anmäl</a>
                </div>
            </div>
            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Mån 29 juni</div>
                <div class="col-lg-3">Lilla ATEA Kalmarmilen</div>
                <div class="col-lg-3">1.2 km</div>
                <div class="col-lg-2 text-right"><a class="btn"
                                                    href="http://frida.friidrott.se/Public/PublicEntryRegister.aspx?ArrangementID=6014">Anmäl</a>
                </div>
            </div>
            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Lör 22 aug</div>
                <div class="col-lg-3">Nattloppet</div>
                <div class="col-lg-3">5.7 km</div>
                <div class="col-lg-2 text-right"><a class="btn"
                                                    href="http://frida.friidrott.se/Public/PublicEntryRegister.aspx?ArrangementID=6016">Anmäl</a>
                </div>
            </div>
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


    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12 text-center"
                 style="padding-top: 40px; padding-bottom: 40px; border-top: 1px solid #ededed;">
                <h2 style="font-size: 400%; font-weight: 900; margin: 4px; letter-spacing: -1px;">Maxxa din löpning</h2>
                Ge dig själva bästa förutsättningarna med löparskor och bra löparkläder
            </div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a
                        href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/81122-nike-free-50-m-gulgron"
                        target="_blank"><img src="http://www.timetorun.se/images/products/sportamore-nike-free-5.jpg"
                                             style="width: 100%; bo"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a
                        href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/77322-asics-m-gel-kayano-21-m-svartgron"
                        target="_blank"><img
                            src="http://www.timetorun.se/images/products/sportamore-asics-m-gel-kayano-21.jpg"
                            style="width: 100%"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a
                        href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/76889-adidas-adizero-adios-boost-2-m-m-lilagra"
                        target="_blank"><img
                            src="http://www.timetorun.se/images/products/sportamore-adidas-adizero-adios-boost-2.jpg"
                            style="width: 100%"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a
                        href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/77915-nike-wmns-lunarglide-6-f-lilarosa"
                        target="_blank"><img
                            src="http://www.timetorun.se/images/products/sportamore-nike-lunarglide-6-dam.jpg"
                            style="width: 100%"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a
                        href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/77404-asics-w-gt-1000-3-f-orange"
                        target="_blank"><img
                            src="http://www.timetorun.se/images/products/sportamore-asics-w-gt-1000-3-dam.jpg"
                            style="width: 100%"/></a></div>

            <div class="col-lg-2 col-md-2 col-xs-6 text-center"><a
                        href="http://track.adtraction.com/t/t?a=629059555&as=1087597488&t=2&tk=1&url=http://www.sportamore.se/produkt/81183-nike-w-free-50-f-bla"
                        target="_blank"><img
                            src="http://www.timetorun.se/images/products/sportamore-nike-free-5-dam.jpg"
                            style="width: 100%"/></a></div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div style="position: relative">
                    <a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/2xu/men-s-compression-tight"
                       target="_blank"><img
                                src="http://www.timetorun.se/images/products/outnorth-2xu-compression-tights.jpg"
                                style="width: 100%; outline: 0;"/>

                        <div class="" style="position: absolute; bottom: 30px; overflow: hidden;">
                            <div><span class="product-label hide-mobile">2XU Compression Tight</span></div>
                            <div><span class="product-pricetag">Nu 995;-</span></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-6">
                <div style="position: relative">
                    <a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/garmin/vivoactive"
                       target="_blank"><img src="http://www.timetorun.se/images/products/outnorth-garmin-vivoactive.jpg"
                                            style="width: 100%; outline: 0;"/>

                        <div class="" style="position: absolute; bottom: 30px; overflow: hidden;">
                            <div><span class="product-label hide-mobile">Ny! Garmin - Vivoactive</span></div>
                            <div><span class="product-pricetag">2.395;-</span></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-6">
                <div style="position: relative">
                    <a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/oakley/repl-lens-radarlock-path-prizm-road"
                       target="_blank"><img
                                src="http://www.timetorun.se/images/products/outnorth-oakley-repl-ens-radarlock-path-prizm-road.jpg"
                                style="width: 100%; outline: 0;"/>

                        <div class="" style="position: absolute; bottom: 30px; overflow: hidden;">
                            <div><span class="product-label hide-mobile">Oakley - Radarlock Path Prizm</span></div>
                            <div><span class="product-pricetag">795;-</span></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-6">
                <div style="position: relative">
                    <a href="http://track.adtraction.com/t/t?a=80752600&as=1087597488&t=2&tk=1&url=http://www.rohnisch.se/sv/artiklar/shape-brett-7-8-tights.html"
                       target="_blank"><img
                                src="http://www.timetorun.se/images/products/rohnisch-shape-brett-tights.jpg"
                                style="width: 100%; outline: 0;"/>

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