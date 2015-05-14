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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImNvbnRyb2xsZXJzL3J1blBhZ2luYXRpb25Db250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0ZBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJhcHBsaWNhdGlvbi5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciBhcHAgPSBhbmd1bGFyLm1vZHVsZSgndHRyJywgIFsndWkuYm9vdHN0cmFwJ10pO1xuXG4iLCJhcHAuY29udHJvbGxlcigncnVuUGFnaW5hdGlvbkNvbnRyb2xsZXInLCBmdW5jdGlvbiAoJHNjb3BlLCAkaHR0cCkge1xuXG4gICAgJHNjb3BlLnBhZ2UgPSAxO1xuICAgICRzY29wZS5sYXN0ID0gbnVsbDtcbiAgICAkc2NvcGUuc2VhcmNoUXVlcnkgPSAnJztcbiAgICAkc2NvcGUucmFjZXMgPSBbXTtcblxuXG4gICAgdmFyIGFwaUVuZHBvaW50ID0gJy9yYWNlL3BhZ2UnO1xuXG5cbiAgICAkc2NvcGUubG9hZERhdGEgPSBmdW5jdGlvbigpIHtcblxuICAgICAgICAkKCcjcGFnaW5hdGVTcGlubmVyJykuc2hvdygpO1xuXG4gICAgICAgIGlmICgkKCcjcnVuVG93bicpLmxlbmd0aCA+IDApIHtcbiAgICAgICAgICAgICRzY29wZS5zZWFyY2hRdWVyeSA9ICQoJyNydW5Ub3duJykudmFsKCk7XG4gICAgICAgIH1cblxuICAgICAgICAkaHR0cC5nZXQoYXBpRW5kcG9pbnQgKyAnLycgKyAkc2NvcGUuc2VhcmNoUXVlcnkgKyAnP3BhZ2U9JyArICRzY29wZS5wYWdlLCB7IGNhY2hlOiBmYWxzZX0pXG4gICAgICAgICAgICAuc3VjY2VzcyhmdW5jdGlvbihyZXNwb25zZSl7XG4gICAgICAgICAgICAgICAgJHNjb3BlLmxhc3QgPSByZXNwb25zZS5sYXN0X3BhZ2U7XG4gICAgICAgICAgICAgICAgaWYgKCRzY29wZS5wYWdlID09ICRzY29wZS5sYXN0KSB7XG4gICAgICAgICAgICAgICAgICAgICQoJy5zaG93LW1vcmUnKS5oaWRlKCk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnLnNob3ctbW9yZScpLnNob3coKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAkc2NvcGUucmFjZXMgPSAkc2NvcGUucmFjZXMuY29uY2F0KHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgICAgICQoJyNwYWdpbmF0ZVNwaW5uZXInKS5oaWRlKCk7XG4gICAgICAgICAgICB9KTtcblxuICAgIH07XG5cbiAgICAkKCcuc2VhcmNoLWZpZWxkJykub24oJ2tleXVwJywgZnVuY3Rpb24oKXtcbiAgICAgICAgZGVsYXkoZnVuY3Rpb24oKXtcbiAgICAgICAgICAgICRzY29wZS5yYWNlcyA9IFtdO1xuICAgICAgICAgICAgJHNjb3BlLmxvYWREYXRhKCk7XG4gICAgICAgIH0sIDI1MCApO1xuICAgIH0pO1xuXG4gICAgJCgnLnNlYXJjaC1jbGVhcicpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XG4gICAgICAgICQoJy5zZWFyY2gtZmllbGQnKS52YWwoJycpO1xuICAgICAgICAkc2NvcGUuc2VhcmNoUXVlcnkgPSAnJztcbiAgICAgICAgJHNjb3BlLnJhY2VzID0gW107XG4gICAgICAgICRzY29wZS5sb2FkRGF0YSgpO1xuICAgIH0pO1xuXG4gICAgJHNjb3BlLnNob3dNb3JlID0gZnVuY3Rpb24oKSB7XG4gICAgICAgICRzY29wZS5wYWdlICs9IDE7XG4gICAgICAgICRzY29wZS5sb2FkRGF0YSgpO1xuICAgIH07XG5cbiAgICAkc2NvcGUubG9hZERhdGEoKTtcblxuXG59KTtcblxuXG4vKlxuICogRGVubmEgZnVua3Rpb24gYsO2ciBsaWdnYSBuw6Vnb24gYW5uYW5zdGFuc1xuICovXG52YXIgZGVsYXkgPSAoZnVuY3Rpb24oKXtcbiAgICB2YXIgdGltZXIgPSAwO1xuICAgIHJldHVybiBmdW5jdGlvbihjYWxsYmFjaywgbXMpe1xuICAgICAgICBjbGVhclRpbWVvdXQgKHRpbWVyKTtcbiAgICAgICAgdGltZXIgPSBzZXRUaW1lb3V0KGNhbGxiYWNrLCBtcyk7XG4gICAgfTtcbn0pKCk7Il0sInNvdXJjZVJvb3QiOiIvc291cmNlLyJ9