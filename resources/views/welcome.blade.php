
@extends('master.master')

@section('content')

    <div class="splash">

        <header>
		<div class="container">
		
			<div class="row">
				<div class="col-lg-4 col-md-4" style="height: 70px;">
					<div class="table">
						<div class="table-cell">
							<img src="images/timetorun.png" style="margin-top: -2px;">
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
	                <p style="font-weight: 500;">-i  närheten eller på annan plats i Sverige och världen.</p>
	            </div>

            </div>

            <div class="row">

                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile"><h3>Plats</h3></div>
                <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile"><h3>Datum</h3></div>
                <div class="col-lg-4 col-md-4 col-xs-7"><h3>Lopp</h3></div>
                <div class="col-lg-2 col-md-2 col-xs-3 hide-mobile"><h3>Distans</h3></div>
                <div class="col-lg-2 col-md-2 col-xs-5 text-right"><h3></h3></div>

            </div>

            <div data-ng-controller="runPaginationController">

                <div ng-repeat="race in filter" class="row list-item">
                    <a href="/lopp/@{{ race.name.toLowerCase() }}/@{{ race.id }}">
                        <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">@{{ race.town }}</div>
                        <div class="col-lg-2 col-md-2 col-xs-2 hide-mobile">@{{ race.start_datetime }}</div>
                        <div class="col-lg-4 col-md-4 col-xs-9">@{{ race.name }}</div>
                        <div class="col-lg-2 col-md-2 col-xs-3 hide-mobile">@{{ race.distance / 1000 }} km</div>
                        <div class="col-lg-2 col-md-2 col-xs-3 text-right"><a class="list-btn" href="/lopp/@{{ race.name.toLowerCase() }}/@{{ race.id }}"><span class="hide-mobile">Läs mer</span> &nbsp; <i class="fa fa-long-arrow-right"></i></a></div>
                    </a>
                </div>


                <pagination boundary-links="true" total-items="numPages()" items-per-page="numPerPage" max-size="maxSize" ng-model="currentPage" ng-change=""></pagination>
            </div>
            <!--@include('race.list')-->

        </div>
    </div>

@include('ads.upsells-single')

@stop

<script src="/js/angular/angular.js"></script>
<script src="/js/angular/ui-bootstrap.min.js"></script>
<script src="/js/angular/application.js"></script>