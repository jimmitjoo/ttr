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

    <div ng-repeat="race in races" class="row list-item">
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
    
    <div class="text-center">
    	<button class="show-more click click-blue" ng-click="showMore()">Visa fler</button>
    </div>
    <div id="paginateSpinner"><i class="fa fa-spinner fa-spin"></i></div>

</div>