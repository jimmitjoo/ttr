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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImFwcGxpY2F0aW9uLmpzIiwic291cmNlc0NvbnRlbnQiOlsidmFyIGFwcCA9IGFuZ3VsYXIubW9kdWxlKCd0dHInLCAgWyd1aS5ib290c3RyYXAnXSk7XG5cbiIsImFwcC5jb250cm9sbGVyKCdydW5QYWdpbmF0aW9uQ29udHJvbGxlcicsIGZ1bmN0aW9uICgkc2NvcGUsICRodHRwKSB7XG5cbiAgICAkc2NvcGUuZmlsdGVyID0gW107XG4gICAgJHNjb3BlLmN1cnJlbnRQYWdlID0gMTtcbiAgICAkc2NvcGUubnVtUGVyUGFnZSA9IDEwO1xuICAgICRzY29wZS5tYXhTaXplID0gMTA7XG4gICAgJHNjb3BlLnRvdGFsSXRlbXMgPSAxMDA7XG4gICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJyc7XG5cblxuICAgICRzY29wZS5tYWtlTGlzdCA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJHNjb3BlLnJhY2VzID0gW107XG5cbiAgICAgICAgJGh0dHAuZ2V0KFwiL3JhY2UvbGlzdC9cIiArICRzY29wZS5zZWFyY2hRdWVyeSwgeyBjYWNoZTogdHJ1ZX0pXG4gICAgICAgICAgICAuc3VjY2VzcyhmdW5jdGlvbiAocmVzcG9uc2UpIHtcblxuICAgICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBpIDwgcmVzcG9uc2UubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgICAgICAgICAgICAgJHNjb3BlLnJhY2VzLnB1c2goe1xuICAgICAgICAgICAgICAgICAgICAgICAgaWQ6IHJlc3BvbnNlW2ldLmlkLFxuICAgICAgICAgICAgICAgICAgICAgICAgbmFtZTogcmVzcG9uc2VbaV0ubmFtZSxcbiAgICAgICAgICAgICAgICAgICAgICAgIHRvd246IHJlc3BvbnNlW2ldLnRvd24sXG4gICAgICAgICAgICAgICAgICAgICAgICBkaXN0YW5jZTogcmVzcG9uc2VbaV0uZGlzdGFuY2UsXG4gICAgICAgICAgICAgICAgICAgICAgICBzdGFydF9kYXRldGltZTogcmVzcG9uc2VbaV0uc3RhcnRfZGF0ZXRpbWUsXG4gICAgICAgICAgICAgICAgICAgICAgICBkb25lOiBmYWxzZVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAkc2NvcGUudG90YWxJdGVtcyA9ICRzY29wZS5yYWNlcy5sZW5ndGg7XG5cbiAgICAgICAgICAgIH0pO1xuICAgIH07XG4gICAgJHNjb3BlLm1ha2VMaXN0KCk7XG5cbiAgICAkKCcuc2VhcmNoLWZpZWxkJykub24oJ2tleXVwJywgZnVuY3Rpb24oKXtcbiAgICAgICAgZGVsYXkoZnVuY3Rpb24oKXtcbiAgICAgICAgICAgICRzY29wZS5tYWtlTGlzdCgpO1xuICAgICAgICB9LCAyMDAgKTtcbiAgICB9KTtcblxuICAgICQoJy5zZWFyY2gtY2xlYXInKS5vbignY2xpY2snLCBmdW5jdGlvbigpe1xuICAgICAgICAkKCcuc2VhcmNoLWZpZWxkJykudmFsKCcnKTtcbiAgICAgICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJyc7XG4gICAgICAgICRzY29wZS5tYWtlTGlzdCgpO1xuICAgIH0pO1xuXG4gICAgJHNjb3BlLiR3YXRjaChcImN1cnJlbnRQYWdlICsgbnVtUGVyUGFnZSArIHJhY2VzICsgc2VhcmNoUXVlcnlcIiwgZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgYmVnaW4gPSAoKCRzY29wZS5jdXJyZW50UGFnZSAtIDEpICogJHNjb3BlLm51bVBlclBhZ2UpLFxuICAgICAgICAgICAgZW5kID0gYmVnaW4gKyAkc2NvcGUubnVtUGVyUGFnZTtcblxuICAgICAgICAkc2NvcGUubnVtUGFnZXMgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICByZXR1cm4gTWF0aC5jZWlsKCRzY29wZS5yYWNlcy5sZW5ndGggLyAkc2NvcGUubnVtUGVyUGFnZSk7XG4gICAgICAgIH07XG5cbiAgICAgICAgJHNjb3BlLmZpbHRlciA9ICRzY29wZS5yYWNlcy5zbGljZShiZWdpbiwgZW5kKTtcbiAgICB9KTtcblxuXG59KTtcblxuXG4vKlxuICogRGVubmEgZnVua3Rpb24gYsO2ciBsaWdnYSBuw6Vnb24gYW5uYW5zdGFuc1xuICovXG52YXIgZGVsYXkgPSAoZnVuY3Rpb24oKXtcbiAgICB2YXIgdGltZXIgPSAwO1xuICAgIHJldHVybiBmdW5jdGlvbihjYWxsYmFjaywgbXMpe1xuICAgICAgICBjbGVhclRpbWVvdXQgKHRpbWVyKTtcbiAgICAgICAgdGltZXIgPSBzZXRUaW1lb3V0KGNhbGxiYWNrLCBtcyk7XG4gICAgfTtcbn0pKCk7Il0sInNvdXJjZVJvb3QiOiIvc291cmNlLyJ9