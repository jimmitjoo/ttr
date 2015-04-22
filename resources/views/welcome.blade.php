@extends('master.master')

@section('content')

    <div class="topnav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span style="font-weight: 700; padding-right: 30px; font-size: 180%;"><a style="color: black;" href="http://timetorun.se">timetorun</a></span><span style="font-weight: 700;"><!--<a href="#">REGISTRERA</a>--></span>
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
                        <span style="font-weight: 700; padding-right: 30px; font-size: 180%;"><a style="color: black;" href="http://timetorun.se">timetorun</a></span><span style="font-weight: 700;"><!--<a href="#">REGISTRERA</a>--></span>
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
                        <div class="table-cell text-center">
                            <h1 style="font-weight: 900; margin: 4px; letter-spacing: -3px; color: #fff716;">Gilla att springa</h1>
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
                        <li><a href="/auth/login">{{ Lang::get('auth.login') }}</a></li>
                        <li><a href="/auth/register">{{ Lang::get('auth.register') }}</a></li>
                        <li><a href="/lopp/skapa">{{ Lang::get('race.create') }}</a></li>
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
                <div class="col-lg-2"><h3>Stad</h3></div>
                <div class="col-lg-2"><h3>Datum</h3></div>
                <div class="col-lg-3"><h3>Namn</h3></div>
                <div class="col-lg-3"><h3>Distans</h3></div>
                <div class="col-lg-2 text-right"><h3>Anmälan</h3></div>
            </div>
            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Sön 3 maj</div>
                <div class="col-lg-3">Wings For Life World Run</div>
                <div class="col-lg-3">Rörligt mål</div>
                <div class="col-lg-2 text-right"><a class="btn" href="http://www.wingsforlifeworldrun.com/se/sv/">Anmäl</a></div>
            </div>
            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Lör 27 juni</div>
                <div class="col-lg-3">Kalmar Malkars 21</div>
                <div class="col-lg-3">21 km</div>
                <div class="col-lg-2 text-right"><a class="btn" href="http://frida.friidrott.se/Public/PublicEntryRegister.aspx?ArrangementID=6008">Anmäl</a></div>
            </div>
            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Mån 29 juni</div>
                <div class="col-lg-3">ATEA Kalmarmilen</div>
                <div class="col-lg-3">10 km</div>
                <div class="col-lg-2 text-right"><a class="btn" href="http://frida.friidrott.se/Public/PublicEntryRegister.aspx?ArrangementID=6015">Anmäl</a></div>
            </div>
            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Mån 29 juni</div>
                <div class="col-lg-3">Lilla ATEA Kalmarmilen</div>
                <div class="col-lg-3">1.2 km</div>
                <div class="col-lg-2 text-right"><a class="btn" href="http://frida.friidrott.se/Public/PublicEntryRegister.aspx?ArrangementID=6014">Anmäl</a></div>
            </div>
            <div class="row" style="border-top: 1px solid #ededed; padding: 20px 0;">
                <div class="col-lg-2">Kalmar</div>
                <div class="col-lg-2">Lör 22 aug</div>
                <div class="col-lg-3">Nattloppet</div>
                <div class="col-lg-3">5.7 km</div>
                <div class="col-lg-2 text-right"><a class="btn" href="http://frida.friidrott.se/Public/PublicEntryRegister.aspx?ArrangementID=6016">Anmäl</a></div>
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
            <div class="col-lg-12 text-center" style="padding-top: 40px; padding-bottom: 40px; border-top: 1px solid #ededed;">
                <h2 style="font-size: 400%; font-weight: 900; margin: 4px; letter-spacing: -1px;">Få ut mer av din löpning</h2>
                Ge dig själva bästa förutsättningarna
            </div>
            <!--
            <div class="col-lg-2 col-md-2 text-center"><img src="images/shoe.jpg" style="width: 100%"/></div>
            <div class="col-lg-2 col-md-2 text-center"><img src="images/shoe.jpg" style="width: 100%"/></div>
            <div class="col-lg-2 col-md-2 text-center"><img src="images/shoe.jpg" style="width: 100%"/></div>
            <div class="col-lg-2 col-md-2 text-center"><img src="images/shoe.jpg" style="width: 100%"/></div>
            <div class="col-lg-2 col-md-2 text-center"><img src="images/shoe.jpg" style="width: 100%"/></div>
            <div class="col-lg-2 col-md-2 text-center"><img src="images/shoe.jpg" style="width: 100%"/></div>
            -->
            <div class="col-lg-3 col-md-3 text-center"><img src="images/tights.jpg" style="width: 100%"/></div>
            <div class="col-lg-3 col-md-3 text-center"><img src="images/tights.jpg" style="width: 100%"/></div>
            <div class="col-lg-3 col-md-3 text-center"><a href="http://track.adtraction.com/t/t?a=80752600&as=1087597488&t=2&tk=1&url=http://www.rohnisch.se/sv/artiklar/shape-brett-7-8-tights.html" target="_blank" ><img src="images/products/rohnisch-shape-brett-tights.jpg" style="width: 100%; outline: 0;"/></a></div>
            <div class="col-lg-3 col-md-3 text-center"><img src="images/tights.jpg" style="width: 100%"/></div>
        </div>
    </div>

@stop