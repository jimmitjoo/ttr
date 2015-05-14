var app = angular.module('ttr',  ['ui.bootstrap']);


app.controller('runPaginationController', ["$scope", "$http", function ($scope, $http) {

    $scope.page = 1;
    $scope.last = null;
    $scope.searchQuery = '';
    $scope.races = [];


    var apiEndpoint = '/race/page';


    $scope.loadData = function() {

        if ($('#runTown').length > 0) {
            $scope.searchQuery = $('#runTown').val();
        }

        $http.get(apiEndpoint + '/' + $scope.searchQuery + '?page=' + $scope.page, { cache: true})
            .success(function(response){
                $scope.last = response.last_page;
                if ($scope.page == $scope.last) {
                    $('.show-more').hide();
                } else {
                    $('.show-more').show();
                }

                $scope.races = $scope.races.concat(response.data);
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
        $scope.loadData();
    });

    $scope.showMore = function() {
        $scope.page += 1;
        $scope.loadData();
    };

    $scope.loadData();
    

}]);


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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiYXBwbGljYXRpb24uanMiLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgYXBwID0gYW5ndWxhci5tb2R1bGUoJ3R0cicsICBbJ3VpLmJvb3RzdHJhcCddKTtcblxuIiwiYXBwLmNvbnRyb2xsZXIoJ3J1blBhZ2luYXRpb25Db250cm9sbGVyJywgZnVuY3Rpb24gKCRzY29wZSwgJGh0dHApIHtcblxuICAgICRzY29wZS5wYWdlID0gMTtcbiAgICAkc2NvcGUubGFzdCA9IG51bGw7XG4gICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJyc7XG4gICAgJHNjb3BlLnJhY2VzID0gW107XG5cblxuICAgIHZhciBhcGlFbmRwb2ludCA9ICcvcmFjZS9wYWdlJztcblxuXG4gICAgJHNjb3BlLmxvYWREYXRhID0gZnVuY3Rpb24oKSB7XG5cbiAgICAgICAgaWYgKCQoJyNydW5Ub3duJykubGVuZ3RoID4gMCkge1xuICAgICAgICAgICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJCgnI3J1blRvd24nKS52YWwoKTtcbiAgICAgICAgfVxuXG4gICAgICAgICRodHRwLmdldChhcGlFbmRwb2ludCArICcvJyArICRzY29wZS5zZWFyY2hRdWVyeSArICc/cGFnZT0nICsgJHNjb3BlLnBhZ2UsIHsgY2FjaGU6IHRydWV9KVxuICAgICAgICAgICAgLnN1Y2Nlc3MoZnVuY3Rpb24ocmVzcG9uc2Upe1xuICAgICAgICAgICAgICAgICRzY29wZS5sYXN0ID0gcmVzcG9uc2UubGFzdF9wYWdlO1xuICAgICAgICAgICAgICAgIGlmICgkc2NvcGUucGFnZSA9PSAkc2NvcGUubGFzdCkge1xuICAgICAgICAgICAgICAgICAgICAkKCcuc2hvdy1tb3JlJykuaGlkZSgpO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICQoJy5zaG93LW1vcmUnKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgJHNjb3BlLnJhY2VzID0gJHNjb3BlLnJhY2VzLmNvbmNhdChyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgIH0pO1xuXG4gICAgfTtcblxuICAgICQoJy5zZWFyY2gtZmllbGQnKS5vbigna2V5dXAnLCBmdW5jdGlvbigpe1xuICAgICAgICBkZWxheShmdW5jdGlvbigpe1xuICAgICAgICAgICAgJHNjb3BlLnJhY2VzID0gW107XG4gICAgICAgICAgICAkc2NvcGUubG9hZERhdGEoKTtcbiAgICAgICAgfSwgMjUwICk7XG4gICAgfSk7XG5cbiAgICAkKCcuc2VhcmNoLWNsZWFyJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKXtcbiAgICAgICAgJCgnLnNlYXJjaC1maWVsZCcpLnZhbCgnJyk7XG4gICAgICAgICRzY29wZS5zZWFyY2hRdWVyeSA9ICcnO1xuICAgICAgICAkc2NvcGUubG9hZERhdGEoKTtcbiAgICB9KTtcblxuICAgICRzY29wZS5zaG93TW9yZSA9IGZ1bmN0aW9uKCkge1xuICAgICAgICAkc2NvcGUucGFnZSArPSAxO1xuICAgICAgICAkc2NvcGUubG9hZERhdGEoKTtcbiAgICB9O1xuXG4gICAgJHNjb3BlLmxvYWREYXRhKCk7XG4gICAgXG5cbn0pO1xuXG5cbi8qXG4gKiBEZW5uYSBmdW5rdGlvbiBiw7ZyIGxpZ2dhIG7DpWdvbiBhbm5hbnN0YW5zXG4gKi9cbnZhciBkZWxheSA9IChmdW5jdGlvbigpe1xuICAgIHZhciB0aW1lciA9IDA7XG4gICAgcmV0dXJuIGZ1bmN0aW9uKGNhbGxiYWNrLCBtcyl7XG4gICAgICAgIGNsZWFyVGltZW91dCAodGltZXIpO1xuICAgICAgICB0aW1lciA9IHNldFRpbWVvdXQoY2FsbGJhY2ssIG1zKTtcbiAgICB9O1xufSkoKTsiXSwic291cmNlUm9vdCI6Ii9zb3VyY2UvIn0=