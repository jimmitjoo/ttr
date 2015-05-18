app.controller('runPaginationController', function ($scope, $http) {

    $scope.page = 1;
    $scope.last = null;
    $scope.searchQuery = '';
    $scope.races = [];


    var apiEndpoint = 'http://timetorun.se/race/page';


    $scope.loadData = function() {

        $('#paginateSpinner').show();

        if ($('#runTown').length > 0) {
            $scope.searchQuery = $('#runTown').val();
        }

        $http.jsonp(apiEndpoint + '/' + $scope.searchQuery + '?page=' + $scope.page + '&callback=JSON_CALLBACK', { cache: false})
            .success(function(response){
                $scope.last = response.last_page;
                if ($scope.page == $scope.last) {
                    $('.show-more').hide();
                } else {
                    $('.show-more').show();
                }

                $scope.races = $scope.races.concat(response.data);
                $('#paginateSpinner').hide();
            });

    };

    $('.search-field').on('keyup', function(){
        delay(function(){
            $scope.races = [];
            $scope.loadData();
        }, 250 );
    });

    $('.search-clear').on('click', function(){
        $('.search-field').val('');
        $scope.searchQuery = '';
        $scope.races = [];
        $scope.loadData();
    });

    $scope.showMore = function() {
        $scope.page += 1;
        $scope.loadData();
    };

    $scope.loadData();


});


/*
 * Denna funktion bör ligga någon annanstans
 */
var delay = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();