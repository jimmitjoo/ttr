var app = angular.module('ttr',  ['ui.bootstrap']);


app.controller('runPaginationController', ["$scope", "$http", function ($scope, $http) {

    $scope.page = 1;
    $scope.last = null;
    $scope.searchQuery = '';
    $scope.races = [];


    var apiEndpoint = 'http://timetorun.se/api/race/page';


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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJhcHBsaWNhdGlvbi5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciBhcHAgPSBhbmd1bGFyLm1vZHVsZSgndHRyJywgIFsndWkuYm9vdHN0cmFwJ10pO1xuXG4iLCJhcHAuY29udHJvbGxlcigncnVuUGFnaW5hdGlvbkNvbnRyb2xsZXInLCBmdW5jdGlvbiAoJHNjb3BlLCAkaHR0cCkge1xuXG4gICAgJHNjb3BlLnBhZ2UgPSAxO1xuICAgICRzY29wZS5sYXN0ID0gbnVsbDtcbiAgICAkc2NvcGUuc2VhcmNoUXVlcnkgPSAnJztcbiAgICAkc2NvcGUucmFjZXMgPSBbXTtcblxuXG4gICAgdmFyIGFwaUVuZHBvaW50ID0gJ2h0dHA6Ly90aW1ldG9ydW4uc2UvYXBpL3JhY2UvcGFnZSc7XG5cblxuICAgICRzY29wZS5sb2FkRGF0YSA9IGZ1bmN0aW9uKCkge1xuXG4gICAgICAgICQoJyNwYWdpbmF0ZVNwaW5uZXInKS5zaG93KCk7XG5cbiAgICAgICAgaWYgKCQoJyNydW5Ub3duJykubGVuZ3RoID4gMCkge1xuICAgICAgICAgICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJCgnI3J1blRvd24nKS52YWwoKTtcbiAgICAgICAgfVxuXG4gICAgICAgICRodHRwLmpzb25wKGFwaUVuZHBvaW50ICsgJy8nICsgJHNjb3BlLnNlYXJjaFF1ZXJ5ICsgJz9wYWdlPScgKyAkc2NvcGUucGFnZSArICcmY2FsbGJhY2s9SlNPTl9DQUxMQkFDSycsIHsgY2FjaGU6IGZhbHNlfSlcbiAgICAgICAgICAgIC5zdWNjZXNzKGZ1bmN0aW9uKHJlc3BvbnNlKXtcbiAgICAgICAgICAgICAgICAkc2NvcGUubGFzdCA9IHJlc3BvbnNlLmxhc3RfcGFnZTtcbiAgICAgICAgICAgICAgICBpZiAoJHNjb3BlLnBhZ2UgPT0gJHNjb3BlLmxhc3QpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnLnNob3ctbW9yZScpLmhpZGUoKTtcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAkKCcuc2hvdy1tb3JlJykuc2hvdygpO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICRzY29wZS5yYWNlcyA9ICRzY29wZS5yYWNlcy5jb25jYXQocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgICAgICAgICAgJCgnI3BhZ2luYXRlU3Bpbm5lcicpLmhpZGUoKTtcbiAgICAgICAgICAgIH0pO1xuXG4gICAgfTtcblxuICAgICQoJy5zZWFyY2gtZmllbGQnKS5vbigna2V5dXAnLCBmdW5jdGlvbigpe1xuICAgICAgICBkZWxheShmdW5jdGlvbigpe1xuICAgICAgICAgICAgJHNjb3BlLnJhY2VzID0gW107XG4gICAgICAgICAgICAkc2NvcGUubG9hZERhdGEoKTtcbiAgICAgICAgfSwgMjUwICk7XG4gICAgfSk7XG5cbiAgICAkKCcuc2VhcmNoLWNsZWFyJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKXtcbiAgICAgICAgJCgnLnNlYXJjaC1maWVsZCcpLnZhbCgnJyk7XG4gICAgICAgICRzY29wZS5zZWFyY2hRdWVyeSA9ICcnO1xuICAgICAgICAkc2NvcGUucmFjZXMgPSBbXTtcbiAgICAgICAgJHNjb3BlLmxvYWREYXRhKCk7XG4gICAgfSk7XG5cbiAgICAkc2NvcGUuc2hvd01vcmUgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgJHNjb3BlLnBhZ2UgKz0gMTtcbiAgICAgICAgJHNjb3BlLmxvYWREYXRhKCk7XG4gICAgfTtcblxuICAgICRzY29wZS5sb2FkRGF0YSgpO1xuXG5cbn0pO1xuXG5cbi8qXG4gKiBEZW5uYSBmdW5rdGlvbiBiw7ZyIGxpZ2dhIG7DpWdvbiBhbm5hbnN0YW5zXG4gKi9cbnZhciBkZWxheSA9IChmdW5jdGlvbigpe1xuICAgIHZhciB0aW1lciA9IDA7XG4gICAgcmV0dXJuIGZ1bmN0aW9uKGNhbGxiYWNrLCBtcyl7XG4gICAgICAgIGNsZWFyVGltZW91dCAodGltZXIpO1xuICAgICAgICB0aW1lciA9IHNldFRpbWVvdXQoY2FsbGJhY2ssIG1zKTtcbiAgICB9O1xufSkoKTsiXSwic291cmNlUm9vdCI6Ii9zb3VyY2UvIn0=