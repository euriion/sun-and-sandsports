var app = angular.module('SunAndSandSports', ['ngRoute']);

app.controller("mainController", ["$scope", "$location", "$timeout", function($scope, $location, $timeout) {
    var vm = this;
}]);

app.directive("bodyCheck", function bodyCheck($timeout, $parse) {
    return {
        restrict: 'A',
        link : function(scope, element, attrs) {
            element.bind("keyup", function(evett) {
            });
        }
    };
});
