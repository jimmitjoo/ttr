app.controller('runPaginationController', function ($scope, $http) {

    $scope.filter = [];
    $scope.currentPage = 1;
    $scope.numPerPage = 10;
    $scope.maxSize = 10;
    $scope.totalItems = 100;
    $scope.searchQuery = '';


    $scope.makeList = function () {
        $scope.races = [];

        $http.get("/race/list/" + $scope.searchQuery, { cache: true})
            .success(function (response) {

                for (var i = 0; i < response.length; i++) {
                    $scope.races.push({
                        id: response[i].id,
                        name: response[i].name,
                        town: response[i].town,
                        distance: response[i].distance,
                        start_datetime: response[i].start_datetime,
                        done: false
                    });
                }

                $scope.totalItems = $scope.races.length;

            });
    };
    $scope.makeList();

    $('.search-field').on('keyup', function(){
        delay(function(){
            $scope.makeList();
        }, 200 );
    });

    $scope.$watch("currentPage + numPerPage + races + searchQuery", function () {
        var begin = (($scope.currentPage - 1) * $scope.numPerPage),
            end = begin + $scope.numPerPage;

        $scope.numPages = function () {
            return Math.ceil($scope.races.length / $scope.numPerPage);
        };

        $scope.filter = $scope.races.slice(begin, end);
    });


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