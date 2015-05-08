var app = angular.module('ttr',  ['ui.bootstrap']);


app.controller('runPaginationController', ["$scope", "$http", function ($scope, $http) {

    $scope.filter = [];
    $scope.currentPage = 1;
    $scope.numPerPage = 10;
    $scope.maxSize = 10;
    $scope.totalItems = 100;


    $scope.makeList = function () {
        $scope.races = [];

        $http.get("/race/list")
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

    $scope.$watch("currentPage + numPerPage + races", function () {
        var begin = (($scope.currentPage - 1) * $scope.numPerPage),
            end = begin + $scope.numPerPage;

        $scope.numPages = function () {
            return Math.ceil($scope.races.length / $scope.numPerPage);
        };

        $scope.filter = $scope.races.slice(begin, end);
    });


}]);
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJhcHBsaWNhdGlvbi5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciBhcHAgPSBhbmd1bGFyLm1vZHVsZSgndHRyJywgIFsndWkuYm9vdHN0cmFwJ10pO1xuXG4iLCJhcHAuY29udHJvbGxlcigncnVuUGFnaW5hdGlvbkNvbnRyb2xsZXInLCBmdW5jdGlvbiAoJHNjb3BlLCAkaHR0cCkge1xuXG4gICAgJHNjb3BlLmZpbHRlciA9IFtdO1xuICAgICRzY29wZS5jdXJyZW50UGFnZSA9IDE7XG4gICAgJHNjb3BlLm51bVBlclBhZ2UgPSAxMDtcbiAgICAkc2NvcGUubWF4U2l6ZSA9IDEwO1xuICAgICRzY29wZS50b3RhbEl0ZW1zID0gMTAwO1xuXG5cbiAgICAkc2NvcGUubWFrZUxpc3QgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICRzY29wZS5yYWNlcyA9IFtdO1xuXG4gICAgICAgICRodHRwLmdldChcIi9yYWNlL2xpc3RcIilcbiAgICAgICAgICAgIC5zdWNjZXNzKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuXG4gICAgICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCByZXNwb25zZS5sZW5ndGg7IGkrKykge1xuICAgICAgICAgICAgICAgICAgICAkc2NvcGUucmFjZXMucHVzaCh7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZDogcmVzcG9uc2VbaV0uaWQsXG4gICAgICAgICAgICAgICAgICAgICAgICBuYW1lOiByZXNwb25zZVtpXS5uYW1lLFxuICAgICAgICAgICAgICAgICAgICAgICAgdG93bjogcmVzcG9uc2VbaV0udG93bixcbiAgICAgICAgICAgICAgICAgICAgICAgIGRpc3RhbmNlOiByZXNwb25zZVtpXS5kaXN0YW5jZSxcbiAgICAgICAgICAgICAgICAgICAgICAgIHN0YXJ0X2RhdGV0aW1lOiByZXNwb25zZVtpXS5zdGFydF9kYXRldGltZSxcbiAgICAgICAgICAgICAgICAgICAgICAgIGRvbmU6IGZhbHNlXG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICRzY29wZS50b3RhbEl0ZW1zID0gJHNjb3BlLnJhY2VzLmxlbmd0aDtcblxuICAgICAgICAgICAgfSk7XG4gICAgfTtcbiAgICAkc2NvcGUubWFrZUxpc3QoKTtcblxuICAgICRzY29wZS4kd2F0Y2goXCJjdXJyZW50UGFnZSArIG51bVBlclBhZ2UgKyByYWNlc1wiLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHZhciBiZWdpbiA9ICgoJHNjb3BlLmN1cnJlbnRQYWdlIC0gMSkgKiAkc2NvcGUubnVtUGVyUGFnZSksXG4gICAgICAgICAgICBlbmQgPSBiZWdpbiArICRzY29wZS5udW1QZXJQYWdlO1xuXG4gICAgICAgICRzY29wZS5udW1QYWdlcyA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHJldHVybiBNYXRoLmNlaWwoJHNjb3BlLnJhY2VzLmxlbmd0aCAvICRzY29wZS5udW1QZXJQYWdlKTtcbiAgICAgICAgfTtcblxuICAgICAgICAkc2NvcGUuZmlsdGVyID0gJHNjb3BlLnJhY2VzLnNsaWNlKGJlZ2luLCBlbmQpO1xuICAgIH0pO1xuXG5cbn0pOyJdLCJzb3VyY2VSb290IjoiL3NvdXJjZS8ifQ==