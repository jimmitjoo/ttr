var app = angular.module('ttr',  ['ui.bootstrap']);


app.controller('runPaginationController', ["$scope", "$http", function ($scope, $http) {

    $scope.page = 1;
    $scope.last = null;
    $scope.searchQuery = '';
    $scope.races = [];


    var apiEndpoint = '/race/page';


    $scope.loadData = function() {

        $('#paginateSpinner').show();

        if ($('#runTown').length > 0) {
            $scope.searchQuery = $('#runTown').val();
        }

        $http.get(apiEndpoint + '/' + $scope.searchQuery + '?page=' + $scope.page, { cache: false})
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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiYXBwbGljYXRpb24uanMiLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgYXBwID0gYW5ndWxhci5tb2R1bGUoJ3R0cicsICBbJ3VpLmJvb3RzdHJhcCddKTtcblxuIiwiYXBwLmNvbnRyb2xsZXIoJ3J1blBhZ2luYXRpb25Db250cm9sbGVyJywgZnVuY3Rpb24gKCRzY29wZSwgJGh0dHApIHtcblxuICAgICRzY29wZS5wYWdlID0gMTtcbiAgICAkc2NvcGUubGFzdCA9IG51bGw7XG4gICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJyc7XG4gICAgJHNjb3BlLnJhY2VzID0gW107XG5cblxuICAgIHZhciBhcGlFbmRwb2ludCA9ICcvcmFjZS9wYWdlJztcblxuXG4gICAgJHNjb3BlLmxvYWREYXRhID0gZnVuY3Rpb24oKSB7XG5cbiAgICAgICAgJCgnI3BhZ2luYXRlU3Bpbm5lcicpLnNob3coKTtcblxuICAgICAgICBpZiAoJCgnI3J1blRvd24nKS5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICAkc2NvcGUuc2VhcmNoUXVlcnkgPSAkKCcjcnVuVG93bicpLnZhbCgpO1xuICAgICAgICB9XG5cbiAgICAgICAgJGh0dHAuZ2V0KGFwaUVuZHBvaW50ICsgJy8nICsgJHNjb3BlLnNlYXJjaFF1ZXJ5ICsgJz9wYWdlPScgKyAkc2NvcGUucGFnZSwgeyBjYWNoZTogZmFsc2V9KVxuICAgICAgICAgICAgLnN1Y2Nlc3MoZnVuY3Rpb24ocmVzcG9uc2Upe1xuICAgICAgICAgICAgICAgICRzY29wZS5sYXN0ID0gcmVzcG9uc2UubGFzdF9wYWdlO1xuICAgICAgICAgICAgICAgIGlmICgkc2NvcGUucGFnZSA9PSAkc2NvcGUubGFzdCkge1xuICAgICAgICAgICAgICAgICAgICAkKCcuc2hvdy1tb3JlJykuaGlkZSgpO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICQoJy5zaG93LW1vcmUnKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgJHNjb3BlLnJhY2VzID0gJHNjb3BlLnJhY2VzLmNvbmNhdChyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICAgICAkKCcjcGFnaW5hdGVTcGlubmVyJykuaGlkZSgpO1xuICAgICAgICAgICAgfSk7XG5cbiAgICB9O1xuXG4gICAgJCgnLnNlYXJjaC1maWVsZCcpLm9uKCdrZXl1cCcsIGZ1bmN0aW9uKCl7XG4gICAgICAgIGRlbGF5KGZ1bmN0aW9uKCl7XG4gICAgICAgICAgICAkc2NvcGUucmFjZXMgPSBbXTtcbiAgICAgICAgICAgICRzY29wZS5sb2FkRGF0YSgpO1xuICAgICAgICB9LCAyNTAgKTtcbiAgICB9KTtcblxuICAgICQoJy5zZWFyY2gtY2xlYXInKS5vbignY2xpY2snLCBmdW5jdGlvbigpe1xuICAgICAgICAkKCcuc2VhcmNoLWZpZWxkJykudmFsKCcnKTtcbiAgICAgICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJyc7XG4gICAgICAgICRzY29wZS5sb2FkRGF0YSgpO1xuICAgIH0pO1xuXG4gICAgJHNjb3BlLnNob3dNb3JlID0gZnVuY3Rpb24oKSB7XG4gICAgICAgICRzY29wZS5wYWdlICs9IDE7XG4gICAgICAgICRzY29wZS5sb2FkRGF0YSgpO1xuICAgIH07XG5cbiAgICAkc2NvcGUubG9hZERhdGEoKTtcblxuXG59KTtcblxuXG4vKlxuICogRGVubmEgZnVua3Rpb24gYsO2ciBsaWdnYSBuw6Vnb24gYW5uYW5zdGFuc1xuICovXG52YXIgZGVsYXkgPSAoZnVuY3Rpb24oKXtcbiAgICB2YXIgdGltZXIgPSAwO1xuICAgIHJldHVybiBmdW5jdGlvbihjYWxsYmFjaywgbXMpe1xuICAgICAgICBjbGVhclRpbWVvdXQgKHRpbWVyKTtcbiAgICAgICAgdGltZXIgPSBzZXRUaW1lb3V0KGNhbGxiYWNrLCBtcyk7XG4gICAgfTtcbn0pKCk7Il0sInNvdXJjZVJvb3QiOiIvc291cmNlLyJ9