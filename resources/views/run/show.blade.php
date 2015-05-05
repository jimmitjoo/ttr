@extends('app')

@section('title', $run->name )

@section('content')

    <!--<div class="parallax">-->
    <div>

        <!--<div class="parallax__layer parallax__layer--back">-->
        <div>
            <div style="background: url('../images/cover.png'); background-position: center center; background-size: cover; height: 460px;">
                <div class="table">
                    <div class="table-cell text-center">
                        <div class=" text-center text-title">
                            <h1 class="" style="color: white;">{{ $run->name }}</h1>
                        </div>
                        <form>
                            <input class="green" type="submit" name="register" value="Anmäl dig till {{ $run->name }} här" style="max-width: 300px; margin: auto;"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="parallax__layer parallax__layer--base" style="margin-top: 380px;">-->
        <div>


            <div  style="background: white;">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <p style="font-size: 130%;">{{ $run->race->description }}</p>
                        </div>
                    </div>

                </div>

                <div class="container-border-bottom" style="padding-bottom: 60px;">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">



                            </div>
                        </div>

                    </div>
                </div>




                <!--
                <div class="container-border-bottom" style="padding-bottom: 60px;">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">

                            <h3>Fler lopp att springa i Kalmar</h3>

                        </div>
                    </div>


                    <div class="row">
                                <div class="col-lg-2 col-md-4 col-xs-6 t">
                            <div class="race-cover"><img src="../images/race.png" style="width: 100%;"/></div>
                            <h3 class="small">Nattloppet Kalmar</h3><span class="small">Längs hela banan finns belysning i rött och gult som är Nattloppets färger…</span>
                        </div>
                                <div class="col-lg-2 col-md-4 col-xs-6 t">
                            <div class="race-cover"><img src="../images/race.png" style="width: 100%;"/></div>
                            <h3 class="small">Nattloppet Kalmar</h3><span class="small">Längs hela banan finns belysning i rött och gult som är Nattloppets färger…</span>
                        </div>
                                <div class="col-lg-2 col-md-4 col-xs-6 t">
                            <div class="race-cover"><img src="../images/race.png" style="width: 100%;"/></div>
                            <h3 class="small">Nattloppet Kalmar</h3><span class="small">Längs hela banan finns belysning i rött och gult som är Nattloppets färger…</span>
                        </div>
                                <div class="col-lg-2 col-md-4 col-xs-6 t">
                            <div class="race-cover"><img src="../images/race.png" style="width: 100%;"/></div>
                            <h3 class="small">Nattloppet Kalmar</h3><span class="small">Längs hela banan finns belysning i rött och gult som är Nattloppets färger…</span>
                        </div>
                                <div class="col-lg-2 col-md-4 col-xs-6 t">
                            <div class="race-cover"><img src="../images/race.png" style="width: 100%;"/></div>
                            <h3 class="small">Nattloppet Kalmar</h3><span class="small">Längs hela banan finns belysning i rött och gult som är Nattloppets färger…</span>
                        </div>
                                <div class="col-lg-2 col-md-4 col-xs-6 t">
                            <div class="race-cover"><img src="../images/race.png" style="width: 100%;"/></div>
                            <h3 class="small">Nattloppet Kalmar</h3><span class="small">Längs hela banan finns belysning i rött och gult som är Nattloppets färger…</span>
                        </div>
                            </div>

                </div>
                </div>
                -->
            </div>
@endsection