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

        console.log('query: ' + $scope.searchQuery);

        if ($('#runTown').length > 0) {
            $scope.searchQuery = $('#runTown').val();
        }

        console.log('query: ' + $scope.searchQuery);

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

            })
            .error(function(message){
                console.log(message);
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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImFwcGxpY2F0aW9uLmpzIiwic291cmNlc0NvbnRlbnQiOlsidmFyIGFwcCA9IGFuZ3VsYXIubW9kdWxlKCd0dHInLCAgWyd1aS5ib290c3RyYXAnXSk7XG5cbiIsImFwcC5jb250cm9sbGVyKCdydW5QYWdpbmF0aW9uQ29udHJvbGxlcicsIGZ1bmN0aW9uICgkc2NvcGUsICRodHRwKSB7XG5cbiAgICAkc2NvcGUuZmlsdGVyID0gW107XG4gICAgJHNjb3BlLmN1cnJlbnRQYWdlID0gMTtcbiAgICAkc2NvcGUubnVtUGVyUGFnZSA9IDEwO1xuICAgICRzY29wZS5tYXhTaXplID0gMTA7XG4gICAgJHNjb3BlLnRvdGFsSXRlbXMgPSAxMDA7XG4gICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJyc7XG5cblxuICAgICRzY29wZS5tYWtlTGlzdCA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJHNjb3BlLnJhY2VzID0gW107XG5cbiAgICAgICAgY29uc29sZS5sb2coJ3F1ZXJ5OiAnICsgJHNjb3BlLnNlYXJjaFF1ZXJ5KTtcblxuICAgICAgICBpZiAoJCgnI3J1blRvd24nKS5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICAkc2NvcGUuc2VhcmNoUXVlcnkgPSAkKCcjcnVuVG93bicpLnZhbCgpO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc29sZS5sb2coJ3F1ZXJ5OiAnICsgJHNjb3BlLnNlYXJjaFF1ZXJ5KTtcblxuICAgICAgICAkaHR0cC5nZXQoXCIvcmFjZS9saXN0L1wiICsgJHNjb3BlLnNlYXJjaFF1ZXJ5LCB7IGNhY2hlOiB0cnVlfSlcbiAgICAgICAgICAgIC5zdWNjZXNzKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuXG4gICAgICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCByZXNwb25zZS5sZW5ndGg7IGkrKykge1xuICAgICAgICAgICAgICAgICAgICAkc2NvcGUucmFjZXMucHVzaCh7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZDogcmVzcG9uc2VbaV0uaWQsXG4gICAgICAgICAgICAgICAgICAgICAgICBuYW1lOiByZXNwb25zZVtpXS5uYW1lLFxuICAgICAgICAgICAgICAgICAgICAgICAgc2x1ZzogcmVzcG9uc2VbaV0uc2x1ZyxcbiAgICAgICAgICAgICAgICAgICAgICAgIHRvd246IHJlc3BvbnNlW2ldLnRvd24sXG4gICAgICAgICAgICAgICAgICAgICAgICBkaXN0YW5jZTogcmVzcG9uc2VbaV0uZGlzdGFuY2UsXG4gICAgICAgICAgICAgICAgICAgICAgICBzdGFydF9kYXRldGltZTogcmVzcG9uc2VbaV0uc3RhcnRfZGF0ZXRpbWUsXG4gICAgICAgICAgICAgICAgICAgICAgICBkb25lOiBmYWxzZVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAkc2NvcGUudG90YWxJdGVtcyA9ICRzY29wZS5yYWNlcy5sZW5ndGg7XG5cbiAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAuZXJyb3IoZnVuY3Rpb24obWVzc2FnZSl7XG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2cobWVzc2FnZSk7XG4gICAgICAgICAgICB9KTtcbiAgICB9O1xuICAgICRzY29wZS5tYWtlTGlzdCgpO1xuXG4gICAgJCgnLnNlYXJjaC1maWVsZCcpLm9uKCdrZXl1cCcsIGZ1bmN0aW9uKCl7XG4gICAgICAgIGRlbGF5KGZ1bmN0aW9uKCl7XG4gICAgICAgICAgICAkc2NvcGUubWFrZUxpc3QoKTtcbiAgICAgICAgfSwgMjAwICk7XG4gICAgfSk7XG5cbiAgICAkKCcuc2VhcmNoLWNsZWFyJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKXtcbiAgICAgICAgJCgnLnNlYXJjaC1maWVsZCcpLnZhbCgnJyk7XG4gICAgICAgICRzY29wZS5zZWFyY2hRdWVyeSA9ICcnO1xuICAgICAgICAkc2NvcGUubWFrZUxpc3QoKTtcbiAgICB9KTtcblxuICAgICRzY29wZS4kd2F0Y2goXCJjdXJyZW50UGFnZSArIG51bVBlclBhZ2UgKyByYWNlcyArIHNlYXJjaFF1ZXJ5XCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdmFyIGJlZ2luID0gKCgkc2NvcGUuY3VycmVudFBhZ2UgLSAxKSAqICRzY29wZS5udW1QZXJQYWdlKSxcbiAgICAgICAgICAgIGVuZCA9IGJlZ2luICsgJHNjb3BlLm51bVBlclBhZ2U7XG5cbiAgICAgICAgJHNjb3BlLm51bVBhZ2VzID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgcmV0dXJuIE1hdGguY2VpbCgkc2NvcGUucmFjZXMubGVuZ3RoIC8gJHNjb3BlLm51bVBlclBhZ2UpO1xuICAgICAgICB9O1xuXG4gICAgICAgICRzY29wZS5maWx0ZXIgPSAkc2NvcGUucmFjZXMuc2xpY2UoYmVnaW4sIGVuZCk7XG4gICAgfSk7XG5cblxufSk7XG5cblxuLypcbiAqIERlbm5hIGZ1bmt0aW9uIGLDtnIgbGlnZ2EgbsOlZ29uIGFubmFuc3RhbnNcbiAqL1xudmFyIGRlbGF5ID0gKGZ1bmN0aW9uKCl7XG4gICAgdmFyIHRpbWVyID0gMDtcbiAgICByZXR1cm4gZnVuY3Rpb24oY2FsbGJhY2ssIG1zKXtcbiAgICAgICAgY2xlYXJUaW1lb3V0ICh0aW1lcik7XG4gICAgICAgIHRpbWVyID0gc2V0VGltZW91dChjYWxsYmFjaywgbXMpO1xuICAgIH07XG59KSgpOyJdLCJzb3VyY2VSb290IjoiL3NvdXJjZS8ifQ==