@extends('master.master')

@section('title', 'Älska att springa - Timetorun.se')

@section('description', 'Hitta lopp och tävlingar att springa i Sverige och utomlands. Löparskor, träningskläder och kompressionskläder till bra pris online.')

@section('current_url', 'http://'.getenv('APP_URL') );

@section('share_image', 'http://'.$_SERVER['HTTP_HOST'].'/images/unsplash-green.jpg')

@section('content')


    <!--
    -- New
    --
    -->
    <div class="topnav" style="padding: 10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <a href="/"><img src="/images/timetorun.png" style="margin-top: -2px; border: 0;"></a>
                </div>
            </div>
        </div>
    </div>


    <div class="splash">

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4" style="height: 70px;">
                        <div class="table">
                            <div class="table-cell">
                                <a href="/"><img src="/images/timetorun.png" style="margin-top: -2px;"></a>
                            </div>
                        </div>
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

                            <h2>Hitta lopp och löptävlingar - i Sverige och världen.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="block block-border-bottom">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center" style="padding-bottom: 50px;">
                    <h2 class="text-title big">Hitta lopp och tävlingar</h2>

                    <p style="font-weight: 500;">-i närheten eller på annan plats i Sverige och världen.</p>
                </div>

            </div>

            <div data-ng-controller="runPaginationController">

                <form>
                    <div class="search-box">
                        <div class="search-icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="search-clear">
                            <i class="fa fa-times"></i>
                        </div>
                        <input class="search-field" type="text" ng-model="searchQuery" placeholder="Sök">
                    </div>
                </form>

                <div class="row">

                    <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile"><h3>Plats</h3></div>
                    <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile"><h3>Datum</h3></div>
                    <div class="col-lg-4 col-md-4 col-xs-7"><h3>Lopp</h3></div>
                    <div class="col-lg-2 col-md-2 col-xs-3 hide-mobile"><h3>Distans</h3></div>
                    <div class="col-lg-2 col-md-2 col-xs-5 text-right"><h3></h3></div>

                </div>

                <div ng-repeat="race in filter" class="row list-item">
                    <a href="@{{ race.slug }}">
                        <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">@{{ race.town }}</div>
                        <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">@{{ race.start_datetime }}</div>
                        <div class="col-lg-4 col-md-4 col-xs-9">@{{ race.name }}</div>
                        <div class="col-lg-2 col-md-2 col-xs-3 hide-mobile">@{{ race.distance / 1000 }} km</div>
                        <div class="col-lg-2 col-md-2 col-xs-3 text-right">
                            <a class="list-btn" href="@{{ race.slug }}">
                                <div class="table">
                                    <div class="table-cell text-center">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </a>
                </div>


                <pagination total-items="totalItems" ng-model="currentPage" max-size="maxSize" class="pagination-sm"
                            boundary-links="true" rotate="true"></pagination>


            </div>

        </div>
    </div>

    @include('ads.upsells-single')

    <script src="/js/angular/angular.js"></script>
    <script src="/js/angular/ui-bootstrap-0.11.1.js"></script>
    <script src="/js/angular/application.js"></script>
@stop