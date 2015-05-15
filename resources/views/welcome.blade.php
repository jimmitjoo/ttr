@extends('master.master')

@section('title', 'Älska att springa - Timetorun.se')
@section('description', 'Hitta lopp och tävlingar att springa i Sverige och utomlands. Löparskor, träningskläder och kompressionskläder till bra pris online.')
@section('current_url', 'http://'.getenv('APP_URL') )
@section('share_image', 'http://'.$_SERVER['HTTP_HOST'].'/images/unsplash-green.jpg')

@section('content')


    <div class="topnav">
        <div class="container-fluid max-width">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="height: 62px;">
                	<div class="table">
                        <div class="table-cell">
	                        <a href="/"><img class="logo" src="/images/timetorun.png" style="height: 38px;"></a>
                        </div>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    
    <header>
        <div class="container-fluid max-width" style="background: white;">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="height: 82px;">
                    <div class="table">
                        <div class="table-cell">
                            <a href="/"><img class="logo" src="/images/timetorun.png"></a>
                            <!--
                            <a class="link-topnav" href="#"></a>
                            -->
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-lg-6 col-md-6">
                    <div class="table">
                        <div class="table-cell text-right">
                        	<form>
                        		<input type="text" class="search-topnav" placeholder="sök">
                        	</form>
                            <a class="link-topnav" href="#"><i class="fa fa-user"></i></a>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </header>


    <div class="splash max-width">
        <div class="container-fluid height-full">
            <div class="row height-full">
                <div class="col-lg-12 col-md-12 height-full block">
                    <div class="table">
                        <div class="table-cell">
                            <h1>Älska<br/>att springa</h1>
                            <p>
                            	<?php
                                /*
                                 * First parameter is the id (last part of race url) and is required.
                                 * Check what the id is on the live-site since it may not be the same
                                 * in your local environment.
                                 *
                                 * Second parameter in printPromoLink is not required, will use the
                                 * name of the run from database in that case it is empty or not set.
                                 *
                                 * Third parameter is the class that should be set on the link, if
                                 * multiple, just put a space between them.
                                */
                                ?>
                                <?php echo \App\Run::printRunLink('131', 'Drottning Margaretaloppet, Kalmar', 'promo-link'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="max-width container-fluid bg-white block-border-bottom">
    	<div class="row">
    		<div class="col-lg-6 col-md-6 col-sm-6 block bg-blue">
    			<h3 class="large">Timetorun, älska att springa - i Sverige och världen.</h3>
    			<p>Med Timetorun är det enkelt att hitta lopp och tävlingar att springa – på mobilen, datorn eller surfplattan vart du än är. Du bestämmer förutsättningarna. Få förslag och inspiration till löparskor, träningskläder och tillbehör -allt för att göra din löpning ännu effektivare.</p>
    			<a class="btn-facebook" target="_blank" href="https://www.facebook.com/pages/Timetorun/700137680097229">Följ oss på facebook</a>
    		</div>
    		<div class="col-lg-6 col-md-6 col-sm-6 block">
    			<a href="http://track.adtraction.com/t/t?a=435656443&amp;as=1087597488&amp;t=2&amp;tk=1&amp;url=http://www.outnorth.se/garmin/vivoactive" target="_blank" style="display: block;">
    				<img src="images/products/outnorth-garmin-vivoactive.jpg" style="width: 100%; outline: 0;"/>
    				<div style="position: absolute; bottom: 200px;">
					<div class="clear"><span class="product-label single">Garmin - Vivoactive</span></div>
					<div class="clear"><span class="product-pricetag single">2.395;-</span></div>
					<div class="clear"><span class="product-pricetag-shop">Handla här</span></div>
    				</div>
    			</a>
    		</div>
    	</div>
    </div>
    
    
    <div class="max-width block block-border-bottom bg-white">
    
            <div class="row">
                <div class="col-lg-12 text-center" style="padding-bottom: 50px;">
                    <h2 class="text-title big">Sök lopp och tävlingar</h2>

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

    @include('ads.upsells-single')

    <script src="/js/angular/angular.js"></script>
    <script src="/js/angular/ui-bootstrap-0.11.1.js"></script>
    <script src="/js/angular/application.js"></script>
@stop