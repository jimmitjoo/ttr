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

    $scope.$watch("currentPage + numPerPage + races + searchQuery", function () {
        var begin = (($scope.currentPage - 1) * $scope.numPerPage),
            end = begin + $scope.numPerPage;

        $scope.numPages = function () {
            return Math.ceil($scope.races.length / $scope.numPerPage);
        };

        $scope.filter = $scope.races.slice(begin, end);
    });


}]);
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImFwcGxpY2F0aW9uLmpzIiwic291cmNlc0NvbnRlbnQiOlsidmFyIGFwcCA9IGFuZ3VsYXIubW9kdWxlKCd0dHInLCAgWyd1aS5ib290c3RyYXAnXSk7XG5cbiIsImFwcC5jb250cm9sbGVyKCdydW5QYWdpbmF0aW9uQ29udHJvbGxlcicsIGZ1bmN0aW9uICgkc2NvcGUsICRodHRwKSB7XG5cbiAgICAkc2NvcGUuZmlsdGVyID0gW107XG4gICAgJHNjb3BlLmN1cnJlbnRQYWdlID0gMTtcbiAgICAkc2NvcGUubnVtUGVyUGFnZSA9IDEwO1xuICAgICRzY29wZS5tYXhTaXplID0gMTA7XG4gICAgJHNjb3BlLnRvdGFsSXRlbXMgPSAxMDA7XG4gICAgJHNjb3BlLnNlYXJjaFF1ZXJ5ID0gJyc7XG5cblxuICAgICRzY29wZS5tYWtlTGlzdCA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJHNjb3BlLnJhY2VzID0gW107XG5cbiAgICAgICAgJGh0dHAuZ2V0KFwiL3JhY2UvbGlzdC9cIiArICRzY29wZS5zZWFyY2hRdWVyeSwgeyBjYWNoZTogdHJ1ZX0pXG4gICAgICAgICAgICAuc3VjY2VzcyhmdW5jdGlvbiAocmVzcG9uc2UpIHtcblxuICAgICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBpIDwgcmVzcG9uc2UubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgICAgICAgICAgICAgJHNjb3BlLnJhY2VzLnB1c2goe1xuICAgICAgICAgICAgICAgICAgICAgICAgaWQ6IHJlc3BvbnNlW2ldLmlkLFxuICAgICAgICAgICAgICAgICAgICAgICAgbmFtZTogcmVzcG9uc2VbaV0ubmFtZSxcbiAgICAgICAgICAgICAgICAgICAgICAgIHRvd246IHJlc3BvbnNlW2ldLnRvd24sXG4gICAgICAgICAgICAgICAgICAgICAgICBkaXN0YW5jZTogcmVzcG9uc2VbaV0uZGlzdGFuY2UsXG4gICAgICAgICAgICAgICAgICAgICAgICBzdGFydF9kYXRldGltZTogcmVzcG9uc2VbaV0uc3RhcnRfZGF0ZXRpbWUsXG4gICAgICAgICAgICAgICAgICAgICAgICBkb25lOiBmYWxzZVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAkc2NvcGUudG90YWxJdGVtcyA9ICRzY29wZS5yYWNlcy5sZW5ndGg7XG5cbiAgICAgICAgICAgIH0pO1xuICAgIH07XG4gICAgJHNjb3BlLm1ha2VMaXN0KCk7XG5cbiAgICAkc2NvcGUuJHdhdGNoKFwiY3VycmVudFBhZ2UgKyBudW1QZXJQYWdlICsgcmFjZXMgKyBzZWFyY2hRdWVyeVwiLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHZhciBiZWdpbiA9ICgoJHNjb3BlLmN1cnJlbnRQYWdlIC0gMSkgKiAkc2NvcGUubnVtUGVyUGFnZSksXG4gICAgICAgICAgICBlbmQgPSBiZWdpbiArICRzY29wZS5udW1QZXJQYWdlO1xuXG4gICAgICAgICRzY29wZS5udW1QYWdlcyA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHJldHVybiBNYXRoLmNlaWwoJHNjb3BlLnJhY2VzLmxlbmd0aCAvICRzY29wZS5udW1QZXJQYWdlKTtcbiAgICAgICAgfTtcblxuICAgICAgICAkc2NvcGUuZmlsdGVyID0gJHNjb3BlLnJhY2VzLnNsaWNlKGJlZ2luLCBlbmQpO1xuICAgIH0pO1xuXG5cbn0pOyJdLCJzb3VyY2VSb290IjoiL3NvdXJjZS8ifQ==