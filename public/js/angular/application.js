var app = angular.module('ttr',  ['ui.bootstrap']);


app.controller('runPaginationController', ["$scope", "$http", function ($scope, $http) {

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
                        slug: response[i].slug,
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

    $('.search-clear').on('click', function(){
        $('.search-field').val('');
        $scope.searchQuery = '';
        $scope.makeList();
    });

    $scope.$watch("currentPage + numPerPage + races + searchQuery", function () {
        var begin = (($scope.currentPage - 1) * $scope.numPerPage),
            end = begin + $scope.numPerPage;

        $scope.numPages = function () {
            return Math.ceil($scope.races.length / $scope.numPerPage);
        };

        $scope.filter = $scope.races.slice(begin, end);
    });


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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiYXBwbGljYXRpb24uanMiLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgYXBwID0gYW5ndWxhci5tb2R1bGUoJ3R0cicsICBbJ3VpLmJvb3RzdHJhcCddKTtcblxuIiwiYXBwLmNvbnRyb2xsZXIoJ3J1blBhZ2luYXRpb25Db250cm9sbGVyJywgZnVuY3Rpb24gKCRzY29wZSwgJGh0dHApIHtcblxuICAgICRzY29wZS5maWx0ZXIgPSBbXTtcbiAgICAkc2NvcGUuY3VycmVudFBhZ2UgPSAxO1xuICAgICRzY29wZS5udW1QZXJQYWdlID0gMTA7XG4gICAgJHNjb3BlLm1heFNpemUgPSAxMDtcbiAgICAkc2NvcGUudG90YWxJdGVtcyA9IDEwMDtcbiAgICAkc2NvcGUuc2VhcmNoUXVlcnkgPSAnJztcblxuXG4gICAgJHNjb3BlLm1ha2VMaXN0ID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAkc2NvcGUucmFjZXMgPSBbXTtcblxuICAgICAgICAkaHR0cC5nZXQoXCIvcmFjZS9saXN0L1wiICsgJHNjb3BlLnNlYXJjaFF1ZXJ5LCB7IGNhY2hlOiB0cnVlfSlcbiAgICAgICAgICAgIC5zdWNjZXNzKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuXG4gICAgICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCByZXNwb25zZS5sZW5ndGg7IGkrKykge1xuICAgICAgICAgICAgICAgICAgICAkc2NvcGUucmFjZXMucHVzaCh7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZDogcmVzcG9uc2VbaV0uaWQsXG4gICAgICAgICAgICAgICAgICAgICAgICBuYW1lOiByZXNwb25zZVtpXS5uYW1lLFxuICAgICAgICAgICAgICAgICAgICAgICAgc2x1ZzogcmVzcG9uc2VbaV0uc2x1ZyxcbiAgICAgICAgICAgICAgICAgICAgICAgIHRvd246IHJlc3BvbnNlW2ldLnRvd24sXG4gICAgICAgICAgICAgICAgICAgICAgICBkaXN0YW5jZTogcmVzcG9uc2VbaV0uZGlzdGFuY2UsXG4gICAgICAgICAgICAgICAgICAgICAgICBzdGFydF9kYXRldGltZTogcmVzcG9uc2VbaV0uc3RhcnRfZGF0ZXRpbWUsXG4gICAgICAgICAgICAgICAgICAgICAgICBkb25lOiBmYWxzZVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAkc2NvcGUudG90YWxJdGVtcyA9ICRzY29wZS5yYWNlcy5sZW5ndGg7XG5cbiAgICAgICAgICAgIH0pO1xuICAgIH07XG4gICAgJHNjb3BlLm1ha2VMaXN0KCk7XG5cbiAgICAkKCcuc2VhcmNoLWZpZWxkJykub24oJ2tleXVwJywgZnVuY3Rpb24oKXtcbiAgICAgICAgZGVsYXkoZnVuY3Rpb24oKXtcbiAgICAgICAgICAgICRzY29wZS5tYWtlTGlzdCgpO1xuICAgICAgICB9LCAyMDAgKTtcbiAgICB9KTtcblxuICAgICQoJy5zZWFyY2gtY2xlYXInKS5vbignY2xpY2snLCBmdW5jdGlvbigpe1xuICAgICAgICAkKCcuc2VhcmNoLWZpZWxkJykudmFsKCcnKTtcbiAgICAgICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJyc7XG4gICAgICAgICRzY29wZS5tYWtlTGlzdCgpO1xuICAgIH0pO1xuXG4gICAgJHNjb3BlLiR3YXRjaChcImN1cnJlbnRQYWdlICsgbnVtUGVyUGFnZSArIHJhY2VzICsgc2VhcmNoUXVlcnlcIiwgZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgYmVnaW4gPSAoKCRzY29wZS5jdXJyZW50UGFnZSAtIDEpICogJHNjb3BlLm51bVBlclBhZ2UpLFxuICAgICAgICAgICAgZW5kID0gYmVnaW4gKyAkc2NvcGUubnVtUGVyUGFnZTtcblxuICAgICAgICAkc2NvcGUubnVtUGFnZXMgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICByZXR1cm4gTWF0aC5jZWlsKCRzY29wZS5yYWNlcy5sZW5ndGggLyAkc2NvcGUubnVtUGVyUGFnZSk7XG4gICAgICAgIH07XG5cbiAgICAgICAgJHNjb3BlLmZpbHRlciA9ICRzY29wZS5yYWNlcy5zbGljZShiZWdpbiwgZW5kKTtcbiAgICB9KTtcblxuXG59KTtcblxuXG4vKlxuICogRGVubmEgZnVua3Rpb24gYsO2ciBsaWdnYSBuw6Vnb24gYW5uYW5zdGFuc1xuICovXG52YXIgZGVsYXkgPSAoZnVuY3Rpb24oKXtcbiAgICB2YXIgdGltZXIgPSAwO1xuICAgIHJldHVybiBmdW5jdGlvbihjYWxsYmFjaywgbXMpe1xuICAgICAgICBjbGVhclRpbWVvdXQgKHRpbWVyKTtcbiAgICAgICAgdGltZXIgPSBzZXRUaW1lb3V0KGNhbGxiYWNrLCBtcyk7XG4gICAgfTtcbn0pKCk7Il0sInNvdXJjZVJvb3QiOiIvc291cmNlLyJ9