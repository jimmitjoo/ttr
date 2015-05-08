var app = angular.module('ttr',  ['ui.bootstrap']);


app.controller('runPaginationController', ["$scope", "$http", function($scope, $http){

    $scope.filter = [];
    $scope.currentPage = 1;
    $scope.numPerPage = 10;
    $scope.maxSize = 10;


    $scope.makeList = function() {
        $scope.races = [];

        $http.get("/race/list")
            .success(function(response) {

                for (var i=0;i<response.length;i++) {
                    $scope.races.push({
                        id: response[i].id,
                        name: response[i].name,
                        town: response[i].town,
                        distance: response[i].distance,
                        start_datetime: response[i].start_datetime,
                        done:false
                    });
                }

            });
    };
    $scope.makeList();

    $scope.setPage = function (pageNo) {
        $scope.currentPage = pageNo;
    };

    $scope.$watch("currentPage + numPerPage + races", function() {
        var begin = (($scope.currentPage - 1) * $scope.numPerPage),
            end = begin + $scope.numPerPage;

        $scope.numPages = function () {
            return Math.ceil($scope.races.length / $scope.numPerPage);
        };

        $scope.filter = $scope.races.slice(begin, end);
    });




}]);
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJhcHBsaWNhdGlvbi5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciBhcHAgPSBhbmd1bGFyLm1vZHVsZSgndHRyJywgIFsndWkuYm9vdHN0cmFwJ10pO1xuXG4iLCJhcHAuY29udHJvbGxlcigncnVuUGFnaW5hdGlvbkNvbnRyb2xsZXInLCBmdW5jdGlvbigkc2NvcGUsICRodHRwKXtcblxuICAgICRzY29wZS5maWx0ZXIgPSBbXTtcbiAgICAkc2NvcGUuY3VycmVudFBhZ2UgPSAxO1xuICAgICRzY29wZS5udW1QZXJQYWdlID0gMTA7XG4gICAgJHNjb3BlLm1heFNpemUgPSAxMDtcblxuXG4gICAgJHNjb3BlLm1ha2VMaXN0ID0gZnVuY3Rpb24oKSB7XG4gICAgICAgICRzY29wZS5yYWNlcyA9IFtdO1xuXG4gICAgICAgICRodHRwLmdldChcIi9yYWNlL2xpc3RcIilcbiAgICAgICAgICAgIC5zdWNjZXNzKGZ1bmN0aW9uKHJlc3BvbnNlKSB7XG5cbiAgICAgICAgICAgICAgICBmb3IgKHZhciBpPTA7aTxyZXNwb25zZS5sZW5ndGg7aSsrKSB7XG4gICAgICAgICAgICAgICAgICAgICRzY29wZS5yYWNlcy5wdXNoKHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGlkOiByZXNwb25zZVtpXS5pZCxcbiAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU6IHJlc3BvbnNlW2ldLm5hbWUsXG4gICAgICAgICAgICAgICAgICAgICAgICB0b3duOiByZXNwb25zZVtpXS50b3duLFxuICAgICAgICAgICAgICAgICAgICAgICAgZGlzdGFuY2U6IHJlc3BvbnNlW2ldLmRpc3RhbmNlLFxuICAgICAgICAgICAgICAgICAgICAgICAgc3RhcnRfZGF0ZXRpbWU6IHJlc3BvbnNlW2ldLnN0YXJ0X2RhdGV0aW1lLFxuICAgICAgICAgICAgICAgICAgICAgICAgZG9uZTpmYWxzZVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIH0pO1xuICAgIH07XG4gICAgJHNjb3BlLm1ha2VMaXN0KCk7XG5cbiAgICAkc2NvcGUuc2V0UGFnZSA9IGZ1bmN0aW9uIChwYWdlTm8pIHtcbiAgICAgICAgJHNjb3BlLmN1cnJlbnRQYWdlID0gcGFnZU5vO1xuICAgIH07XG5cbiAgICAkc2NvcGUuJHdhdGNoKFwiY3VycmVudFBhZ2UgKyBudW1QZXJQYWdlICsgcmFjZXNcIiwgZnVuY3Rpb24oKSB7XG4gICAgICAgIHZhciBiZWdpbiA9ICgoJHNjb3BlLmN1cnJlbnRQYWdlIC0gMSkgKiAkc2NvcGUubnVtUGVyUGFnZSksXG4gICAgICAgICAgICBlbmQgPSBiZWdpbiArICRzY29wZS5udW1QZXJQYWdlO1xuXG4gICAgICAgICRzY29wZS5udW1QYWdlcyA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHJldHVybiBNYXRoLmNlaWwoJHNjb3BlLnJhY2VzLmxlbmd0aCAvICRzY29wZS5udW1QZXJQYWdlKTtcbiAgICAgICAgfTtcblxuICAgICAgICAkc2NvcGUuZmlsdGVyID0gJHNjb3BlLnJhY2VzLnNsaWNlKGJlZ2luLCBlbmQpO1xuICAgIH0pO1xuXG5cblxuXG59KTsiXSwic291cmNlUm9vdCI6Ii9zb3VyY2UvIn0=